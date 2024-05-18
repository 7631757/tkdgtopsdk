<?php
namespace Topsdk\Topapi\Ability430\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkItemClickTemporaryExtractRequest {

    /**
        长链接或短链接
     **/
    private $clickUrl;


    public function getClickUrl() : string{
        return $this->clickUrl;
    }

    public function setClickUrl(string $clickUrl){
        $this->clickUrl = $clickUrl;
    }


    public function getApiName() : string {
        return "taobao.tbk.item.click.temporary.extract";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->clickUrl)) {
            $requestParam["click_url"] = TopUtil::convertBasic($this->clickUrl);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

