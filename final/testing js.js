var request = require('request');

var url = 'http://newsapi.org/v2/top-headlines?' +
    'country=us&' +
    'apiKey=10796edacb704ac889e0fe7c794b0ecd';
var req = new Request(url);
fetch(req)
    .then(function(response) {
        console.log(response.json());
    })

