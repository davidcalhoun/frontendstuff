---
layout: page
title: "sql (WebSQL)"
date: 2011-10-19 00:56
comments: true
sharing: true
footer: true
---

## Code
```javascript
(function(){
  if(window.openDatabase) {
    // openDatabase(name, version, description, size, optionalCallbackFunction);
    var db = openDatabase('myDatabase', '1.0', 'Description', 2*1024*1024, function(){ /* called if database is being initially created*/ });
    
    db.transaction(function(tx){
      tx.executeSql('CREATE TABLE IF NOT EXISTS myTable (id INTEGER PRIMARY KEY, column1, column2)'); // "integer primary key" sets up an autoincrement
      tx.executeSql('INSERT INTO myTable (column1, column2) VALUES ("foo", "bar")');
      tx.executeSql('INSERT INTO myTable (column1, column2) VALUES ("foo2", "bar2")');
      tx.executeSql('SELECT * FROM myTable', [], function(tx, results){
        var i, log;
        
        for(i=0, len=results.rows.length; i<len; i++) {
          log = document.createElement('p');
          log.innerText = JSON.stringify(results.rows.item(i));
          document.body.appendChild(log);
        }
      });
    });
    
    // DROP TABLE button
    document.getElementById('drop').addEventListener('click', function(){
      db.transaction(function(tx) {
        tx.executeSql('DROP TABLE myTable');
      });
    }, false);
  }
})();
```

## Notes
(deprecated)