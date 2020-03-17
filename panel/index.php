<?php   
include_once("include/kontrol.php")


 ?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Teknik Servis</title>
	<link rel="stylesheet" href="bootstrap/css/all.css"  crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="author" content="teknik servis">
    <meta name="copyright" content="teknik servis">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700|Staatliches');

body {
    font-family: 'Lato', sans-serif;
    font-weight: 200;
    color: #707070;
    margin: 0 auto;
    height: 100vh;
    width: 100%;
    background: linear-gradient(180deg, #C92D08, #D86F37);
}

/*-----Typography-------*/

h1 {
    font-weight: 900;
  text-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
}

h4.player-name {
    font-weight: 300;
    text-transform: uppercase;
}

h1[class |=player-score] {
    font-family: 'Staatliches', cursive;
    font-size: 8em;
    color: #333;
}

.player-name {
    color: #707070;
}

/*-----------------Buttons-------------*/

button {
    height: 48px;
    padding: 10px 20px;
    border-radius: 40px;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    color: #707070;
    font-weight: 300;
    min-width: 150px;
    font-size: 1em;
    border: none;
    display: block;
    text-align: center;
    -webkit-transition: all 0.25s;
    -o-transition: all 0.25s;
    transition: all 0.25s;
    ;
}

button:hover {
    transform: translateY(1px);
    background: #fafafa;
    height: 46px;
}

button i {
    color: #FA9965;
    margin-right: 5px;
}

button.reset {
    position: absolute;
    left: 40px;
    top: 30px;
}

button.rollDice {
    position: absolute;
    left: 44%;
    right: 50%;
    bottom: 160px;
}

button.Hold {
    position: absolute;
    left: 44%;
    right: 50%;
    bottom: 65px;
}

#dice img {
    position: absolute;
    top: 100px;
    left: 45%;
    height: 150px;
    width: 150px;
    box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.20);
    border-radius: 15px;
    overflow: hidden;
}

/*-----------------container-------------*/
.wrapper {
    position: relative;
    width: 90%;
    height: 80%;
    border-radius: 5px;
    margin: 5% auto;
    background: white;
    box-shadow: 0px 0px 90px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.container {
    display: grid;
    grid-template-columns: 50% 50%;
    height: 100%;

}
.container i {
	font-size: 260px;

    margin-left: 72px;
}
.kutu {text-decoration: none;color: #f98364;}
.kutu:hover {color: #f98364;}
/*------------Player panel--------*/
[class|=player-panel] {
    text-align: center;
    display: grid;
    grid-template-rows: auto;
    grid-row-gap: 10px;
    padding-top: 100px;
}

/*-------PLAYER SCORE-------*/

[class^=player-score] {
    margin-top: -60px;
    text-shadow: 0px 3px 6px rgba(0, 0, 0, 0.15);
}

/*---------score block-----------*/
.score-block {
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 45px;
    border: 1px solid #eee;
    margin: auto;
    margin-top: -70px;
    bottom: 20px;
    padding: auto;
    text-align: center;
}

.score-block > span {
    position: relative;
    top: 20px;
    color: #707070;
}

[class^=current-score] {
    position: relative;
    top: -20px;
    font-size: 3em;
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    color: #333;
}

/*-----------Player background-------------*/

.current-player {

    background: linear-gradient(180deg, #FA9965, #F86363);
}

.current-player > h1,
h2,
h3,
h4,
h5,
h6 {
    color: #fff;
}

.current-player > .player-name {
    color: #FA9965;
    background: #fff;
    padding: 10px;
    border-radius: 40px;
    box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.15);
    width: 20%;
    margin: auto;
}

.current-player > .score-block {
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.20);
}

.current-player > .score-block > span {
    color: #fff;
}

.current-player > .score-block > [class^="current-score"] {
    color: #fff;
    font-weight: 600;
}
.kapat {
    margin: 0;
    position: relative;
    left: 46%;
    top: 75px;
}
.kapata {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
    font-weight: 900;
}

    </style>

</head>
<body>
     <a href="?admin_oturum=kapat" class="kapata"><p class="kapat">OTURUM KAPAT</p></a>   
<div class="wrapper">
     

 

        <div class="container">


            <!---------------Player1--------------------->
           <a href="form.php" class="kutu">
            <div class="player-panel-1 current-player">

                <h1>ÜRÜN EKLE</h1>
                <i style="color: #fff;" class="fas fa-user-tag"></i>

            </div>
            </a>
           
            <!---------------Player2--------------------->
           <a href="search.php" class="kutu">
            <div class="player-panel-2">
                <h1>ÜRÜN DURUMU</h1>

                <i style="color: #f87b63;font-size: 284px;" class="fas fa-users-cog"></i>

            </div>
        </a>
            </div>
      
       
        </div>

	
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
</html>