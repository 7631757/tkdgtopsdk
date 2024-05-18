<?php
namespace Topsdk\Topapi\Ability2553;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2553\Request\TaobaoTbkScActivityInfoGetRequest;

class Ability2553 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-官方活动转链
    **/
    public function taobaoTbkScActivityInfoGet(TaobaoTbkScActivityInfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.activity.info.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}