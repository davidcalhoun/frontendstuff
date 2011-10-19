---
layout: page
title: "+ (adjacent sibling selector)"
date: 2011-10-18 23:41
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css" media="screen">
span + p {color: red;}
</style>

<span></span>
<p>I should be red</p>
<p>I won't be red!</p>
```

## Output
<style type="text/css" media="screen">
span + p {color: red;}
</style>

</head>

<body>

<span></span>
<p>I should be red</p>
<p>I won't be red!</p>