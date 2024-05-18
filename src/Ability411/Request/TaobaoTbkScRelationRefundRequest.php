<?php
namespace Topsdk\Topapi\Ability411\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability411\Domain\TaobaoTbkScRelationRefundTopApiRefundRptOption;

class TaobaoTbkScRelationRefundRequest {

    /**
        参数option
     **/
    private $searchOption;


    public function getSearchOption() : TaobaoTbkScRelationRefundTopApiRefundRptOption{
        return $this->searchOption;
    }

    public function setSearchOption(TaobaoTbkScRelationRefundTopApiRefundRptOption $searchOption){
        $this->searchOption = $searchOption;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.relation.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->searchOption)) {
            $requestParam["search_option"] = TopUtil::convertStruct($this->searchOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

