<?php declare(strict_types=1);

namespace Tsg\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        die('Blog post detail');
    }
}
