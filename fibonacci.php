<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Reeks</title>
</head>
<body>
    <h1>Fibonacci Reeks</h1>
    <form method="post">
        Voer een getal in voor de Fibonacci-reeks: 
        <input type="number" name="n" required>
        <input type="submit" value="Genereer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['n']);

        function fibonacci($n) {
            $fib = [1, 2];
            for ($i = 2; $i < $n; $i++) {
                $next_fib = $fib[$i - 1] + $fib[$i - 2];
                array_push($fib, $next_fib);
            }
            return $fib;
        }

        if ($n > 0) {
            $fibonacci_reeks = fibonacci($n);
            echo implode(", ", $fibonacci_reeks);
        } else {
            echo "Voer een geldig getal in.";
        }
    }
    ?>
</body>
</html>
