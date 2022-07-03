<?php
namespace Mghz\SearchEngine;

use Mghz\SearchEngine\Crawler\Crawler;
use Mghz\SearchEngine\Crawler\ICrawler;

class SearchEngine implements ISearchEngine
{
    private ICrawler $crawler;

    public function __construct()
    {
        $this->crawler = new Crawler('google.com');
    }

    public function setEngine(string $name)
    {
        $this->crawler = new Crawler($name . '/search');
    }

    public function search(array $keywords)
    {
        foreach ($keywords as $keyword) {
            echo $this->crawler->crawl(['query' => ['q' => $keyword]]);
            echo '<br> <br>';
        }
    }
}