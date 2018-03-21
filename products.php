<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/loginstyle.css">
  <title>Add Product</title>

  <script>
    function validateForm() {
      var name = document.forms["addproduct"]["name"].value;
      if (name == "") {
        alert("What is the name of the product?");
        return false;
      }
      var cat = document.forms["addproduct"]["category"].value;
      if (cat == "") {
        alert("Please select a category");
        return false;
      }
      var brand = document.forms["addproduct"]["brand"].value;
      if (brand == "") {
        alert("Please add a brand");
        return false;
      }
      var price = document.forms["addproduct"]["price"].value;
      if (price == "") {
        alert("Please add a price");
        return false;
      }
      var desc = document.forms["addproduct"]["description"].value;
      if (desc == "") {
        alert("Please add a description");
        return false;
      }
      var kw = document.forms["addproduct"]["keywords"].value;
      if (kw == "") {
        alert("Please enter at least 1 keyword");
        return false;
      }
    }
  </script>
</head>
<body>
<?php
require_once("../unsecure/processunsecure.php");
?>
  <div class="header">
    <img src="../img/snack.jpg" alt="Doritos" style="width:inherit; height:inherit;">
  </div>

  <div class="menu">
    <a class = "active" href = "../index.php">Home</a>
    <a href = "#"> Product</a>
    <a href = "#"> Cart</a>
    <a href ="#">Contact </a>
    <div class="searchbar">
      <input type="text" placeholder="We can help you find it!" name="searchbar">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    <a href = "#"> Account</a>
    <a href = "../pages/signup.php"> Sign Up</a>
  </div>


  
    <div class="breadcrumbs">
      <p>Welcome, admin!</p>
      <a href="../pages/cart.php">
        <img src="../img/shopping_cart.png" alt="Cart">
      </a>

    
    </div>

    <!-- Beginning of the form to add a product -->
    <div class="container">
      <form id = "contact" name="addproduct" method="POST" enctype="multipart/form-data" >
        <fieldset>
          <legend>ADD NEW PRODUCT</legend>
        </fieldset>
          <fieldset>
                    <label for="pimage" >Add Image</label>
                      <input id="pimage" name="pimage" class="input-file" type="file">
                  </fieldset>

              <fieldset> 
                <label for="pname">Product Name</label>  
                  <input id="pname" name="pname" placeholder="Name" class="form-control" required="" type="text">
              </fieldset>

              <fieldset>
                  <label for="pprice">Price GHS</label>
                    <input id="pprice" name="pprice" placeholder="Price" class="form-control .col-lg-*" required="" type="number">
                </fieldset>

               <fieldset>
                  <label for="pprice">Description</label>
                    <textarea id="pdesc" name="pdesc" placeholder="Description" class="form-control .col-lg" required="" type="text"></textarea>
                </fieldset>

                <fieldset>
                  <label for="pkeywords">Keywords</label>
                    <input id="pkeywords" type="text" placeholder="Keyword" class="form-control input-md" name="pkeywords">
                </fieldset>
                  
             <fieldset>
                <label for="pcategory">Category</label>
                  <select id="pcategory" name="pcategory" class="form-control input-md">
                   <option> <?php loadallcategories(); ?></option>
                  </select>
              </fieldset>

                <fieldset>
                  <label for="pbrand">Brand</label>
                    <select id="pbrand" name="pbrand" class="form-control input-md">
                     <option><?php loadallbrands(); ?> </option>
                    </select>
                </fieldset>

                <fieldset>
                    <label class="col-md-4 control-label"></label>
                      <button id="submit" name="submit" class="btn btn-primary" onsubmit="return validateAddProduct()">Add</button>
                 </fieldset>

</form>
</div>


<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">A2Art &#169; 2018</p>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>


</html>
