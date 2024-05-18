<?php
namespace Topsdk\Topapi\Ability413;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability413\Request\TaobaoTbkScNewuserOrderGetRequest;

class Ability413 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-新用户订单明细查询
    **/
    public function taobaoTbkScNewuserOrderGet(TaobaoTbkScNewuserOrderGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.newuser.order.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}