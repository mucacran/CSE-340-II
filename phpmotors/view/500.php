<?php
    $ruta = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/';
    $pages = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Title | PHP Motors</title>
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
    <div class="container bg-blanco mx-auto my-3 border-zul">
        <header>
            <div class="bg-blanco">
                <div class="d-flex logoAccount">
                    <div class="image"><img src="../images/site/logo.png" alt="logo php motors"></div>
                    <div class="p-3"><a href="/" title="my account" class="txt-decoration-none txt-gris-mas-fuerte">My Account</a></div>
                </div>
            </div>
            </header>
                    <nav>
                        <?php require $ruta . 'navigation.php'; ?>
                    </nav>
                    <main class="p-2">
<h1>Server Error </h1>
<p>Sorry our server seems to be experiencing some technical difficulties</p>
<?php require $ruta . 'footer.php'; ?>