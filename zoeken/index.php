<?php include('../header.php') ?>

<div class="row">
    <!-- Filterfunctie -->
    <!-- https://codepen.io/WouterVrijs/pen/VOKOxE  -->
    <div class="col-sm-3 filter">
      <div class="filtercontainer">
        <h3>Voorzieningen</h3>
        <ul>
          <li>Toiletten</li>
          <li>Eetvoorziening</li>
        </ul>
        <h3>Opleidingen</h3>
        <ul>
          <li>Communication & Multimedia Design</li>
          <li>Bedrijfskunde</li>
        </ul>
      </div>


      <!-- <div id="myBtnContainer">
        <form class="" action="index.html" method="post">

        </form>

        <a>Gesorteerd op:</a><a href="#">afstand</a><br>
        <button class="btn active" onclick="filterSelection('all')"> Laat alles zien</button>

        <h3>Voorzieningen</h3>
        <button class="btn" onclick="filterSelection('cars')"> Toiletten</button>
        <button class="btn" onclick="filterSelection('animals')"> Eetvoorzieningen</button>

        <h3>Opleidingen</h3>
        <button class="btn" onclick="filterSelection('fruits')"> Communicatie & Multimedia Design</button>
        <button class="btn" onclick="filterSelection('colors')"> Bedrijfskunde</button>-->
    </div>


    <!--    -->
    <div class="col-sm-8">
      <!-- Searchbox -->
      <div class="zoekbalk">
        <input id="searchBar" class="searchbar" type="text" placeholder="Zoek op Zernike...">
        <a id="btnSearch" class="btn-search"><i class="fa fa-search"></i></a>
      </div>

      <!-- Filterresultaten  -->

      <div class="filterresultaten">

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Doorenveste.jpg" alt="Van Doorenveste">
          <div class="overlay">
            <h3>Van Doorenveste</h3>
            <span class="adres">Zernike Plein 11</span>
          </div>
        </div>

        <div class="gebouw">
          <img class="zoekafbeelding" src="images/Van Olst.jpg" alt="Van Doorenveste">
          <div class="overlay">
            <h3>Van OlstToren</h3>
            <span class="adres">Zernike Plein 9
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>

<?php include('../footer.php') ?>
