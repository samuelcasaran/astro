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

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <div class="footer-logo">
                <img src="<?php echo $base; ?>assets/img/Logo.svg" alt="<?php echo SITE_NAME; ?>">
            </div>
            <p style="color: rgba(255,255,255,0.6); line-height: 1.7;">Marketing especializado en restaurantes y marcas gastronómicas. Branding, contenido, publicidad y sistema de pedidos.</p>
        </div>
        <div class="footer-section">
            <h3>Servicios</h3>
            <ul>
                <li><a href="<?php echo $base; ?>#servicios">Branding Gastronómico</a></li>
                <li><a href="<?php echo $base; ?>#servicios">Marketing &amp; Contenido</a></li>
                <li><a href="<?php echo $base; ?>#servicios">Meta Ads</a></li>
                <li><a href="<?php echo $base; ?>#wippy">Sistema de Pedidos (Wippy)</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                <li><a href="<?php echo LINKEDIN_URL; ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                <li><a href="https://wa.me/<?php echo WA_PHONE; ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
                <li><a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer">Facebook</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p><?php echo SITE_NAME; ?> &mdash; Marketing para restaurantes y marcas gastronómicas.</p>
    </div>
</footer>
