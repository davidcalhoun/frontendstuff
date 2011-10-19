---
layout: page
title: "input required"
date: 2011-10-18 23:36
comments: true
sharing: true
footer: true
---

## Code
```<form action="" method="POST">
<input type="text" required="required"></input>
<input type="date" id="test"></input>
<input type="submit" value="Submit"></input>
</form>

<script>

window.onload = function() {
  document.querySelector('#test').addEventListener('invalid', function(){
    alert('invalid');
  }, true);
  
  console.log(document.querySelector('#test'));
  
}
</script>```

## Output
<form action="" method="POST">
<input type="text" required="required"></input>
<input type="date" id="test"></input>
<input type="submit" value="Submit"></input>
</form>

<script>

window.onload = function() {
  document.querySelector('#test').addEventListener('invalid', function(){
    alert('invalid');
  }, true);
  
  console.log(document.querySelector('#test'));
  
}
</script>