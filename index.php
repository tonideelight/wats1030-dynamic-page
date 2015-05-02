<?php
  require(config.php);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $PAGE_TITLE; ?></title>
        <meta name="description" content="A Flickr search on $SEARCH_TAGS.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="container">
      <h1><?php echo $PAGE_TITLE; ?></h1>
      <!-- Example row of columns -->
      <ul class="photo-gallery">
        <?php
          require_once("lib/phpFlickr/phpFlickr.php");
          $f = new phpFlickr($API_KEY);

          $search = $f->photos_search(array("tags"=>$SEARCH_TAGS, "tag_mode"=>"any"));

          foreach ($recent['photo'] as $photo) {
              $owner = $f->people_getInfo($photo['owner']);
              echo "<li>";
              echo "<a class='image-link' href='http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "/'>" . "<img src='http://farm" . $photo['farm'] . ".static.flickr.com/" . $photo['server'] . "/" . $photo['id'] . "_" . $photo['secret'] . "_s.jpg' alt='". $photo['title'] . "'/>" . "</a> <br>" . "<a class='owner-link' href='http://www.flickr.com/people/" . $photo['owner'] . "/'>" . $owner['username'] . "</a>";
              echo "</li>";
          }
        ?>
      </ul>

      <hr>

      <footer>
        <p>Photos come from Flickr Public API</p>
      </footer>
    </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
