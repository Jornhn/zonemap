<?php include('../header.php') ?>

<div class="container">

    <br><br>    
    <h1>Gebouw toevoegen</h1>
    <hr>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1"><b>Naam</b></label>
            <input type="text" class="form-control" id="building_name">
        </div>
        <label for="exampleFormControlInput1"><b>Adres</b></label>
        <div class="form-row form-group">
            <div class="col-8">
                <input type="text" class="form-control" id="adres_name" placeholder="Straat">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" id="adres_num" placeholder="Num" onchange="getLatLong()">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" id="adres_postcode" placeholder="Postcode" onchange="getLatLong()">
            </div>
            <div class="col-12 mt-2">
                <input type="text" class="form-control" id="adres_plaats" placeholder="Plaats" onchange="getLatLong()">
            </div>
        </div>
        <div class="form-group" style="display:none;">
            <input type="text" name="building_lat" id="building_lat">
            <input type="text" name="building_lon" id="building_lon">
        </div>
        <div id="marker-location-map" style="height: 200px; width: 100%; "></div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><b>Soort gebouw</b></label>
            <select class="form-control" id="function_building">
                <option value="" select>-- Maak keuze --</option>
                <option value="Hanze">Hanze</option>
                <option value="RUG">RUG</option>
                <option value="Bedrijf">Bedrijf</option>
                <option value="Lecture/Exam Hall">Lecture/Exam Hall</option>
            </select>
        </div>
        <input class="btn btn-primary" onclick="saveBuilding()" type="button" value="Toevoegen">
        <br><hr><br>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Opleidingen</b></label>
            <p><i>Meerdere toevoegen? Elke enter (nieuwe regel) is een extra opleiding</i></p>
            <textarea class="form-control" name="educations" id="educations" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Faciliteiten</b></label>
            <p><i>Meerdere toevoegen? Elke enter (nieuwe regel) is een extra faciliteit</i></p>
            <textarea class="form-control" name="facilities" id="facilities" rows="3"></textarea>
        </div>
        
    </form>
</div>

<?php include('../footer.php') ?>