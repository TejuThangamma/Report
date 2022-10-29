<?php
namespace Hello\Employee\Model\ResourceModel\Grid;

use Hello\Employee\Model\Grid;
use Hello\Employee\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}