// api key : 82005d27a116c2880c8f0fcb866998a0
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");

// Stockage des infos dans object meteo.
const weather = {};

weather.temperature = {
    unit : "celsius"
}
const KELVIN = 273;

// apikey
const key = "82005d27a116c2880c8f0fcb866998a0";
//Affichage de la météo à l'ouverture de la page.
window.onload = function() {
    setPosition();
  };

// Position HONG KONG.
function setPosition(position){
    let latitude = 22.302711;
    let longitude = 114.177216;
    
    getWeather(latitude, longitude);
}

// récupération des informations json via l'api.
function getWeather(latitude, longitude){
    let api = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;
    
    fetch(api)
        .then(function(response){
            let data = response.json();
            return data;
        })
        .then(function(data){
            weather.temperature.value = Math.floor(data.main.temp - KELVIN);
            weather.description = data.weather[0].description;
            weather.iconId = data.weather[0].icon;
            weather.city = data.name;
            weather.country = data.sys.country;
            weather.id = data.weather[0].id;
        })
        .then(function(){
            displayWeather();
        });
}

// Liaison des éléments récupérer et affichage.
function displayWeather(){
    // a modifier lors du passage en ligne
    iconElement.innerHTML = `<img src="https://hongkong.mezianesofiane.com/images/icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
}