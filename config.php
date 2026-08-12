<?php
// Astro Studio — Marketing para Restaurantes y Marcas Gastronómicas
// Configuración global del sitio

if (!defined('SITE_NAME')) {
    define('SITE_NAME',        'Astro Studio');
    define('SITE_TAGLINE',     'Marketing para Restaurantes');
    define('SITE_DESCRIPTION', 'Agencia de marketing especializada en restaurantes, dark kitchens y marcas de comida. Branding, contenido, Meta Ads y sistema de pedidos con Wippy.');
    define('SITE_URL',         'https://astrostudio.cl');

    // WhatsApp
    define('WA_PHONE',   '56951786715');
    define('WA_MSG_MAIN',   urlencode('Hola Astro Studio 👋, quiero saber cómo pueden ayudar a mi restaurante a vender más. Vengo desde su sitio web.'));
    define('WA_MSG_PLANES',  urlencode('Hola Astro Studio 👋, quiero conocer más sobre sus planes de marketing gastronómico.'));
    define('WA_MSG_WIPPY',   urlencode('Hola Astro Studio 👋, quiero saber más sobre Wippy y el sistema de pedidos para mi restaurante.'));
    define('WA_MSG_GENERAL', urlencode('Hola Astro Studio 👋, quiero hacer crecer mi restaurante. ¿Podemos hablar?'));

    // Redes
    define('INSTAGRAM_URL', 'https://www.instagram.com/astrostudiocl/');
    define('LINKEDIN_URL',  'https://www.linkedin.com/company/audifycl/about/');
    define('FACEBOOK_URL',  'https://www.facebook.com/profile.php?id=61583286548470');
}

// Helper: URL de WhatsApp con mensaje
function wa_url(string $message_const = 'WA_MSG_MAIN'): string {
    return 'https://wa.me/' . WA_PHONE . '?text=' . constant($message_const);
}
?>
