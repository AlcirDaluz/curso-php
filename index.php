<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
<header class="header">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
</header>
<main class="main">
    <div class="content">
        <nav class="modules">
            <div class="module purple">
                <h3>4. Controle</h3>
                <ul>
                    <li><a href="exercise.php?dir=control&file=if_else">If Else</a></li>
                </ul>
            </div>
            <div class="module blue">
                <h3>3. Variáveis</h3>
                <ul>
                    <li><a href="exercise.php?dir=variables&file=basic">Variáveis</a></li>
                    <li><a href="exercise.php?dir=variables&file=challenge_equation">Desafio Equação</a></li>
                    <li><a href="exercise.php?dir=variables&file=attributions">Atribuições</a></li>
                    <li><a href="exercise.php?dir=variables&file=interpolation">Interpolação</a></li>
                    <li><a href="exercise.php?dir=variables&file=variables_variables">Variáveis Variáveis</a></li>
                    <li><a href="exercise.php?dir=variables&file=challenge_variables">Desafio Variáveis Variáveis</a>
                    </li>
                    <li><a href="exercise.php?dir=variables&file=value_reference">Valor vs Referência</a></li>
                    <li><a href="exercise.php?dir=variables&file=constants">Constantes</a></li>
                </ul>
            </div>
            <div class="module red">
                <h3>2. Tipos</h3>
                <ul>
                    <li><a href="exercise.php?dir=types&file=int">Tipo Inteiro</a></li>
                    <li><a href="exercise.php?dir=types&file=float">Tipo Float</a></li>
                    <li><a href="exercise.php?dir=types&file=arithmetics">Operações Aritméticas</a></li>
                    <li><a href="exercise.php?dir=types&file=challenge_precedence">Desafio Precedência</a></li>
                    <li><a href="exercise.php?dir=types&file=string">Tipo String</a></li>
                    <li><a href="exercise.php?dir=types&file=challenge_string">Desafio String</a></li>
                    <li><a href="exercise.php?dir=types&file=boolean">Tipo Booleano</a></li>
                    <li><a href="exercise.php?dir=types&file=conversions">Conversões</a></li>
                </ul>
            </div>
            <div class="module green">
                <h3>1. Básico</h3>
                <ul>
                    <li><a href="exercise.php?dir=basics&file=hello">Olá PHP</a></li>
                    <li><a href="exercise.php?dir=basics&file=html">Integração HTML</a></li>
                    <li><a href="exercise.php?dir=basics&file=css">Integração CSS</a></li>
                    <li><a href="exercise.php?dir=basics&file=comments">Comentários PHP</a></li>
                    <li><a href="exercise.php?dir=basics&file=challenge">Desafio</a></li>
                </ul>
            </div>
        </nav>
    </div>
</main>
<footer class="footer">
    COD3R E ALUNOS ₢ <?= date('Y'); ?>
</footer>
</body>
</html>