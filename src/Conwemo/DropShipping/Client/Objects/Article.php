<?php

namespace Conwemo\DropShipping\Client\Objects;

class Article
{
    /** string */
    private $articleNumber;

    /**
     * @return mixed
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param mixed $articleNumber
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
    }

}
