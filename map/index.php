
<?php include('../header.php') ?>

<div id="main-map" style="width:100%; height:100vh; opacity:0;"></div>

<div id="mapInfoModal" class="mapInfoShowSlider">
    <div id="inconstruction" class="">
        Dit gebouwd wordt vernieuwd/uitgebreid
    </div>
    <!--Div voor de container van de gebouwen informatie-->
    <button class="closeModalbtn" onclick="closeMapModal();"><i class="fas fa-times"></i></button>

    <div class="BuildingInformationContainer">
        <h1 class="infoBuildingName">Niet bekend</h1>
        <p class="infoBuildingZp">Niet bekend</p>

        <!--Div voor responsive, deze is gelinkt naar css voor gebruik van flex box wanneer in mobiele versie-->
        <div class="mobileStyleFlexBox">
            <img class="infoBuildingImg" src="">

            <p class="infoBuildingHeaderStyle">Gebouw functie:</p>
            <ul class="infoBuildingList infoBuildingTextStyle">
                <li class="infoBuildingFunction"></li>
            </ul>	
        </div>

        <!--Div voor responsive, deze hide onderstaande info voor wannneer in mobiel scherm zit-->
        <div class="mobileStyleHideInfo">
            <p class="infoBuildingOpleidingen infoBuildingHeaderStyle">Opleidingen:</p>
            <ul class="infoBuildingList infoBuildingTextStyle" id="ulopleidingen">
            
            </ul>
            
            <p class="infoBuildingVoorzieningen infoBuildingHeaderStyle">Voorzieningen:</p>
            <ul class="infoBuildingList infoBuildingTextStyle" id="ulvoorzieningen">
                
            </ul>
        </div>
    </div>	
    <div class="buildingInformationLoader">Loading...</div>
</div>

<div class="mobileMapInfoModal">
    <button class="closeModalbtn" onclick="closeMapModal();"><i class="fas fa-times"></i></button>
    <h1>Test</h1>
</div>

<?php include('../footer.php') ?>