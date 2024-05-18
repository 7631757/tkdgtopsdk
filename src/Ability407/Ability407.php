<?php
namespace Topsdk\Topapi\Ability407;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability407\Request\TaobaoTbkScTpwdTemporaryConvertRequest;
use Topsdk\Topapi\Ability407\Request\TaobaoTbkScTpwdConvertRequest;

class Ability407 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-淘口令解析&&转链（临时接口）
    **/
    public function taobaoTbkScTpwdTemporaryConvert(TaobaoTbkScTpwdTemporaryConvertRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.tpwd.temporary.convert", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-淘口令解析&转链
    **/
    public function taobaoTbkScTpwdConvert(TaobaoTbkScTpwdConvertRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.tpwd.convert", $request->toMap(), $request->toFileParamMap(), $session);
    }
}