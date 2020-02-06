<?php

use PHPUnit\Framework\TestCase;

class Article3Test extends TestCase
{
    protected $article;

    public function assertPreConditions():void
    {
        $this->assertTrue(class_exists('Article'));
    }

    public function setUp(): void
    {
        $this->article = new Article2;
    }


    public function titleProvider()
    {
        return [
          'Slug Has Spaces Replaced By Undercores' =>["An example article", "An_example_article"],
          'Slug Has Whitespace Replaced By Single Underscore' =>["An  example  \n  article", "An_example_article"],
          'Slug Does Not Start Or End With An Underscore' =>[" An example article ", "An_example_article"],
          'Slug Does Not Have Any Non Word Characters' =>["Read! This! Now!", "Read_This_Now"]
        ];

    }


    /**
     * @dataProvider  titleProvider
     * @param $title
     * @param $slug
     *
     */
    public function  testSlug($title, $slug)
    {
        $this->article->title = $title;

       $this::assertEquals($this->article->getSlug(), $slug);
    }
}