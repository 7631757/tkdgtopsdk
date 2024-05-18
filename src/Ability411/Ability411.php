<?php
namespace Topsdk\Topapi\Ability411;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability411\Request\TaobaoTbkScOrderDetailsTemporaryGetRequest;
use Topsdk\Topapi\Ability411\Request\TaobaoTbkScRelationRefundRequest;
use Topsdk\Topapi\Ability411\Request\TaobaoTbkScMembergroupOptionalRequest;
use Topsdk\Topapi\Ability411\Request\TaobaoTbkScOrderDetailsGetRequest;

class Ability411 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-所有订单查询（临时接口）
    **/
    public function taobaoTbkScOrderDetailsTemporaryGet(TaobaoTbkScOrderDetailsTemporaryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.order.details.temporary.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-维权退款订单查询
    **/
    public function taobaoTbkScRelationRefund(TaobaoTbkScRelationRefundRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.relation.refund", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        工具服务商member组查询、新增接口
    **/
    public function taobaoTbkScMembergroupOptional(TaobaoTbkScMembergroupOptionalRequest $request) {
        return $this->client->execute("taobao.tbk.sc.membergroup.optional", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-服务商-所有订单查询
    **/
    public function taobaoTbkScOrderDetailsGet(TaobaoTbkScOrderDetailsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.order.details.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}