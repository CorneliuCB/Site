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

    $news = array(); // Create an empty array to store news items

    foreach ($allNews as $index => $newsItem) {
      $img = $newsImg[$index];

      // Get the text content and image src
      $text = trim($newsItem->textContent);
      $src = trim($img->getAttribute('src'));

      // Use preg_replace to remove unnecessary parts from the text
      $patterns = array(
        "/\s+Nou\s+Justiție\s+/u", // Match "Nou Justiție" with surrounding whitespace
        "/\s+\d+\s+zile în urmă$/u" // Match digits followed by "zile în urmă" with surrounding whitespace
      );
      $text = preg_replace($patterns, '', $text);

      // Create a sub-array with image and text values
      $newsItem = array(
        'img' => trim($src),
        'text' => trim($text)
      );

      // Add the sub-array to the $news array
      $news[] = $newsItem;
    }

    return $news;
  }

  public function dumpNews()
  {
    $news = $this->scrapeNews();
    return $news;
  }
}

?>

<div class="section-title">
  <p>Noutăți</p>
</div>

<div class="row">
  <?php
  $newws = new NewsScraper("https://www.zdg.md/categoria/stiri/politic/");
  $news = $newws->dumpNews();
  $x = 0;
  foreach ($news as $new) {
    ?>
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="<?php echo $new['img']; ?>" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4><?php echo $new['text']; ?></h4>
          <div class="portfolio-links">
            <a href="<?php echo $new['img']; ?>" data-gallery="portfolioGallery"
               class="portfolio-lightbox" title="<?php echo $new['text']; ?>"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php $x++;
  } ?>
</div>
