<?php

class NewsScraper
{
  private $url;
  private $dom;
  private $xpath;

  public function __construct($url)
  {
    $this->url = $url;
    $html = file_get_contents($this->url);
    $this->dom = new DOMDocument();
    @$this->dom->loadHTML($html);
    $this->xpath = new DOMXPath($this->dom);
  }

  public function scrapeNews()
  {
    $allNews = $this->xpath->query("//article[@class='list-item --featured-small']");
    $newsImg = $this->xpath->query("//article[@class='list-item --featured-small']//div[@class='list-item__thumbnail']/a/img");

    $news = array();
    foreach ($allNews as $newsItem) {
      $news["text"][] = trim($newsItem->textContent);
    }

    foreach ($newsImg as $img) {
      $news["img"][] = trim($img->getAttribute('src'));
    }

    return $news;
  }

  public function dumpNews()
  {
    $news = $this->scrapeNews();
    return $news;
  }
}

// Example usage:

