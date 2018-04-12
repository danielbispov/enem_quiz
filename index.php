<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Quiz ENEM 2018
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script>
    $(document).ready(function () {
        $('#quiz').validate({
            errorClass: 'error help-inline alert alert-warning container',
            rules: {
                question_0_answer: {
                    required: true
                },
                question_1_answer: {
                    required: true
                },
                question_2_answer: {
                    required: true
                },
                question_3_answer: {
                    required: true
                },
                question_4_answer: {
                    required: true
                },
                question_5_answer: {
                    required: true
                },
                question_6_answer: {
                    required: true
                },
                question_7_answer: {
                    required: true
                },
                question_8_answer: {
                    required: true
                },
                question_9_answer: {
                    required: true
                }
            },
            errorPlacement: function(error, element) {
                error.insertBefore(element.parent().parent(element));
            },
            messages: {
                question_0_answer: " Por favor, assinale uma das alternativas.",
                question_1_answer: "Por favor, assinale uma das alternativas.",
                question_2_answer: "Por favor, assinale uma das alternativas.",
                question_3_answer: "Por favor, assinale uma das alternativas.",
                question_4_answer: "Por favor, assinale uma das alternativas.",
                question_5_answer: "Por favor, assinale uma das alternativas.",
                question_6_answer: "Por favor, assinale uma das alternativas.",
                question_7_answer: "Por favor, assinale uma das alternativas.",
                question_8_answer: "Por favor, assinale uma das alternativas.",
                question_9_answer: "Por favor, assinale uma das alternativas."
            }
        });
    });
    </script>
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
                    <a class="nav-link" href="#">ENEM Quiz 2018</a>
                </h1>
            </div>
            <ul class="justify-content-end">
                <li id="author_item" class="nav-item">
                    <a id="author" class="nav-link" href="#">Autor</a>
                </li>
            </ul>
        </header>

        <div class="jumbotron" id="jumbotron">
            <h1>Preparado para o ENEM 2018?</h1>
            <p>Aproveite este quiz para exercitar o que você já aprendeu até agora, boa sorte!</p>
        </div>

        <div class="container" id="wrap_content">
            <p>Cada questão vale 1 ponto, ao final do quiz você terá a sua pontuação.</p>
            <form id="quiz" action="results.php" method="post">
                <ol>
                    <?php
                    include "questions_mng.php";
                    $manager = new QuestionsManager;
                    $manager->get_questions();
                    ?>
                </ol>
                <input type="submit" value="Enviar Quiz"/>
            </form>
        </div>
    </div>
</body>
</html>
