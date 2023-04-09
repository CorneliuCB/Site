<div class="section-title">
  <h2>Portfolio</h2>
  <p>My Works</p>
</div>

<div class="row">
  <?php
  $newws = new NewsScraper("https://www.zdg.md/categoria/stiri/politic/");
  $news = $newws->dumpNews();
  var_dump($news);
    ?>
</div>

<!-- Rest of the HTML code goes here -->
