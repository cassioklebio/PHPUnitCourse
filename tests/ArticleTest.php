<?php

use \PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    public function assertPreConditions():void
    {
        $this->assertTrue(class_exists('Article'));
    }

    public function setUp(): void
    {
        $this->article = new Article;
    }

    public function testTitleIsEmptyByDefault()
    {

        //$this->assertEmpty($article->title);
        self::assertEmpty($this->article->getTitle());
    }

    public function testTitleNoEmptyByDefault()
    {

        $this->article->setTitle('teste');
        self::assertNotEmpty($this->article->getTitle());
        self::assertEquals('teste', $this->article->getTitle() );
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertEquals($this->article->getSlug(), "");
    }

    public function testSlugNoEmptyWithNoTitle()
    {
        $this->article->setSlug('teste');
        self::assertEquals('teste', $this->article->getSlug());

    }



}