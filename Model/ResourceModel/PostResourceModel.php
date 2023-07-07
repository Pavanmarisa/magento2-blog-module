<?php

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PostResourceModel extends AbstractDb {

    private const TABLE_NAME ='pavan_blog_post' ;
    private const PRIMARY_KEY='post_id';
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}