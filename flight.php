<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
          margin: 0;
          padding: 0;
          font-family: Proxima Nova;
          
        }
        
        .bg{
        background-color:#E5E5E5;
        width:100%;
        height:100%;
        position:fixed;
      }
      
      .header{
        background-color:#F8FAFA;
        width:100%;
        height:8vh;
        
      }
      
      .header-content{
        padding-top:3vh;
        padding-left:2vh;
        
      }
      
      .icon{
        float:left;
      
      }
      
      .title{
        font-style: normal;
        font-weight: bold;
        color: #2D8DFF;
        float:left;
        padding-left: 4vw;
      }
       
      .isi{
        margin-top:3vh;
        margin-left:3vw;
      }
      
      .participants{
        background-color:#F8FAFA;
        width:94vw;
        height:20vh;
        margin-top:4vh;
        border-radius:7px;
        
      }
            .participants2{
              overflow-x: scroll;
              overflow-y: hidden;
              height:;
              width: 70vw;
              float: left;
            
            }
            .profile-participants{
              width:10vh;
              height:10vh;
              margin-left: 1vh;
              margin-top: 1vh;
            }
            
            .profile-photo{
              width:75%;
              height: 75%;
              border-radius: 100%;
              background-color: yellow;
              margin-left: 1.5vh;
              
            }
            
            .profile-name{
              margin-top: 1vh;
              text-align: center;
              font-weight: bold;
            }
            
            .profile-department{
              text-align: center;
              color:#8C8B8B;
            }
      
      .isi-content-title{
        padding-left:2vh;
        padding-top:2vh;
        color: #515151;
        
      }
      
      .reports{
        background-color:#F8FAFA;
        width:94vw;
        height:30vh;
        margin-top:2vh;
        border-radius:7px;
      }
      
      .ticket{
        background-color:#F8FAFA;
        width:100%;
        height:50vh;
        margin-top:2vh;
        display: grid;
        grid-template-columns: auto auto auto;
        color:#888888;
      }
      
      .grid-item{
          text-align: left;
          padding-left:3vh;
          padding-top:3vh;
      }
      
      .grid-item2{
        text-align: left;
        padding-left: 3vh;
      
        grid-column-start: 1;
        grid-column-end: 4;
      }
      
      .grid-item3{
        text-align: left;
        padding-left: 3vh;
      }
      
      .grid-item4{
       text-align: right;
       padding-right: 3vh;
       
      }
      
      .grid-item5{
        text-align:right;
        padding-right: 3vh;
        padding-top:3vh;
      }
      
      .departure-time{
        color: black;
      }
    </style>
  </head>
  
  <body>
    <div class="bg">
      <div class="container">
        <div class="header">
          <div class="header-content">
            <img class="icon" src="data/arrow-left.svg" onclick= window.location.assign("itinerary.php")>
            <p class="title">Departure</p>
          </div>
        </div>
        
        <div class="isi">
          <p class="isi-title">Flight</p>
          
          <div class="participants">
          <p class="isi-content-title">Jakarta</p>
           </div>
          </div>
        <div class="ticket">
          <div class="grid-item">Departure
            <p class="departure-time">test</p>
          </div>
          
          <div class="grid-item">Terminal
            <p class="departure-time">test</p>
          </div>
            
            
          <div class="grid-item5">Gate
            <p class="departure-time">test</p>
          </div>
            
            
          <div class="grid-item">Arrival
            <p class="departure-time">test</p></div>
            
          <div class="grid-item">Terminal
            <p class="departure-time">test</p></div>
            
          <div class="grid-item5">Gate
            <p class="departure-time">test</p></div>
            
          <div class="grid-item2">Flight Duration
            <p class="departure-time">test</p></div>
          
          <div class="grid-item3">Passenger
            <p class="departure-time">test</p></div>
          <div class="grid-item3"></div>
          
          <div class="grid-item4">Seat
            <p class="departure-time">test</p>
          </div>
          
        </div>
         
        
      
        
       

    
    
  </body>
  
  
</html>