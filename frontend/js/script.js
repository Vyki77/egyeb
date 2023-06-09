const url = "http://localhost/nevnapok/api";
const result = document.getElementById("result");

function getDates(json) {
  let dates = "";
  for (let date of json) {
    dates += date.honap + ".hónap" + date.nap + ".napja<br>";
  }
  return dates;
}

async function getByName() {
  let name = document.getElementById("name").value;
  if (name == "") return;
  let urlEnd = "/?nev=" + name;
  let request = await fetch(url + urlEnd);
  let json = await request.json();

  if (json.hiba != undefined) {
    result.innerHTML = "A keresett név nem található az adatbázisban.";
  } else {
    result.innerHTML =
      name + " névre " + json.length + " dátum: <br>" + getDates(json);
  }
}

function getNameCount(json) {
  if (json[0].nevnap2 == "") {
    return 1;
  }
  return 2;
}

async function getByDate() {
  let month = document.getElementById("month").value;
  let day = document.getElementById("day").value;
  if (month === "" || day === "") return;
  let urlEnd = "/?ho=" + month + "&nap=" + day;
  let request = await fetch(url + urlEnd);
  let json = await request.json();

  if (json.hiba != undefined) {
    result.innerHTML = "A keresett dátum hibás!";
  } else {
    result.innerHTML =
      month +
      ". hónap " +
      day +
      ". napjára " +
      getNameCount(json) +
      " név: " +
      "<br>" +
      json[0].nevnap1 +
      "<br>" +
      json[0].nevnap2;
  }
}
