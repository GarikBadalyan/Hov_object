fetch(
  "https://api.openweathermap.org/data/2.5/weather?q=Erevan&appid=173dd106984c559f863c474b5560ab4d"
)
  .then(function (resp) {
    return resp.json();
  })
  .then(function (data) {
    console.log(data);
    document.querySelector(".city").innerHTML = data.name + "AM";
    document.querySelector(".temp").innerHTML =
      Math.round(data.main.temp - 273) + "&deg;";
    document.querySelector(".weather").innerHTML =
      data.weather[0]["description"];
    //https://openweathermap.org/img/wn/02d@2x.png  https://openweathermap.org/img/wn/02d@2x.png
    document.querySelector(
      ".features li"
    ).innerHTML = `<img src ="https://openweathermap.org/img/wn/${data.weather[0]["icon"]}@2x.png">`;
  })
  .catch(function () {});
