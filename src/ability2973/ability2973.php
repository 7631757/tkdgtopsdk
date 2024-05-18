<?php
namespace Topsdk\Topapi\Ability2973;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2973\Request\TaobaoTbkScVegasSendStatusRequest;

class Ability2973 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-红包领取状态查询
    **/
    public function taobaoTbkScVegasSendStatus(TaobaoTbkScVegasSendStatusRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.vegas.send.status", $request->toMap(), $request->toFileParamMap(), $session);
    }
}