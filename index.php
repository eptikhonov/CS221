<?php

    $servername = "localhost";
    $username = "root";
    $password = "password";
    $database_name = 'WorldStats';

    $conn = mysqli_connect($servername, $username, $password, $database_name);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/favicon.ico">
    <title>WorldStats</title>
    <meta name="description" content="Become more knowledgable of the world around you.">

    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <span class="fas fa-globe-americas">&nbsp;</span>
            <a class="navbar-brand" href="#">WorldStats</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="row" id="content">
        <div class="col-md-offset-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                Total Countries:
                <?php
                    $query = 'SELECT count(*) AS "Total" FROM countries_of_the_world';
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    echo $row['Total'];
                ?>
                <br>
                <br>
                Rank Country By:
                <form class="formLinks" action="index.php" method="post">
                    <li><a href="index.php?rankby=Population" name="rankby">Population</a></li>
                    <li><a href="index.php?rankby=Area_sq_mi" name="rankby">Area (sq. mi.)</a></li>
                    <li><a href="index.php?rankby=Pop_Density_per_sq_mi" name="rankby">Pop. Density (per sq.
                            mi.)</a></li>
                    <li><a href="index.php?rankby=Net_Migration" name="rankby">Net
                            migration</a></li>
                    <li><a href="index.php?rankby=Infant_mortality_per_1000_births" name="rankby">Infant
                            mortality (per 1000 births)</a></li>
                    <li><a href="index.php?rankby=GDP_per_capita" name="rankby">GDP
                            ($ per capita)</a></li>
                    <li><a href="index.php?rankby=Literacy" name="rankby">Literacy
                            (%)</a></li>
                    <li><a href="index.php?rankby=Phones_per_1000" name="rankby">Phones
                            (per 1000)</a></li>
                    <li><a href="index.php?rankby=Arable" name="rankby">Arable
                            (%)</a></li>
                    <li><a href="index.php?rankby=Crops" name="rankby">Crops
                            (%)</a></li>
                    <li><a href="index.php?rankby=Birth_Rate" name="rankby">Birth Rate</a></li>
                    <li><a href="index.php?rankby=Death_Rate" name="rankby">Death Rate</a></li>
                    <li><a href="index.php?rankby=Agriculture" name="rankby">Agriculture</a></li>
                    <li><a href="index.php?rankby=Industry" name="rankby">Industry</a></li>
                    <li><a href="index.php?rankby=Service" name="rankby">Service</a></li>
                </form>
                <br>
                <br>
                Continent Info:
                <form class="formLinks" action="index.php" method="post">
                    <li><a href="index.php?continent=1" name="continent">North America</a></li>
                    <li><a href="index.php?continent=2" name="continent">South America</a></li>
                    <li><a href="index.php?continent=3" name="continent">Africa</a></li>
                    <li><a href="index.php?continent=4" name="continent">Europe</a></li>
                    <li><a href="index.php?continent=5" name="continent">Asia</a></li>
                    <li><a href="index.php?continent=6" name="continent">Australia</a></li>
                    <li><a href="index.php?continent=7" name="continent">Antarctica</a></li>
                </form>
            </div>
        </div>
        <div class="col" stye="height: 10px;">
            <div class="page-header">
                <h1>
                    <span class="fas fa-globe-americas"></span>
                    WorldStats
                    <small class="text-muted" style="font-size: 18px">
                        Become more knowledgable of the world around you
                    </small>
                </h1>
            </div>
            <hr>
            <div class="container">
                Enter a country in the search bar below to get information on that specific country. Or click on a
                topic in the list on the left to show worldwide rankings based off of that topic.
                <br>
                <br>
                <form class="form-inline my-2 my-lg-0" action="index.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Enter Country"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="searchButton" type="submit">Search</button>
                </form>
                <hr>
                <?php
                $selected_rankby = $_GET['rankby'];
                $selected_continent = $_GET['continent'];

                // rank countries by link categories
                if (isset($selected_rankby)) {
                    echo '<b>Rankings</b>';
                    $query = 'SELECT Country FROM countries_of_the_world ORDER BY ' . $selected_rankby . ' DESC';
                    $result = mysqli_query($conn, $query);
                    echo '<ol>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row["Country"] . '</li>';
                    }
                    echo '</ol>';
                }

                // get country's information by search
                if (isset($_POST["search"])) {
                    $entered_search = $_POST["search"];

                    // TODO: check if country is in the database, if not then display message
                    //if ()
                    //$query = 'SELECT result AS IF ("United States" IN (SELECT Country FROM countries_of_the_world), true, false)';
                    //$result = mysqli_query($conn, $query);
                    //$row = mysqli_fetch_assoc($result);
                    //echo '"' . $entered_search . '" is not in our database.';
                    //echo $row[0] . 'e';

                    $query = 'SELECT * FROM countries_of_the_world WHERE Country = "' . $entered_search . '"';
                    $result = mysqli_query($conn, $query);

                    echo '<ul>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li> Country:<b> ' . $row["Country"] . '</b></li>';
                        echo '<li> Population: ' . $row["Population"] . '</li>';
                        echo '<li> Pop. Density (per sq. mi.): ' . $row["Pop_Density_per_sq_mi"] . '</li>';
                        echo '<li> Net migration: ' . $row["Net_Migration"] . '</li>';
                        echo '<li> Infant mortality (per 1000 births): ' . $row["Infant_mortality_per_1000_births"] . '</li>';
                        echo '<li> GDP ($ per capita): ' . $row["GDP_per_capita"] . '</li>';
                        echo '<li> Literacy (%): ' . $row["Literacy"] . '</li>';
                        echo '<li> Phones (per 1000): ' . $row["Phones_per_1000"] . '</li>';
                        echo '<li> Arable (%): ' . $row["Arable"] . '</li>';
                        echo '<li> Crops (%): ' . $row["Crops"] . '</li>';
                        echo '<li> Birth Rate: ' . $row["Birth_Rate"] . '</li>';
                        echo '<li> Death Rate: ' . $row["Death_Rate"] . '</li>';
                        echo '<li> Agriculture: ' . $row["Agriculture"] . '</li>';
                        echo '<li> Industry: ' . $row["Industry"] . '</li>';
                        echo '<li> Service: ' . $row["Service"] . '</li>';

                    }
                    echo '</ul>';
                }

                // get all countries in the continent and the continent's information
                if (isset($selected_continent)) {

                    $query = 'SELECT * FROM continents_of_the_world WHERE ID = ' . $selected_continent;
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);

                    echo '<ul>';
                    echo '<li> Continent: <b>' . $row["Continent"] . '</b></li>';
                    echo '<li> Population: ' . $row["Population"] . '</li>';
                    echo '<li> Area (sq. mi.): ' . $row["Area_sq_mi"] . '</li>';

                    $query = 'SELECT * FROM countries_of_the_world AS R, continents_of_the_world AS I WHERE R.Continent = ' . $selected_continent . ' AND I.Id = ' . $selected_continent;
                    $result = mysqli_query($conn, $query);
 
                    echo '</ul><li> Countries: </li><ol>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>' . $row["Country"] . '</li>';
                    }
                    echo '</ol>';
                }

                ?>
            </div>
        </div>
    </div>
    <br>
    <div class="footer fixed-bottom container-fluid">
        <div class="cont ainer">
            <p class="centered">
                Copyright © WorldStats
                <script>
                    document.write(new Date().getFullYear())
                </script>
                &nbsp;
                <a href="mailto:erictikhonov@outlook.com" target="_top">
                    <span class="sr-only">Email</span>
                    <span class="fa fa-envelope text-primary" data-toggle="tooltip" data-placement="top" title="Mail"></span>
                </a>
            </p>
        </div>
    </div>

</body>

</html>