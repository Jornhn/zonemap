
$( document ).ready(function() {
    
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            $('.pf-uid').html("<b>User UID:</b> "+user.uid);
            $('.pf-email').html("<b>User Email:</b> "+user.email);

            $('.profile-container').hide();
            $('.admin-panel').show();
            console.log("- LOGGEDIN -");
        } else {
            $('.profile-container').show();
            $('.admin-panel').hide();

            console.log("- NOT LOGGEDIN - ");
        }

        // console.log("geladen");
    });

    //onclick "logout" link
    var logoutBtn = document.getElementById('logout-btn');
    logoutBtn.addEventListener('click', function() {
        logout();
    }, false);

    //on enter in form input, try to login
    var emailInput = document.getElementById('login_email');
    var passInput = document.getElementById('login_password');

    if(emailInput){
        emailInput.addEventListener("keydown", function (e) {
            if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
                login();
            }
        });
    }

    if(passInput){
        passInput.addEventListener("keydown", function (e) {
            if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
                login();
            }
        });
    }

});

function login(){
    var userEmail = document.getElementById("login_email").value;
    var userPass = document.getElementById("login_password").value;

    firebase.auth().signInWithEmailAndPassword(userEmail, userPass).then(function(){
    
        //Email and password are correct
        Swal.fire(
            'Gelukt!',
            'Je bent nu ingelogd',
            'success'
        )

    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        //email and password are wrong
        Swal.fire(
            'Error',
            errorMessage,
            'error'
        )
    });
}

function googleLogin(){
    var provider = new firebase.auth.GoogleAuthProvider();
    
    firebase.auth().signInWithPopup(provider).then(function(result) {
        // This gives you a Facebook Access Token. You can use it to access the Facebook API.
        var token = result.credential.accessToken;
        // The signed-in user info.
        var user = result.user;
        // ...
      }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // The email of the user's account used.
        var email = error.email;
        // The firebase.auth.AuthCredential type that was used.
        var credential = error.credential;
        // ...
      });
}

function logout(){
    firebase.auth().signOut().then(function() {
        window.alert("uitgelogd!");
      }).catch(function(error) {
        window.alert("fout opgetreden!");
      });
}


function saveBuilding(){

    var input_name = $('#building_name').val();

        var adres_name = $('#adres_name').val();
        var adres_number = $('#adres_num').val();
        var adres_zipcode = $('#adres_postcode').val();
        var adres_place = $('#adres_plaats').val();

    var input_adres = {
        'name' : adres_name+" "+adres_number,
        'zipcode' : adres_zipcode,
        'place' : adres_place
    };
    
        var input_lat = $('#building_lat').val();
        var input_lon = $('#building_lon').val();
    var input_latLong = [input_lat, input_lon];

    var input_function  = $('#function_building').val();

    var input_educations = $('#educations').val().split('\n');
    var input_facilities = $('#facilities').val().split('\n');

    //save to database
    created_id = Date.now();

    firebase.database().ref("Buildings/"+created_id).set({
        id: created_id,
        name: input_name,
        adres: input_adres,
        function: input_function,
        latLong: input_latLong,
        education: input_educations,
        facilities: input_facilities,
    }, function(error) {
        if (error) {
          alert("error!"+error);
        } else {
          alert("gelukt!");
          window.location.href = "http://www.zonemap.nl/profile";
        }
    });
}

function getData(){
    var allData = [];

    var user = firebase.database().ref("Buildings/");
    user.on("child_added", function(data){
        var UserValues = data.val();
        allData.push(UserValues);
    

        //** loop door de array van een array (bijv. alle opleidingen in gebouwen) */
        
        // var array = UserValues.array;
        // array.forEach(function(arrayData){
        //     console.log(arrayData);
        // })
    });

    console.log(allData);
}

function searchAge(age){
    firebase.database().ref().child('User/').orderByChild('age').equalTo(age).on("value", function(data) {
        var searchData = data.val();
        // console.log(searchData);

        Object.keys(searchData).forEach(function (key){
            console.log(searchData[key]);
            // console.log(searchData[key].name);
        });
        
    });
}

function getBuilding(id){
    var buildingId = firebase.database().ref("Buildings/"+id);
    buildingId.on("value", function(data){
        var buildingValue = data.val();
        
        showMapModal();
        fillMapModal(buildingValue);
    })
}

function fillMapModal(data){
    console.log(data.name);

    $('.infoBuildingName').html(data.name);
    $('.infoBuildingZp').html(data.adres.name);
    $('.infoBuildingFunction').html(data.function);

    $('.infoBuildingImg').attr('src', 'https://via.placeholder.com/286x150.png');

    //loader test, fill map after 0.6 second (600 ms)
    setTimeout(function(){ 
        $('.buildingInformationLoader').hide();
        $('.BuildingInformationContainer').show();
    }, 600);

}

function showMapModal(){
    //enable loader
    $('.buildingInformationLoader').show();
    $('.BuildingInformationContainer').hide();

    //open modal
    $('#mapInfoModal').addClass('openModal');
}

function closeMapModal(){
    //close modal
    $('#mapInfoModal').removeClass('openModal');
}


function testArray(){
    var arrayOfLines = $('#educations').val().split('\n');

    if(arrayOfLines[0] == ''){
        console.log("LEEG!");
    }else{
        console.log(arrayOfLines);
    }  
}


function getLatLong(){
    var key = "ac6f65d63fb525";
    var adresName = $("#adres_name").val();
    var adresNumber = $("#adres_num").val();
    var adresPlace = $("#adres_plaats").val();

    var adres = adresName + "/" + adresNumber+" "+adresPlace;

    console.log("laden");

    $.get("https://eu1.locationiq.com/v1/search.php?key="+key+"&q="+adres+"&format=json", function(data, status){

        var lat = data[0]['lat'];
        var lon = data[0]['lon'];

        $("#lat-result").text(lat);
        $("#long-result").text(lon);

        $("#building_lat").val(lat);
        $("#building_lon").val(lon);

        //Creates a preview on the osm map from input data
        checkMarkerLocation(lat, lon);

      }).done(function() {
        console.log("klaar");
      });;
}

