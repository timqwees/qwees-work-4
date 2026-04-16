<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Портфолио ремонтов — реальные проекты |
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>
    </title>
    <meta name="description"
        content="Портфолио выполненных ремонтов квартир и домов. Фото «до» и «после», планировки, сроки и бюджеты реальных проектов.">
    <meta name="keywords" content="портфолио ремонта, фото ремонта, проекты квартир, ремонт под ключ, примеры работ">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/portfolio'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Портфолио ремонтов — реальные проекты | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta property="og:description"
        content="Портфолио выполненных ремонтов квартир и домов. Фото «до» и «после», планировки, сроки и бюджеты.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/portfolio'); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title"
        content="Портфолио ремонтов — реальные проекты | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta name="twitter:description"
        content="Портфолио выполненных ремонтов квартир и домов. Фото «до» и «после», планировки, сроки.">
    <meta name="twitter:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta name="twitter:creator" content="@pkvartira">
    <meta name="twitter:domain"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>">
    <meta name="twitter:description"
        content="Наше портфолио ремонтов: реальные проекты квартир и домов, фото, планировки, метраж и примеры выполненных работ в Москве и области.">
    <meta name="twitter:image" content="https://pkvartira.ru/images/twitter-portfolio.jpg">

    <!-- Дополнительные мета-теги -->
    <meta name="theme-color" content="#FF6B35">
    <meta name="msapplication-TileColor" content="#FF6B35">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Ремонт квартир">

    <!-- Фавиконы и иконки -->
    <link rel="icon" type="image/png" href="/public/assets/images/logo/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/public/assets/images/logo/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/public/assets/images/logo/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/images/logo/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="ПКвартира" />
    <link rel="manifest" href="/public/assets/images/logo/favicon/site.webmanifest" />

    <!-- Структурированные данные (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Organization",
                "@id": "https://pkvartira.ru/#organization",
                "name": "Ваша компания",
                "url": "https://pkvartira.ru",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://pkvartira.ru/images/logo.png",
                    "width": 300,
                    "height": 100
                },
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+7-495-123-45-67",
                    "contactType": "customer service",
                    "availableLanguage": "Russian"
                },
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Улица Примерная, д. 1",
                    "addressLocality": "Москва",
                    "addressRegion": "Московская область",
                    "postalCode": "123456",
                    "addressCountry": "RU"
                },
                "sameAs": [
                    "https://vk.com/yourcompany",
                    "https://t.me/yourcompany"
                ]
            },
            {
                "@type": "WebSite",
                "@id": "https://pkvartira.ru/#website",
                "url": "https://pkvartira.ru",
                "name": "Ваша компания",
                "description": "Профессиональный ремонт квартир и домов под ключ",
                "publisher": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "inLanguage": "ru-RU"
            },
            {
                "@type": "WebPage",
                "@id": "https://pkvartira.ru/portfolio/#webpage",
                "url": "https://pkvartira.ru/portfolio/",
                "name": "Портфолио - Ремонт квартир и домов под ключ",
                "description": "Портфолио проектов ремонта квартир и домов: фото, планировки и примеры выполненных работ.",
                "isPartOf": {
                    "@id": "https://pkvartira.ru/#website"
                },
                "about": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "inLanguage": "ru-RU"
            },
            {
                "@type": "BreadcrumbList",
                "@id": "https://pkvartira.ru/portfolio/#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Главная",
                        "item": "https://pkvartira.ru/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Портфолио",
                        "item": "https://pkvartira.ru/portfolio/"
                    }
                ]
            }
        ]
    }
    </script>

    <!-- Swiper - Preload Critical Resources - Предзагрузка критических ресурсов -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </noscript>

    <!-- Font Awesome - Non-blocking CSS - Неблокирующие стили -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </noscript>

    <!-- Tailwind/JQuery - Defer JavaScript - Отложенные скрипты -->
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>

    <!-- Local Styles - Асинхронная загрузка основного файла стилей -->
    <link rel="preload" href="/public/assets/styles/main.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/public/assets/styles/main.css">
    </noscript>
</head>

<body class="bg-white">

    <?php include_once './public/components/header.php'; ?>

    <!-- Main Content -->
    <main class="pt-20">

        <section class="bg-gray-50">
            <div class="container mx-auto px-4 max-w-6xl py-10">
                <div class="relative bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        <div class="lg:col-span-7 p-6 md:p-10">
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">Наше портфолио</h1>
                            <p class="mt-2 text-gray-600">Посмотрите фото и видео наших работ, восхититесь тем, как мы
                                преображаем пространства.</p>
                            <p class="mt-3 text-sm text-gray-500">Рассчитайте стоимость ремонта, квартиры сейчас,
                                ориентируйтесь по цене и срокам.</p>

                            <div class="mt-6">
                                <a href="/calculator"
                                    class="inline-flex items-center justify-center px-7 py-3 rounded-lg bg-orange-500 text-white font-semibold shadow hover:bg-orange-600 transition">
                                    Рассчитать стоимость ремонта
                                </a>
                            </div>
                        </div>

                        <div class="lg:col-span-5 relative min-h-48">
                            <img src="/public/assets/images/pages/portfolio/img.jpg" class="w-full h-full object-cover"
                                alt="Портфолио">
                            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/60 to-transparent"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 bg-[#F3F6FB] rounded-2xl border border-gray-200 shadow-sm p-5 md:p-6">
                    <div class="flex items-center justify-between gap-4 flex-wrap">
                        <div class="text-sm font-semibold text-gray-800">Фильтры</div>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-2" id="filterContainer">
                        <button data-filter="all"
                            class="filter-btn h-10 px-4 rounded-md bg-blue-700 text-white text-sm font-semibold transition">Все
                            проекты</button>
                        <button data-filter="studio"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Студии</button>
                        <button data-filter="1room"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">1-комнатные</button>
                        <button data-filter="2room"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">2-комнатные</button>
                        <button data-filter="new"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Новостройка</button>
                        <button data-filter="secondary"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Вторичка</button>
                        <button data-filter="Евроремонт"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Евроремонт</button>
                        <button data-filter="Косметический"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Косметический</button>
                        <button data-filter="Дизайнерский"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Дизайнерский</button>
                        <button data-filter="Классический"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Классический</button>
                        <button data-filter="Современный"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Современный</button>
                        <button data-filter="Скандинавский"
                            class="filter-btn h-10 px-4 rounded-md bg-white border border-gray-200 text-gray-700 text-sm font-semibold transition">Скандинавский</button>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6" id="projectsGrid">
                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="1room cosmetic">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">Косметический ремонт,<br>1-комнатная
                                квартира</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>53 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="1room major">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">Кременный ремонт,<br>1-комнатная
                                квартира</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>33 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="2room new">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">ЖК Level Стрешнево</div>
                            <div class="text-xs text-gray-500">Планировка работы</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>35 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="2room secondary">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">ЖК Level Стрешнево</div>
                            <div class="text-xs text-gray-500">Планировка работы</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>33 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="studio new">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">Придумайтесь в Москве</div>
                            <div class="text-xs text-gray-500">Планировка работы</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>33 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden"
                        data-categories="studio secondary">
                        <div class="relative h-52">
                            <div class="swiper type-swiper-2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 1">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 2">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/public/assets/images/pages/portfolio/img.jpg"
                                            class="w-full h-full object-cover" alt="Фото 3">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div
                                    class="swiper-button-next !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </div>
                                <div
                                    class="swiper-button-prev !w-8 !h-8 !bg-white/90 !rounded-full !text-blue-700 !flex !items-center !justify-center after:!content-none">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-bold text-gray-900 leading-snug">ЖК Ритурил Дом</div>
                            <div class="text-xs text-gray-500">Планировка работы</div>
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div class="flex items-center gap-4 text-xs text-gray-600">
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                    <div class="inline-flex items-center gap-2"><i
                                            class="fas fa-ruler-combined text-blue-700"></i>35 м²</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bed text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-bath text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-couch text-xs"></i>
                                    </div>
                                    <div
                                        class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                        <i class="fas fa-utensils text-xs"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Before/After Section -->
                <style>
                    .before-after-slider {
                        position: relative;
                        overflow: hidden;
                        user-select: none;
                    }

                    .before-after-slider .img-container {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        overflow: hidden;
                    }

                    .before-after-slider .img-container.before {
                        width: 50%;
                        z-index: 2;
                        border-right: 3px solid white;
                    }

                    .before-after-slider .img-container.after {
                        width: 100%;
                        z-index: 1;
                    }

                    .before-after-slider .img-container img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        display: block;
                    }

                    .before-after-slider .slider-handle {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        width: 40px;
                        transform: translateX(-50%);
                        cursor: ew-resize;
                        z-index: 10;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        left: 50%;
                    }

                    .before-after-slider .slider-handle-inner {
                        width: 40px;
                        height: 40px;
                        background: white;
                        border-radius: 50%;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                </style>
                <div class="mt-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Фото до и после ремонта</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="before-after-slider h-64" id="slider1">
                                <div class="img-container after">
                                    <img src="/public/assets/images/pages/portfolio/img.jpg" alt="После">
                                </div>
                                <div class="img-container before" style="width: 50%;">
                                    <img src="/public/assets/images/pages/portfolio/img.jpg" alt="До">
                                </div>
                                <div class="slider-handle" style="left: 50%;">
                                    <div class="slider-handle-inner">
                                        <i class="fas fa-arrows-alt-h text-gray-600"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute top-4 left-4 bg-black/60 text-white text-xs px-3 py-1 rounded-full z-20">
                                    До</div>
                                <div
                                    class="absolute top-4 right-4 bg-blue-600 text-white text-xs px-3 py-1 rounded-full z-20">
                                    После</div>
                            </div>
                            <div class="p-4">
                                <div class="font-semibold text-gray-900">Косметический ремонт квартиры</div>
                                <div class="text-sm text-gray-500">33 м², 14 дней</div>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="before-after-slider h-64" id="slider2">
                                <div class="img-container after">
                                    <img src="/public/assets/images/pages/portfolio/img.jpg" alt="После">
                                </div>
                                <div class="img-container before" style="width: 50%;">
                                    <img src="/public/assets/images/pages/portfolio/img.jpg" alt="До">
                                </div>
                                <div class="slider-handle" style="left: 50%;">
                                    <div class="slider-handle-inner">
                                        <i class="fas fa-arrows-alt-h text-gray-600"></i>
                                    </div>
                                </div>
                                <div
                                    class="absolute top-4 left-4 bg-black/60 text-white text-xs px-3 py-1 rounded-full z-20">
                                    До</div>
                                <div
                                    class="absolute top-4 right-4 bg-blue-600 text-white text-xs px-3 py-1 rounded-full z-20">
                                    После</div>
                            </div>
                            <div class="p-4">
                                <div class="font-semibold text-gray-900">Евроремонт студии</div>
                                <div class="text-sm text-gray-500">28 м², 21 день</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-900">Похожие проекты</h2>
                    <a href="#" class="text-sm text-blue-700 hover:text-blue-800">Посмотреть всё</a>
                </div>

                <div class="mt-5 overflow-x-auto">
                    <div class="flex gap-4 min-w-max pb-2">
                        <div class="w-72 bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="relative">
                                <img src="/public/assets/images/pages/portfolio/img.jpg"
                                    class="w-full h-40 object-cover" alt="Похожий проект 1">
                                <div
                                    class="absolute right-3 bottom-3 bg-black/55 text-white text-xs px-2 py-1 rounded-md inline-flex items-center gap-2">
                                    <i class="fas fa-camera"></i>
                                    <span>17</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="font-semibold text-gray-900 text-sm leading-snug">Бессплатная стоимость,
                                    для ремонта</div>
                                <div class="mt-3 flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-4 text-xs text-gray-600">
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-ruler-combined text-blue-700"></i>33 м²</div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bed text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bath text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-couch text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-utensils text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-72 bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="relative">
                                <img src="/public/assets/images/pages/portfolio/img.jpg"
                                    class="w-full h-40 object-cover" alt="Похожий проект 2">
                                <div
                                    class="absolute right-3 bottom-3 bg-black/55 text-white text-xs px-2 py-1 rounded-md inline-flex items-center gap-2">
                                    <i class="fas fa-camera"></i>
                                    <span>17</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="font-semibold text-gray-900 text-sm leading-snug">ЖК Level Стрешнево</div>
                                <div class="text-xs text-gray-500">Планировка работы</div>
                                <div class="mt-3 flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-4 text-xs text-gray-600">
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-ruler-combined text-blue-700"></i>33 м²</div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bed text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bath text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-couch text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-utensils text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-72 bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <div class="relative">
                                <img src="/public/assets/images/pages/portfolio/img.jpg"
                                    class="w-full h-40 object-cover" alt="Похожий проект 3">
                                <div
                                    class="absolute right-3 bottom-3 bg-black/55 text-white text-xs px-2 py-1 rounded-md inline-flex items-center gap-2">
                                    <i class="fas fa-camera"></i>
                                    <span>13</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="font-semibold text-gray-900 text-sm leading-snug">ЖК Ритурил Дом</div>
                                <div class="text-xs text-gray-500">Планировка работы</div>
                                <div class="mt-3 flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-4 text-xs text-gray-600">
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-tag text-blue-700"></i>Под ключ</div>
                                        <div class="inline-flex items-center gap-2"><i
                                                class="fas fa-ruler-combined text-blue-700"></i>39 м²</div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bed text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-bath text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-couch text-xs"></i>
                                        </div>
                                        <div
                                            class="w-7 h-7 rounded-md bg-blue-50 border border-blue-200 flex items-center justify-center text-blue-700">
                                            <i class="fas fa-utensils text-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 bg-gradient-to-r from-blue-800 to-blue-700 rounded-2xl p-6 md:p-8 text-white">
                    <div class="text-xl md:text-2xl font-bold">Рассчитать похожий ремонт</div>
                    <div class="mt-5 grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                        <form action="/send/email" method="POST" class="md:col-span-7">
                            <div class="flex flex-col sm:flex-row gap-3">
                                <input type="hidden" name="Наше портфолио - Рассчитать похожий ремонт" id="">
                                <input name="теефон" type="tel" placeholder="+7 ___ ___-__-__"
                                    class="w-full px-4 py-3 rounded-lg text-gray-900 outline-none">
                                <button
                                    class="w-full sm:w-auto px-6 py-3 rounded-lg bg-orange-500 font-semibold hover:bg-orange-600 transition whitespace-nowrap">Рассчитать
                                    стоимость</button>
                            </div>
                        </form>
                        <div class="md:col-span-5 text-center">
                            <div class="text-sm text-blue-100">Бесплатная честная смета</div>
                            <div class="mt-2 text-sm text-blue-100">Точный расчет за 1 день</div>
                            <div class="mt-2 text-sm text-blue-100">Ответим за 5–10 минут</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include_once './public/components/footer.php'; ?>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Local Scripts -->
    <script src="/public/assets/scripts/components/swiper.js" defer></script>
    <script src="/public/assets/scripts/components/lazyIMG.js" defer></script>
    <script src="/public/assets/scripts/main/header.js" defer></script>

    <!-- Portfolio Swiper & Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper for all portfolio cards (type-swiper-2)
            const swipers = document.querySelectorAll('.type-swiper-2');
            swipers.forEach(function (swiperEl) {
                new Swiper(swiperEl, {
                    loop: true,
                    pagination: {
                        el: swiperEl.querySelector('.swiper-pagination'),
                        clickable: true,
                    },
                    navigation: {
                        nextEl: swiperEl.querySelector('.swiper-button-next'),
                        prevEl: swiperEl.querySelector('.swiper-button-prev'),
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                });
            });

            // Initialize Before/After Sliders
            const beforeAfterSliders = document.querySelectorAll('.before-after-slider');
            beforeAfterSliders.forEach(function (slider) {
                const handle = slider.querySelector('.slider-handle');
                const beforeContainer = slider.querySelector('.img-container.before');
                let isDragging = false;

                function updateSlider(x) {
                    const rect = slider.getBoundingClientRect();
                    let percentage = ((x - rect.left) / rect.width) * 100;
                    percentage = Math.max(0, Math.min(100, percentage));
                    handle.style.left = percentage + '%';
                    beforeContainer.style.width = percentage + '%';
                }

                handle.addEventListener('mousedown', function (e) {
                    isDragging = true;
                    e.preventDefault();
                    e.stopPropagation();
                });

                document.addEventListener('mousemove', function (e) {
                    if (!isDragging) return;
                    e.preventDefault();
                    updateSlider(e.clientX);
                });

                document.addEventListener('mouseup', function () {
                    isDragging = false;
                });

                // Touch support
                handle.addEventListener('touchstart', function (e) {
                    isDragging = true;
                    e.stopPropagation();
                }, { passive: true });

                document.addEventListener('touchmove', function (e) {
                    if (!isDragging) return;
                    updateSlider(e.touches[0].clientX);
                }, { passive: true });

                document.addEventListener('touchend', function () {
                    isDragging = false;
                });

                // Click to jump
                slider.addEventListener('click', function (e) {
                    if (e.target.closest('.slider-handle')) return;
                    updateSlider(e.clientX);
                });
            });

            // Filter functionality
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            const projectsGrid = document.getElementById('projectsGrid');

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const filter = this.getAttribute('data-filter');

                    // Update active button state
                    filterBtns.forEach(function (b) {
                        b.classList.remove('bg-blue-700', 'text-white');
                        b.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    this.classList.add('bg-blue-700', 'text-white');

                    // Filter projects
                    let visibleCount = 0;
                    projectCards.forEach(function (card) {
                        if (filter === 'all') {
                            card.style.display = 'block';
                            visibleCount++;
                        } else {
                            const categories = card.getAttribute('data-categories');
                            if (categories && categories.includes(filter)) {
                                card.style.display = 'block';
                                visibleCount++;
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });

                    // Update counter
                    const counterEl = document.querySelector('.text-sm.text-gray-500');
                    if (counterEl) {
                        counterEl.textContent = 'Найдено ' + visibleCount + ' проект' + (visibleCount === 1 ? '' : visibleCount < 5 ? 'а' : 'ов');
                    }
                });
            });
        });
    </script>
</body>

</html>