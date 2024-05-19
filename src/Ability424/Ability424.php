<?php
namespace Topsdk\Topapi\Ability424;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability424\Request\TaobaoTbkScGroupchatGetRequest;

class Ability424 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-手淘群查询
    **/
    public function taobaoTbkScGroupchatGet(TaobaoTbkScGroupchatGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.groupchat.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}