<?php
session_start();

function validar(array $d): array {
    $errores = [];

    // Validar nombre
    if (empty($d['nombre']) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $d['nombre'])) {
        $errores[] = 'Nombre requerido (solo letras)';
    }

    // Validar edad
    if (!filter_var($d['edad'], FILTER_VALIDATE_INT) || $d['edad'] < 16 || $d['edad'] > 90) {
        $errores[] = 'Edad fuera de rango (16-90)';
    }

    // Validar correo
    if (!filter_var($d['correo'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Correo inválido';
    }

    return $errores;
}

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [
        'nombre' => $_POST['nombre'] ?? '',
        'edad'   => $_POST['edad'] ?? '',
        'correo' => $_POST['correo'] ?? ''
    ];

    $errores = validar($datos);

    if (empty($errores)) {
        $_SESSION['registros'][] = $datos;
        echo "✅ Registro válido y guardado.<br>";
    } else {
        echo "❌ Errores encontrados:<br>";
        foreach ($errores as $e) {
            echo "- $e<br>";
        }
    }
}

// Mostrar registros guardados
if (!empty($_SESSION['registros'])) {
    echo "<h3>Registros almacenados:</h3>";
    foreach ($_SESSION['registros'] as $i => $r) {
        echo ($i+1) . ". {$r['nombre']} ({$r['edad']} años) - {$r['correo']}<br>";
    }
}
?>
