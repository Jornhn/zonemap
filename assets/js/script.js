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
});