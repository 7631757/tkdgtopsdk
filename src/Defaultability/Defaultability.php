<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkScGeneralLinkConvertRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkScTpwdRiskReportRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-服务商-万能转链
    **/
    public function taobaoTbkScGeneralLinkConvert(TaobaoTbkScGeneralLinkConvertRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.general.link.convert", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-服务商-淘口令预警及拦截查询
    **/
    public function taobaoTbkScTpwdRiskReport(TaobaoTbkScTpwdRiskReportRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.tpwd.risk.report", $request->toMap(), $request->toFileParamMap(), $session);
    }
}