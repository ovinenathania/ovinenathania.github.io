<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);
$menu =$menu["menu"];

$profile = json_decode($data, true);
$profile = $profile["profile"];
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    
  <style>
  *{
    margin: 0;
    padding: 0;
    font-family: Proxima Nova;
    color: #515151;
  }
  
  .bg{
    background-color:#ECEEEF;
    width: 100%;
    height: 100%;
    position: fixed;
    overscroll-behavior: none;
  }
  
  .top-header{
    background-color: #ECEEEF;
  
  }
  
  
    .sidenav {
    height: 100vh;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #FFFFFF;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 0px 15px 15px 0px;
  }
  
    .profile{
      
      width:30vh;
      height: 50vh;
        position: absolute;
      top: 40%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .profile-picture{
      object-fit: cover;
      width: 17vh;
      height: 17vh;
      border-radius: 100%;
      position: absolute;
      top: 30%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    
    .profile-name{
      font-family: Poppins;
      font-weight: bold;
       position: absolute;
       padding-top:2vh;
       top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      color: #3B5DD9;
    }
    
    .profile-title{
      position: absolute;
      top: 63%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      padding-top: 2vh;
      text-align: center;
    }
    
    
  
  .menu{
    margin-left: 2vh;
    margin-top:5vh;
  }

  .container{
    margin-left: 4vh;
    margin-right: 4vh;
    margin-bottom: 4vh;
    padding-top: 4vh ;
  }
  
  .hello{
    float:right;
    margin-right:4vh;
    margin-top:5vh;
    font-family: Poppins;
    font-weight: bold;
    color:#2D8DFF;
  }
  
  .trips{
    font-family: Poppins;
    font-weight: bold;
    color: #3B5DD9;
    font-size: 5vh;
  }
  
  .tab{
    font-family: Poppins;
    font-weight: bold;
    color: #2D8DFF;
  }
  
  }
  
  .bookings{
    overflow-y: scroll;
    height: 78vh;
    position: absolute;
    float: none;
         
  }
  
  
  .box1{
      background-color: #F8FAFA;
      width: 83vw;
      height: 20vh;
      border-radius: 15px;
      margin-top: 5vh;
  }
  
  /*.picture{*/
  /*    width: 83vw;*/
  /*    height: 12vh;*/
  /*    background-color: yellow;*/
  /*    border-radius: 15px 15px 0px 0px;*/
  /*}*/
  
  
  .foto{
    width: 83vw;
      height: 12vh;
      border-radius: 15px 15px 0px 0px;
      object-fit: cover;
  }
  
  
  .booking-title{
    margin-top: 3vw ;
    margin-left:2vh ;
  }
  
  .booking-where{
    
  }
  
  .booking-date{
    
  }
  
  
  </style>
  
  </head>
    <header>
    <div class="top-header">
        <img class="menu" src="data/menu.svg" onclick="openNav()">
        <p class="hello">Hello, <?php echo $profile["name"]?></p>
    </div>
    
    <div id="mySidenav" class="sidenav">
      <img class="menu" src="data/menu.svg" onclick="closeNav()">
      
      <div class="profile">
        <img class="profile-picture" src="data/images/<?php echo $profile["pp"]?>">
        <p class="profile-name"><?php echo $profile["name"]?></p>
        <p class="profile-title"><?php echo $profile["job"]?><br><?php echo $profile["company"]?></p>
  
    </div>
    </div>
    </header>
  
  <body>
    
    <div class="bg">
      
    
    <div class="container">
      <div class="header">
        
          <p class="trips">Trips</p>
      </div>
      
      <div class="tab">
          Upcoming
      </div>
      
      
      
      <div class="bookings">
        <?php foreach ($menu as $row): ?>
         <div class="box1" onclick=  window.location.assign("itinerary.php")>
          
         <div class="picture">
           <img class="foto" src="data/images/<?= $row["gambar"]; ?>">
         </div>
          <div class="booking-title">
            <p class="booking-where"><?= $row["company"]; ?>, <?= $row["where"]; ?> </p>
            <p class="booking-date"><?= $row["date"]; ?></p>
          </div>
          
          <?php endforeach; ?>

          
          

      </div>
      
        
    </div>
      
    </div>
   
    
    
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script
    
  </body>