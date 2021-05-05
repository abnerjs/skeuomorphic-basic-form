<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <title>Indica Filme 2000</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
    ?>
    <section id='confirmaFilme'>
        <div class='container'>
            <h2 class='title'>Confirmação de Indicação</h2>
            <table>
                <tr>
                    <th>NOME</th>
                    <th>INDICAÇÃO</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['nome']; ?></td>
                    <td><?php echo $_POST['filme']; ?></td>
                </tr>
            </table>
            <h3 class='rotulo'>Obrigado pela participação!</h3>
        </div>
    </section>
    <?php
        } else {
            include_once('formFilme.php');
        }
    ?>
</body>
</html>