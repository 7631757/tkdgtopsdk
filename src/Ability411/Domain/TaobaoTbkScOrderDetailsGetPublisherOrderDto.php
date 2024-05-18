<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScOrderDetailsGetPublisherOrderDto {

    /**
        淘宝付款时间。解释：订单在淘宝付款的时间
     **/
    public $tb_paid_time;

    /**
        付款时间。解释：订单付款的时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单付款时间  （预售订单完尾款支付后，付款时间会自动更新为尾款支付的时间）
     **/
    public $tk_paid_time;

    /**
        结算金额。解释：买家确认收货的付款金额（不包含运费金额）
     **/
    public $pay_price;

    /**
        结算预估收入。解释：结算预付收入=结算预估佣金收入+结算预估补贴收入
     **/
    public $pub_share_fee;

    /**
        子订单号。解释：买家通过购物车购买的每个商品对应的订单编号，此订单编号并未在淘宝买家后台透出，若平台类型为淘宝、口碑、饿了么等，则订单编号即为淘宝子订单编号、口碑订单编号、饿了么订单编号，以此类推
     **/
    public $trade_id;

    /**
        推广者身份。解释：二方：佣金收益的第一归属者；三方：从其他淘宝客佣金中进行分成的推广者
     **/
    public $tk_order_role;

    /**
        结算时间。解释：订单确认收货后且商家完成佣金支付的时间
     **/
    public $tk_earning_time;

    /**
        推广位ID。解释：“推广管理-推广位管理”中的pid中的最后一段数字，如pid=mm_1_2_3中的“3”这段数字
     **/
    public $adzone_id;

    /**
        佣金分成比率。解释：从佣金中分得的收益比率（含平台技术服务费比率）
     **/
    public $pub_share_rate;

    /**
        维权标签。解释：若该订单产生了维权退款，则会打上“维权单”的提示。0 含义为非维权、1 含义为维权订单
     **/
    public $refund_tag;

    /**
        补贴比率。解释：指该笔订单上各类型补贴的补贴比率总和。补贴比率=a补贴比率+b补贴比率+…。举例：天猫补贴1%、飞猪补贴1%等，则该数值显示为2%
     **/
    public $subsidy_rate;

    /**
        佣金提成。解释：佣金提成=佣金比率*佣金分成比率。指实际获得的佣金收益比率（含平台技术服务费）
     **/
    public $tk_total_rate;

    /**
        类目名称。解释：商品所属的一级类目名称
     **/
    public $item_category_name;

    /**
        掌柜旺旺
     **/
    public $seller_nick;

    /**
        推广者的账号id
     **/
    public $pub_id;

    /**
        推广者赚取佣金后支付给阿里妈妈的技术服务费用的比率
     **/
    public $alimama_rate;

    /**
        补贴类型。解释：各补贴类型的类型名称、补贴比率、补贴金额、单笔补贴上限、补贴分成比率的详细说明，如有多个补贴会一并告知，举例：淘宝特价版（补贴比率：1%，补贴金额1.00元，单笔补贴上限金额1000.00元，补贴分成比率：100.00%）、飞猪补贴（补贴比率：1%，补贴金额1.00元，单笔补贴上限金额1000.00元，补贴分成比率：100.00%）
     **/
    public $subsidy_type;

    /**
        商品图片
     **/
    public $item_img;

    /**
        付款预估收入。解释：付款预付收入=付款预估佣金收入+付款预估补贴收入
     **/
    public $pub_share_pre_fee;

    /**
        付款金额。解释：买家拍下并付款金额（不包含运费金额、不包含未支付尾款的预售订单金额）；当预售订单完尾款支付后，付款金额会自动更新为订单总金额
     **/
    public $alipay_total_price;

    /**
        商品标题
     **/
    public $item_title;

    /**
        媒体名称。解释：“推广管理-媒体备案管理”中的媒体名称
     **/
    public $site_name;

    /**
        商品数量
     **/
    public $item_num;

    /**
        补贴金额。解释：指该笔订单上各类补贴的补贴金额总和。补贴金额=a补贴金额+b补贴金额+…=结算金额*a补贴比率+结算金额*b补贴比率+…。若（结算金额*a补贴比率）＞补贴类型a单笔补贴上限，则a补贴金额=补贴类型a单笔补贴上限，b补贴金额等其他补贴金额同理
     **/
    public $subsidy_fee;

    /**
        平台技术服务费。解释：指该笔订单推广者在需支付给淘宝联盟的所有技术服务费费用总和。目前包含以下两类： 1、技术服务费说明：通过淘宝联盟平台推广所需支付的基础技术服务费；2、渠道专项服务费说明：开通渠道管理权限的推广者进行推广需要支付给淘宝联盟的专项技术服务费用。           平台技术服务费=付款金额*佣金比率*平台技术服务费比率。注意：若订单已结算则会按结算金额计算。（特别说明：补贴从2023-03-10之后都不再收取补贴技术服务费了，故本字段公式中不再提及补贴相关)
     **/
    public $alimama_share_fee;

    /**
        订单编号。解释：买家在购买后台显示的订单编号，若平台类型为淘宝、饿了么等，则订单编号即为淘宝订单编号、饿了么订单编号，以此类推
     **/
    public $trade_parent_id;

    /**
        平台类型。解释：订单所属平台类型，包括天猫、淘宝、聚划算、口碑等
     **/
    public $order_type;

    /**
        创建时间。解释：订单创建的时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单创建时间
     **/
    public $tk_create_time;

    /**
        产品类型。解释：若订单属于特定的产品类型，会进行说明，举例：该订单属于“联盟超级活动”、“品牌精选推广”、“自主推广”等，若无说明仅为“--”则为普通类型订单
     **/
    public $flow_source;

    /**
        成交平台。解释：成交来自于PC或无线
     **/
    public $terminal_type;

    /**
        点击时间。解释：通过推广链接达到商品、店铺详情页的点击时间
     **/
    public $click_time;

    /**
        订单状态。状态类型：已付款（指订单已付款，但还未确认收货）、已收货（指订单已确认收货，但商家佣金未支付）、已结算（指订单已确认收货，且商家佣金已支付成功）、已失效（指订单关闭/订单佣金小于0.01元，订单关闭主要有：①买家超时未付款；②买家付款前，买家/商家取消了订单；③订单付款后发起售中退款成功；④仅支付定金，到期未支付尾款的预售订单）。注意：当订单商家有实收货款（含交易成功和交易关闭订单），联盟以商家实收货款进行佣金结算(满返/买返订单等特殊订单除外)。出参数字代表：3:订单结算，12:订单付款，13:订单失效，14:订单成功
     **/
    public $tk_status;

    /**
        商品单价
     **/
    public $item_price;

    /**
        商品id
     **/
    public $item_id;

    /**
        推广位名称。解释：“推广管理-推广位管理”中的推广位名称
     **/
    public $adzone_name;

    /**
        佣金比率。解释：商品的佣金比率（含平台技术服务费比率，但不包含平台专项服务费比率）（特别说明：若想知道属于您名下的整体佣金比率，则整体佣金比率=佣金比率+平台专项服务费比率，为了简化展示报表，不再增加整体佣金收入字段，有需要的淘宝客可自行加和，举例：若整体佣金比率为10%，平台专项服务费比率为3%，则此处商品佣金比率显示为7%，即10%-3%=7%）
     **/
    public $total_commission_rate;

    /**
        商品链接
     **/
    public $item_link;

    /**
        媒体ID。解释：“推广管理-媒体备案管理”中的媒体ID，也是pid中的第二段数字，如pid=mm_1_2_3中的“2”这段数字
     **/
    public $site_id;

    /**
        店铺名称
     **/
    public $seller_shop_title;

    /**
        收入比率。解释：收入比率=佣金比率+补贴比率
     **/
    public $income_rate;

    /**
        佣金金额。解释：如果该订单还未结算，则佣金金额=付款金额*佣金比率；如果该订单已经结算，则佣金金额=结算金额*佣金比率
     **/
    public $total_commission_fee;

    /**
        会员运营ID。解释：会员运营管理功能中的会员运营ID，若该订单来自于会员的购买，则会展示对应会员运营ID
     **/
    public $special_id;

    /**
        渠道关系id。解释：渠道管理功能中的渠道关系ID，若该订单来自于渠道方的推广，则会展示对应渠道关系ID
     **/
    public $relation_id;

    /**
        定金付款时间。解释：预售时期，预售订单支付定金的付款时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单创建时间
     **/
    public $tk_deposit_time;

    /**
        定金淘宝付款时间。解释：预售时期，预售订单在淘宝支付定金的付款时间
     **/
    public $tb_deposit_time;

    /**
        定金付款金额。解释：预售时期，预售订单支付的定金金额
     **/
    public $deposit_price;

    /**
        开发者调用api的appkey
     **/
    public $app_key;

    /**
        非电商淘系子订单号
     **/
    public $tp_order_id;

    /**
        服务费信息（字段已废弃）
     **/
    public $service_fee_dto_list;

    /**
        营销类型。解释：该字段中视订单情况有单个或多个类型告知。 举例：联盟超级活动-优品、特价版客户端锁粉、特价版客户端推广等
     **/
    public $marketing_type;

    /**
        订单更新时间
     **/
    public $modified_time;

    /**
        管理member新商品ID-B段
     **/
    public $extra_mkt_id;

    /**
        付款预估佣金收入。解释：付款预估佣金收入=付款金额*佣金提成。以买家付款金额为基数，预估您可能获得的付款佣金收入，包含平台技术服务费金额（最终发钱时会减去平台技术服务费）。注意：因买家退款等原因，可能与结算预估佣金收入不一致。（特别说明：若想知道属于您名下的整体佣金收入，则整体付款佣金收入=付款预估佣金收入+平台专项服务费，为了简化展示报表，不再增加整体佣金收入字段，有需要的淘宝客可自行加和）
     **/
    public $pub_share_pre_fee_for_commission;

    /**
        结算预估佣金收入。解释：结算预估佣金收入=付款金额*佣金提成。以买家确认收货的付款金额为基数，预估您可能获得的结算佣金收入，包含技术服务费金额（最终发钱时会减去平台技术服务费）。注意：因买家退款、您违规推广等原因，可能与您最终收入不一致，最终收入以月结后您实际收到的为准。（特别说明：若想知道属于您名下的整体佣金收入，则整体结算佣金收入=结算预估佣金收入+平台专项服务费，为了简化展示报表，不再增加整体佣金收入字段，有需要的淘宝客可自行加和）
     **/
    public $pub_share_fee_for_commission;

    /**
        补贴金额明细节点。解释：各补贴类型的类型名称、补贴比率、补贴金额、单笔补贴上限、补贴分成比率的详细说明
     **/
    public $subsidy_info_dto_list;

    /**
        补贴分成比率。解释：从补贴中分得的收益比率
     **/
    public $pub_share_rate_for_sdy;

    /**
        补贴提成。解释：补贴提成=补贴比率*补贴分成比率。指实际获得的补贴收益比率
     **/
    public $tk_total_rate_for_sdy;

    /**
        付款预估补贴收入=（付款金额*a补贴比率+付款金额*b补贴比率+……）*补贴分成比率。如果付款金额*a补贴比率＞补贴类型a单笔订单补贴上限，则付款金额*a补贴比率的值取补贴类型a单笔订单补贴上限，b补贴金额等其他类型补贴金额同理。指以买家付款金额为基数，预估您可能获得的补贴收入。因买家退款等原因，可能与结算预估补贴收入不一致。
     **/
    public $pub_share_pre_fee_for_sdy;

    /**
        结算预估补贴收入。解释：以买家确认收货的付款金额为基数，预估您可能获得的结算补贴收入。结算预估补贴收入=（结算金额*a补贴比率+结算金额*b补贴比率+……）*补贴分成比率。如果结算金额*a补贴比率＞补贴类型a单笔订单补贴上限，则结算金额*a补贴比率的值取补贴类型a单笔订单补贴上限，b补贴金额等其他类型补贴金额同理。注意：因买家退款、您违规推广等原因，可能与您最终收入不一致，最终收入以月结后您实际收到的为准
     **/
    public $pub_share_fee_for_sdy;

    /**
        平台技术服务费明细节点。解释：各项平台技术服务费类型的类型名称、扣费比率、扣费金额的详细说明
     **/
    public $alimm_share_info_dto;

    /**
        平台专项服务费比率。解释：指该笔订单推广者在各种特殊场景下需支付给淘宝联盟的所有专项服务费比率总和。平台专项服务费比率=专项服务费比率a+专项服务费比率b+…
     **/
    public $platform_special_service_rate;

    /**
        平台专项服务费。解释：指该笔订单推广者在各种特殊场景下需支付给淘宝联盟的所有专项服务费用总和。目前包含以下两类：1、内容专项服务费说明：内容场景专项技术服务费，内容推广者在内容场景进行推广需要支付给淘宝联盟的专项技术服务费用；2、流量专项服务费说明：流量通产品合作场景专项技术服务费，推广者在流量通产品能力下，进行流量投放推广需要支付给淘宝联盟的专项技术服务费用。           平台专项服务费=付款金额*平台专项服务费比率。注意：若订单已结算则会按结算金额计算
     **/
    public $platform_special_service_fee;

    /**
        平台专项服务费明细节点。解释：各项平台专项服务费类型的类型名称、扣费比率、扣费金额的详细说明
     **/
    public $platform_special_share_info_dto;


    public function getTbPaidTime() : string{
        return $this->tb_paid_time;
    }

    public function setTbPaidTime(string $tbPaidTime){
        $this->tb_paid_time = $tbPaidTime;
    }

    public function getTkPaidTime() : string{
        return $this->tk_paid_time;
    }

    public function setTkPaidTime(string $tkPaidTime){
        $this->tk_paid_time = $tkPaidTime;
    }

    public function getPayPrice() : string{
        return $this->pay_price;
    }

    public function setPayPrice(string $payPrice){
        $this->pay_price = $payPrice;
    }

    public function getPubShareFee() : string{
        return $this->pub_share_fee;
    }

    public function setPubShareFee(string $pubShareFee){
        $this->pub_share_fee = $pubShareFee;
    }

    public function getTradeId() : string{
        return $this->trade_id;
    }

    public function setTradeId(string $tradeId){
        $this->trade_id = $tradeId;
    }

    public function getTkOrderRole() : int{
        return $this->tk_order_role;
    }

    public function setTkOrderRole(int $tkOrderRole){
        $this->tk_order_role = $tkOrderRole;
    }

    public function getTkEarningTime() : string{
        return $this->tk_earning_time;
    }

    public function setTkEarningTime(string $tkEarningTime){
        $this->tk_earning_time = $tkEarningTime;
    }

    public function getAdzoneId() : int{
        return $this->adzone_id;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzone_id = $adzoneId;
    }

    public function getPubShareRate() : string{
        return $this->pub_share_rate;
    }

    public function setPubShareRate(string $pubShareRate){
        $this->pub_share_rate = $pubShareRate;
    }

    public function getRefundTag() : int{
        return $this->refund_tag;
    }

    public function setRefundTag(int $refundTag){
        $this->refund_tag = $refundTag;
    }

    public function getSubsidyRate() : string{
        return $this->subsidy_rate;
    }

    public function setSubsidyRate(string $subsidyRate){
        $this->subsidy_rate = $subsidyRate;
    }

    public function getTkTotalRate() : string{
        return $this->tk_total_rate;
    }

    public function setTkTotalRate(string $tkTotalRate){
        $this->tk_total_rate = $tkTotalRate;
    }

    public function getItemCategoryName() : string{
        return $this->item_category_name;
    }

    public function setItemCategoryName(string $itemCategoryName){
        $this->item_category_name = $itemCategoryName;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getPubId() : int{
        return $this->pub_id;
    }

    public function setPubId(int $pubId){
        $this->pub_id = $pubId;
    }

    public function getAlimamaRate() : string{
        return $this->alimama_rate;
    }

    public function setAlimamaRate(string $alimamaRate){
        $this->alimama_rate = $alimamaRate;
    }

    public function getSubsidyType() : string{
        return $this->subsidy_type;
    }

    public function setSubsidyType(string $subsidyType){
        $this->subsidy_type = $subsidyType;
    }

    public function getItemImg() : string{
        return $this->item_img;
    }

    public function setItemImg(string $itemImg){
        $this->item_img = $itemImg;
    }

    public function getPubSharePreFee() : string{
        return $this->pub_share_pre_fee;
    }

    public function setPubSharePreFee(string $pubSharePreFee){
        $this->pub_share_pre_fee = $pubSharePreFee;
    }

    public function getAlipayTotalPrice() : string{
        return $this->alipay_total_price;
    }

    public function setAlipayTotalPrice(string $alipayTotalPrice){
        $this->alipay_total_price = $alipayTotalPrice;
    }

    public function getItemTitle() : string{
        return $this->item_title;
    }

    public function setItemTitle(string $itemTitle){
        $this->item_title = $itemTitle;
    }

    public function getSiteName() : string{
        return $this->site_name;
    }

    public function setSiteName(string $siteName){
        $this->site_name = $siteName;
    }

    public function getItemNum() : int{
        return $this->item_num;
    }

    public function setItemNum(int $itemNum){
        $this->item_num = $itemNum;
    }

    public function getSubsidyFee() : string{
        return $this->subsidy_fee;
    }

    public function setSubsidyFee(string $subsidyFee){
        $this->subsidy_fee = $subsidyFee;
    }

    public function getAlimamaShareFee() : string{
        return $this->alimama_share_fee;
    }

    public function setAlimamaShareFee(string $alimamaShareFee){
        $this->alimama_share_fee = $alimamaShareFee;
    }

    public function getTradeParentId() : string{
        return $this->trade_parent_id;
    }

    public function setTradeParentId(string $tradeParentId){
        $this->trade_parent_id = $tradeParentId;
    }

    public function getOrderType() : string{
        return $this->order_type;
    }

    public function setOrderType(string $orderType){
        $this->order_type = $orderType;
    }

    public function getTkCreateTime() : string{
        return $this->tk_create_time;
    }

    public function setTkCreateTime(string $tkCreateTime){
        $this->tk_create_time = $tkCreateTime;
    }

    public function getFlowSource() : string{
        return $this->flow_source;
    }

    public function setFlowSource(string $flowSource){
        $this->flow_source = $flowSource;
    }

    public function getTerminalType() : string{
        return $this->terminal_type;
    }

    public function setTerminalType(string $terminalType){
        $this->terminal_type = $terminalType;
    }

    public function getClickTime() : string{
        return $this->click_time;
    }

    public function setClickTime(string $clickTime){
        $this->click_time = $clickTime;
    }

    public function getTkStatus() : int{
        return $this->tk_status;
    }

    public function setTkStatus(int $tkStatus){
        $this->tk_status = $tkStatus;
    }

    public function getItemPrice() : string{
        return $this->item_price;
    }

    public function setItemPrice(string $itemPrice){
        $this->item_price = $itemPrice;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getAdzoneName() : string{
        return $this->adzone_name;
    }

    public function setAdzoneName(string $adzoneName){
        $this->adzone_name = $adzoneName;
    }

    public function getTotalCommissionRate() : string{
        return $this->total_commission_rate;
    }

    public function setTotalCommissionRate(string $totalCommissionRate){
        $this->total_commission_rate = $totalCommissionRate;
    }

    public function getItemLink() : string{
        return $this->item_link;
    }

    public function setItemLink(string $itemLink){
        $this->item_link = $itemLink;
    }

    public function getSiteId() : int{
        return $this->site_id;
    }

    public function setSiteId(int $siteId){
        $this->site_id = $siteId;
    }

    public function getSellerShopTitle() : string{
        return $this->seller_shop_title;
    }

    public function setSellerShopTitle(string $sellerShopTitle){
        $this->seller_shop_title = $sellerShopTitle;
    }

    public function getIncomeRate() : string{
        return $this->income_rate;
    }

    public function setIncomeRate(string $incomeRate){
        $this->income_rate = $incomeRate;
    }

    public function getTotalCommissionFee() : string{
        return $this->total_commission_fee;
    }

    public function setTotalCommissionFee(string $totalCommissionFee){
        $this->total_commission_fee = $totalCommissionFee;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getTkDepositTime() : string{
        return $this->tk_deposit_time;
    }

    public function setTkDepositTime(string $tkDepositTime){
        $this->tk_deposit_time = $tkDepositTime;
    }

    public function getTbDepositTime() : string{
        return $this->tb_deposit_time;
    }

    public function setTbDepositTime(string $tbDepositTime){
        $this->tb_deposit_time = $tbDepositTime;
    }

    public function getDepositPrice() : string{
        return $this->deposit_price;
    }

    public function setDepositPrice(string $depositPrice){
        $this->deposit_price = $depositPrice;
    }

    public function getAppKey() : string{
        return $this->app_key;
    }

    public function setAppKey(string $appKey){
        $this->app_key = $appKey;
    }

    public function getTpOrderId() : string{
        return $this->tp_order_id;
    }

    public function setTpOrderId(string $tpOrderId){
        $this->tp_order_id = $tpOrderId;
    }

    public function getServiceFeeDtoList() : array{
        return $this->service_fee_dto_list;
    }

    public function setServiceFeeDtoList(array $serviceFeeDtoList){
        $this->service_fee_dto_list = $serviceFeeDtoList;
    }

    public function getMarketingType() : string{
        return $this->marketing_type;
    }

    public function setMarketingType(string $marketingType){
        $this->marketing_type = $marketingType;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }

    public function getExtraMktId() : string{
        return $this->extra_mkt_id;
    }

    public function setExtraMktId(string $extraMktId){
        $this->extra_mkt_id = $extraMktId;
    }

    public function getPubSharePreFeeForCommission() : string{
        return $this->pub_share_pre_fee_for_commission;
    }

    public function setPubSharePreFeeForCommission(string $pubSharePreFeeForCommission){
        $this->pub_share_pre_fee_for_commission = $pubSharePreFeeForCommission;
    }

    public function getPubShareFeeForCommission() : string{
        return $this->pub_share_fee_for_commission;
    }

    public function setPubShareFeeForCommission(string $pubShareFeeForCommission){
        $this->pub_share_fee_for_commission = $pubShareFeeForCommission;
    }

    public function getSubsidyInfoDtoList() : array{
        return $this->subsidy_info_dto_list;
    }

    public function setSubsidyInfoDtoList(array $subsidyInfoDtoList){
        $this->subsidy_info_dto_list = $subsidyInfoDtoList;
    }

    public function getPubShareRateForSdy() : string{
        return $this->pub_share_rate_for_sdy;
    }

    public function setPubShareRateForSdy(string $pubShareRateForSdy){
        $this->pub_share_rate_for_sdy = $pubShareRateForSdy;
    }

    public function getTkTotalRateForSdy() : string{
        return $this->tk_total_rate_for_sdy;
    }

    public function setTkTotalRateForSdy(string $tkTotalRateForSdy){
        $this->tk_total_rate_for_sdy = $tkTotalRateForSdy;
    }

    public function getPubSharePreFeeForSdy() : string{
        return $this->pub_share_pre_fee_for_sdy;
    }

    public function setPubSharePreFeeForSdy(string $pubSharePreFeeForSdy){
        $this->pub_share_pre_fee_for_sdy = $pubSharePreFeeForSdy;
    }

    public function getPubShareFeeForSdy() : string{
        return $this->pub_share_fee_for_sdy;
    }

    public function setPubShareFeeForSdy(string $pubShareFeeForSdy){
        $this->pub_share_fee_for_sdy = $pubShareFeeForSdy;
    }

    public function getAlimmShareInfoDto() : TaobaoTbkScOrderDetailsGetAlimmShareInfoDTO{
        return $this->alimm_share_info_dto;
    }

    public function setAlimmShareInfoDto(TaobaoTbkScOrderDetailsGetAlimmShareInfoDTO $alimmShareInfoDto){
        $this->alimm_share_info_dto = $alimmShareInfoDto;
    }

    public function getPlatformSpecialServiceRate() : string{
        return $this->platform_special_service_rate;
    }

    public function setPlatformSpecialServiceRate(string $platformSpecialServiceRate){
        $this->platform_special_service_rate = $platformSpecialServiceRate;
    }

    public function getPlatformSpecialServiceFee() : string{
        return $this->platform_special_service_fee;
    }

    public function setPlatformSpecialServiceFee(string $platformSpecialServiceFee){
        $this->platform_special_service_fee = $platformSpecialServiceFee;
    }

    public function getPlatformSpecialShareInfoDto() : TaobaoTbkScOrderDetailsGetPlatformSpecialShareInfoDTO{
        return $this->platform_special_share_info_dto;
    }

    public function setPlatformSpecialShareInfoDto(TaobaoTbkScOrderDetailsGetPlatformSpecialShareInfoDTO $platformSpecialShareInfoDto){
        $this->platform_special_share_info_dto = $platformSpecialShareInfoDto;
    }


}

