$(document).ready(function() {
    $('.profile-tab').click(function(e) {  
      console.log(this.id);

      if(this.id === 'tab-login'){
        console.log("Login");

        $(this).addClass("active"); 
        $('#tab-register').removeClass( "active" );
        
        $('#login').show();
        $('#register').hide();


      }else if(this.id === 'tab-register'){
        console.log("registeren");

        $(this).addClass("active"); 
        $('#tab-login').removeClass( "active" );
        
        $('#register').show();
        $('#login').hide();
    
      }
    });

    // $('.custom-btn').click(function(e) {

    //   console.log(this.id);

    //   if(this.id === 'login-submit'){
    //     Swal.fire(
    //       'Ingelogd',
    //       'Gebruikersnaam en wachtwoord zijn correct',
    //       'success'
    //     )

    //   }else if(this.id === 'register-submit'){
    //     Swal.fire(
    //       'Aanmelden gelukt!',
    //       'Je bent nu succesvol aangemeld!',
    //       'success'
    //     )
    //   }

      

    // });
    
});


