function getlatLen(){



var URL =document.getElementById('map').value;
    var lat =document.getElementById('lat');
    var lon =document.getElementById('lon');

// var URL =  "https://www.google.com/maps/place/Arctic+Pixel+Digital+Solutions/@63.6741553,-164.9587713,4z/data=!3m1!4b1!4m5!3m4!1s0x5133b2ed09c706b9:0x66deacb5f48c5d57!8m2!3d64.751111!4d-147.3494442";

var splitUrl = URL.split('!3d');
var latLong = splitUrl[splitUrl.length-1].split('!4d');
var longitude;

if (latLong.indexOf('?') !== -1) {
    longitude = latLong[1].split('\\?')[0];
} else {
    longitude = latLong[1];
}
var latitude = latLong[0];

    document.getElementById('lat').value = latitude
   document.getElementById('lon').value =longitude;
console.log(latitude); //64.751111
console.log(longitude);

}
