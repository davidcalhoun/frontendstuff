---
layout: page
title: "devicemotion event (ondevicemotion)"
date: 2011-10-19 00:57
comments: true
sharing: true
footer: true
---

## Code
```javascript
document.addEventListener('DOMContentLoaded', function(){
  var resultsContainer = document.getElementById('results');
  
  var sanitize = function(txt) {
    var output, x;

    if(typeof txt == 'object') {
      // create a new object to get around circular references
      output = {};
      for(x in txt) {
          // type conversion of each element to a string
          output[x] = txt[x] + '';
      }
      output = JSON.stringify(output, null, 2);
    } else {
      output = txt;
    }

    return output;
  }

  window.addEventListener('devicemotion', function(e){
    resultsContainer.innerHTML = 'e.accelerationIncludingGravity' + sanitize(e.accelerationIncludingGravity) + '<br>e' + sanitize(e);
  },false);
}, false);

if(!('devicemotion' in window)) {
  document.getElementById('results').innerHTML = 'devicemotion isn\'t supported in your browser.';
}
```