---
layout: page
title: "nth-child"
date: 2011-10-19 00:45
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css" media="screen">
#example th {background-color:#ccc;}
#example tr:nth-child(even) td {background-color:#dedede;}
</style>

<table id="example">
  <thead></thead>
  <tbody>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
  </tbody>
</table>
```

## Output
<style type="text/css" media="screen">
#example th {background-color:#ccc;}
#example tr:nth-child(even) td {background-color:#dedede;}
</style>

<table id="example">
  <thead></thead>
  <tbody>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
    <tr><td>Foo</td><td>Bar</td></tr>
  </tbody>
</table>