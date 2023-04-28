<?php

function convert_cat_age($age) {
    $human_age = 0;

    if ($age == 1) {
        $human_age = 15;
    } elseif ($age == 2) {
        $human_age = 24;
    } elseif ($age > 2) {
        $human_age = 24 + ($age - 2) * 4;
    }

    return $human_age;
}

$result = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = intval($_POST["cat_age"]);
    $result = convert_cat_age($age);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion d'âge chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            font-size: 32px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversion d'âge chat 🐱</h1>
        <form action="index.php" method="post">
            <label for="cat_age">Âge du chat (en années) :</label>
            <input type="number" name="cat_age" id="cat_age" required>
            <input type="submit" value="Convertir">
        </form>
        <?php
        if ($result !== null) {
            echo "<p><b>L'âge équivalent humain est de : {$result} années.</p></b>";
	    echo "<p><i>Ces conversions sont basées sur des approximations et peuvent varier en fonction de la race et de la taille de l'animal.</p></i>";
	    echo "<i><p>Pour les chats, on considère généralement que la première année de vie d'un chat équivaut à environ 15 années humaines, et la deuxième année à 9 années humaines. Après cela, chaque année supplémentaire équivaut à environ 4 années humaines.</p></i>";

	}
        ?>
    </div>
<th colspan="5"><hr></th>
<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Ce(tte) œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licence Creative Commons Attribution -  Partage dans les Mêmes Conditions 4.0 International</a>.
</body>
</html>

