<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <style>
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <body>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            echo "Welcome!";    
            echo "<br>";
            $password = $_POST["password"];
            $Quantity1 = $_POST["Quantity1"];
            $Quantity2 = $_POST["Quantity2"];
            $Quantity3 = $_POST["Quantity3"];
            echo "Your password is " . $password . "<br>";
            echo "<br>";
            echo "<br>";

            echo "<table>";
            echo "<tr>";
                echo "<th></th>";
                echo "<th>Quantity</th>";
                echo "<th>Cost Per Item</th>";
                echo "<th>Sub Total</th>";
            echo "</tr>";
            
            echo "<tr>";
                echo "<th>Apple</th>";
                echo "<td>" . $Quantity1 . "</td>";
                echo "<td>" . "$1" . "</td>";
                echo "<td>$" . $Quantity1 . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Banana</th>";
                echo "<td>" . $Quantity2 . "</td>";
                echo "<td>" . "$2" . "</td>";
                echo "<td>$" . (2 * $Quantity2) . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Orange</th>";
                echo "<td>" . $Quantity3 . "</td>";
                echo "<td>" . "$3" . "</td>";
                echo "<td>$" . (3 * $Quantity3) . "</td>";
            echo "</tr>";

            $shipping = $_POST["shipping"];
            $cost = 0;
            echo "<tr>";
                echo "<th>Shipping</th>";
                echo "<td colspan='2'>" . $shipping . "</td>";
                if ($shipping == "Free 7 Day") 
                {
                    $cost = 0;
                }
                if ($shipping == "$50.00 Over Night") 
                {
                    $cost = 50;
                }
                if ($shipping == "$5.00 3 Day") 
                {
                    $cost = 5;
                }
                echo "<td>$" . $cost . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th colspan='3'>Total Cost</th>";
                echo "<td>$" . ( $cost + $Quantity1 + (2 * $Quantity2) + (3 * $Quantity3) ) . "</td>";
            echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>