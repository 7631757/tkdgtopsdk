<?php
namespace Topsdk\Topapi\Ability2475;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2475\Request\TaobaoTbkScVegasSendReportRequest;

class Ability2475 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-查询红包发放个数
    **/
    public function taobaoTbkScVegasSendReport(TaobaoTbkScVegasSendReportRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.vegas.send.report", $request->toMap(), $request->toFileParamMap(), $session);
    }
}