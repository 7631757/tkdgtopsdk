<?php
namespace Topsdk\Topapi\Ability406\Domain;

class TaobaoTbkScShopConvertNTbkShop {

    /**
        卖家id
     **/
    public $user_id;

    /**
        店铺推广链接
     **/
    public $click_url;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }


}

