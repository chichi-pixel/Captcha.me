<form action="" method = "POST">
    <input type = "text" name = "name" placeholder = "Vorname-Nachname" required><br>
    <input type = "email" name = "email" placeholder = "example@mail.com" required><br>
    <input type = "text" name = "Captcha" placeholder = "Bestätigungscode eingeben" required><br>
    <!--<?php echo rand(111,9999) ?>-->
    <?= $control = rand(111,9999) ?>
    <br><br>
    <input type = "submit" name = "submit" value = "Send">
    <input type="hidden" name="hCaptcha" value="<?= $control ?>">
</form>

<?php
    if(@$_POST["submit"]) {
        if($_POST["Captcha"] == $_POST["hCaptcha"]) {
           
           echo "<b>Das Formular wurde erfolgreich gesendet!</b>";

        }else {

           echo "<b>Überprüfen Sie den Bestätigungscode!</b>";
        }
    }



