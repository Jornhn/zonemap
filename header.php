
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zonemap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <link rel="stylesheet" href="../assets/css/style-map.css">
    <link rel="stylesheet" href="../assets/css/style-jh.css">
</head>
<body>
<div id="login-alert">Je bent ingelogd. <a id="logout-btn" href="#">Uitloggen</a></div>
<header class="desktopHeader">
    <nav>
        <ul>    
            <?php
            $search     = "";
            $map        = "";
            $profile    = "";
            $news       = "";
            
            //get page name from url
            $uri = $_SERVER['REQUEST_URI'];
            $arr = explode("/", $uri, 4);
            $page = $arr[2];
            
            //check if page is current
            if($page == 'zoeken'){ ?>
                <?php $search = "active"; ?> 
            <?php }elseif($page == 'map'){ ?>
                <?php $map = "active"; ?>
            <?php }elseif($page == 'profile'){ ?>
                <?php $profile = "active"; ?>
            <?php }elseif($page == 'nieuws'){ ?>
                <?php $news = "active"; ?>
            <?php } ?>


            <a href='http://localhost:8888/zonemap/zoeken'><li class="<?= $search ?>"><i class='fas fa-search'></i></li></a>
            <a href='http://localhost:8888/zonemap/map'><li class="<?= $map ?>"><i class='fas fa-map'></i></li></a>
            <a href='http://localhost:8888/zonemap/profile'><li class="<?= $profile ?>"><i class='fas fa-user-alt'></i></li></a>
            <a href='http://localhost:8888/zonemap/nieuws'><li class="<?= $news ?>"><i class='fas fa-newspaper'></i></li></a>
        </ul>
    </nav> 

</header>
<header class="mobileHeader">
</header>
