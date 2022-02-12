"use strict"
let iRiga;
let iPrec;
let jsonColori;
let numColori;


window.onload = function(){
     let URL = "JSON/colori.json";
     let jHttp = new XMLHttpRequest();
     jHttp.open("GET",URL,false);
     jHttp.send();
     let strJson = jHttp.responseText;
     console.log(strJson);
     jsonColori=JSON.parse(strJson);
     numColori=jsonColori.length;
     console.log("numero di colori presenti: " + numColori);
}

function carica(div) {
     let str = "<table id='tabColori'><tr><th width='150px'>Colore</th><th width='180px'> Codice </th><th width='180px'> Hex </th></tr>"
     for (let i = 0; i < jsonColori.length; i++) {
          str+="<tr id ='r"+i+"'><td style='background-color: "+jsonColori[i].hexValue+"' onclick='colore("+i+")'></td><td id='col"+i+"' onclick='getColore(this.id)'>"+jsonColori[i].colorName+"</td><td id='codice"+i+"' onclick='getColore(this.id)'>"+jsonColori[i].hexValue+"</td></tr>"
     }
     str+="</table>";
     document.getElementById(div).innerHTML= str;
}