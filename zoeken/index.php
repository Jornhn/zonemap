<?php include('../header.php') ?>

<div class="row">
    <!-- Filterfunctie -->
    <div class="col-sm-3 filter"></div>
    <div class="col-sm-3 filter position-fixed">
      <div class="filtercontainer">

        <p class="sort">Gesorteerd op:  <a class="sort" href="#">Afstand</a>/<a class="sort" href="#">Naam</a></p>

        <h3 class="h3-filter">Faciliteiten</h3>
          <div class="voorzieningen">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Toiletten</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Horecagelegenheid</label>
            </div>
          </div>

        <h3 class="h3-filter">Opleidingen</h3>
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opleidingen
              </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Academisch Opleiding Leraar Basisonderwijs </a>
              <a class="dropdown-item" href="#">Accountancy</a>
              <a class="dropdown-item" href="#">Advanced Nursing Practice</a>
              <a class="dropdown-item" href="#">Archictectuur | Academie van Bouwkunst</a>
              <a class="dropdown-item" href="#">Automotive</a>
              <a class="dropdown-item" href="#">Autonome Beeldende Kunst</a>
              <a class="dropdown-item" href="#">Bedrijfskunde</a>
              <a class="dropdown-item" href="#">Bio-Informatica</a>
              <a class="dropdown-item" href="#">Biologische en Medische Research</a>
              <a class="dropdown-item" href="#">Built Environment</a>
              <a class="dropdown-item" href="#">Chemie</a>
              <a class="dropdown-item" href="#">Chemische Technologie</a>
              <a class="dropdown-item" href="#">Classical Music</a>
              <a class="dropdown-item" href="#">Commerciële Economie</a>
              <a class="dropdown-item" href="#">Communicatie</a>
              <a class="dropdown-item" href="#">Communication & Multimedia Design</a>
              <a class="dropdown-item" href="#">Compositie, Muziek- en Studioproducties</a>
              <a class="dropdown-item" href="#">Dans</a>
              <a class="dropdown-item" href="#">Data Science for Life Sciences</a>
              <a class="dropdown-item" href="#">Dirigent HaFaBra en Koor</a>
              <a class="dropdown-item" href="#">Docent Beeldende Kunst & Vormgeving</a>
              <a class="dropdown-item" href="#">Docent Dans</a>
              <a class="dropdown-item" href="#">Docent Muziek</a>
              <a class="dropdown-item" href="#">Elektrotechniek</a>
              <a class="dropdown-item" href="#">Energy for Society</a>
              <a class="dropdown-item" href="#">Ervaringsdeskundigheid in Zorg en Welzijn</a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
            </div>
          </div>


        <h3 class="h3-filter">Functie Gebouw</h3>
        <div class="functie-gebouw">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Hanze</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">RuG</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Bedrijf</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lecture/Exam Hall</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Nieuwbouw</label>
          </div>
        </div>

    </div>
</div>

    <!--    -->
    <div class="col-sm-9" style="z-index:-9999">
      <!-- Searchbox -->
      <div class="zoekbalk">
        <input id="searchBar" class="searchbar" type="text" placeholder="Zoek op Zernike...">
        <a id="btnSearch" class="btn-search"><i class="fa fa-search"></i></a>
      </div>

      <!-- Filterresultaten Gebouwen -->

      <div class="filterresultaten">

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Doorenveste.jpg" alt="Van Doorenveste">
          <div class="overlay">
            <h3>Van Doorenveste</h3>
            <span class="adres">Zernike Plein 11</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Van Olst.jpg" alt="Van OlstToren">
          <div class="overlay">
            <h3>Van OlstToren</h3>
            <span class="adres">Zernike Plein 9
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Aletta Jacobs.jpg" alt="Aletta Jacobshal">
          <div class="overlay">
            <h3>Aletta Jacobshal</h3>
            <span class="adres">Blauwborgje 4</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/kapteynborg.jpg" alt="Kapteynborg">
          <div class="overlay">
            <h3>Kapteynborg</h3>
            <span class="adres">Landleven 12</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Bernoulliborg.jpg" alt="Bernoulliborg">
          <div class="overlay">
            <h3>Bernoulliborg</h3>
            <span class="adres">Nijenborgh 9</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Aclo.jpg" alt="Aclo">
          <div class="overlay">
            <h3>Aclo</h3>
            <span class="adres">Blauwborgje 16 </span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Brugsmaborg.jpg" alt="Brugsmaborg">
          <div class="overlay">
            <h3>Brugsmaborg</h3>
            <span class="adres">Zernikeplein 9  </span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Duisenberg.jpg" alt="Duisenberg">
          <div class="overlay">
            <h3>Duisenberg</h3>
            <span class="adres">Nettelbosje 2 </span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Energy Academy.jpg" alt="Energy Academy">
          <div class="overlay">
            <h3>Energy Academy</h3>
            <span class="adres">Nijenborgh 6</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/linnaeusborg.jpg" alt="linnaeusborg">
          <div class="overlay">
            <h3>linnaeusborg</h3>
            <span class="adres">Nijenborgh 7</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Marie Kamphuisborg.jpg" alt="Marie Kamphuisborg">
          <div class="overlay">
            <h3>Marie Kamphuisborg</h3>
            <span class="adres">Zernikeplein 23</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Mercator.jpg" alt="Mercator">
          <div class="overlay">
            <h3>Mercator</h3>
            <span class="adres">Landleven 1</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Feringa Building.jpg" alt="Feringa Building">
          <div class="overlay">
            <h3>Feringa Building</h3>
            <span class="adres">Nijeborgh 4</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Smitsborg.jpg" alt="Smitsborg">
          <div class="overlay">
            <h3>Smitsborg</h3>
            <span class="adres">Nettelbosje 1</span>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php include('../footer.php') ?>
