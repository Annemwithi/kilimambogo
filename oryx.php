
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bolder;
  font-style: ;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}
.header .imgcontainer {
      margin-right: 20px;
    }
.header img {
      width: 100px;
      height: auto;
      object-fit: contain;
      /* Optional: Adjust positioning if needed */
    }

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

</style>
</head>
<body>

<div class="header">
  <div class="imgcontainer">
    <img src="corn8.jpeg">
  </div>
  <div class="header-right">
    <a class="active" href="#home">HOME</a>
    <a href="brands.php">OUR BRANDS</a>
    <a href="gallery.php">PRODUCT GALLERY</a>
    <a href="about.php">ABOUT</a>
    <a href="contact.php">CONTACTS</a>
    
  </div>                                                                                                                                                                  
</div>
<!-- Slider starts  here-->
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="corn25.jpg" alt="corn25" style="width:100%;">
      </div>

      <div class="item">
        <img class="d-block w-100" src="corn27.jpg" alt="corn27"style="Width:100%;" >
      </div>
    
      <div class="item">
        <img src="corn28.jpg" alt="corn28.jpg" style="width:100%;">
      </div>
    </div>
    </div>
    </div>
    </body>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</body>
</html>
<!--####################### our brands starts here-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 16px; 
  line-height: 25px;
  border-radius: 4px;
  font-weight: bold;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  font-style:comic Sans MS;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color:green;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

}

.topnav {
  overflow: hidden;
  background-color:darkorange;
}

.topnav a {
  float: left;
  color:#000000 ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: left;
  background-color:green;
  color: black;
  font-weight: bold;

}
div.gallery {
      margin: 12px;
      border: 1px solid #ccc;
      float: left;
      width:23%;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
      text-decoration-color: green;
    }
    .column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 500px;
  font-style: courier;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.column2 {
  float: left;
  width: 33%;
  padding: 10px;
  height: 200px;
  font-style: courier;
}
.row2:after {
  content: "";
  display: table;
  clear: both;
}
footer {
  text-align: center;
  background-color:black;
  color: white;
}
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=tel] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: green;
  color: black;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<center><b><h2>Our Brands</h2></b></center>
<div class="gallery">
  <a target="_blank" href="brand1.jpg">
    <img src="brand1.jpg" alt="brand1.jpg" width="600" height="400">
  </a>
  <div class="desc">ORYX PREMIUM FLOUR</div>
</div>

<div class="gallery">
  <a target="_blank" href="brand2.jpg">
    <img src="brand2.jpg" alt="brand2.jpg" width="600" height="400">
  </a>
  <div class="desc">TAHIDI GRADE1 FLOUR</div>
</div>


<div class="gallery">
  <a target="_blank" href="brand4.jpg">
    <img src="brand4.jpg" alt="brand4.jpg" width="600" height="400">
  </a>
  <div class="desc">FOUNTAIN RICE BASMATI</div>
</div>

<div class="gallery">
  <a target="_blank" href="brand3.jpg">
    <img src="brand3.jpg" alt="brand3.jpg" width="600" height="400">
  </a>
  <div class="desc">ORYX PURE MWEA PISHORI</div>
</div><br><br>


  <center><h2>Our By Products</h2></center>
</body>

<div class="row">
  <div class="column" style="background-color:white;">
    <img src="brand6.jpg"width="600" height="400">
  </div>
  <div class="column" style="background-color:white;">
    <img src="brand5.jpg"width="600" height="400">
  </div>
</div>
<div class="topnav" style="background-color:darkorange;"><br><b>ABOUT US</b><br><br></div>
<div class="row">
  <div class="column" style="background-color:white;">
    <p style="font-style:courier;"><b> ORYX Maize Meal is a major product of Kilimambogo Millers limited.</b><br>Kilimambogo Millers Limited is committed to production and distribution of food products that are safe and free from contaminants which can be harmful to the customer.</p>
    <p>The company specializes in the production of Premium quality maize meal namely(ORYX Premium maize meal) and Grade 1 sifted maize meal namely(TAHIDI Grade 1 sifted maize meal) and Other by products such as Maize Germs. </p>
  </div>
  <div class="column" style="background-color:white;">
    <img src="corn22.jpg"width="600" height="400">
  </div>
</div>
</body>
<div class="row2">
<div class="column2" style="background-color:white;">
  <center><h2>Our Mission</h2></center>
  <p>Commited to production and distribution of food products that are safe and free from contaminants which can be harmful to the consumer.</p>
</div>
<div class="column2" style="background-color:white;">
  <center><b><h2>Our Vision</h2></b></center>
  <p>To promote health and wellness through quality food products.</p>
<p></p>
</div>
<div class="column2" style="background-color:white;">
  <center><b><h2>Our Slogan</h2></b></center>
  <p>Quality in every package.</p>
</div>
</div>
<div class="topnav" style="background-color:darkorange;"><br><b>CONTACT US</b><br><br></div>
<div class="row">
  <div class="column" style="background-color:white;">
  <form action="action_page.php" method="post">
<div class="container">
    <h2>Get intouch with us</h2>
    <label for="uname"><b>Enter Name:         </b></label>
    <input type="text" placeholder="Enter Name  " name="uname" required><br><br>

    <label for="email"><b>Email Address:      </b></label>
    <input type="text" placeholder="Enter Email Address" name="email" required><br><br>
    
    <label for="email"><b>Enter Mobile Number:</b></label>
    <input type="tel" placeholder="Enter Mobile Number" name="tel" required>
    <div  class="row cf-ro">
                    <label for="message"><b>Enter  Message:</b></label>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
    <button type="submit">SUBMIT</button>
  </div>
  </div>
</form>
  </div>
  <div class="column" style="background-color:white;">
    <img src="corn21.jpg" width="600" height="500">
  </div>
</div>
<!--column2 starts here-->
<div class="row2">
<div class="column2" style="background-color:#d0f0c0;">
  <center><h2>Phone Number</h2></center>
  <center><p>+254790272858</p></center>
  <center><p>+254778556838</p></center>
</div>
<div class="column2" style="background-color:#d0f0c0;">
  <center><b><h2>Office Address</h2></b></center>
  <center><p>P.O BOX 2898-</p></center>
  <center><p>-01000,THIKA</p></center>
<p></p>
</div>
<div class="column2" style="background-color:#d0f0c0;">
  <center><b><h2>Email Address</h2></b></center>
  <center><p>kilimambogomillers@gmail.com</p></center>
</div>
</div>
<footer>
    <p>&copy;Kilimambogo Millers Ltd</p>
    <p><a href="mailto.kilimambogoillers@gmail.com">kilimambogomillers@gmail.com</a></p>
</footer>



</body>
</html>
</body>
</body>
</html>

