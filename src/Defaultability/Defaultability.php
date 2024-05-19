<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditFastupdateRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameModifyRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateModifyRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundMessageAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundMessagesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundsApplyGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialOptionalUpgradeRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialRecommendRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgTpwdRiskReportRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkOptimusTouMaterialIdsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductAddSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductMatchSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaAddRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaMatchRequest;
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
    /**
    商品编辑增量更新
     **/
    public function alibabaItemEditFastupdate(AlibabaItemEditFastupdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.fastupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝客-推广者-淘口令预警及拦截查询
     **/
    public function taobaoTbkDgTpwdRiskReport(TaobaoTbkDgTpwdRiskReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.tpwd.risk.report", $request->toMap(), $request->toFileParamMap());
    }
    /**
    查询买家申请的退款列表
     **/
    public function taobaoRefundsApplyGet(TaobaoRefundsApplyGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refunds.apply.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    获取单笔退款详情
     **/
    public function taobaoRefundGet(TaobaoRefundGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝客-推广者-物料id列表查询
     **/
    public function taobaoTbkOptimusTouMaterialIdsGet(TaobaoTbkOptimusTouMaterialIdsGetRequest $request) {
        return $this->client->execute("taobao.tbk.optimus.tou.material.ids.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
    商品编辑获取schema信息
     **/
    public function alibabaItemEditSchemaGet(AlibabaItemEditSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    商品编辑提交schema信息
     **/
    public function alibabaItemEditSubmit(AlibabaItemEditSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    产品发布规则获取接口
     **/
    public function tmallProductAddSchemaGet(TmallProductAddSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.add.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    获取匹配产品规则
     **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    product匹配接口
     **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    使用Schema文件发布一个产品
     **/
    public function tmallProductSchemaAdd(TmallProductSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝客-推广者-物料搜索升级版
     **/
    public function taobaoTbkDgMaterialOptionalUpgrade(TaobaoTbkDgMaterialOptionalUpgradeRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.optional.upgrade", $request->toMap(), $request->toFileParamMap());
    }
    /**
    淘宝客-推广者-物料精选升级版
     **/
    public function taobaoTbkDgMaterialRecommend(TaobaoTbkDgMaterialRecommendRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.recommend", $request->toMap(), $request->toFileParamMap());
    }
    /**
    查询退款留言/凭证列表
     **/
    public function taobaoRefundMessagesGet(TaobaoRefundMessagesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.messages.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    创建退款留言/凭证
     **/
    public function taobaoRefundMessageAdd(TaobaoRefundMessageAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.message.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝短信签名创建接口
     **/
    public function taobaoJstSmsSignnameCreate(TaobaoJstSmsSignnameCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝短信签名查询
     **/
    public function taobaoJstSmsSignnameQuery(TaobaoJstSmsSignnameQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝短信签名删除
     **/
    public function taobaoJstSmsSignnameDelete(TaobaoJstSmsSignnameDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝短信签名修改
     **/
    public function taobaoJstSmsSignnameModify(TaobaoJstSmsSignnameModifyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
    淘宝短信模板创建
     **/
    public function taobaoJstSmsTemplateCreate(TaobaoJstSmsTemplateCreateRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
    淘宝短信模板查询
     **/
    public function taobaoJstSmsTemplateQuery(TaobaoJstSmsTemplateQueryRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
    淘宝短信模板删除
     **/
    public function taobaoJstSmsTemplateDelete(TaobaoJstSmsTemplateDeleteRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
    淘宝短信模板修改
     **/
    public function taobaoJstSmsTemplateModify(TaobaoJstSmsTemplateModifyRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.modify", $request->toMap(), $request->toFileParamMap());
    }
}
