---
layout: page
title: ":first-child"
date: 2011-10-18 23:50
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css">
p:first-child {color: red;}
</style>

<div>
  <p>Foo (I should be red)</p>
  <p>Foo</p>
  <p>Foo</p>
</div>
```

## Output
<style type="text/css">
p:first-child {color: red;}
</style>

<div>
  <p>Foo (I should be red)</p>
  <p>Foo</p>
  <p>Foo</p>
</div>