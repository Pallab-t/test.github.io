<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/es/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Eliminar datos de sesión';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Por favor selecciona la tablas de cache que deseas truncar.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Trabajo';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Descripción';
$GLOBALS['TL_LANG']['tl_maintenance']['maintenanceMode'] = 'Modo mantenimiento';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Eliminar datos de sesión';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'La cache ha sido borrada';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Por favor introduzca tus %s aqui.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Vaciar el índice de búsqueda';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Trunca las tablas <code>tl_search</code> y <code>tl_search_index</code>. Despues, tiene que reconstruir el índice de búsqueda (ver arriba).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Vacia la tabla deshacer';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Trunca la tabla <code>tl_undo</code>  que guarda los registros borrados. Este trabajo borra permanentemente esos registros.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Vaciar la tabla de versiones';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Trunca la tabla <code>tl_version</code> que guarda las versiones anteriores de un registro. Este trabajo borra permanentemente esos registros.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'Vaciar el registro del sistema';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Trunca la tabla <code>tl_log</code> que guarda todas las entradas de registro del sistema. Este trabajo borra permanentemente lesos registros.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Vaciar la caché de imágenes';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Elimina las imágenes generadas automáticamente y luego purga el caché compartido, por lo que no hay enlaces a recursos eliminados.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Vaciar la caché de script';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Elimina los archivos <code>.css</code> y <code>.js</code> generados automáticamente, recrea las hojas de estilo internas y luego purga la caché compartida.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Purgar el caché compartido';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Elimina las versiones en caché de las páginas de front end.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['search'][1] = 'Elimina las versiones cacheadas de los resultados de búsqueda.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Vaciar  la carpeta temp';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Elimina los archivos temporarios.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'Volver a crear los archivos XML';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Recrea los archivos XML (sitemaps y feeds) y luego purga el caché compartido, por lo que no hay enlaces a recursos eliminados.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Recrea los enlaces simbólicos';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Recrea los enlaces simbólicos en la carpeta <code>web/</code> (documento raíz).';
