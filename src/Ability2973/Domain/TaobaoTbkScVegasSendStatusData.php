<?php
namespace Topsdk\Topapi\Ability2973\Domain;

class TaobaoTbkScVegasSendStatusData {

    /**
        返回结果封装对象
     **/
    public $result_list;


    public function getResultList() : array{
        return $this->result_list;
    }

    public function setResultList(array $resultList){
        $this->result_list = $resultList;
    }


}

