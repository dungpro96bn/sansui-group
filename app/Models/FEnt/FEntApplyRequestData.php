<?php

namespace App\Models\FEnt;

class FEntApplyRequestData extends FEntAbstract
{

    public $appliedDate; //応募日時

    /**
     * @var FEntApplicant
     */
    public $applicant; //応募者情報のオブジェクト

    public $jobId;

    /**
     * @var FEntApplyFreeItem[]
     */
    public $free; //フリー項目の配列

    public $siteUrl; //応募求人の掲載URL

}
