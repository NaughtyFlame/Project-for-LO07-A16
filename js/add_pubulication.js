var main=function(){
    var select,i,div;
    div="";
    $("#select-auteur").change(function(){
        select= document.getElementById('select-auteur').value;
        input_auteur(select);
    }
    );
    for(i=0;i<=select;i++){
       div+="<input  type='text' name='auteur"+i+"' class='form-control'><br>";
    }
}

$(document).ready(main);
var input_auteur=function(num){
    var div,i;
    div="";
    for(i=1;i<=num;i++){
        div+="<input type='text' name='auteur"+i+"' class='form-control'><br>";
    }
    document.getElementById("input-auteur").innerHTML = div;
}