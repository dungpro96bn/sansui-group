<?php

namespace App\Models\L2\Msg;

use App\Models\FEnt\FEntApplyRequestData;
use App\Models\FEnt\FEntJob;
use App\Models\FEnt\FEntConfig;

/**
 * Class MsgL2CreateBEntApplicantData
 * @package App\Models\l1
 */
class MsgL2CreateApplicantData extends MsgL2Abstract
{

    // input
    /** @var FEntJob $fEntJob */
    public $fEntJob;
    /** @var array */
    public $params;
    /** @var FEntConfig $fEntConfig */
    public $fEntConfig;
    /** @var string */
    public $jobUri;

    // output
    /**@var FEntApplyRequestData */
    public $fEntApplyRequestData;

}
