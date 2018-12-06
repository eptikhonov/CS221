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
                <form class="form-inline my-2 my-lg-0" action="index.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Enter Country"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
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
                Continents:
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
        <div class="col">
            <div class="page-header">
                <h1>
                    <span class="fas fa-globe-americas"></span>
                    About Us
                </h1>
            </div>
            <hr>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod gravida suscipit. Suspendisse
                potenti. Nullam tellus magna, auctor non lorem sit amet, iaculis sagittis mauris. Morbi fermentum nisl
                et nulla tincidunt fermentum. Sed quis erat pellentesque, faucibus nisl eu, sagittis turpis. Curabitur
                elementum lacus eget magna tristique, vel egestas nulla porta. Sed cursus consequat neque, et interdum
                magna interdum vitae. Duis rutrum nulla quis velit fringilla, sed pulvinar odio eleifend. Proin eu
                metus in nulla facilisis placerat non eu risus. Aliquam mollis nec arcu sed tempus. Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur nec neque
                ullamcorper, egestas nisi vitae, hendrerit nisi.
            </p>
            <p class="lead">Cras consequat cursus nibh, sit amet aliquet dolor maximus ut. Cras in dapibus tellus, et
                aliquam sem. Fusce vulputate enim a lectus iaculis, a dapibus lorem vulputate. Cras sed ligula dolor.
                Suspendisse a consectetur neque. Nulla eu massa velit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Donec aliquet fermentum est. Praesent faucibus consequat elit aliquam vehicula.
                Integer dolor purus, sollicitudin a eleifend nec, tempus ut neque. Aliquam erat volutpat. Maecenas in
                auctor erat, vulputate placerat augue. Orci varius natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus.
            </p>
            <p class="lead">Donec non dui nec tellus varius consequat. Etiam non sem ullamcorper, dictum magna eget,
                placerat mi. Maecenas bibendum purus eu diam commodo, eu fermentum massa efficitur. Praesent
                consectetur vitae turpis et dictum. Nulla sit amet urna aliquet, egestas urna sed, finibus metus. Donec
                ultricies vulputate mattis. Nam varius metus in tellus rutrum ullamcorper. Curabitur semper
                sollicitudin purus, quis venenatis tortor viverra sit amet. Etiam sagittis interdum sapien vel
                volutpat. Donec varius augue sapien, ac ornare sapien pellentesque sit amet. Suspendisse tristique id
                mauris non egestas. Pellentesque dapibus euismod diam, at ultrices lorem tempus a. Donec elit tortor,
                scelerisque non mi quis, varius lacinia ipsum. Duis sed justo rhoncus, volutpat felis a, sodales nisi.
                Proin sagittis, felis ut volutpat convallis, arcu erat finibus ligula, vel condimentum tortor ligula
                nec ex. Sed facilisis ac sem sed lacinia.
            </p>

            <hr>
        </div>
    </div>
    </div>
    <br>
    <div class="footer fixed-bottom container-fluid">
        <div class="container">
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