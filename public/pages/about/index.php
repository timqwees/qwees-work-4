<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>О компании
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ
    </title>
    <meta name="description"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — профессиональный ремонт квартир и домов под ключ. Опыт работы более 10 лет, гарантия качества, прозрачные цены.">
    <meta name="keywords"
        content="о компании, ремонт квартир, <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>, ремонт под ключ, строительная компания">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/about'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="О компании <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ">
    <meta property="og:description"
        content="Профессиональный ремонт квартир и домов под ключ. Опыт работы более 10 лет, гарантия качества.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/about'); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title"
        content="О компании <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ">
    <meta name="twitter:description"
        content="Профессиональный ремонт квартир и домов под ключ. Опыт работы более 10 лет, гарантия качества.">
    <meta name="twitter:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta name="twitter:creator" content="@pkvartira">
    <meta name="twitter:domain"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>">

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
                "url": "https://yourdomain.com",
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
                "url": "https://yourdomain.com",
                "name": "Ваша компания",
                "description": "Профессиональный ремонт квартир и домов под ключ",
                "publisher": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "inLanguage": "ru-RU"
            },
            {
                "@type": "WebPage",
                "@id": "https://pkvartira.ru/stocks/#webpage",
                "url": "https://pkvartira.ru/stocks/",
                "name": "Акции - Ремонт квартир и домов под ключ",
                "description": "Акции и скидки на ремонт квартир и домов под ключ. Выгодные предложения, бесплатный дизайн-проект, сезонные скидки.",
                "isPartOf": {
                    "@id": "https://pkvartira.ru/#website"
                },
                "about": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "inLanguage": "ru-RU"
            },
            {
                "@type": "Offer",
                "@id": "https://pkvartira.ru/stocks/#offer1",
                "name": "Скидка 10% до конца мая",
                "description": "Прозрачность на всех этапах работ, Бесплатный выезд и смета, приятная скидка",
                "provider": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "RUB",
                    "discount": "10",
                    "discountCurrency": "RUB"
                },
                "availability": "https://schema.org/InStock",
                "validFrom": "2024-05-01",
                "validThrough": "2024-05-31"
            },
            {
                "@type": "Offer",
                "@id": "https://pkvartira.ru/stocks/#offer2",
                "name": "Бесплатный дизайн-проект",
                "description": "Проект учитывает все нюансы ремонта при заказе от 1 000 000 ₽",
                "provider": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "RUB",
                    "price": "0",
                    "eligibleQuantity": {
                        "@type": "QuantitativeValue",
                        "minValue": "1000000"
                    }
                },
                "availability": "https://schema.org/InStock",
                "validFrom": "2024-05-01",
                "validThrough": "2024-06-30"
            },
            {
                "@type": "Offer",
                "@id": "https://pkvartira.ru/stocks/#offer3",
                "name": "Бесплатный выезд замерщика",
                "description": "Бесплатный выезд замерщика предоставляется для всех договоров",
                "provider": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "priceSpecification": {
                    "@type": "PriceSpecification",
                    "priceCurrency": "RUB",
                    "price": "0"
                },
                "availability": "https://schema.org/InStock",
                "validFrom": "2024-05-01",
                "validThrough": "2024-12-31"
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

        <!-- Section 1: Что мы -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <!-- Section Header -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-blue-600 p-2.5 rounded-full w-10 h-10 flex items-center justify-center text-white">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Что мы</h2>
                    <div class="h-[0.5px] bg-gray-400 flex-1 ml-4"></div>
                </div>

                <div class="flex flex-col gap-8">

                    <!-- Block 1 -->
                    <div class="flex flex-col md:flex-row gap-8 items-stretch justify-stretch">
                        <!-- Left: Image -->
                        <div class="relative flex-1">
                            <img src="/public/assets/images/pages/about/img.png" alt="Наша команда"
                                class="rounded-lg object-cover w-full h-full">
                        </div>

                        <!-- Right: Service Options -->
                        <div class="w-full flex-1 bg-[#F8F8FB] p-6 rounded-lg flex flex-col gap-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-wallet text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Ремонт квартир</h4>
                                    <p class="text-sm text-gray-500">Косметический, капитальный и дизайнерский ремонт
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-th-large text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Проектирование</h4>
                                    <p class="text-sm text-gray-500">Разработка дизайн-проектов любой сложности</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-layer-group text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Подбор материалов</h4>
                                    <p class="text-sm text-gray-500">Помощь в выборе материалов с выгодными ценами</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-chart-line text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Управление проектом</h4>
                                    <p class="text-sm text-gray-500">Полный контроль сроков и качества работ</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check-circle text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Гарантия 3 года</h4>
                                    <p class="text-sm text-gray-500">Официальная гарантия на все виды работ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Block 2 -->
                    <div class="flex flex-col md:flex-row items-start">
                        <!-- Left: Benefits -->
                        <div class="w-full">
                            <div class="w-fit grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-1">
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Опыт <strong>10 лет</strong> профессиональной
                                        работы</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Скидки до <strong>40%</strong> на
                                        материалы</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Более <strong>40+</strong> специалистов в
                                        штате</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Пробить оNERесНЫЕ имена в рески и
                                        сёльфисяки</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Фиксированные цены</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="check-icon-small">
                                        <i class="fas fa-check-circle text-orange-500"></i>
                                    </div>
                                    <span class="text-sm text-gray-700">Без скрытых платежей</span>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Button -->
                        <div class="w-full md:w-1/3 flex justify-end">
                            <a href="tel:<?= $site['phone']; ?>"
                                class="bg-orange-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-orange-600 transition inline-flex items-center justify-center gap-2">
                                Получить консультацию
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section 2: Что мы делаем -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 max-w-6xl">
                <!-- Section Header -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-blue-600 p-2.5 rounded-full w-10 h-10 flex items-center justify-center text-white">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Что мы делаем</h2>
                    <div class="h-[0.5px] bg-gray-400 flex-1 ml-4"></div>
                </div>

                <!-- Team Grid -->
                <div class="swiper swiper-type-5">
                    <div class="swiper-wrapper">
                        <!-- Team Member 1 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Андрей Смирнов"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Андрей Смирнов</h3>
                            <p class="text-xs text-gray-500">руководитель компании</p>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Екатерина Полянова"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Екатерина Полянова</h3>
                            <p class="text-xs text-gray-500">дизайнер интерьеров</p>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Дмитрий Соколов"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Дмитрий Соколов</h3>
                            <p class="text-xs text-gray-500">Прораб</p>
                        </div>

                        <!-- Team Member 4 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Алексей Иванов"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Алексей Иванов</h3>
                            <p class="text-xs text-gray-500">инженер-сметчик</p>
                        </div>

                        <!-- Team Member 5 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Ирина Петрова"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Ирина Петрова</h3>
                            <p class="text-xs text-gray-500">менеджер проектов</p>
                        </div>

                        <!-- Team Member 5 -->
                        <div class="swiper-slide cursor-pointer text-center group">
                            <div class="relative overflow-hidden rounded-xl mb-4">
                                <img src="public/assets/images/pages/about/сотрудники/img.avif" alt="Ирина Петрова"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <h3 class="font-semibold text-gray-800 text-sm">Ирина Петрова</h3>
                            <p class="text-xs text-gray-500">менеджер проектов</p>
                        </div>
                    </div>
                </div>

                <!-- View All Link -->
                <div class="text-center mt-8">
                    <a href="#" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium">
                        Посмотреть всех специалистов
                        <i class="fas fa-chevron-right text-xs"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section 3: Как мы контролируем качество -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 max-w-6xl">
                <!-- Section Header -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-blue-600 p-2.5 rounded-full w-10 h-10 flex items-center justify-center text-white">
                        <i class="fas fa-atom"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Как мы контролируем качество</h2>
                    <div class="h-[0.5px] bg-gray-400 flex-1 ml-4"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Showroom Card 1 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden">
                        <div class="relative h-64 overflow-hidden">
                            <img src="public/assets/images/pages/about/Как_мы_контролируем_качество/img.jpg"
                                alt="Шоурум" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-info text-white text-sm"></i>
                                </div>
                                <h3 class="font-semibold text-gray-800">Шоурум и офис</h3>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Приезжайте к нам в шоурум в центре Москвы, чтобы обсудить проект в шоуруме материальные
                                мести. Сможете прикоснуться текстуры, подобрать цвета и увидеть наши примеры работ.
                            </p>
                        </div>
                    </div>

                    <!-- Showroom Card 2 -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden">
                        <div class="relative h-64 overflow-hidden">
                            <img src="public/assets/images/pages/about/Как_мы_контролируем_качество/img.jpg"
                                alt="Шоурум" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-check text-white text-sm"></i>
                                </div>
                                <h3 class="font-semibold text-gray-800">Шоурум и офис</h3>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Познакомьтесь с ним с продуманным тактовымнапам, по стоянием, инжинирингом и погр -
                                качественные пьедие. Первичные риски работу на странице площадь темпарез 3.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Документы и гарантии -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 max-w-6xl">
                <!-- Section Header -->
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-blue-600 p-2.5 rounded-full w-10 h-10 flex items-center justify-center text-white">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Документы и гарантии</h2>
                    <div class="h-[0.5px] bg-gray-400 flex-1 ml-4"></div>
                </div>

                <div class="flex flex-col lg:flex-row gap-8 items-start">
                    <!-- Documents List -->
                    <div class="lg:w-1/2 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-center gap-3">
                                <div class="check-icon">
                                    <i class="fas fa-check-circle text-orange-500"></i>
                                </div>
                                <span class="text-sm text-gray-700">Честный текст контракта</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="check-icon">
                                    <i class="fas fa-check-circle text-orange-500"></i>
                                </div>
                                <span class="text-sm text-gray-700">Договор и смета</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="check-icon">
                                    <i class="fas fa-check-circle text-orange-500"></i>
                                </div>
                                <span class="text-sm text-gray-700">Заявление об учете и актах</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="check-icon">
                                    <i class="fas fa-check-circle text-orange-500"></i>
                                </div>
                                <span class="text-sm text-gray-700">ИНН / ОГРН</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="check-icon">
                                    <i class="fas fa-check-circle text-orange-500"></i>
                                </div>
                                <span class="text-sm text-gray-700">Гарантийные обязательства</span>
                            </div>
                        </div>

                        <button
                            class="mt-6 bg-white border border-gray-300 text-gray-700 px-6 py-2 rounded-full text-sm font-medium hover:bg-gray-50 transition inline-flex items-center gap-2">
                            Приложить к договору
                            <i class="fas fa-chevron-right text-xs"></i>
                        </button>
                    </div>

                    <!-- Documents Images -->
                    <div class="flex justify-center items-center">
                        <img src="public/assets/images/pages/about/договор.jpg" alt="Документы"
                            class="w-full max-w-md rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Media Partners Section -->
        <section class="py-10 bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="swiper swiper-type-6">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex items-center gap-2 text-gray-600">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="font-semibold text-sm">РБК</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2 text-blue-500">
                            <i class="fab fa-telegram"></i>
                            <span class="font-semibold text-sm">Telegram</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2 text-blue-600">
                            <i class="fas fa-at"></i>
                            <span class="font-semibold text-sm">Mail.ru</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2 text-red-600">
                            <span class="font-bold text-sm">РОССИЯ</span>
                            <span class="bg-red-600 text-white text-xs px-1 rounded">24</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2">
                            <span class="bg-blue-700 text-white font-bold text-sm px-3 py-1 rounded">РОССИЯ</span>
                            <span class="bg-red-600 text-white text-xs px-1 rounded">24</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2 text-green-600">
                            <i class="fas fa-check-circle"></i>
                            <span class="font-bold text-sm">2ГИС</span>
                        </div>
                        <div class="swiper-slide flex items-center gap-2">
                            <span class="bg-blue-600 text-white font-bold text-sm px-2 py-1 rounded">РОССИЯ</span>
                            <span class="bg-red-600 text-white text-xs px-1 rounded">2</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include_once './public/components/footer.php'; ?>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <!-- Local Scripts -->
    <script src="/public/assets/scripts/components/swiper.js" defer></script>
    <script src="/public/assets/scripts/components/lazyIMG.js" defer></script>
    <script src="/public/assets/scripts/main/header.js" defer></script>
</body>

</html>