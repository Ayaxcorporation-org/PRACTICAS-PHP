# PRACTICAS-PHP

Repositorio de prácticas en **PHP + HTML** desarrolladas en Sublime Text y probadas con **XAMPP**.  
Cada ejercicio incluye un archivo `.html` (formulario interactivo) y un archivo `.php` (lógica de servidor).

---

## 📌 Ejercicio 01 – Menú interactivo
- **Archivos:** `ejercicio01.html`, `ejercicio01.php`
- **Descripción:**  
  Menú básico con opciones para registrar estudiante, listar estudiantes y salir.  
  El formulario HTML envía la opción seleccionada al script PHP, que procesa la lógica con `switch`.
- **Ejecución:**  
  Abrir en navegador:  
http://localhost/taller3/PRACTICAS-PHP/ejercicio01.html

---

## 📌 Ejercicio 02 – Validación de datos
- **Archivos:** `ejercicio02.html`, `ejercicio02.php`
- **Descripción:**  
Formulario para registrar estudiantes con validación de **nombre, edad y correo**.  
- Nombre: no vacío, solo letras.  
- Edad: número entero entre 16 y 90.  
- Correo: formato válido (`filter_var`).  
Los registros válidos se almacenan en **sesión** y se listan en pantalla.
- **Ejecución:**  
Abrir en navegador:  
http://localhost/taller3/PRACTICAS-PHP/ejercicio02.html

---

## 📌 Ejercicio 03 – Clasificación de notas
- **Archivos:** `ejercicio03.html`, `ejercicio03.php`
- **Descripción:**  
El usuario ingresa un conjunto de notas separadas por comas.  
El script PHP recorre cada nota con `foreach` y las clasifica:  
- A: 90–100  
- B: 70–89  
- C: 51–69  
- F: 0–50  
Al final muestra cuántos estudiantes aprobaron (A, B o C).
- **Ejecución:**  
Abrir en navegador:  
http://localhost/taller3/PRACTICAS-PHP/ejercicio03.html

---

## 📊 Requisitos
- Tener instalado **XAMPP** y ejecutar el servidor Apache.  
- Colocar la carpeta `PRACTICAS-PHP` dentro de:  
C:\xampp\htdocs\taller3\

- Acceder desde navegador a cada archivo `.html`.

---

## 📌 Autor
- **Nombre:** Alex Yanahuaya Arce  
- **Materia:** Taller de programacion III – Universidad Union Bolivariana
- **Repositorio:** [PRACTICAS-PHP](https://github.com/Ayaxcorporation-org/PRACTICAS-PHP)
