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
                        <li><a href="https://www.youtube.com/channel/UC2dLAwPuGIyLxjJdnV2nMZA">YouTube</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorien <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Kategorie-Berühmte-Personen.php">Berühmte Personen</a></li>
                                <li><a href="Kategorie-Serien-Filme.php">Serien & Filme</a></li>
                                <li><a href="Kategorie-Gaming.php">Gaming</a></li>


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

        </div>

        <div class="panel panel-primary">
            <div class="panel-heading"><a href="" class="btn-primary2">Facebook</a></div>
            <div class="panel-body">asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf</div>
        </div>

        <div class="panel panel-danger">
            <div class="panel-heading"><a href="https://www.youtube.com/channel/UC2dLAwPuGIyLxjJdnV2nMZA" class="btn-primary2">YouTube</a></div>
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





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/slick.min.js"></script>

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