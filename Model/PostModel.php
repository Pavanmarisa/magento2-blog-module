<?php

namespace Page\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Pavan\Blog\Model\ResourceModel\PostResourceModel as PostResourceModel ;

class PostModel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
       
    }

} 