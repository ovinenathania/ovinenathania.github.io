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
              /*overflow-x: scroll;*/
              /*overflow-y: hidden;*/
              
              float: left;
            
            }
            .profile-participants{
              width:10vh;
              height:10vh;
              margin-left: 1vh;
              margin-top: 1vh;
           
              float:left;
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
      
      .notes{
        background-color:#F8FAFA;
        width:94vw;
        height:30vh;
        margin-top:2vh;
        border-radius:7px;
      }
    </style>
  </head>
  
  <body>
    <div class="bg">
      <div class="container">
        <div class="header">
          <div class="header-content">
            <img class="icon" src="data/arrow-left.svg" onclick= window.location.assign("itinerary.php")>
            <p class="title">Meetings</p>
          </div>
        </div>
        
        <div class="isi">
          <p class="isi-title">Discussion Topic</p>
          
          <div class="participants">
          <p class="isi-content-title">Participants</p>
          
          <div class="participants2">
          <div class="profile-participants">
            <div class="profile-photo"></div>
            <p class="profile-name">Adam</p>
            <p class="profile-department">Manager</p>
            
                 
          </div>
          
      
          
          </div>
          </div>
          <div class="reports">
          <p class="isi-content-title">Reports</p>
          </div>
          
          <div class="notes">
          <p class="isi-content-title">Notes</p>
          </div>
        </div>
        
      
        
        <div class=""
      </div>
    </div>
    
  </body>
  
  
</html>