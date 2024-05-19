<?php
namespace Topsdk\Topapi\Ability3280\Domain;

class TaobaoTbkDgTpwdReportGetMapData {

    /**
        截止查询时刻近1小时回流pv
     **/
    public $hour_pv;

    /**
        截止查询时刻近1小时回流uv
     **/
    public $hour_uv;

    /**
        今日截止查询时刻累计uv
     **/
    public $uv;

    /**
        今日截止查询时刻累计pv
     **/
    public $pv;


    public function getHourPv() : int{
        return $this->hour_pv;
    }

    public function setHourPv(int $hourPv){
        $this->hour_pv = $hourPv;
    }

    public function getHourUv() : int{
        return $this->hour_uv;
    }

    public function setHourUv(int $hourUv){
        $this->hour_uv = $hourUv;
    }

    public function getUv() : int{
        return $this->uv;
    }

    public function setUv(int $uv){
        $this->uv = $uv;
    }

    public function getPv() : int{
        return $this->pv;
    }

    public function setPv(int $pv){
        $this->pv = $pv;
    }


}

