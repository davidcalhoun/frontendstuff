<?php

function head($title) {
echo <<< STUFF
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>$title</title>

  <meta name="viewport" content="width=device-width; initial-scale=1.0;"/>
  <link rel="stylesheet" href=""/>
</head>

<body>
  <header>
    <h1>$title</h1>
  </header>

STUFF;
}

function foot() {
echo <<< STUFF
  <footer>
  </footer>
</body>

</html>
STUFF;
}