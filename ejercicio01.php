<?php
session_start();

// Inicializar arreglo si no existe
if (!isset($_SESSION['estudiantes'])) {
    $_SESSION['estudiantes'] = [];
}

if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 1:
            // Registrar estudiante
            $nombre = $_POST['nombre'] ?? null;
            if ($nombre) {
                $_SESSION['estudiantes'][] = $nombre;
                echo "Estudiante '$nombre' registrado.<br>";
            } else {
                echo "Debe ingresar un nombre.<br>";
            }
            break;

        case 2:
            // Listar estudiantes
            echo "<h3>Lista de estudiantes:</h3>";
            foreach ($_SESSION['estudiantes'] as $i => $est) {
                echo ($i+1) . ". $est<br>";
            }
            break;

        case 3:
            echo "Saliendo...";
            session_destroy();
            break;

        default:
            echo "Opción inválida";
    }
}
?>
