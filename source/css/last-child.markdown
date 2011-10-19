---
layout: page
title: ":last-child"
date: 2011-10-18 23:50
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css">
p:last-child {color: red;}
</style>

<div>
  <p>Foo</p>
  <p>Foo</p>
  <p>Foo (I should be red)</p>
</div>
```

## Output
<style type="text/css">
p:last-child {color: red;}
</style>

<div>
  <p>Foo</p>
  <p>Foo</p>
  <p>Foo (I should be red)</p>
</div>