<?php
// Cargar configuración si no está cargada
if (!defined('SITE_NAME')) {
    $config_path = isset($basePath) ? $basePath . 'config.php' : 'config.php';
    if (file_exists($config_path)) {
        require_once $config_path;
    }
}
$base = isset($basePath) ? $basePath : '';
?>

<!-- NAVBAR -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Navegación principal">
    <div class="navbar-logo">
        <a href="<?php echo $base; ?>#inicio" aria-label="Astro Studio - Inicio">
            <img src="<?php echo $base; ?>assets/img/Logo.svg" alt="<?php echo SITE_NAME; ?>" height="34">
        </a>
    </div>
    <ul class="navbar-links">
        <li><a href="<?php echo $base; ?>#servicios">Servicios</a></li>
        <li><a href="<?php echo $base; ?>#como-trabajamos">Cómo trabajamos</a></li>
        <li><a href="<?php echo $base; ?>#resultados">Resultados</a></li>
        <li><a href="<?php echo $base; ?>#planes">Planes</a></li>
    </ul>
    <a href="https://wa.me/<?php echo WA_PHONE; ?>?text=<?php echo WA_MSG_MAIN; ?>"
       class="navbar-cta"
       id="navbar-cta">
        Quiero vender más
    </a>
    <button class="navbar-mobile-toggle" aria-label="Abrir menú" id="mobile-toggle">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path d="M3 5H19M3 11H19M3 17H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>
</nav>