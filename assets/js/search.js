
function globalSearch(string){
        var allData = [];

        var adresData = [];
        var nameData = [];
    
        var user = firebase.database().ref("Buildings/");
        user.on("child_added", function(data){
            var UserValues = data.val();
            
            nameData.push(UserValues.name);
            adresData.push(UserValues.adres.name);
        
    
            //** loop door de array van een array (bijv. alle opleidingen in gebouwen) */
            
            // var array = UserValues.array;
            // array.forEach(function(arrayData){
            //     console.log(arrayData);
            // })
        });

        // console.log(nameData, adresData);
        console.log(string);
        filterData(adresData, nameData, string);

}


function filterData(adresData, nameData, string){


    let results = adresData.filter(x => x.toLowerCase().includes(string));
    if(results.length > 0){
        console.log(results);
    }
    

    let results2 = nameData.filter(x => x.toLowerCase().includes(string));
    if(results2.length > 0){
        console.log(results2);
    }
    
}


function testSearch(){
    firebase.database().ref().child('Buildings/').orderByChild('name').startAt("Alleta").endAt("Alleta"+"\uf8ff").once("value", function(snap) {
        console.log("#2 Results: "+snap.numChildren()); // Results: 2
        snap.forEach(function(child) { 
            console.log(child.key); // 1498230632003..., 1498230632000...
        });
    });
}

function fillSearchList(){
    var allData = [];

    var user = firebase.database().ref("Buildings/");
    user.on("child_added", function(data){
        var UserValues = data.val();
        allData.push(UserValues);

        $( ".filterresultaten" ).append( "<div class='gebouw col-lg-6'><a href='/zonemap/map/?id="+UserValues.id+"'><img class='zoekafbeelding' src='Images/"+UserValues.img+"'><div class='overlay'><h3>"+UserValues.name+"</h3><span class='adres'>"+UserValues.adres.name+"</span></div></a></div>" );

        console.log(UserValues);
    });
}

$(document).ready(function() {
    fillSearchList();
});
