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
  display: flex;
      align-items: center;
      justify-content: space-between;
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
  font-weight: bold;
}

.header a.logo {
  font-size: 40px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: green;
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
  background-color: darkorange;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: left;
  background-color: green;
  color: black;
  font-weight: bold;
}

.dropbtn {
  background-color: orangered;
  color: black;
  padding: 14px 16px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: green;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: green;
}

footer {
  text-align: left;
  background-color: black;
  color: white;
  padding: 5px 10px;
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
  height: 450px;
  font-style: courier;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.container{
  background-color: black;
  overflow: hidden;
}
.nav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:17px;
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
    <a class="active">OUR BRANDS</a>
    <a href="gallery.php">PRODUCTS GALLERY</a>
    <a href="about.php">ABOUT</a>
    <a href="contact.php">CONTACTS</a>
  </div>
</div>

<div class="topnav">
  <a href="#about" class="split">CONSUMER PRODUCTS</a>
  <div class="dropdown">
    <button class="dropbtn">MAIZE FLOUR</button>
    <div class="dropdown-content">
      <a href="maize.php">Oryx premium flour</a>
      <a href="tahidi.php">Tahidi flour</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">KML RICE</button>
    <div class="dropdown-content">
      <a href="#">Mwea Pishori</a>
      <a href="#">Biryani</a>
    </div>
  </div> 
</div>

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



</body>
</html>