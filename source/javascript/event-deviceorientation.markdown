---
layout: page
title: "deviceorientation event (ondeviceorientation)"
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

  window.addEventListener('deviceorientation', function(e){
    resultsContainer.innerHTML = 'e.ondeviceorientation' + sanitize(e);
  },false);
}, false);

if(!('ondeviceorientation' in window)) {
  document.getElementById('results').innerHTML = 'ondeviceorientation isn\'t supported in your browser.';
}
```