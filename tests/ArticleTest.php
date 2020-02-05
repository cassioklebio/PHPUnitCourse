<?php

use \PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function assertPreConditions():void
    {
        $this->assertTrue(class_exists('Article'));
    }

    public function testTitleIsEmptyByDefault()
    {
        $article = new Article;
        //$this->assertEmpty($article->title);
        self::assertEmpty($article->getTitle());
    }

    public function testTitleNoEmptyByDefault()
    {
        $article = new Article;
        $article->setTitle('teste');
        self::assertNotEmpty($article->getTitle());
        self::assertEquals('teste', $article->getTitle() );
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $article = new Article;

        $this->assertEquals($article->getSlug(), "");
    }

    public function testSlugNoEmptyWithNoTitle()
    {
        $article = new Article;

        $article->setSlug('teste');
        self::assertEquals('teste', $article->getSlug());
    }



}