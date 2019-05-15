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