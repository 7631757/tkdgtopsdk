<?php
namespace Topsdk\Topapi\Ability2153;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2153\Request\TaobaoTbkScOptimusPromotionRequest;
use Topsdk\Topapi\Ability2153\Request\TaobaoTbkScMaterialRecommendRequest;

class Ability2153 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-权益物料精选
    **/
    public function taobaoTbkScOptimusPromotion(TaobaoTbkScOptimusPromotionRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.optimus.promotion", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-物料精选升级版
    **/
    public function taobaoTbkScMaterialRecommend(TaobaoTbkScMaterialRecommendRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.material.recommend", $request->toMap(), $request->toFileParamMap(), $session);
    }
}