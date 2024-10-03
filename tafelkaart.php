<!DOCTYPE html>
<html>
<head>
    <title>Tafelkaart</title>
    
</head>
<body>
    <h1>Tafelkaart</h1>
    <form method="post">
        Voer een getal in voor de tafelkaart: 
        <input type="number" name="n" required>
        <input type="submit" value="Genereer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['n']);

        if ($n > 0) {
            echo "<table border='1' cellpadding='10'>";
            echo "<tr><th>Tafel van</th>";
            for ($i = 1; $i <= $n; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            for ($i = 1; $i <= $n; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $n; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Voer een geldig getal in.";
        }
    }
    ?>
</body>
</html>
