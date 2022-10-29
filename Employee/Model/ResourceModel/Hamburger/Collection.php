<?php


namespace Hello\Employee\Model\ResourceModel\Hamburger;


use Hello\Employee\Model\Hamburger;
use Hello\Employee\Model\ResourceModel\Hamburger as HamburgerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hamburger::class, HamburgerResourceModel::class);
    }
}