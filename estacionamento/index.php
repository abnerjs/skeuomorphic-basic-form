<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <title>Estacionamento 2000</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
    ?>
    <section id='confirmaEstacionamento'>
        <div class='container'>
            <h2 class='title'>Confirmação - Valor do Estacionamento</h2>
            <div class="info"><?php echo(""); ?></div>
            <div class="info"><?php echo(""); ?></div>
            <div class="info"><?php echo(""); ?></div>
            <div class="info"><?php echo(""); ?></div>
            <div class="info"><?php echo(""); ?></div>
            <h3 class='rotulo'>Obs: você
            <?php
            
            ?>
            optou por receber o ticket impresso.</h3>
        </div>
    </section>
    <?php
        } else {
            include_once('formEstacionamento.php');
        }
    ?>
</body>
</html>