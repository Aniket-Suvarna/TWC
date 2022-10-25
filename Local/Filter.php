<!DOCTYPE html>
<html>

<head>
    <title>
        Home
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Home.css">
    <style>
        .links:hover {
            background-color: #FF7B2E;
            border-radius: 5px;
            color: white;
            text-decoration: none;

        }

        body {
            background-color: #f0f8ff;
        }

        .donate {
            float: right;
            background-color: rgb(255, 123, 46);
            color: white;
            font-size: x-large;
            border-radius: 20px;
            padding: 10px;
        }

        table {
            border-collapse: separate;
            border-spacing: 20px;
        }

        td {
            padding: 3px;
            font-size: x-large;
        }


        input[type=text] {
            width: 100%;
            box-sizing: border-box;
            border: 3px solid rgb(255, 123, 46);
        }

        input[type=submit],
        input[type=reset] {
            background-color: rgb(44, 44, 44);
            border: none;
            color: white;
            cursor: pointer;
            width: 200px;
        }

        input[type=reset]:hover {
            background-color: #FF7B2E;
            border-radius: 5px;
            color: white;
        }

        input[type=submit]:hover {
            background-color: #FF7B2E;
            border-radius: 5px;
            color: white;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
        <div class="container-fluid ">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container-fluid">

                <li class="navbar-brand active"><a href="../Local/Home.html"><img src="../Images/logo1.png" width="160" height="60"></a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Home.html">Home</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Events.php">Events</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/News.html">News</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/gallery.html">Gallery</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Blogs_main.php">Blogs</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Shop.html">Shop</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Emergency.html">Emergency</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-brand active"><a href="../Local/Donate.php"><i class="donate links">Donate</i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-brand active"><a class="nav-link links" href="../Local/Sign_in.html">Sign In</a></li>
            </ul>
        </div>
    </nav>
    <form method="post" action="Ml_Donate.php">
        <table cellspacing="20px" , style="width: 100%;">
            <tr align="center" style="font-size: x-large;">
                <td style="background-color: rgb(255, 123, 46); height:40px; width:400px">Category <i class="bi bi-grid"></i></td>
                <td style="background-color: rgb(255, 123, 46); height:40px; width:400px">Urgency <i class="bi bi-watch"></i></td>
                <td style="background-color: rgb(255, 123, 46); height:40px; width:400px">Locality <i class="bi bi-map"></i>
                </td>

            </tr>
            </div>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="Medical">Medical </a><i class="bi bi-thermometer-half"></i>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="urgency" name="urgency" value="Immediate">Immediate <i class="bi bi-stopwatch"></i></a>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="locality" name="locality" value="Suburban">Suburban <i class="bi bi-geo-alt"></i></a>
                </td>


            </tr>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="Education">Education <i class="bi bi-book"></i></a>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="urgency" name="urgency" value="Oneweek">One Week <i class="bi bi-stopwatch"></i></a>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="locality" name="locality" value="Urban">Urban <i class="bi bi-geo-alt"></i></a>
                </td>


            </tr>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="FoodForNeed">Food For Need <i class="bi bi-minecart-loaded"></i></a>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="urgency" name="urgency" value="Twoweeks">Two Weeks <i class="bi bi-stopwatch"></i></a>
                </td>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="locality" name="locality" value="Rural">Rural <i class="bi bi-geo-alt"></i></a>
                </td>

            </tr>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="DisasterRF">Disaster RF <i class="bi bi-tsunami"></i></a>
                </td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="Women">Women <i class="bi bi-person-fill"></i></a>
                </td>
                <td style="background-color: rgb(255, 123, 46); height:40px; width:400px" align="center">Amount <i class="bi bi-cash-stack"></i></td>
                <td align="center">
                    <div class="button">
                        <input type="reset">
                    </div>
                </td>
            </tr>

            <tr>
                <td style="background-color: #8a8a8a">
                    <a><input type="radio" id="category" name="category" value="OldAge">Old Age <i class="bi bi-person-fill"></i></a>
                </td>
                <td style="background-color: rgb(255, 123, 46)">
                    <a><input type="text" id="amount" name="amount" placeholder="Enter an amount"></a>
                </td>
                <td align="center">
                    <div class="button">
                        <input type="submit">
                    </div>
                </td>
            </tr>


        </table>

    </form>
</body>

</html>