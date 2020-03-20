<html>
  <head>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    
    <style>
    *{
      margin:0;
      padding:0;
      font-family: Proxima Nova;
    }
      .bg{
        background-color:#E5E5E5;
        width:100%;
        height:100%;
        position:fixed;
      }
      .container{
        margin-left: 9vw;
        margin-right: 9vw;
      }
      
      .tempat{
        font-family: Proxima Nova;
        font-style: normal;
        font-weight: bold;
        font-size: 9vw;
        color: #3B5DD9;
      }
      
      .icon{
        margin-top:4vh;
        
      }
      
      .tempat{
        margin-top:5vh;
        line-height: 98%;
      }
      
      .tanggal{
        margin-top: 2vh;
      }
      
      .box1{
        background-color:#F8FAFA;
        width:82vw;
        height: 10vh;
        border-radius: 7px;
        margin-top:5vh;
  
      }
      
       .box2{
        background-color:#F8FAFA;
        width:82vw;
        height: 20vh;
        border-radius: 7px;
        margin-top:2vh;
  
      }
      
      .box-header{
        padding-top: 2vh;
        padding-left:2vw;
        
      }
      
      .time{
        font-family: 'Nunito';
        font-weight: bold;
        color: #888888;
        float:right;
        margin-right:4vw;
      }
      
      .box-content{
        margin-left:2vw;
      }
      
      .button{
        float:right;
        background: #3B5DD9;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
        border-radius: 100%;
        padding:1vh;
        margin-top:49vh;
        margin-left:70vw;
        position: fixed;
      }
    </style>
  </head>
  <body>
  <div class="bg">
    <div class="container">
      
    
      <div class="header">
        
            <img class="icon" src="data/arrow-left.svg" onclick= location.assign("home.php")>
            <p class="tempat">ABC Company, Hongkong</p>
            <p class="tanggal">5th-8th January</p>
            
      </div>
      
      <div class="slider">
        
        
      </div>
      
      <div class="itinerary">
        
         <div class="box1" onclick=location.replace("flight.php")>
          <div class="box-header" >
            <img src="data/flight.svg">
               Departure
               
            <div class="time">
              06:00AM
            </div>
            
          </div>
          <div class="box-content">
              Jakarta-Hongkong
            </div>
          </div>
            
            
            
          <div class="box2" onclick=location.replace("meeting.php")>
            <div class="box-header">
              <img src="data/briefcase.svg" >
                 Meeting
                 
              <div class="time">
                01:00PM
              </div>
            </div>
            
            <div class="box-content">
              ABC Company
            </div>
            
         
          </div>
          
        </div>
      
      <button class="button"><img src="data/plus.svg"></button>
      
  
  </body>
</html>