<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Quiz ENEM 2018 - Results
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    ?>
    <div class="container">
        <header id="header" class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand w-100 order-1 order-md-0 dual-collapse2">
                <h1 class="navbar-brand">
                    <a class="nav-link" href="#">ENEM Quiz 2023</a>
                </h1>
            </div>
            <ul class="justify-content-end">
                <li id="author_item" class="nav-item">
                    <a id="author" class="nav-link" href="#">Autor</a>
                </li>
            </ul>
        </header>

        <div class="container" id="wrap_content">
            <p>Sua nota é:
            <?php
                include "questions_mng.php";

                $answers = array();
                for($i=0;$i<10;$i++) {
                    array_push($answers, $_POST["question_{$i}_answer"]);
                }

                $question_mgr = new QuestionsManager;
                print $question_mgr->get_result($answers);
            ?>
            </p>
        </div>
    </div>
</body>
</html>
