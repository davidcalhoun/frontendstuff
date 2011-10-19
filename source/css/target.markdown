---
layout: page
title: "target"
date: 2011-10-18 23:51
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css">
:target { background-color: black; color: white; }
</style>

<p><a href="#sec1">Skip to section 1</a></p>
<p><a href="#sec2">Skip to section 2</a></p>
<p><a href="#sec3">Skip to section 3</a></p>
<p><a href="#sec4">Skip to section 4</a></p>
<p><a href="#sec5">Skip to section 5</a></p>

<p id="sec1">Section 1</p>
<p id="sec2">Section 2</p>
<p id="sec3">Section 3</p>
<p id="sec4">Section 4</p>
<p id="sec5">Section 5</p>
```

## Output
<style type="text/css">
:target { background-color: black; color: white; }
</style>

<p><a href="#sec1">Skip to section 1</a></p>
<p><a href="#sec2">Skip to section 2</a></p>
<p><a href="#sec3">Skip to section 3</a></p>
<p><a href="#sec4">Skip to section 4</a></p>
<p><a href="#sec5">Skip to section 5</a></p>

<p id="sec1">Section 1</p>
<p id="sec2">Section 2</p>
<p id="sec3">Section 3</p>
<p id="sec4">Section 4</p>
<p id="sec5">Section 5</p>