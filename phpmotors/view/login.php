<?php
    $ruta = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/';
?>
    <?php require $ruta . 'header.php'; ?>

    <h1 class="txt-center">Sign in</h1>
<?php
    if (isset($message)) {
        echo $message;
    }
?>
    <form class="mx-auto" action="/phpmotors/accounts/" method="post" style="width:300px">
        <label class="d-none" for="email">Email</label>
        <p class="txt-center">
            <input class="p-3 fs-4 my-2" name="email" id="email" type="email" placeholder="Email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
        </p>
        <label class="d-none" for="contrasena">Contrasena</label>
        <p class="txt-center">
            <input class="p-3 fs-4 my-2" name="contrasena" id="contrasena" type="password" placeholder="Password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
        </p>
        <p class="txt-center">
            <input class="p-3 fs-4 my-2" id="enviar" type="submit" value="Sign-in">
        </p>
        <input type="hidden" name="action" value="Logeandoce">
    </form>

    <div><p class="txt-center"><a href="/phpmotors/accounts/?action=registerHome"> Not a member yet?</a></p></div>

    <?php require $ruta . 'footer.php'; ?>
