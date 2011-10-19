---
layout: page
title: "background image"
date: 2011-10-18 23:51
comments: true
sharing: true
footer: true
---


## Background image gradient

### Code
```html
<style>
#backgroundGradient {
  width: 200px;
  height: 200px;
  background-color: gray;  /* Fallback */
  background-image: -moz-linear-gradient(top, #222222, #888888); /* FF3.6 */
  background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #222222),color-stop(1, #888888)); /* Saf4+, Chrome */
  background-image: -webkit-linear-gradient(#222222, #888888); /* Chrome 10+, Saf6 */
}
</style>

<div id="backgroundGradient"></div>
```


### Output
<style>
#backgroundGradient {
  width: 200px;
  height: 200px;
  background-color: gray;  /* Fallback */
  background-image: -moz-linear-gradient(top, #222222, #888888); /* FF3.6 */
  background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #222222),color-stop(1, #888888)); /* Saf4+, Chrome */
  baackground-image: -webkit-linear-gradient(#222222, #888888); /* Chrome 10+, Saf6 */
}
</style>

<div id="backgroundGradient"></div>
