<?php
namespace Topsdk\Topapi\Ability2032\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2032\Domain\TaobaoTbkScPunishOrderGetTopApiAfOrderOption;

class TaobaoTbkScPunishOrderGetRequest {

    /**
        入参的对象
     **/
    private $afOrderOption;


    public function getAfOrderOption() : TaobaoTbkScPunishOrderGetTopApiAfOrderOption{
        return $this->afOrderOption;
    }

    public function setAfOrderOption(TaobaoTbkScPunishOrderGetTopApiAfOrderOption $afOrderOption){
        $this->afOrderOption = $afOrderOption;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.punish.order.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->afOrderOption)) {
            $requestParam["af_order_option"] = TopUtil::convertStruct($this->afOrderOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

