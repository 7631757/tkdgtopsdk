<?php
namespace Topsdk\Topapi\Ability1269;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1269\Request\TaobaoTbkPrivilegeGetRequest;
use Topsdk\Topapi\Ability1269\Request\TaobaoTbkPrivilegeTemporaryGetRequest;

class Ability1269 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-单品券高效转链
    **/
    public function taobaoTbkPrivilegeGet(TaobaoTbkPrivilegeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.privilege.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-单品券高效转链（临时接口）
    **/
    public function taobaoTbkPrivilegeTemporaryGet(TaobaoTbkPrivilegeTemporaryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.privilege.temporary.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}