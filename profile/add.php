<?php include('../header.php') ?>

<br>
<br>
<div class="container">
    <input class="form-control" placeholder="Straat" type="text" id="adres_name">
    <input class="form-control" placeholder="9" type="text" id="adres_num">
    <input class="form-control" placeholder="0000AA" type="text" id="adres_postcode">
    <input class="form-control" placeholder="Plaats" type="text" id="adres_plaats">
    <button onclick="getLatLong()">Get lat en Long</button>

    <br><br>
    Lat: <span id="lat-result"></span><br>
    Long: <span id="long-result"></span>

    <br><br>

    <div id="mapContainer" style="height: 300px; width: 400px"></div>



<br><br><br><br>



    <textarea id="educations" name="educations" rows="4" cols="50"></textarea>   
    <button onclick="testArray()">Test</button>


    

</div>

<?php include('../footer.php') ?>