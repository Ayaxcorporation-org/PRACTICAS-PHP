<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entrada = $_POST['notas'] ?? '';
    $notas = array_map('trim', explode(',', $entrada));
    $aprobados = 0;

    echo "<h3>Resultados:</h3>";
    foreach ($notas as $n) {
        $n = (int)$n;
        if ($n >= 90) {
            $letra = 'A';
        } elseif ($n >= 70) {
            $letra = 'B';
        } elseif ($n >= 51) {
            $letra = 'C';
        } else {
            $letra = 'F';
        }

        if ($letra !== 'F') $aprobados++;
        echo "$n → $letra<br>";
    }

    echo "<br><strong>Aprobados: $aprobados</strong>";
} else {
    echo "No se enviaron notas.";
}
?>
