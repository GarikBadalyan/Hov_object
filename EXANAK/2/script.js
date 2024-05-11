fetch(
  "https://api.openweathermap.org/data/2.5/weather?q=Erevan&appid=173dd106984c559f863c474b5560ab4d"
)
  .then(function (resp) {
    return resp.json();
  })
  .then(function (data) {
    console.log(data);
    document.querySelector(".city").innerHTML = data.name + ",AM";
    document.querySelector(".temp").innerHTML =
      Math.round(data.main.temp - 273) + "&deg;" + "C";
    document.querySelector(".andzrev").innerHTML =
      data.weather[0]["description"];
    document.querySelector(".qami > span").textContent =
      data.wind.speed + "m/s";
    document.querySelector(".humidity > span").innerHTML =
      data.main.humidity + "%";
    document.querySelector(".clouds > span").innerHTML = data.clouds.all + "%";
    document.querySelector(".sunrise > div").innerHTML =
      data.sys.sunrise + "°C";
    let now = new Date();
    let date = document.querySelector(".date");
    date.innerHTML = dateBuilder(now);
    let time = document.querySelector(".time");
    time.innerHTML = timeBuilder(now);
    //https://openweathermap.org/img/wn/02d@2x.png  https://openweathermap.org/img/wn/02d@2x.png
  })
  .catch(function () {});
function dateBuilder(d) {
  let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thurstay",
    "Friday",
    "Saturday",
  ];
  let day = days[d.getDay()];
  let date = d.getDate();
  let month = months[d.getMonth()];
  let year = d.getFullYear();
  return `${day} ${date} ${month} ${year} `;
}
function timeBuilder(d) {
  let hours = d.getHours();
  let minut = d.getMinutes();
  let seconds = d.getSeconds();
  return `${hours}:${minut}:${seconds} `;
}
