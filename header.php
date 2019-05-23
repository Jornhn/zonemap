<!doctype html>
<html>
    <head>
        <title>Zonemap | Nieuws</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=width, initial-scale=1">
        

        
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">  
        <link href="../assets/css/stylenieuws.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/style-jh.css">
        <link rel="stylesheet" href="../assets/css/style-wv.css">
        <!-- Stylesheet/bootstrap, google fonts -->
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
                $arr = explode("/", $uri, 5);
                $page = $arr[3];
                
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


                <a href='http://localhost:8888/Zonemap/application/zoeken'><li class="<?= $search ?>"><i class='fas fa-search'></i></li></a>
                <a href='http://localhost:8888/Zonemap/application/map'><li class="<?= $map ?>"><i class='fas fa-map'></i></li></a>
                <a href='http://localhost:8888/Zonemap/application/profile'><li class="<?= $profile ?>"><i class='fas fa-user-alt'></i></li></a>
                <a href='http://localhost:8888/Zonemap/application/nieuws'><li class="<?= $news ?>"><i class='fas fa-newspaper'></i></li></a>
            </ul>
        </nav> 

    </header>
    <header class="mobileHeader">
    </header>
    
