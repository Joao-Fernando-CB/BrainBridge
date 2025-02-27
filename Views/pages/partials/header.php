<?php
    if (isset($arr)){
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Venda de Cursos de NR - Normas Regulamentadoras</title>
        <link href="<?php echo FILES_PATH; ?>css/styleS.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div class="container">
            <h1><a href="/">Venda de Cursos NR</a></h1>
                <nav>
                    <ul>
                    <li><a href="#produtos">Cursos</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<?php }else{ ?>
<h1>As paginas nao podem ser acessadas dessa forma</h1>
<?php } ?>