---
layout: page
title: "indexedDB (webkitIndexedDB)"
date: 2011-10-19 00:56
comments: true
sharing: true
footer: true
---

## Code
```javascript
(function(){
  var indexedDB = window.indexedDB || window.webkitIndexedDB;
  
  if(indexedDB) {
    var db = indexedDB.open('books', 'Book store', false);
    if (db.version !== '1.0') {
      var olddb = indexedDB.open('books', 'Book store');
      olddb.createObjectStore('books', 'isbn');
      olddb.createIndex('BookAuthor', 'books', 'author', false);
      olddb.setVersion("1.0");
    }
    // db.version === "1.0";  
    var index = db.openIndex('BookAuthor');
    var matching = index.get('fred');
    if (matching)
      report(matching.isbn, matching.name, matching.author);
    else
      report(null);
    
  }
})();
```