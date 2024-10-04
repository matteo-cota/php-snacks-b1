<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di accesso</title>
</head>

<body>

    <form method="get">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required><br><br>

        <label for="age">Età:</label>
        <input type="text" id="age" name="age" required><br><br>

        <input type="submit" value="Invia">
    </form>

    <?php
    if (isset($_GET['name'], $_GET['mail'], $_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
    }
    if (strlen($name) <= 3) {
        echo "Accesso negato: Il nome deve essere più lungo di 3 caratteri.";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "Accesso negato: L'email non è valida.";
    } elseif (!is_numeric($age)) {
        echo "Accesso negato: L'età deve essere un numero.";
    } else {
        echo "Accesso riuscito!";
    }
    ?>

</body>

</html>