<?php

use Razorpay\Api\Api;

if (isset($_POST['total-count'])) {
  require('config.php');
  require('razorpay-php/Razorpay.php');
  session_start();
  $nm = $_SESSION['suname'];

  $uuemail = $_SESSION['suemail'];
  $uuphone = $_SESSION['suphone'];



  $api = new Api($keyId, $keySecret);

  $amt = $_COOKIE["fcookie"];


  $invoicedata = array(
    "type" => "invoice",
    "description" => "Invoice For Order",
    "customer" => array(
      "name" => $nm,
      "contact" => $uuphone,
      "email" => $uuemail
    ),
    "line_items" => [
      array(
        "name" => "Together We Create",
        "amount" => $amt * 100,
        "currency" => "INR",
      )
    ],
    "sms_notify" => 1,
    "email_notify" => 1,
    "comment" => "Please Visit Again"
  );

  $api->invoice->create($invoicedata);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Shop</title>
  <meta charset="utf-8">

  <!-- Linking styles -->
  <link rel="stylesheet" href="../CSS/Shop.css" type="text/css" media="screen">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!-- <script  src="../js/script.js"></script> -->
  <style>
    .links:hover {
      background-color: #FF7B2E;
      border-radius: 5px;
      color: white;
      text-decoration: none;

    }

    body {
      background-color: aliceblue;
    }

    .donate {
      float: right;
      background-color: rgb(255, 123, 46);
      color: white;
      font-size: x-large;
      border-radius: 20px;
      padding: 10px;
    }


    .cartinside {
      color: #FF7B2E;
      font-size: 35px;
      border-radius: 20px;
      padding: 10px;
      border: black;
      border-width: 2px;
    }
  </style>

  <!-- Linking scripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.nivo.slider.pack.js"></script>
  <script src="js/main.js"></script>

  <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
    <div class="container-fluid ">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container-fluid">

        <li class="navbar-brand active"><a href="../Sign_in/Home_Login.html"><img src="../Images/logo1.png" width="160" height="60"></a></li>

        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Home_Login.html">Home</a></li>

        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Events_login.php">Events</a></li>

        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/News_login.html">News</a></li>

        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/gallery_login.html">Gallery</a></li>

        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Blogs_main_login.php">Blogs</a></li>


        <li class="navbar-brand active"><a class="nav-link links" href="#">Shop</a></li>
        <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Emergency_login.html">Emergency</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbar-brand active"><button type="button" style="border: 0;" class="donate links" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbar-brand active"><a href="../Sign_in/Donate_login.php"><i class="donate links">Donate</i></a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="navbar-brand active"><a class="nav-link links" href="../PHP/logout.php">Sign Out</a></li>
      </ul>
    </div>
  </nav>
  <form method="post">
    <div id="main">
      <!-- Defining submain content section -->
      <section id="content">
        <!-- Defining the content section #2 -->
        <div id="left">
          <h3>Our products</h3>
          <ul>
            <li>
              <div class="img"><a href="Products_login/product1_login.html"><img alt="" src="../Images/Shopimages/1.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product1_login.html">Socks</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹165</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product1_login.html">Details</a>
                  <a href="#" data-name="Socks" data-price="165" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product2_login.html"><img alt="" src="../Images/Shopimages/2.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product2_login.html">Bag</a>
                <div class="price">
                  <span class="st">Our price:</span><strong>₹149</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product2_login.html">Details</a>
                  <a href="#" data-name="BAG" data-price="149" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product3_login.html"><img alt="" src="../Images/Shopimages/3.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product3_login.html">Pot</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹99</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product3_login.html">Details</a>
                  <a href="#" data-name="Pot" data-price="99" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product4_login.html"><img alt="" src="../Images/Shopimages/4.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product4_login.html">Diyas</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹159</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product4_login.html">Details</a>
                  <a href="#" data-name="Diyas" data-price="159" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product5_login.html"><img alt="" src="../Images/Shopimages/5.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product5_login.html">Plates</a>
                <div class="price">
                  <span class="st">Our price:</span><strong>₹249</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product5_login.html">Details</a>
                  <a href="#" data-name="Plates" data-price="249" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product6_login.html"><img alt="" src="../Images/Shopimages/6.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product6_login.html">Greeting Card</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹299</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product6_login.html">Details</a>
                  <a href="#" data-name="Card" data-price="299" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product7_login.html"><img alt="" src="../Images/Shopimages/7.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product7_login.html">Modern Art Brown Framed Canvas Painting</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹399</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product7_login.html">Details</a>
                  <a href="#" data-name="Painting" data-price="399" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product8_login.html"><img alt="" src="../Images/Shopimages/8.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product8_login.html">Handmade A5 Diary Unruled 160 Pages</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹179</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product8_login.html">Details</a>
                  <a href="#" data-name="Diary" data-price="179" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product9_login.html"><img alt="" src="../Images/Shopimages/9.2.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product9_login.html">Handmade Wood Bracelet</a>

                <div class="price">
                  <span class="st">Our price:</span><strong>₹169</strong>
                </div>
                <div class="actions">
                  <a href="Products_login/product9_login.html">Details</a>
                  <a href="#" data-name="Bracelet" data-price="169" class="add-to-cart">Add to cart</a>
                </div>
              </div>
            </li>

          </ul>
        </div>
        <div id="right">

          <h3>Top sells</h3>
          <ul>
            <li>
              <div class="img"><a href="Products_login/product4_login.html"><img alt="" src="../Images/Shopimages/4.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product4_login.html">Handmade Decorative Diyas (Pack of 4)</a>
                <div class="price">
                  <span class="special">₹159</span>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product5_login.html"><img alt="" src="../Images/Shopimages/5.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product5_login.html">Natural Dinner Plate (25 Dinner Plates)</a>
                <div class="price">
                  <span class="special">₹249</span>
                </div>
              </div>
            </li>
            <li>
              <div class="img"><a href="Products_login/product8_login.html"><img alt="" src="../Images/Shopimages/8.1.jpeg"></a></div>
              <div class="info">
                <a class="title" href="Products_login/product8_login.html">Handmade A5 Diary Unruled 160 Pages</a>
                <div class="price">
                  <span class="special">₹179</span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <b><i class="bi bi-cart-check-fill modal-title cartinside" id="exampleModalLabel">Cart</i></b>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="show-cart table">

            </table>
            <div>Total price: ₹<span class="total-cart"></span></div>
          </div>
          <div class="modal-footer">
            <button class="clear-cart btn btn-danger">Clear Cart</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="total-count" class="total-count btn btn-info" onclick="orderalert()" value="Order" />

          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    function orderalert() {
      alert("Payment Link Send To Your Registered Email");
    }


    // ************************************************
    // Shopping Cart API
    // ************************************************

    var shoppingCart = (function() {
      // =============================
      // Private methods and propeties
      // =============================
      cart = [];

      // Constructor
      function Item(name, price, count) {
        this.name = name;
        this.price = price;
        this.count = count;
      }

      // Save cart
      function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
      }

      // Load cart
      function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
      }
      if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
      }


      // =============================
      // Public methods and propeties
      // =============================
      var obj = {};

      // Add to cart
      obj.addItemToCart = function(name, price, count) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart[item].count++;
            saveCart();
            return;
          }
        }
        var item = new Item(name, price, count);
        cart.push(item);
        saveCart();
      }
      // Set count from item
      obj.setCountForItem = function(name, count) {
        for (var i in cart) {
          if (cart[i].name === name) {
            cart[i].count = count;
            break;
          }
        }
      };
      // Remove item from cart
      obj.removeItemFromCart = function(name) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart[item].count--;
            if (cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
        }
        saveCart();
      }

      // Remove all items from cart
      obj.removeItemFromCartAll = function(name) {
        for (var item in cart) {
          if (cart[item].name === name) {
            cart.splice(item, 1);
            break;
          }
        }
        saveCart();
      }

      // Clear cart
      obj.clearCart = function() {
        cart = [];
        saveCart();
      }

      // Count cart 
      obj.totalCount = function() {
        var totalCount = 0;
        for (var item in cart) {
          totalCount += cart[item].count;
        }
        return totalCount;
      }

      // Total cart
      obj.totalCart = function() {
        var totalCart = 0;
        for (var item in cart) {
          totalCart += cart[item].price * cart[item].count;
        }
        document.cookie = 'fcookie=' + totalCart;
        return Number(totalCart.toFixed(2));
      }

      // List cart
      obj.listCart = function() {
        var cartCopy = [];
        for (i in cart) {
          item = cart[i];
          itemCopy = {};
          for (p in item) {
            itemCopy[p] = item[p];

          }
          itemCopy.total = Number(item.price * item.count).toFixed(2);
          cartCopy.push(itemCopy)
        }
        return cartCopy;
      }

      // cart : Array
      // Item : Object/Class
      // addItemToCart : Function
      // removeItemFromCart : Function
      // removeItemFromCartAll : Function
      // clearCart : Function
      // countCart : Function
      // totalCart : Function
      // listCart : Function
      // saveCart : Function
      // loadCart : Function
      return obj;
    })();


    // *****************************************
    // Triggers / Events
    // ***************************************** 
    // Add item
    $('.add-to-cart').click(function(event) {
      event.preventDefault();
      var name = $(this).data('name');
      var price = Number($(this).data('price'));
      shoppingCart.addItemToCart(name, price, 1);
      displayCart();
    });

    // Clear items
    $('.clear-cart').click(function() {
      shoppingCart.clearCart();
      displayCart();
    });


    function displayCart() {
      var cartArray = shoppingCart.listCart();
      var output = "";
      for (var i in cartArray) {
        output += "<tr>" +
          "<td>" + cartArray[i].name + "</td>" +
          "<td>(" + cartArray[i].price + ")</td>" +
          "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>" +
          "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>" +
          "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>" +
          "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>" +
          " = " +
          "<td>" + cartArray[i].total + "</td>" +
          "</tr>";
      }
      $('.show-cart').html(output);
      $('.total-cart').html(shoppingCart.totalCart());
      $('.total-count').html(shoppingCart.totalCount());

    }

    // Delete item button

    $('.show-cart').on("click", ".delete-item", function(event) {
      var name = $(this).data('name')
      shoppingCart.removeItemFromCartAll(name);
      displayCart();
    })


    // -1
    $('.show-cart').on("click", ".minus-item", function(event) {
      var name = $(this).data('name')
      shoppingCart.removeItemFromCart(name);
      displayCart();
    })
    // +1
    $('.show-cart').on("click", ".plus-item", function(event) {
      var name = $(this).data('name')
      shoppingCart.addItemToCart(name);
      displayCart();
    })

    // Item count input
    $('.show-cart').on("change", ".item-count", function(event) {
      var name = $(this).data('name');
      var count = Number($(this).val());
      shoppingCart.setCountForItem(name, count);
      displayCart();
    });

    displayCart();
  </script>



</body>
<html>