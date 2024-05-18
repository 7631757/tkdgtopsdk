<?php
namespace Topsdk\Topapi\Ability2154;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2154\Request\TaobaoTbkTpwdConvertRequest;
use Topsdk\Topapi\Ability2154\Request\TaobaoTbkTpwdTemporaryConvertRequest;

class Ability2154 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-淘口令解析&转链
    **/
    public function taobaoTbkTpwdConvert(TaobaoTbkTpwdConvertRequest $request) {
        return $this->client->execute("taobao.tbk.tpwd.convert", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘口令解析&&转链（临时接口）
    **/
    public function taobaoTbkTpwdTemporaryConvert(TaobaoTbkTpwdTemporaryConvertRequest $request) {
        return $this->client->execute("taobao.tbk.tpwd.temporary.convert", $request->toMap(), $request->toFileParamMap());
    }
}