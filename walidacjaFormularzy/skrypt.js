const formularz=document.querySelector("form");
const dane1=formularz.querySelector("input[name=wejscie1]");
const dane2=formularz.querySelector("input[name=wejscie2]");
const dane3=formularz.querySelector("input[name=wejscie3]");
const dane4=formularz.querySelector("input[name=wejscie4]");

formularz.addEventListener("submit", e => {
    e.preventDefault();
    alert("Imię: "+dane1.value+" Nazwisko: "+dane2.value+" Numer: "+dane3.value+" Ocena: "+dane4.value);
} );

const form1=document.querySelector("#formularz1");
const dane22=form1.querySelector("#wejscie1");

form1.addEventListener("submit", e =>{
    e.preventDefault();
    console.log(dane22.value);
})

const form2=document.querySelector(".formularz");
const dane33=form2.querySelector(".wejscie");
const wynik=form2.querySelector(".wiadomosc");

form2.addEventListener("submit", e =>{
    e.preventDefault();
    wynik.innerHTML=`<p>Wynik działania to:
    ${dane33.value} </p> `
})