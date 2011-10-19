---
layout: page
title: "> direct descendent selector"
date: 2011-10-18 23:51
comments: true
sharing: true
footer: true
---

## Code
<style type="text/css" media="screen">
div {width: 100px; height: 100px; background-color: red;}
body > div {width: 200px; height: 200px; background-color: yellow;}
</style>

<div>
  <div></div>
</div>

<p>You should see a red box within a yellow box.</p>

## Output
<style type="text/css" media="screen">
div {width: 100px; height: 100px; background-color: red;}
body > div {width: 200px; height: 200px; background-color: yellow;}
</style>

<div>
  <div></div>
</div>

<p>You should see a red box within a yellow box.</p>