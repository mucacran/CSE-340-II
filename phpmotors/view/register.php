<?php
    $ruta = $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/';
?>

    <?php require $ruta . 'header.php'; ?>

    <h1 class="txt-center">Register</h1>
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>
    <form class="mx-auto" action="/phpmotors/accounts/" method="post" style="width:300px">
    <label class="d-none" for="dirstName">first Name</label>
    <p class="txt-center"><input class="p-3 fs-4 my-2" name="dirstName" id="dirstName" type="text" placeholder="First Name" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?> required></p>
    <label class="d-none" for="lastName">lastName</label>
    <p class="txt-center"><input class="p-3 fs-4 my-2" name="lastName" id="lastName" type="text" placeholder="Last Name" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} ?> required></p>
    <label class="d-none" for="email">Email</label>
    <p class="txt-center"><input class="p-3 fs-4 my-2" name="email" id="email" type="email" placeholder="Email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required></p>
<br>
    <label class="d-none" for="contrasena">Contrasena</label>
    <span class="txt-center">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
    <p class="txt-center"><input class="p-3 fs-4 my-2" name="contrasena" id="contrasena" type="password" placeholder="Password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"></p>
    <p class="txt-center"><input class="p-3 fs-4" id="showPassword" type="button" value="Show Password"></p>
    <br>
    <p class="txt-center"><input class="p-3 fs-4 my-2" type="submit" name="submit" id="regbtn" value="Register"></p>
    <!-- Add the action name - value pair -->
 <input type="hidden" name="action" value="register">
    </form>

    <?php require $ruta . 'footer.php'; ?>
