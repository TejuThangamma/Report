<?php


namespace Hello\Employee\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hamburger extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('feedback_data', 'Feedback_No');
    }
}