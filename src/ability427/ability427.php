<?php
namespace Topsdk\Topapi\Ability427;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability427\Request\TaobaoTbkScAdzoneCreateRequest;

class Ability427 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-创建推广者位
    **/
    public function taobaoTbkScAdzoneCreate(TaobaoTbkScAdzoneCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.adzone.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
}