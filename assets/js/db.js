
$( document ).ready(function() {
    
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            console.log("ingelogd");
            document.getElementById("login-alert").style.display = "block";  
        } else {
            console.log("niet ingelogd");
            document.getElementById("login-alert").style.display = "none";
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
    emailInput.addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
            login();
        }
    });
    passInput.addEventListener("keydown", function (e) {
        if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
            login();
        }
    });



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