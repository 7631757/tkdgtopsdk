<?php
namespace Topsdk\Topapi\Ability3280;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability3280\Request\TaobaoTbkDgTpwdReportGetRequest;

class Ability3280 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-淘口令回流数据查询
    **/
    public function taobaoTbkDgTpwdReportGet(TaobaoTbkDgTpwdReportGetRequest $request) {
        return $this->client->execute("taobao.tbk.dg.tpwd.report.get", $request->toMap(), $request->toFileParamMap());
    }
}