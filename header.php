<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>GÜRBÜZ & GÜRBÜZ Hukuk Bürosu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

<!-- Header -->
<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="index.php"> - a super cool design agency...</a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="<?= ($activePage == 'index') ? 'current-page':'';  ?>">
                                <a href="index.php"><i class="fa fa-home"></i><br />ANASAYFA</a>
                            </li>
                            <li class="<?= ($activePage == 'hakkimizda') ? 'current-page':'';  ?> ">
                                <a href="hakkimizda.php"><i class="fa fa-object-group"></i><br />HAKKIMIZDA</a>
                            </li>
                            <li class="<?= ($activePage == 'ekibimiz') ? 'current-page':'';  ?> ">
                                <a href="ekibimiz.php"><i class="fa fa-user"></i><br />EKİBİMİZ</a>
                            </li>
                            <li class=" <?= ($activePage == 'faaliyet-alanlarimiz') ? 'current-page':'';  ?>">
                                <a href="calisma-alanlarimiz.php"><i class="icon-tasks"></i><br />ÇALIŞMA ALANLARIMIZ</a>
                            </li>
                            <li>
                                <a href="faaliyetlerimiz.php"><i class="icon-camera"></i><br />FAALİYETLERİMİZ</a>
                            </li>

                            <li class=" <?= ($activePage == 'faydali-linkler') ? 'current-page':'';  ?>" >
                                <a href="faydali-linkler.php"><i class="icon-link"></i><br />FAYDALI LİNKLER</a>
                            </li>
                            <li class=" <?= ($activePage == 'hukuki-yazilar') ? 'current-page':'';  ?>" >
                                <a href="hukuki-yazilar.php"><i class="fa fa-balance-scale"></i><br />HUKUKİ YAZILAR</a>
                            </li>

                            <li  class=" <?= ($activePage == 'kariyer') ? 'current-page':'';  ?>">
                                <a href="kariyer.php"><i class="icon-road"></i><br />KARİYER</a>
                            </li>
                            <li class=" <?= ($activePage == 'iletisim') ? 'current-page':'';  ?>">
                                <a href="iletisim.php"><i class="icon-envelope-alt"></i><br />İLETİŞİM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>