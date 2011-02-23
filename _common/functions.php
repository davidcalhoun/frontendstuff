<?php
class FE {
public static function head($title, $subtitle = null, $meta_description = null, $title_size = null, $subtitle_size = null) {

$body_class = strtolower(str_replace(' ', '', $title));

$title_style = ($title_size === null) ? '' : ' style="font-size:' . $title_size . ';"';
$subtitle_style = ($subtitle_size === null) ? '' : ' style="font-size:' . $subtitle_size . ';"';

$sub = ($subtitle !== null) ? '<h2' . $subtitle_style . '>' . $subtitle . '</h2>' : '<h2' . $subtitle_style . '>A free resource from <a href="//frontendstuff.com">Frontend Stuff</a></h2>';
$sub_clean = ($subtitle !== null) ? strip_tags($subtitle) : 'A free resource from Frontend Stuff';

echo <<< STUFF
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
  <meta charset="utf-8"/>
  <title>$title: $sub_clean</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="shortcut icon" type="text/css" href="//frontendstuff.com/favicon.ico" />
  <link rel="stylesheet" href="//frontendstuff.com/_common/css/base.css?aassaaaaaaaaas"/>
</head>

<body class="$body_class">

<header>
  <hgroup>
    <h1$title_style>$title</h1>
    $sub
  </hgroup>
</header>

STUFF;
}

public static function foot($title = null, $subtitle = null) {
echo <<< STUFF
  <footer>
    <ul>
      <li><a href="//github.com/davidcalhoun/frontendstuff/">GitHub</a></li>
      <li><a href="//frontendstuff.com/contributors/">Contributors</a></li>
    </ul>
  </footer>
  
  <script src="//frontendstuff.com/_common/js/base.js?a"></script>
</body>

</html>
STUFF;
}

}