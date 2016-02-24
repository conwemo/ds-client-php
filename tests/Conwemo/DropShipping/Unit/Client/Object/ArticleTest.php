<?php

namespace Conwemo\DropShipping\Unit\Client\Object;

use Conwemo\DropShipping\Client\Objects\Article as ArticleEntity;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \Conwemo\DropShipping\Client\Objects\Article
     */
    protected function getEntity()
    {
        return new ArticleEntity();
    }

    public function testArticleName()
    {
        $entity = $this->getEntity();
        $entity->setArticleNumber("Test");
        $this->assertSame("Test", $entity->getArticleNumber());
    }
}
