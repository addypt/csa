mar = document.getElementById('marquee1');
fetch('/events')
  .then(
    function(response) {
      if (response.status !== 200) {
        
      }
      // Examine the text in the response
      response.json().then(function(data) {
        data.forEach((event) => {
          var li = document.createElement('p');
          var a = document.createElement("a");
          var att = document.createAttribute("href");       // Create a "class" attribute
          att.value = "/event/" + event.id;                           // Set the value of the class attribute
          a.setAttributeNode(att); 
          a.innerHTML = event.name;
          console.log(a);
          li.append(a);
          mar.append(li);
        });
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });
