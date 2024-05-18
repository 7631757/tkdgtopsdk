<?php
namespace Topsdk\Topapi\Ability2475\Domain;

class TaobaoTbkScVegasSendReportRightsSendRptDto {

    /**
        渠道关系id的发放数据的数据集
     **/
    public $relation_rpt_list;

    /**
        pid的发放数据的数据集
     **/
    public $pid_rpt_list;


    public function getRelationRptList() : array{
        return $this->relation_rpt_list;
    }

    public function setRelationRptList(array $relationRptList){
        $this->relation_rpt_list = $relationRptList;
    }

    public function getPidRptList() : array{
        return $this->pid_rpt_list;
    }

    public function setPidRptList(array $pidRptList){
        $this->pid_rpt_list = $pidRptList;
    }


}

