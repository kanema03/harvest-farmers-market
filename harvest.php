<!DOCTYPE html>
<html lan>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
*{
                box-sizing: border-box;
}
   
 body {
         font-family: Arial, helvetica, sans-serif;
         padding: 10px;
         background: rgb(36, 32, 32);
         width:100%;
         max-width: 960;
         margin: 0 ;
         text-decoration:none;
 }
 .mobile-container{
        max-width:480;
        margin: auto;
        background-color:black;
        color: white;
        border-radius :10px;

 }
 .header {
         padding: 30px;
         text-align: center;
         background: white;
         width:100%;
         max-width: 960;
         padding: 20px;
         background-image: url("image/front pro b.jpg");
         background-size: cover;
         background-attachment: fixed;
         margin-top: 20px;
         animation-name: header;
         
 }

 .header h1 {
         font-size: 50px;
         
 }

 .topnav {
         overflow: hidden;
         background-color: green;
         

 }

.topnav a {
        float: left;
        display: block;
        color:white;
        font-size: 20px;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
}
.topnav a:hover {
        background-color:rgb(104, 87, 211);
        color: rgb(31, 2, 2);
}
.topnav a.active{
        background-color:black;
        color:white;
}
.topnav .search-container button{
        float: left;
        padding:6px;
        margin-top:8px;
        margin-left:16px;
        background: white;
        font-size:17px;
        border:non;
        cursor: pointer;       
}
.topnav .search-container button:hover{
        background:rgb(104, 87, 211);
} 
.topnav input[type=text]{
        padding:6px;
        margin-top:8px;
        font-size:17px;
        border:1px solid #css;
}
.leftcolumn {
        float: left;
        width: 75%;
}

.rightcolumn {
        float: left;
        width: 25%;
        background-color: #f1f1f1;
        padding-left: 20px;
}

.ykimg {
        background-color: #aaa;
        width: 20px;
}

.card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
}

.row:after {
        content: "";
        display: table;
        clear: both;

}

.footer {
        padding: 20px;
        text-align: center;
        margin-top: 20px;
        color: whitesmoke;;
        background-color:rgba(17, 16, 16, 0.8);
        
       
}



@media screen and (max-width: 800px)
{
        .leftcolumn, .rightcolumn {
                width: 100%;
                padding: 0;
        }
}
@media screen and (max-width: 400px)
{        
        .topnav a {
                float; none;
                width: 100%;
        }
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
input{ background-color: rgb(252, 236, 236); color: rgb(7, 6, 6);

}
legend{
    text-align: center;

}
fieldset{
    display: inline-block;
    align-content: center;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
img{ 
       
        
         background: tomato;
         
         max-width: 960;
         margin: 0 ;
         text-decoration:none;
        
       

}
#myBtn:hover {
  background-color: green;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: red;
}
.jay{
        padding: 30px;
         text-align: center;
         background: white;
         width:100%;
         max-width: 960;
         padding: 20px;
         background-image: url("image/k.jpg");
         background-size: cover;
         background-attachment: fixed;
         margin-top: 20px;
}
        

.button:hover {background-color: #3e8e41}

.button:active {
  box-shadow: green;
  transform: translateY(4px);
}
H1{
  font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
  font-size: 41px; 
  float: center;
  color: rgb(19, 18, 18);
  animation-name: example;
  animation-duration: 60s ;
  position: relative;
  animation-duration: 20s ;
  position: relative;
  animation-iteration-count: 300;
}

@keyframes example {
  from {color: rgb(226, 31, 31);}
  to {color: rgb(12, 129, 12)}
  from {left: 0px;}
  to {left: 100px;}
  
}
@keyframes b {
 
  from {left: 0px;}
  to {left: 700px;}
  
}
</style>
</head>
<body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script> 

var mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>

 <div class="topnav">

      
        <a  href="home page.php"style="float:right">Log Out</a>       
        <a href="help.html"style="float:right">Help</a>
        <a href="services.html"style="float:right">Services</a>
        <a href="contact us.html"style="float:right">Contact Us</a>
        <a  href="posts.html"style="float:right">Posts</a>
        <a href="settings page.html"style="float:right">
        <img src="image/settings.jpg" width="50px" height="30px"></a>
        <a href="harvest.php" style="float:right">
        <img src="image/home.png" width="50px" height="30px"></a>
        <a  href="harvest.php"style="float:left">
        <img src="image/F M.jpg" width="50px" height="35px"></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
        <div  class="search-container button">
               <form action="">
                       <input class="active" type="text"
                       placeholder="search.." name="search">
                       <button class="button"
                       type="submit">
                       <img src="image/search.png" width="35px" height="20px">
                      </button>
              </form>
</div>     
</div>
</div>

<div class="header">
<br>
        <br>
           <br>
            <br>
              <br>
               <br>
                 <br>
                   <br>
                     <br>
                     <br>
                  <br>
                <br>
               <br>
             <br>
           <br>
         <br>
        <br>
</div>
<div class="card">

    <h1>
            <b>
                    <center>
                            <h1>
                                    <u>

                                    </u>WELCOME TO HARVEST FARMERS MARKET</u>
                                </h1>
                        </center>
                </b>
        </h1>
      <img src="image/H.jpg" width="650px" height="400px"> 
      <img src="image/I.jpg" width="600px" height="400px">
 <hr>
</meta>
</div>

    <div class="card">
                    
        <<div class="jay">
                       <br>
                       <br>
                      <br>
                     <br>
                   <br>
                 <br>
               <br>
             <br>
                  
                     <br>
                       <br>
                      <br>
                     <br>
                   <br>
                 <br>
               <br>
             <br>
</div>            
        <i>
                <b>
                        <center>
                                <h3>overview</h3>
                        </center>
                </i>
        </b>
                        <div class="ykimg"></div>
                        <i>
                                <h3>
                                        <p>harvest farmers market is a platform designed to promot local farmers while presenting 
                            
                        
                        the  consumer with the freshed farm products like milk, vegetables, fruits and more this platform
                     
                        focus more on the idealogy of local is laka, by exposing the local farmers, their services and products to a larger audience.
                         <br>
                       </h3>
                          </i>
                           </p>
                                 <hr>             
        </div>

        <div class="card">

        <i><b><center><h3>community</h3></center></i></b>
        <h4>we have a huge community harvest farmers market welocmes all kinds of people  we a market of all race and religion we have a huge community, harvest farmers market welocmes all kinds of people both farmers and consumers here we have something for everyone both farmers and consumers alike  
            we as a platform  allow farmers to advertise there goods and products. There is a saying which states that together we can, harvest farmers market promots farmers of all kinds of farming</h4>
            <img src="image/com d.jpg" width="400px" height="300px"> 
            <img src="image/com b.jpg" width="400px" height="300px">
            <left><h4>this is mary a christian black woman whos using our website to market
                    <br> her products, mary is a small scale farmer. Mary is 22 years of age who
                    <br>
                    decied to  venture in farming of graps shes a young enterprinure who is empowering
                    <bR> 
                    her self though farming
</h4> <hr>
        </div>

        <div class="card">
                <center><h2>Popular post</h2></center>
                
        
            <img src="image/I.jpg"width="400px" height="300px">
              &nbsp;
                &nbsp;
                  &nbsp;
                     &nbsp;
                     <img src="image/D.jpg"width="400px" height="300px">
                       &nbsp;
                    &nbsp;
                  <img src="image/F.jpg"width="400px" height="300px">
               <hr> 
           </div>
        <div class="card">
       <center>
         <H2>MORE Popular posts</H2>
        </center>
 <img src="image/E.jpg"width="400px" height="300px">
     &nbsp;
       <img src="image/F.jpg"width="400px" height="300px">
           &nbsp;
             <img src="image/G.jpg"width="400px" height="300px">
                 <br>
                   <img src="image/H.jpg"width="400px" height="300px">
                        &nbsp;
                           <img src="image/I.jpg"width="400px" height="300px">
                         &nbsp;
                      <img src="image/k.jpg"width="400px" height="300px">
                    <BR> 
                  <hr>
            </div>
    <div class="card">
    <i><b><center><h3>About us</h32></center></i>
           <br>
               <br>
                  <br>
                    <br>
                  <br>
            <br>

        <img src="image/about us.jpg" width="650px" height="400px">
           &nbsp;
              &nbsp;
                 &nbsp;
                      &nbsp;<img src="image/com f.jpg" width="600px" height="400px">
                        <br>
                       <br>
                     <br>
                    <br>
                  <br>
                <br>
             <br>
          <br>
        <I>
         <i>
                 <h3>
                         <p>
                                 <b>harvest farmers market is a business platform that welcome everyone, farmers and consumers from diffrent 
                    
                    backgrounds.We as harvest farmers market fous on helping the agriculture sector by  promoting local farmers through a simple  platform easy to understand where they 
                                         
                        can advertise there goods and products which will enable them to reach a larger scop of concusmers. harvest farmers market is more than just an advising platform
                         we also offer services to farmers new to the industry on how best the can start, the methods and the products the will need for more information chick on services
                          to see what we offer  
                    </i>
                </h3>
                <br>
             <br> 
          </b>
              <i>
                 </p>
              </h2>
           <hr>                       
      </div>

      <div class="footer">
 
   
 <center><h6>
          <i>follow us</h6>
           
           </i>
 </center>
 <br>
 <p></p>
<p align="center">
         <a class="active"href="https://www.linkedin.com"> 
           <img src="image/linkedin.png" alt="avatar" class="avatar" width="40px" height="30px">
           </a>
               &nbsp;
                 &nbsp;
                   &nbsp;
                     &nbsp;
                       <a  class="active"href="https://twitter.com/?lang=en">
                       <img src="image/twitter.png" alt="avatar" class="avatar" width="40px" height="30px"></a>
                     &nbsp;
                   &nbsp;
                  &nbsp;
               &nbsp;
         <a class="active" href="https://mail.google.com/mail/u/0/#inbox">
       <img src="image/gmail.png" alt="avatar" class="avatar" width="40px" height="30px"></a>
       &nbsp;
      &nbsp;
    &nbsp;
   &nbsp;
 <a  class="active" href="https://web.facebook.com/?_rdc=1&_rdr">
<img src="image/facebook.png" alt="avatar" class="avatar" width="40px" height="30px"></a>
         
           
</div>
</body>

      
</html>