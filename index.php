<!DOCTYPE html>
    <html>
        <head>
            <title>BlueLuc</title>
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <link rel="icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="css/vendor/bootstrap.css">

            <link rel="stylesheet" type="text/css" href="css/vendor/slick.css"/>
            <link rel="stylesheet" type="text/css" href="css/vendor/slick-theme.css"/>

            <link rel="stylesheet" href="css/styles.css">
        </head>
        <body class="body-default">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Home</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="start-quiz.php">#1 Quiz</a></li>
                        <li><a href="https://www.youtube.com/channel/UCTFVMmoOnuMqTm19seEwoHA">YouTube</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorien <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Kategorie-Berühmte-Personen.php">Berühmte Personen</a></li>
                                <li><a href="Kategorie-Serien-Filme.php">Serien & Filme</a></li>
                                <li><a href="Kategorie-Gaming.php">Gaming</a></li>


                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Umrechnen <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Umrechnen-Gewicht.php">Gewicht</a></li>
                                <li><a href="Umrechnen-Länge.php">Länge</a></li>
                                <li><a href="Umrechnen-Temperatur.php">Temperatur</a></li>
                                <li><a href="Umrechnen-Geschwindigkeit.php">Geschwindigkeit</a></li>


                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="slider-1">
            <div class="slider-content-1"><a href="Quiz-Rene.php" class="btn-primary3"><h1>Quiz über meinen Onkel</h1></a>

            </div>

            <div class="slider-content-2"><a href="Quiz-Papa.php" class="btn-primary3"><h1>Quiz über meinen Papa</h1></a></div>

            <div class="slider-content-3"><a href="Quiz-Mama.php" class="btn-primary3"><h1>Quiz über meine Mama</h1></a></div>

            <div class="slider-content-4"><a href="Quiz-Andrea.php" class="btn-primary3"><h1>Quiz über die Andrea</h1></a></div>

        </div>s

        <div class="panel panel-primary">
            <div class="panel-heading"><a href="" class="btn-primary2">Facebook</a></div>
            <div class="panel-body">asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</div>
        </div>

        <div class="panel panel-danger">
            <div class="panel-heading"><a href="https://www.youtube.com/channel/UCTFVMmoOnuMqTm19seEwoHA" class="btn-primary2">YouTube</a></div>
            <div class="panel-body">asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</div>
        </div>

        <div class="panel panel-warning">
            <div class="panel-heading"><a href="" class="btn-primary2">Instagram</a></div>
            <div class="panel-body">asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</div>
        </div>

        <div class="panel panel-primary2">
            <div class="panel-heading"><a href="" class="btn-primary2">Twitter</a></div>
            <div class="panel-body">asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</div>
        </div>


        <p id="demo"></p>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/slick.min.js"></script>


        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Apr 25, 2018 10:48:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>



        <script>

            $(document).ready(function(){
                $('.slider-1').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            });

        </script>








        </body>
    </html>