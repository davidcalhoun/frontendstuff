---
layout: page
title: "selection"
date: 2011-10-18 23:50
comments: true
sharing: true
footer: true
---

## Code
```
<style type="text/css">
::-webkit-selection { background-color: red; }
::-moz-selection { background-color: red; }
::selection { background-color: red; }

</style>

<p>Select this text</p>
```

## Output
<style type="text/css">
::-webkit-selection { background-color: red; }
::-moz-selection { background-color: red; }
::selection { background-color: red; }

</style>

<p>Select this text</p>


## Notes
Do not put these together into one rule (::-webkit-selection, ::-moz-selection, ::selection {}), as unfortunately browsers will throw out the entire rule when they see something unrecognized.
