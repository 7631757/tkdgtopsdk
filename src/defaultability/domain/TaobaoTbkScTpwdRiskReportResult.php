<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTbkScTpwdRiskReportResult {

    /**
        x
     **/
    public $status_list;


    public function getStatusList() : array{
        return $this->status_list;
    }

    public function setStatusList(array $statusList){
        $this->status_list = $statusList;
    }


}

