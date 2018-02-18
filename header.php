<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Gürbüz & Gürbüz Hukuk Bürosu</title>
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

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
                                <a href="faaliyet-alanlarimiz.php"><i class="icon-tasks"></i><br />FAALİYET ALANLARIMIZ</a>
                            </li>
                            <li>
                                <a href="etkinlikler.php"><i class="icon-camera"></i><br />ETKİNLİKLER</a>
                            </li>

                            <li class=" <?= ($activePage == 'faydali-linkler') ? 'current-page':'';  ?>" >
                                <a href="faydali-linkler.php"><i class="icon-link"></i><br />FAYDALI LİNKLER</a>
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