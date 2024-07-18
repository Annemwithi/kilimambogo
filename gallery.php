<!DOCTYPE html>
<html>
<head>
<style>
    * {box-sizing: border-box;}

    body { 
      margin: 0;
      font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .header {
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
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
      margin-right: 10px;
    }

    .header a.logo {
      font-size: 25px;
      font-weight: bolder;
    }

    .header a:hover {
      background-color: #ddd;
      color: black;
    }

    .header a.active {
      background-color: green;
      color: white;
    }

    @media screen and (max-width: 500px) {
      .header {
        flex-direction: column;
        align-items: flex-start;
      }

      .header a {
        display: block;
        text-align: left;
        margin: 5px 0;
      }
    }

    div.gallery {
      margin: 15px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
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
    }
</style>
</head>
<body>

<div class="header">
  <div class="imgcontainer">
    <img src="corn8.jpeg" alt="Logo">
  </div>
  <div>
    <a href="oryx.php">HOME</a>
    <a href="brands.php">OUR BRANDS</a>
    <a class="active" href="brands.php">PRODUCT GALLERY</a>
    <a href="about.php">ABOUT</a>
    <a href="contact.php">CONTACTS</a>
  </div>                                                                                                                                                                  
</div>

<div class="gallery">
  <a target="_blank" href="corn12.jpg">
    <img src="corn12.jpg" alt="corn12.jpg" width="600" height="400">
  </a>
  <div class="desc">ORYX Premium flour 1kg</div>
</div>

<div class="gallery">
  <a target="_blank" href="corn13.jpg">
    <img src="corn13.jpg" alt="corn13.jpg" width="600" height="400">
  </a>
  <div class="desc">ORYX Premium flour 2kg</div>
</div>

<div class="gallery">
  <a target="_blank" href="corn14.jpg">
    <img src="corn14.jpg" alt="corn14.jpg" width="600" height="400">
  </a>
  <div class="desc">TAHIDI sifted maize flour 1kg</div>
</div>

<div class="gallery">
  <a target="_blank" href="corn15.jpg">
    <img src="corn15.jpg" alt="corn15.jpg" width="600" height="400">
  </a>
  <div class="desc">TAHIDI sifted maize flour 2kg</div>
</div>

<div class="gallery">
  <a target="_blank" href="corn20.jpg">
    <img src="corn20.jpg" alt="corn20.jpg" width="600" height="400">
  </a>
  <div class="desc">ORYX Premium flour 5kg</div>
</div>

</body>
</html>
