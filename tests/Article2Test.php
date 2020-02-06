<?php

use PHPUnit\Framework\TestCase;

class ArticleTest2 extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new Article2;
    }

    public function testSlugHasSpacesReplaceByUnderscores()
    {
        $this->article->title = "An xample article";

        $this->assertEquals($this->article->getSlug(), "An_example_article");
    }
}