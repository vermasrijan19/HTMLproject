// const fetch = require("node-fetch");
var arr = [];
var url = 'http://newsapi.org/v2/top-headlines?' +
    'sources=ars-technica&' +
    // 'country=us&' +
    'apiKey=10796edacb704ac889e0fe7c794b0ecd';
fetch(url)
    .then(response => response.json())
    .then(data =>
        console.log(data),
    )
console.log(arr);

function myFunction() {
    // document.getElementById("demo").innerHTML = "Paragraph changed!";
}


function loadfunction() {
    var i = 0;
    var arr = [];
    var url = 'http://newsapi.org/v2/top-headlines?' +
        'sources=ars-technica&' +
        // 'country=us&' +
        'apiKey=10796edacb704ac889e0fe7c794b0ecd';
    fetch(url)
        .then(response => response.json())
        .then(data => {
            for (i = 0; i < 10; i++) {

                // console.log(data.articles[1].description);
                // window.alert(a);
                document.getElementById(("a" + i.toString())).href = data.articles[i].url;
                document.getElementById("t" + i).innerHTML = data.articles[i].title;
                document.getElementById("d" + i).innerHTML = data.articles[i].description;
                var img = document.createElement("img");

                img.src = data.articles[i].urlToImage;
                var src = document.getElementById("i" + i);

                src.appendChild(img);
            }
        })

}