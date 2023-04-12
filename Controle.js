function Verif(){
    var string = [];
    var lowercase = /[a-z]/g;
    var uppercase = /[A-Z]/g;
   

    /////////////Nom Produit
    string = document.getElementById("NClient").value;
    if((string[0] < 'A')||(string > 'Z') || (string == "")){
        console.log(string);
        let error = document.getElementById("test1").innerHTML = "<label id = 'NClient' style = 'color: red; font-weight: bold;'>&emsp;*NClient doit commencer par une lettre majuscule</label>";
    }
    else{
        let error = document.getElementById("test1").innerHTML = "<label id = 'NClient'></label>";
    }
   
}