---
layout: page
title: "~(general sibling selector)"
date: 2011-10-18 23:40
comments: true
sharing: true
footer: true
---

## Code
```html
<style type="text/css" media="screen">
span ~ p {color: red;}
</style>

<span></span>
<p>I'm red</p>
<p>I'm also red!</p>
```

## Output
<style type="text/css" media="screen">
span ~ p {color: red;}
</style>

</head>

<body>

<span></span>
<p>I'm red</p>
<p>I'm also red!</p>