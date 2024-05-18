<?php
namespace Topsdk\Topapi\Ability1269\Domain;

class TaobaoTbkPrivilegeGetRpcResult {

    /**
        data
     **/
    public $data;


    public function getData() : TaobaoTbkPrivilegeGetMaterialDto{
        return $this->data;
    }

    public function setData(TaobaoTbkPrivilegeGetMaterialDto $data){
        $this->data = $data;
    }


}

