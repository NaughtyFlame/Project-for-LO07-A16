/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var main = function() {
        $('form').submit(function(){
        var check=1;
        var organisation = $('#organisation').val();
        var firstName = $('#first').val();
        var lastName = $('#last').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var checkutt=email.split("@")
        if(organisation===""){
            $('.organisation-error').text("Please enter your name of organisation");
            check=0;
        }else
        {
            $('.username-error').text("");
        }
        if(firstName === "") {
            $('.first-name-error').text("Please enter your first name");
            check=0;
          }else
          {
              $('.first-name-error').text("");
          }
        if(lastName ===""){
            $('.last-name-error').text("Please enter your last name");
            check=0;
          }else
          {
              $('.last-name-error').text("");
          }
        if(email ===""){
            $('.email-error').text("Please enter your email");
            check=0;
          }else{
              $('.email-error').text("");
          }
<<<<<<< HEAD
          if(checkutt[1]!='utt.fr'){
              $('.email-error').text("You have to use an utt email adresse");
              check=0;
          }else
          {
              $('.email-error').text("");
          }
=======
          /* il faut confirmer que l'adresse est à l'UTT */
>>>>>>> origin/master
        if(password ===""){
            $('.password-error').text("Please enter your password");
            check=0;
          }else{
              $('.password-error').text("");
          }
        if(password.length<8){
            $('.password-error').text("Please set the password at least 8 characters.");
            check=0;
          }else{
              $('.password-error').text("");
          }
          if(check!=1){
              return false;
              
          }
          });
          
}
$(document).ready(main);
