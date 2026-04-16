<?php

use App\Models\Router\Routes;
use Setting\Route\Function\Functions;

//==================================================================================================//MAIN
Routes::get('/', 'on_Main');
//==================================================================================================//STOCKS
Routes::get('/stocks', 'on_Stocks');
//==================================================================================================//CONTACT
Routes::get('/contact', 'on_Contact');
//==================================================================================================//ABOUT
Routes::get('/about', 'on_About');
//==================================================================================================//OTHER
Routes::get('/other', 'on_Other');
//==================================================================================================//REVIEWS
Routes::get('/reviews', 'on_Reviews');
//==================================================================================================//REVIEWS
Routes::get('/portfolio', 'on_Portfolio');
//==================================================================================================//REVIEWS
Routes::get('/services', 'on_Services');
//==================================================================================================//REVIEWS
Routes::get('/prices', 'on_Prices');
//==================================================================================================//BLOG
Routes::get('/blogs', 'on_Blog');
//==================================================================================================//BLOG ARTICLE (SEO URL)
Routes::get('/blog/article', function () {
    Routes::auto_element(dirname(__DIR__, 2) . '/public/pages/blog/article/index.php', get_defined_vars());
});
Routes::get('/blog/article/{id}', function ($id = null) {
    Routes::auto_element(dirname(__DIR__, 2) . '/public/pages/blog/article/index.php', get_defined_vars());
});
//==================================================================================================//CALCULATOR
Routes::get('/calculator', 'on_Calculator');
//==================================================================================================//Отправка письма
Routes::post('/send/email', [Functions::class, 'sendMail']);

//==================================================================================================//ROBOTS.TXT (SEO)
Routes::get('/robots.txt', function () {
    $site = Functions::site();
    $domain = isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru';

    $content = "User-agent: *\n";
    $content .= "Crawl-delay: 5\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /api/\n";
    $content .= "Disallow: /send/\n";
    $content .= "Disallow: /*?*\n";
    $content .= "Allow: /\n";
    $content .= "\n";
    $content .= "User-agent: Yandex\n";
    $content .= "Crawl-delay: 2\n";
    $content .= "Clean-param: utm_source&utm_medium&utm_campaign&utm_content&utm_term\n";
    $content .= "\n";
    $content .= "User-agent: Googlebot\n";
    $content .= "Crawl-delay: 3\n";
    $content .= "\n";
    $content .= "Sitemap: " . $domain . "/sitemap.xml\n";
    $content .= "Host: " . $domain . "\n";

    header('Content-Type: text/plain; charset=utf-8');
    echo $content;
});

//==================================================================================================//SITEMAP.XML (SEO)
Routes::get('/sitemap.xml', function () {
    Setting\Route\Function\Sitemap::outputCompressed('google', true);
});

//==================================================================================================//SITEMAP.XML YANDEX (SEO)
Routes::get('/yandex-sitemap.xml', function () {
    Setting\Route\Function\Sitemap::outputCompressed('yandex', true);
});