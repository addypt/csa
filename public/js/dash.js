mar = document.getElementById('mybook');
x = {};
fetch('/events/' + uid)
  .then(
    function(response) {
      if (response.status !== 200) {
        
      }
      // Examine the text in the response
      response.json().then(function(data) {
        console.log(data);
        x = data;
        data.forEach((event) => {
            var li = document.createElement("li");
            var a = document.createElement("a");
            var att = document.createAttribute("href");       // Create a "class" attribute
            att.value = "/event/" + event.id;                           // Set the value of the class attribute
            a.setAttributeNode(att); 
            a.innerHTML = event.description;
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
