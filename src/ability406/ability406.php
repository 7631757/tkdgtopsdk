<?php
namespace Topsdk\Topapi\Ability406;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability406\Request\TaobaoTbkScShopConvertRequest;

class Ability406 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-店铺链接转换
    **/
    public function taobaoTbkScShopConvert(TaobaoTbkScShopConvertRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.shop.convert", $request->toMap(), $request->toFileParamMap(), $session);
    }
}