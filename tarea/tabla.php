<?php
$numero = isset($_GET['numero']) ? $_GET['numero'] : 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>

<h1>Tabla de Multiplicar del <?php echo $numero; ?></h1>

<table>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$numero X </td>";
        echo "<td>$i</td>";
        echo "<td>= " . ($numero * $i) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
