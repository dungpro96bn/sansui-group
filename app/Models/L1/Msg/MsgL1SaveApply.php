<?php

namespace App\Models\L1\Msg;

use App\Models\FEnt\FEntJob;
use App\Models\FEnt\FEntConfig;

/**
 * Class MsgL1SaveApply
 * @package App\Models\L1\Msg
 */
class MsgL1SaveApply extends MsgL1Abstract
{
    // in
    /** @var FEntJob $fEntJob */
    public $fEntJob;
    /** @var array */
    public $params;
    /** @var FEntConfig $fEntConfig */
    public $fEntConfig;
    /** @var string */
    public $jobUri;

    // out

    public $obosyaId;

}
