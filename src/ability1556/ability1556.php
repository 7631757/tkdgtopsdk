<?php
namespace Topsdk\Topapi\Ability1556;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1556\Request\TaobaoTbkScMaterialTemporaryOptionalRequest;
use Topsdk\Topapi\Ability1556\Request\TaobaoTbkScMaterialOptionalUpgradeRequest;

class Ability1556 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-物料搜索（临时接口）
    **/
    public function taobaoTbkScMaterialTemporaryOptional(TaobaoTbkScMaterialTemporaryOptionalRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.material.temporary.optional", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-物料搜索升级版
    **/
    public function taobaoTbkScMaterialOptionalUpgrade(TaobaoTbkScMaterialOptionalUpgradeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.material.optional.upgrade", $request->toMap(), $request->toFileParamMap(), $session);
    }
}