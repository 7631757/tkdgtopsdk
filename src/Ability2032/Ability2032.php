<?php
namespace Topsdk\Topapi\Ability2032;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2032\Request\TaobaoTbkScPunishOrderGetRequest;

class Ability2032 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-处罚订单查询
    **/
    public function taobaoTbkScPunishOrderGet(TaobaoTbkScPunishOrderGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.punish.order.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}