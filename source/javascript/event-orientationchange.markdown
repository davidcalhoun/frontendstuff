---
layout: page
title: "orientationchange event (onorientationchange)"
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

  window.addEventListener('orientationchange', function(e){
    resultsContainer.innerHTML = 'window.orientation: ' + window.orientation + '<br><br>e.onorientationchange' + sanitize(e);
  },false);
}, false);

if(!('onorientationchange' in window)) {
  document.getElementById('results').innerHTML = 'onorientationchange isn\'t supported in your browser.';
}

if(!('orientation' in window)) {
  document.getElementById('results').innerHTML += '<br>window.orientation isn\'t supported in your browser.';
}
```