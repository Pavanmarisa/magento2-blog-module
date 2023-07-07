 <?php
 
 namespace Pavan\Blog\Model\ResourceModel\Post\Collection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Pavan\Blog\Model\ResourceModel\PostResourceModel as PostResourceModel ;
use Pavan\Blog\Model\PostModel as PostModel;

 class PostCollction extends AbstractCollection
 {
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }

 }