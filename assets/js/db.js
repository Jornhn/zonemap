
$( document ).ready(function() {
    
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            console.log("ingelogd");
            document.getElementById("login-alert").style.display = "block";  
        } else {
            console.log("niet ingelogd");
            document.getElementById("login-alert").style.display = "none";
            // window.location.href = "http://www.w3schools.com";
        }
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

function logout(){
    firebase.auth().signOut().then(function() {
        window.alert("uitgelogd!");
      }).catch(function(error) {
        window.alert("fout opgetreden!");
      });
}



function saveData(){
    firebase.database().ref("User/7").set({
        name: document.getElementById('nameField').value,
        age: document.getElementById('ageField').value,
        array: ['eerste item', 'tweede item']
    });
}

function saveBuilding(){

    var input_name = "";
    var input_adres = "";
    var input_latLong = LatLongArr;

    var input_educations = $('#educations').val().split('\n');
    var input_facilities = $('#facilities').val().split('\n');
    
    
    if(input_educations[0] == '' || input_facilities[0] == ''){
        console.log("LEEG!");
    }else{
        // Toevoegen!
        console.log(input_educations);
    }  

    console.log(input_name);
    console.log(input_adres);
    console.log(input_latLong);
    console.log(input_educations);
    console.log(input_facilities);

    //save to database

    // firebase.database().ref("Buildings/").set({
    //     name: input_name,
    //     adres: input_adres,
    //     latLong: input_latLong,
    //     education: input_educations,
    //     facilities: input_facilities,
    // });
}

function getData(){
    var allData = [];

    var user = firebase.database().ref("User/");
    user.on("child_added", function(data){
        var UserValues = data.val();
        // console.log(UserValues);
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

function getOne(id){
    var user = firebase.database().ref("User/"+id);
    user.on("value", function(data){
        var UserValue = data.val();
        console.log(UserValue.name);
        console.log(UserValue.age);
    })
}


function GetLastId(){
    var user = firebase.database().ref("User/");
    user.limitToLast(1).on("child_added", function(data){
        lastArray = data.val();
        
        lastId = lastArray.id;
        setNewId(lastId);
    });
    // return newId;
    return setNewId
}

function setNewId(lastId){
    newId = lastId++;
    console.log(newId);
}

function testArray(){
    var arrayOfLines = $('#educations').val().split('\n');

    if(arrayOfLines[0] == ''){
        console.log("LEEG!");
    }else{
        console.log(arrayOfLines);
    }  
}

var LatLongArr = [];
function getLatLong(){
    var key = "ac6f65d63fb525";
    var adresName = $("#adres_name").val();
    var adresNumber = $("#adres_num").val();
    var adresPostcode = $("#adres_postcode").val();

    var adres = adresName + "/" + adresNumber + "/" + adresPostcode;

    console.log("laden");

    $.get("https://eu1.locationiq.com/v1/search.php?key="+key+"&q="+adres+"&format=json", function(data, status){

        var lat = data[0]['lat'];
        var lon = data[0]['lon'];

        $("#lat-result").text(lat);
        $("#long-result").text(lon);

        // Create array from lat and long
        LatLong = [lat, lon];


        //Creates a preview on the osm map from input data
        checkMarkerLocation(lat, lon);

      }).done(function() {
        console.log("klaar");
      });;
}