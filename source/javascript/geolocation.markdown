---
layout: page
title: "geolocation"
date: 2011-10-19 00:56
comments: true
sharing: true
footer: true
---

## Code
```html
<p id="coords"></p>

<input id="getCurrentPosition" type="button" value="getCurrentPosition">
<input id="watchPosition" type="button" value="watchPosition"><br><br>
<div id="map"></div>

<script type="text/javascript" charset="utf-8">

var coords, map;
localStorage.coords = localStorage.coords || '';

function showMap(latlon) {
  document.getElementById('map').innerHTML = '<img src="http://maps.google.com/maps/api/staticmap?center=' + latlon[0] + ',' + latlon[1] + '&zoom=15&size=400x400&sensor=false&markers=color:blue|label:S|' + latlon[0] + ',' + latlon[1] + '">';
}

function getCurrentPosition() {
  navigator.geolocation && (navigator.geolocation.getCurrentPosition(function(position){
    var time = new Date();
    localStorage.coords += time.getTime() + ',' + position.coords.latitude + ',' + position.coords.longitude + ';';
    coords.innerHTML = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds() + ' - ' + position.coords.latitude + ', ' + position.coords.longitude + ' (localStorage: ' + localStorage.coords.length + ' bytes)';
    
    console.log(position);
    showMap([position.coords.latitude, position.coords.longitude]);
    
    coords.innerHTML += '<br><br>' + JSON.stringify(position);
  }));
};

function watchPosition() {
  navigator.geolocation && (navigator.geolocation.watchPosition(function(position){
    var time = new Date();
    localStorage.coords += time.getTime() + ',' + position.coords.latitude + ',' + position.coords.longitude + ';';
    coords.innerHTML = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds() + ' - ' + position.coords.latitude + ', ' + position.coords.longitude + ' (localStorage: ' + localStorage.coords.length + ' bytes)';
    
    console.log(position);
    showMap([position.coords.latitude, position.coords.longitude]);
    coords.innerHTML += '<br><br>' + JSON.stringify(position);
  }));
}

window.onload = function() {
  document.getElementById('getCurrentPosition').addEventListener('click', getCurrentPosition, false);
  document.getElementById('watchPosition').addEventListener('click', watchPosition, false);
  
  coords = document.getElementById('coords');
}

</script>
```

## Output
<p id="coords"></p>

<input id="getCurrentPosition" type="button" value="getCurrentPosition">
<input id="watchPosition" type="button" value="watchPosition"><br><br>
<div id="map"></div>

<script type="text/javascript" charset="utf-8">

var coords, map;
localStorage.coords = localStorage.coords || '';

function showMap(latlon) {
  document.getElementById('map').innerHTML = '<img src="http://maps.google.com/maps/api/staticmap?center=' + latlon[0] + ',' + latlon[1] + '&zoom=15&size=400x400&sensor=false&markers=color:blue|label:S|' + latlon[0] + ',' + latlon[1] + '">';
}

function getCurrentPosition() {
  navigator.geolocation && (navigator.geolocation.getCurrentPosition(function(position){
    var time = new Date();
    localStorage.coords += time.getTime() + ',' + position.coords.latitude + ',' + position.coords.longitude + ';';
    coords.innerHTML = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds() + ' - ' + position.coords.latitude + ', ' + position.coords.longitude + ' (localStorage: ' + localStorage.coords.length + ' bytes)';
    
    console.log(position);
    showMap([position.coords.latitude, position.coords.longitude]);
    
    coords.innerHTML += '<br><br>' + JSON.stringify(position);
  }));
};

function watchPosition() {
  navigator.geolocation && (navigator.geolocation.watchPosition(function(position){
    var time = new Date();
    localStorage.coords += time.getTime() + ',' + position.coords.latitude + ',' + position.coords.longitude + ';';
    coords.innerHTML = time.getHours() + ':' + time.getMinutes() + ':' + time.getSeconds() + ' - ' + position.coords.latitude + ', ' + position.coords.longitude + ' (localStorage: ' + localStorage.coords.length + ' bytes)';
    
    console.log(position);
    showMap([position.coords.latitude, position.coords.longitude]);
    coords.innerHTML += '<br><br>' + JSON.stringify(position);
  }));
}

window.onload = function() {
  document.getElementById('getCurrentPosition').addEventListener('click', getCurrentPosition, false);
  document.getElementById('watchPosition').addEventListener('click', watchPosition, false);
  
  coords = document.getElementById('coords');
}

</script>