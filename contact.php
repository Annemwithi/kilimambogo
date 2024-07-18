<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  background-image: url("");
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


</style>
</head>
<center>
<div class="header">
<div class="imgcontainer">
    <img src="corn8.jpeg" alt="Logo">
    </div>
  <div class="header-right">
    <a href="oryx.php">HOME</a>
    <a href="brands.php">OUR BRANDS</a>
    <a href="gallery.php">PRODUCT GALLERY</a>
    <a class="active" href="contact.php">CONTACTS</a>
 <a href="about.php">ABOUT</a>
  </div>
</div>
<div class="topnav" style="background-color:darkorange;"><br><b>CONTACT US</b></><br><br></div>
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