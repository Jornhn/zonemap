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


    <br><hr><br>

</div>





<div class="container">

    <br><br>    
    <h1>Gebouw toevoegen</h1>
    <hr>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <label for="exampleFormControlInput1">Adres</label>
        <div class="form-row form-group">
            <div class="col-8">
                <input type="text" class="form-control" placeholder="Straat">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Num">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Postcode">
            </div>
            <div class="col-12 mt-2">
                <input type="text" class="form-control" placeholder="Plaats">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Soort gebouw</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option value="" select>-- Maak keuze --</option>
                <option>Hanze</option>
                <option>RUG</option>
                <option>Bedrijf</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opleidingen</label>
            <p><i>Meerdere toevoegen? Elke enter (nieuwe regel) is een extra opleiding</i></p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
</div>

<?php include('../footer.php') ?>