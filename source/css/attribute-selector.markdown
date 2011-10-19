---
layout: page
title: "[] attribute selector"
date: 2011-10-18 23:51
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css" media="screen">
[class] {color: gray;}            /* elements with a class            */
[class="foo"] {color: red;}       /* elements with class="foo"        */
[data-foo] {color: green;}        /* elements with data-foo attribute */
p[data-foo="bar"] {color: blue;}  /* Ps with attribute foo="bar"      */
</style>

<p class="whatever">I have a class</p>
<p class="foo">My class is foo</p>
<p data-foo="whatever">I've got a data-foo attribute</p>
<p data-foo="bar">I've got a data-foo="bar" attribute</p>
```

## Output
<style type="text/css" media="screen">
[class] {color: gray;}            /* elements with a class            */
[class="foo"] {color: red;}       /* elements with class="foo"        */
[data-foo] {color: green;}        /* elements with data-foo attribute */
p[data-foo="bar"] {color: blue;}  /* Ps with attribute foo="bar"      */
</style>

<p class="whatever">I have a class</p>
<p class="foo">My class is foo</p>
<p data-foo="whatever">I've got a data-foo attribute</p>
<p data-foo="bar">I've got a data-foo="bar" attribute</p>

## Advanced Code
```html
<style type="text/css" media="screen">
[data-foo^=bar] {color: red;}                    /* starting with bar */
[data-foo$=bar] {color: blue;}                   /* ending with bar */
[data-foo*=bar] { text-decoration: underline; }  /* contains bar */
</style>

<p data-foo="barabc">Starting with bar</p>
<p data-foo="abcbar">Ending with bar</p>
<p data-foo="abcbarabc">Contains bar</p>
```


## Advanced Output
<style type="text/css" media="screen">
[data-foo^=bar] {color: red;}                    /* starting with bar */
[data-foo$=bar] {color: blue;}                   /* ending with bar */
[data-foo*=bar] { text-decoration: underline; }  /* contains bar */
</style>

<p data-foo="barabc">Starting with bar</p>
<p data-foo="abcbar">Ending with bar</p>
<p data-foo="abcbarabc">Contains bar</p>
