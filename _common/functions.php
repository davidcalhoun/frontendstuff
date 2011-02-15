<?php


class FE {
public static function head($title, $subtitle = null, $meta_description = null) {
$sub = ($subtitle !== null) ? '<h2>' . $subtitle . '</h2>' : '';
  
echo <<< STUFF
<!doctype html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
  <meta charset="utf-8"/>
  <title>Frontend Stuff</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="shortcut icon" type="text/css" href="//frontendstuff.com/favicon.ico" />
  <link rel="stylesheet" href="//frontendstuff.com/_common/css/base.css?b"/>
</head>

<body>

<header>
  <hgroup>
    <h1>$title</h1>
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
</body>

</html>
STUFF;
}

}