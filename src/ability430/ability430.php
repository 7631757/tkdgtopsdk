<?php
namespace Topsdk\Topapi\Ability430;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability430\Request\TaobaoTbkItemClickTemporaryExtractRequest;
use Topsdk\Topapi\Ability430\Request\TaobaoTbkItemClickExtractRequest;

class Ability430 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-链接解析出商品id（临时接口）
    **/
    public function taobaoTbkItemClickTemporaryExtract(TaobaoTbkItemClickTemporaryExtractRequest $request) {
        return $this->client->execute("taobao.tbk.item.click.temporary.extract", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-公用-链接解析出商品id
    **/
    public function taobaoTbkItemClickExtract(TaobaoTbkItemClickExtractRequest $request) {
        return $this->client->execute("taobao.tbk.item.click.extract", $request->toMap(), $request->toFileParamMap());
    }
}