const fetch = require('node-fetch');


fetch('https://jsonplaceholder.typicode.com/todos/1')
 .then(response => response.json())
 .then(json => console.log(json))
 .catch(error => console.error('Error fetching data:', error));
