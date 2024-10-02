var ListProduit=[]
var tab = [];
var date = new Date();
date = date.getDate() + ":" + date.getMonth() + ":" + date.getFullYear();

if (
  localStorage.getItem("date") === null ||
  localStorage.getItem("date") != date
) {
  localStorage.setItem("date", date);
  GetApi(SetDatatolocalStor);
}

function GetApi(callback) {
  var xhr = new XMLHttpRequest();

  xhr.open("GET", "https://fakestoreapi.com/products");

  xhr.onload = function () {
    if (xhr.status === 200) {
      tab = JSON.parse(xhr.response);
      callback();
    }
  };

  xhr.send();
}

function SetDatatolocalStor() {
  jsonString = JSON.stringify(tab);
  localStorage.setItem("produits", jsonString);
}

function GetDataFromLocalStorage() {
  tab = JSON.parse(localStorage.getItem("produits"));
}

function AffhcherHTML() {
  GetDataFromLocalStorage();

  var produits = document.getElementById("Produit");
  var prix = document.getElementById("prix");

  for (let i = 0; i < tab.length; i++) {
    produits.innerHTML += `<option value="${i}"}>${tab[i].title.substring(0, 8)}</option>`;
  }

  prix.innerHTML = tab[produits.value].price + "DH";
}

AffhcherHTML();

function OnchangePrix() {
  var produits = document.getElementById("Produit");
  var prix = document.getElementById("prix");

  prix.innerHTML = tab[produits.value].price + "  DH";
}

var S = 0;
function AddProduitsList() {
  var produits = document.getElementById("Produit");
  var prix = document.getElementById("prix");
  var Qt = document.querySelector(".Qt");
  var tbody = document.getElementById('tbody')

  tbody.innerHTML += `<tr>
                          <td>${produits[produits.value].innerHTML}</td>
                          <td>${prix.innerHTML}</td>
                          <td>${Qt.value}</td>
                    </tr>`;

  S += parseFloat(parseFloat(prix.innerHTML) * Qt.value);   
  document.getElementById("prix_total").innerHTML = S + "DH";
}