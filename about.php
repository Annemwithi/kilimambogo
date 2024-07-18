<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  background-color:white;

}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f1f1f1;
      padding: 10px 20px;
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


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 16px; 
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold ;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
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
footer {
  text-align: center;
  background-color:black;
  color: white;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 450px;
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
.column3 {
  float: left;
  width: 25%;
  padding: 5px;
  height: 350px;
  font-style: courier;
  color:white;

}
.row3:after {
  content: "";
  display: table;
  clear: both;
}
.h2{color: green;

}
</style>
</head>
<body> 
<div class="header">
<div class="imgcontainer">
    <img src="corn8.jpeg" alt="Logo">
  </div>
  <div class="header-right">
    <a href="oryx.php">HOME</a>
    <a href="brands.php">OUR BRANDS</a>
    <a href="gallery.php">PRODUCTS GALLERY</a>
    <a href="contact.php">CONTACTS</a>
 <a  class="active"href="about.php">ABOUT</a>
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
<div class="row3">
<div class="column3" style="background-color:green;">
  <center><h2>Useful Links</h2></center>
  
</div>
<div class="column3" style="background-color:green;">
  <b><h2>Reach Out</h2></b>
  <p>Call Us</p>
  <p>+254790272858</p>
<p></p>
</div>

<div class="column3" style="background-color:green;">
  <b><h2 style="font-color:black;">Follow Us</h2></b>
  <p>Facebook</p>
  <p>Instagram</p>
  <p>Twitter</p>
<p></p>
</div>
<div class="column3" style="background-color:green;">
  <b><h2>About KML</h2></b>
  <p>Kilimambogo Millers Limited is committed to production and distribution of food products that are free from contaminants and of good quality!</p>
  <p>Quality you can taste!</p>
</div>
</div>
<footer>
<p>&copy;Kilimambogo Millers Ltd</p>
    <p><a href="mailto.kilimambogoillers@gmail.com">kilimambogomillers@gmail.com</a></p>
</footer>