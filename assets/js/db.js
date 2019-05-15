function saveData(){
    firebase.database().ref("User/6").set({
        name: document.getElementById('nameField').value,
        age: document.getElementById('ageField').value,
        array: ['eerste item', 'tweede item']
    });
}

function getData(){
    var user = firebase.database().ref("User/");
    user.on("child_added", function(data){
        var UserValues = data.val();
        console.log(UserValues);
    

        //** loop door de array van een array (bijv. alle opleidingen in gebouwen) */
        
        // var array = UserValues.array;
        // array.forEach(function(arrayData){
        //     console.log(arrayData);
        // })
    })
}

function getOne(id){
    var user = firebase.database().ref("User/"+id);
    user.on("value", function(data){
        var UserValue = data.val();
        console.log(UserValue.name);
        console.log(UserValue.age);
    })
}