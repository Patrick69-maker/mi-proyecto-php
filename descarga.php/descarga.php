<?php
// Nombre del archivo a descargar
$nombreArchivo = "reporte.pdf";

// Configurar el encabezado para indicar el tipo de contenido como PDF
header("Content-Type: application/pdf");

// Configurar el encabezado para forzar la descarga del archivo
header("Content-Disposition: attachment; filename=\"$nombreArchivo\"");

// Leer el archivo y enviarlo como respuesta al navegador
readfile($nombreArchivo);
exit;
?>
