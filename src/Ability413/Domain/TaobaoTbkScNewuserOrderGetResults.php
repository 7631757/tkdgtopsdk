<?php
namespace Topsdk\Topapi\Ability413\Domain;

class TaobaoTbkScNewuserOrderGetResults {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkScNewuserOrderGetData{
        return $this->data;
    }

    public function setData(TaobaoTbkScNewuserOrderGetData $data){
        $this->data = $data;
    }


}

