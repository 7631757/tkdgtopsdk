<?php
namespace Topsdk\Topapi\Ability411\Domain;

class TaobaoTbkScRelationRefundPageResult {

    /**
        pageNo
     **/
    public $page_no;

    /**
        pageSize
     **/
    public $page_size;

    /**
        总值
     **/
    public $total_count;

    /**
        订单列表
     **/
    public $results;


    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }


}

