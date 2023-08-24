<?php

namespace App\Models\L2;

use App\Models\Constant\Cst;
use App\Models\FEnt\FEntApplyFreeItem;
use App\Models\FEnt\FEntApplyRequestData;
use App\Models\FEnt\FEntApplicant;
use App\Models\FEnt\FEntJobHistory;
use App\Models\L2\Msg\MsgL2CreateApplicantData;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use Exception;

/**
 * Class L2CreateApplicantData
 * @package App\Models\L2
 */
class L2CreateApplicantData extends L2Abstract
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param MsgL2CreateApplicantData $msg
     * @throws Exception
     */
    protected function exec(MsgL2CreateApplicantData $msg)
    {

        $fEntJob = $msg->fEntJob;
        $params = $msg->params;
        $fEntConfig = $msg->fEntConfig;
        $jobUri = $msg->jobUri;

        if($params === null or count($params) == 0){
            $msg->isSuccess = false;
            $msg->rtnCd = Cst::INPUT_ERROR;
            $msg->rtnMessage = "応募者情報が取得できませんでした。";
            return;
        }

        if($fEntJob === null){
            $msg->isSuccess = false;
            $msg->rtnCd = Cst::INPUT_ERROR;
            $msg->rtnMessage = "応募求人の情報が取得できませんでした。";
            return;
        }

        if($fEntConfig === null){
            $msg->isSuccess = false;
            $msg->rtnCd = Cst::INPUT_ERROR;
            $msg->rtnMessage = "企業設定情報が取得できませんでした。";
            return;
        }

        if($jobUri === null or $jobUri === ""){
            $msg->isSuccess = false;
            $msg->rtnCd = Cst::INPUT_ERROR;
            $msg->rtnMessage = "求人掲載URIが取得できませんでした。";
            return;
        }

        $mappingList = array(
            'lastName' => 'lastName',
            'firstName' => 'firstName',
            'lastKana' => 'lastNameKana',
            'firstKana' => 'firstNameKana',
            'birthday' => 'birthDay',
            'gender' => 'gender',
            'telNumber' => 'tel',
            'mailAddress' => 'email',
            'currentOccupation' => 'occupation',
            'zipCode' => 'zip',
            'prefecture' => 'pref',
            'city' => 'city',
            'street' => 'otherAddr',
            'station' => 'station',
            'educationLevel' => 'schoolType',
            'graduationYear' => 'graduationYear',
            'graduationStatus' => 'educationStatus',
            'schoolName' => 'schoolName',
            'departmentName' => 'schoolFaculty',
            'maritalStatus' => 'married',
            'englishConversation' => 'conversationEnglish',
            'businessEnglish' => 'businessEnglish',
            'toeicScore' => 'toeic',
            'toeflScore' => 'toefl',
            'stepScore' => 'eiken',
            'otherLanguage' => 'otherLanguage',
            'otherConversation' => 'conversationOtherLanguage',
            'otherBusiness' => 'businessOtherLanguage',
            'wordSkill' => 'wordSkill',
            'excelSkill' => 'excelSkill',
            'accessSkill' => 'accessSkill',
            'powerpointSkill' => 'powerpointSkill',
            'webSkill' => 'webSkill',
            'otherPCSkill' => 'pcSkill',
            'qualification' => 'otherSkill',
            'changeNumber' => 'changeJobCount',
            'managementExperience' => 'managementExperience',
            'managementNumber' => 'numberOfManagement',
            'pr' => 'aboutMySelf',
            'remarks' => 'remarks',
        );

        $skipItems = array(
            '_token' => '',
            'job_id' => '',
            'agree' => '',
            'agree_flg1' => '',
            'agree_flg2' => '',
            'dobYear' => '',
            'dobMonth' => '',
            'dobDay' => '',
            'startYearA' => '',
            'startYearB' => '',
            'startYearC' => '',
            'startYearD' => '',
            'startYearE' => '',
            'startMonthA' => '',
            'startMonthB' => '',
            'startMonthC' => '',
            'startMonthD' => '',
            'startMonthE' => '',
            'endYearA' => '',
            'endYearB' => '',
            'endYearC' => '',
            'endYearD' => '',
            'endYearE' => '',
            'endMonthA' => '',
            'endMonthB' => '',
            'endMonthC' => '',
            'endMonthD' => '',
            'endMonthE' => '',
        );


        // 日付形式のデータを連結・フォーマットかける
        if(isset($params['dobYear']) and isset($params['dobMonth']) and isset($params['dobDay'])){
            $date = self::createDate($params['dobYear'], $params['dobMonth'], $params['dobDay']);
            if($date) {
                $params['birthday'] = $date->format('Y-m-d');
            }
        }

        $fieldList = array(
            'start' => 'startDate',
            'end' => 'endDate',
        );

        $names = array('A','B','C','D','E');

        for($i = 1; $i <= 5; $i++){
            foreach($fieldList as $key => $filed){
                $fn1 = $key.'Year'.$names[$i-1];
                $fn2 = $key.'Month'.$names[$i-1];
                $filedNm = $filed . $i;
                if(isset($params[$fn1]) and isset($params[$fn2])){
                    $date = self::createDate($params[$fn1], $params[$fn2], 1);
                    if($date){
                        $params[$filedNm] = $date->format('Y-m-d');
                    }
                }
            }
        }

        $alphabetFieldList = array(
            'companyName' => 'corpName',
            'employmentStatus' => 'employmentStatus',
            'jobDescription' => 'jobContents',
        );

        for($i = 1; $i <= 5; $i++){
            foreach($alphabetFieldList as $key => $filed){
                $fn = $key.$names[$i-1];
                $filedNm = $filed . $i;
                if(isset($params[$fn])){
                    $params[$filedNm] = $params[$fn];
                }
            }
        }

        $numberFieldList = array(
            'occupation' => 'jobCategory',
            'period' => 'yearsOfExperience',
            'industry' => 'jobIndustry',
        );

        for($i = 1; $i <= 5; $i++){
            foreach($numberFieldList as $key => $filed){
                $fn = $key.$i;
                $filedNm = $filed . $i;
                if(isset($params[$fn])){
                    $params[$filedNm] = $params[$fn];
                }
            }
        }

        $fEntApplyRequestData = new FEntApplyRequestData();

        $fEntApplyRequestData->appliedDate = self::getNowStr();

        $fEntApplyRequestData->jobId = $fEntJob->jobId;

        $fEntApplicant = new FEntApplicant();

        foreach($mappingList as $formName => $propertyName){
            $fEntApplicant->__set($propertyName, self::setParam($params, $formName));
        }

        if(isset($params['gender']) && $params['gender'] === '0'){
            $fEntApplicant->gender = '0';
        }

        //int型への変換処理　start

        //プロフィール
        if(isset($params['prefecture']) && is_numeric($params['prefecture'])){
            $fEntApplicant->pref = (int)$params['prefecture'];
        }

        if(isset($params['city']) && is_numeric($params['city'])){
            $fEntApplicant->city = (int)$params['city'];
        }

        if(isset($params['currentOccupation']) && is_numeric($params['currentOccupation'])){
            $fEntApplicant->occupation = (int)$params['currentOccupation'];
        }

        //スキル
        if(isset($params['englishConversation']) && is_numeric($params['englishConversation'])){
            $fEntApplicant->conversationEnglish = (int)$params['englishConversation'];
        }

        if(isset($params['businessEnglish']) && is_numeric($params['businessEnglish'])){
            $fEntApplicant->businessEnglish = (int)$params['businessEnglish'];
        }

        if(isset($params['toeicScore']) && is_numeric($params['toeicScore'])){
            $fEntApplicant->toeic = (int)$params['toeicScore'];
        }

        if(isset($params['toeicScore']) && is_numeric($params['toeicScore'])){
            $fEntApplicant->toeic = (int)$params['toeicScore'];
        }

        if(isset($params['toeflScore']) && is_numeric($params['toeflScore'])){
            $fEntApplicant->toefl = (int)$params['toeflScore'];
        }

        if(isset($params['stepScore']) && is_numeric($params['stepScore'])){
            $fEntApplicant->eiken = (int)$params['stepScore'];
        }

        if(isset($params['otherLanguage']) && is_numeric($params['otherLanguage'])){
            $fEntApplicant->otherLanguage = (int)$params['otherLanguage'];
        }

        if(isset($params['otherConversation']) && is_numeric($params['otherConversation'])){
            $fEntApplicant->conversationOtherLanguage = (int)$params['otherConversation'];
        }

        if(isset($params['otherBusiness']) && is_numeric($params['otherBusiness'])){
            $fEntApplicant->businessOtherLanguage = (int)$params['otherBusiness'];
        }

        if(isset($params['wordSkill']) && is_numeric($params['wordSkill'])){
            $fEntApplicant->wordSkill = (int)$params['wordSkill'];
        }

        if(isset($params['excelSkill']) && is_numeric($params['excelSkill'])){
            $fEntApplicant->excelSkill = (int)$params['excelSkill'];
        }

        if(isset($params['accessSkill']) && is_numeric($params['accessSkill'])){
            $fEntApplicant->accessSkill = (int)$params['accessSkill'];
        }

        if(isset($params['powerpointSkill']) && is_numeric($params['powerpointSkill'])){
            $fEntApplicant->powerpointSkill = (int)$params['powerpointSkill'];
        }

        if(isset($params['webSkill']) && is_numeric($params['webSkill'])){
            $fEntApplicant->webSkill = (int)$params['webSkill'];
        }

        if(isset($params['otherPCSkill']) && is_numeric($params['otherPCSkill'])){
            $fEntApplicant->pcSkill = (int)$params['otherPCSkill'];
        }

        //キャリア
        if(isset($params['changeNumber']) && is_numeric($params['changeNumber'])){
            $fEntApplicant->changeJobCount = (int)$params['changeNumber'];
        }

        //マネジメント経験のデフォルトセッティング
        if(!isset($params['managementExperience'])){
            $fEntApplicant->managementExperience = 0;
        }
        else {
            if(is_numeric($params['managementExperience'])) {
                $fEntApplicant->managementExperience = (int)$params['managementExperience'];
            }
        }

        if(isset($params['managementNumber']) && is_numeric($params['managementNumber'])){
            $fEntApplicant->numberOfManagement = (int)$params['managementNumber'];
        }

        //その他

        if(isset($params['maritalStatus']) && is_numeric($params['maritalStatus'])){
            $fEntApplicant->married = (int)$params['maritalStatus'];
        }

        if(isset($params['graduationYear']) && is_numeric($params['graduationYear'])){
            $fEntApplicant->graduationYear = (int)$params['graduationYear'];
        }

        if(isset($params['educationLevel']) && is_numeric($params['educationLevel'])){
            $fEntApplicant->schoolType = (int)$params['educationLevel'];
        }

        if(isset($params['graduationStatus']) && is_numeric($params['graduationStatus'])){
            $fEntApplicant->educationStatus = (int)$params['graduationStatus'];
        }

        //int型への変換処理　end

        $arrayJobHistory = array();

        for($i = 1; $i <= 5; $i++) {
            $fEntJobHistry = new FEntJobHistory();
            foreach($fEntJobHistry As $key => $value) {
                $name = $key.$i;
                if(isset($params[$name])) {
                    if($key === 'employmentStatus' || $key === 'jobCategory' || $key === 'yearsOfExperience' || $key === 'jobIndustry') {
                        if(is_numeric($params[$name])) {
                            $fEntJobHistry->$key = (int)$params[$name]; //int型へ変換
                        }
                    }
                    else {
                        $fEntJobHistry->$key = $params[$name];
                    }
                }
            }
            if(json_encode($fEntJobHistry) != json_encode(new FEntJobHistory())) {
                $arrayJobHistory[] = $fEntJobHistry;
            }
        }

        $fEntApplicant->jobHistories = $arrayJobHistory;

        $fEntApplyRequestData->applicant = $fEntApplicant;

        $arrayFreeItem = array();

        //カスタムselect選択項目の値=>名称への変換用配列
        $customSelectItems = array();

        if(isset($fEntConfig->backendSettings['form']['apply']['custom']) && count($fEntConfig->backendSettings['form']['apply']['custom'])>0) {
            foreach($fEntConfig->backendSettings['form']['apply']['custom'] As $sectionName => $items) {
                foreach($items As $groupName => $list) {

                    if($groupName === 'index' || $groupName === 'required') {
                        continue;
                    }

                    foreach($list As $fieldName => $rules) {
                        if(isset($rules['fieldType']) && ($rules['fieldType'] === 'select')) {
                            if(isset($rules['master']) && count($rules['master'])>0) {
                                $customSelectItems[$fieldName] = $rules['master'];
                            }
                        }
                    }
                }
            }
        }

        foreach($params As $name => $value) {
            if(isset($mappingList[$name])) {
                continue;
            }
            if(isset($skipItems[$name])) {
                continue;
            }

            for($i = 1; $i <= 5; $i++){
                foreach($numberFieldList as $key => $filed){
                    $fn = $key.$i;
                    $filedNm = $filed . $i;
                    if(($name === $fn) || $name === $filedNm) {
                        continue 3;
                    }
                }

                foreach($alphabetFieldList as $key => $filed){
                    $fn = $key.$names[$i-1];
                    $filedNm = $filed . $i;
                    if(($name === $fn) || $name === $filedNm) {
                        continue 3;
                    }
                }

                foreach($fieldList as $key => $filed){
                    $filedNm = $filed . $i;
                    if($name === $filedNm) {
                        continue 3;
                    }
                }
            }

            $fEntApplyFreeItem = new FEntApplyFreeItem();

            $fEntApplyFreeItem->name = $name;

            if(isset($customSelectItems[$name]) && ($value !== null)) {
                $fEntApplyFreeItem->value = $customSelectItems[$name][(int)$value]??null;
            }
            else {
                $fEntApplyFreeItem->value = $value??null;
            }

            $arrayFreeItem[] = $fEntApplyFreeItem;
        }

        $fEntApplyRequestData->free = $arrayFreeItem;

//        $fEntApplyRequestData->siteUrl = Route('top') . $jobUri . $fEntJob->jobId;
        $fEntApplyRequestData->siteUrl = Route('top') . $jobUri;

        $msg->fEntApplyRequestData = $fEntApplyRequestData;

        $msg->isSuccess = true;
        $msg->rtnCd = 200;
        $msg->rtnMessage = '登録データ作成完了';

    }

    /**
     * @throws Exception
     */
    private function createDate($y, $m, $d){
        if(!checkdate($m,$d,$y)){
            return false;
        }

        $datetime = $y.'-'.$m.'-'.$d;

        return new DateTimeImmutable($datetime, new DateTimeZone('Asia/Tokyo'));
    }

    private function setParam($params, $field, $default=null)
    {
        if(isset($params[$field]) and $params[$field] !== null and $params[$field] !== '' and $params[$field] != '-1'){
            return $params[$field];
        }else{
            return $default;
        }
    }

    /**
     * @param string $format
     * @return string
     */
    final protected function getNowStr($format = 'Y/m/d H:i:s'){
        $now = DateTime::createFromFormat('U.u', sprintf('%6F', microtime(true)));
        $now->setTimezone(new DateTimeZone('Asia/Tokyo'));
        return $now->format($format);
    }

}
