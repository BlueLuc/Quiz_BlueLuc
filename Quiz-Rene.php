<!DOCTYPE html>
    <html>
        <head>
            <title>Quiz über Rene</title>
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <link rel="icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="css/vendor/bootstrap.css">
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" type="text/css" href="css/vendor/slick.css"/>
            <link rel="stylesheet" type="text/css" href="css/vendor/slick-theme.css"/>
        </head>
        <body class="body-onkel">
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategorien<span class="caret"></span></a>
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


            <div class="container">

                <h1>Ein Quiz über meine Onkel</h1>

                <div class="row quiz-options">
                    <div class="col-md-3">

                        <form action="" method="post">
                            <div>
                                <input type="text" name="Username" class="Username" placeholder="Username" required>
                            </div>
                            <?php
                            $questions = array ( "Wann hat er Geburtstag?" => array ("14. März 1981", "25. Mai 1979 ", "23. September 1982", "12. August 1980"),

                                "Welche Haarfarbe hat er?" => array ("Braun", "Blond", "Keine", "Orange"),

                                "Welches Haustier hat er?" => array ("Katze", "Hund", "Hamster", "Fische"),

                                "In welche Schule ging er?" => array ("Sacre Coeur", "Kenyongasse", "Piaristengasse", "Spengergasse"),

                                "Wie heißen seine Eltern?" => array ("Walter&Vera", "Karl&Monika", "Thomas&Anna", "Bernhard&Vera"),

                                "Wann wurde seine Firma gegründet?" => array ("2000", "1999", "2001", "1998"),

                                "Wie heißt sein Haustier?" => array ("Struppi", "Leo", "Nala", "Lara"),

                                "Wie viele Geschwister hat er?" => array ("2", "1", "3", "Keine"),

                                "Welches Handy hat er?" => array ("iPhone 7", "iPhone 7+", "iPhone SE", "iPhone 5"),

                                "Wie alt ist er?" => array ("32", "35", "37", "29"),

                            );
                            $questionCount = 1;
                            $answerCount = 1;


                            foreach ($questions AS $questions_1_10 => $answers) {
                                echo "<div class='quiz-question'>";
                                echo "<h2>Frage: $questions_1_10 </h2><br>";
                                echo  "<div class='row quiz-options'>";
                                echo  "<div class='col-md-12'>";
                                foreach ($answers AS $answers_1_10) {

                                    echo  "<div class='quiz-question-answer'>";

                                    echo "<input type='radio' name='question-$questionCount-answers' id='question-$questionCount-answers-$answerCount' value='$answers_1_10' required/> ";
                                    echo "<label for='question-$questionCount-answers-$answerCount'>$answers_1_10</label><br/>";
                                    $answerCount ++;
                                    echo "</div>";
                                }
                                echo "</div></div>";
                                echo "</div>";
                                $questionCount ++;
                            }
                            ?>


                            <input type="submit" value="Abschicken" class="btn btn-primary" />
                        </form>


                    </div>
                </div>

                <div class="row quiz-options">
                    <?php

                    $answer1 = $_POST['question-1-answers'];
                    $answer2 = $_POST['question-2-answers'];
                    $answer3 = $_POST['question-3-answers'];
                    $answer4 = $_POST['question-4-answers'];
                    $answer5 = $_POST['question-5-answers'];
                    $answer6 = $_POST['question-6-answers'];
                    $answer7 = $_POST['question-7-answers'];
                    $answer8 = $_POST['question-8-answers'];
                    $answer9 = $_POST['question-9-answers'];
                    $answer10 = $_POST['question-10-answers'];

                    $totalCorrect = 0;

                    if ($answer1 == "12. August 1980") { $totalCorrect++; }
                    if ($answer2 == "Keine") { $totalCorrect++; }
                    if ($answer3 == "Hund") { $totalCorrect++; }
                    if ($answer4 == "Kenyongasse") { $totalCorrect++; }
                    if ($answer5 == "Walter&Vera") { $totalCorrect++; }
                    if ($answer6 == "2001") { $totalCorrect++; }
                    if ($answer7 == "Lara") { $totalCorrect++; }
                    if ($answer8 == "1") { $totalCorrect++; }
                    if ($answer9 == "iPhone 7") { $totalCorrect++; }
                    if ($answer10 == "37") { $totalCorrect++; }

                    $name = $_POST['Username'];

                    $blacklistedNames = array("Luca", "Luci", "Rene");
                    if (in_array($name, $blacklistedNames)) {
                        echo "<div class=\"alert alert-wrong\" role=\"alert\"  id='results'>du darfst das Quiz nicht machen</div>";
                    } else {
                        echo "<div class=\"alert alert-info\" role=\"alert\" id='results'>$totalCorrect / 10 correct</div>";

                        if ($totalCorrect == "1") { echo "<div class=\"alert alert-danger\" role=\"alert\" id='results'>$name , du loser, du hast nur $totalCorrect Punkt</div>"; }
                        if ($totalCorrect == "2") { echo "<div class=\"alert alert-danger\" role=\"alert\" id='results'>$name , du bist kein loser mehr, hast aber trotzdem nur $totalCorrect Punkte </div>"; }
                        if ($totalCorrect == "3") { echo "<div class=\"alert alert-danger\" role=\"alert\" id='results'>du besserst dich, $name , aber hast leider nur $totalCorrect Punkte</div>"; }
                        if ($totalCorrect == "4") { echo "<div class=\"alert alert-warning\" role=\"alert\" id='results'>das geht noch viel besser, $name , als $totalCorrect Punkte</div>"; }
                        if ($totalCorrect == "5") { echo "<div class=\"alert alert-warning\" role=\"alert\" id='results'>ich hoffe du schaffst $totalCorrect Punkte noch dazu, $name</div>"; }
                        if ($totalCorrect == "6") { echo "<div class=\"alert alert-warning\" role=\"alert\" id='results'>du bist auf dem richtigen weg mit deinen $totalCorrect Punkten, $name</div>"; }
                        if ($totalCorrect == "7") { echo "<div class=\"alert alert-warning\" role=\"alert\" id='results'>du hast $totalCorrect Punkte, $name , brauchst aber noch 3</div>"; }
                        if ($totalCorrect == "8") { echo "<div class=\"alert alert-success\" role=\"alert\" id='results'>andere können das besser als du, $name , mit deinen $totalCorrect Punkten</div>"; }
                        if ($totalCorrect == "9") { echo "<div class=\"alert alert-success\" role=\"alert\" id='results'>$totalCorrect Punkte sind schon sehr gut, $name</div>"; }
                        if ($totalCorrect == "10") { echo "<div class=\"alert alert-success\" role=\"alert\" id='results'>jaaaa du hast es geschafft, $name , du hast $totalCorrect Punkte</div>"; }

                    }





                    ?>
                </div>



            </div>



            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/vendor/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/vendor/slick.min.js"></script>
        </body>
    </html>