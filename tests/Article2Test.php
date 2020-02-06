<?php

use PHPUnit\Framework\TestCase;

class Article2Test extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new Article2;
    }

    public function testSlugHasSpacesReplaceByUnderscores()
    {
        $this->article->title = "An example article";

        self::assertEquals($this->article->getSlug(), "An_example_article");
    }

    public function testSlugHasWhiteSpaceReplacedBySingleUnderscore()
    {
        $this->article->title = "An   example     \n      article";

        self::assertEquals($this->article->getSlug(), "An_example_article");
    }

    public function testSlugDoesNotStartOrEndWithAnUnderscore()
    {
        $this->article->title = " An example article ";

        self::assertEquals($this->article->getSlug(), "An_example_article");
    }


}