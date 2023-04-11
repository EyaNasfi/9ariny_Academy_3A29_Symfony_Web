function Verif(){
    var string = [];
    var lowercase = /[a-z]/g;
    var uppercase = /[A-Z]/g;
    var numbers = /[0-9]/g;

    /////////////Nom Produit
    string = document.getElementById("prenom").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("test1").innerHTML = "<label id = 'prenom' style = 'color: red; font-weight: bold;'>&emsp;*Prenom doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("test1").innerHTML = "<label id = 'prenom'></label>";
    }
    ////////////////// Nom Categorie///////////////////////////
    string = document.getElementById("adresse").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("test2").innerHTML = "<label id = 'adresse' style = 'color: red; font-weight: bold;'>&emsp;*Adresse doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("test2").innerHTML = "<label id = 'adresse'></label>";
    }
    //message
    numbers = document.getElementById("telephone").value;
    if(numbers == "1000"){
        console.log(numbers);
        let error = document.getElementById("test3").innerHTML = "<label id = 'telephone' style = 'color: red; font-weight: bold;'>&emsp;*telephone ne doit pas etre vide</label>";
    }
    else{
        let error = document.getElementById("test3").innerHTML = "<label id = 'telephone'></label>";
    }   
}