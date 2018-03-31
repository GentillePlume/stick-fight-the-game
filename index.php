<!DOCTYPE html>
<html>

<head>
    <title>Stick Fight: the game</title>

    <meta charset="utf-8">

    <!--########## STYLES SHEETS ##########-->

    <!--TOOLS & RESSOURCES-->
    <link href="resources/animate.css/animate.css" rel="stylesheet">
    <link href="resources/fonts/fonts.css" rel="stylesheet">

    <!--GENERAL PROPERTIES-->
    <link href="styles/general.css" rel="stylesheet">

    <!--HEADER-->
    <link rel="stylesheet" type="text/css" href="styles/header/desktop.css">
    
    <!--NAVIGATION BAR-->
    <link rel="stylesheet" type="text/css" href="styles/navbar/desktop.css">
    
    <!--THE GAME-->
    <link rel="stylesheet" type="text/css" href="styles/thegame/desktop.css">
    
    <!--STATS-->
    <link rel="stylesheet" type="text/css" href="styles/stats/desktop.css">

</head>

<!--####################################################################################################-->

<body>
    
        <!--########## ELEMENTS ##########-->
        
        <!--HEADER-->
        <?php include 'elements/header.html'?>
        
        <!--NAVBAR-->
        <?php include 'elements/navbar.html'?>
        
        <!--THEGAME-->
        <?php include 'elements/thegame.html'?>
        
        <!--STATS-->
        <?php include 'elements/stats.html'?>

    <!--########## SCRIPTS ##########-->

    <!--RESOURCES-->
    <script src="resources/jquery-3.3.1.js"></script>
    <script src="resources/typed.js/lib/typed.js"></script>

    <!--OTHER SCRIPTS-->
    <script src="scripts/navbar.js"></script>
    <script src="scripts/typedtext.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/vidvol.js"></script>

</body>

</html>