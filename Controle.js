function Verif(){
    var string = [];
    var lowercase = /[a-z]/g;
    var uppercase = /[A-Z]/g;
    var numbers = /[0-9]/g;

    /////////////Nom Produit
    string = document.getElementById("nomA").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("test1").innerHTML = "<label id = 'nomA' style = 'color: red; font-weight: bold;'>&emsp;*nomA doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("test1").innerHTML = "<label id = 'nomA'></label>";
    }
    ////////////////// Nom Categorie///////////////////////////
    string = document.getElementById("modeleA").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("test2").innerHTML = "<label id = 'modeleA' style = 'color: red; font-weight: bold;'>&emsp;*modeleA doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("test2").innerHTML = "<label id = 'modeleA'></label>";
    }
    //message
    numbers = document.getElementById("prix").value;
    if(numbers == "1000"){
        console.log(numbers);
        let error = document.getElementById("test3").innerHTML = "<label id = 'prix' style = 'color: red; font-weight: bold;'>&emsp;*telephone ne doit pas etre vide</label>";
    }
    else{
        let error = document.getElementById("test3").innerHTML = "<label id = 'prix'></label>";
    }   
    //categorie
    string = document.getElementById("nomC").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("testtt").innerHTML = "<label id = 'nomC' style = 'color: red; font-weight: bold;'>&emsp;*nomC doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("testtt").innerHTML = "<label id = 'nomC'></label>";
    }
    
}

