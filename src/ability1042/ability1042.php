<?php
namespace Topsdk\Topapi\Ability1042;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1042\Request\TaobaoWirelessShareTpwdQueryRequest;

class Ability1042 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询解析淘口令
    **/
    public function taobaoWirelessShareTpwdQuery(TaobaoWirelessShareTpwdQueryRequest $request) {
        return $this->client->execute("taobao.wireless.share.tpwd.query", $request->toMap(), $request->toFileParamMap());
    }
}