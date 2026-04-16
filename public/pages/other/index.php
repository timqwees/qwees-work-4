<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Современный интерьер в ЖК «Пример Парк» | Портфолио работ</title>
    <meta name="description"
        content="Пример выполненного ремонта квартиры в ЖК Пример Парк. Современный интерьер, фото до и после, список работ и использованные материалы.">
    <meta name="keywords"
        content="ремонт квартир, портфолио, ЖК Пример Парк, современный интерьер, ремонт под ключ, Москва">
    <meta name="author" content="Ваша компания">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://pkvartira.ru/portfolio/primer-park/">

    <!-- Open Graph (для соцсетей) -->
    <meta property="og:title" content="Современный интерьер в ЖК «Пример Парк» | Портфолио">
    <meta property="og:description"
        content="Пример выполненного ремонта квартиры в ЖК Пример Парк. Современный интерьер, фото до и после, список работ и использованные материалы.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pkvartira.ru/portfolio/primer-park/">
    <meta property="og:image" content="https://pkvartira.ru/images/og-portfolio.jpg">
    <meta property="og:site_name" content="Ваша компания">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Современный интерьер в ЖК «Пример Парк» | Портфолио">
    <meta name="twitter:description"
        content="Пример выполненного ремонта квартиры в ЖК Пример Парк. Современный интерьер, фото до и после, список работ и использованные материалы.">
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
                "@id": "https://pkvartira.ru/portfolio/primer-park/#webpage",
                "url": "https://pkvartira.ru/portfolio/primer-park/",
                "name": "Современный интерьер в ЖК «Пример Парк» - Портфолио",
                "description": "Пример выполненного ремонта квартиры в ЖК Пример Парк. Современный интерьер, фото до и после, список работ и использованные материалы.",
                "isPartOf": {
                    "@id": "https://pkvartira.ru/#website"
                },
                "about": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "inLanguage": "ru-RU"
            },
            {
                "@type": "CreativeWork",
                "@id": "https://pkvartira.ru/portfolio/primer-park/#project",
                "name": "Современный интерьер в ЖК «Пример Парк»",
                "description": "Ремонт 3-комнатной квартиры площадью 85 м² в ЖК Пример Парк. Современный интерьер для семьи с двумя детьми.",
                "creator": {
                    "@id": "https://pkvartira.ru/#organization"
                },
                "image": [
                    "https://images.unsplash.com/photo-1600210492486-724fe5c67fb0",
                    "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c",
                    "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3"
                ],
                "dateCreated": "2024",
                "keywords": "ремонт квартир, ЖК Пример Парк, современный интерьер, ремонт под ключ"
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

        <!-- Hero Section with Gallery -->
        <section class="bg-white">
            <div class="container mx-auto px-4 max-w-6xl py-12">
                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8">Современный интерьер в ЖК «Пример Парк»
                </h1>

                <!-- Image Gallery -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="https://placehold.co/800x600/6366f1/ffffff?text=Интерьер+гостиной"
                            alt="Интерьер гостиной" class="w-full h-full object-cover rounded-xl">
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://placehold.co/800x200/10b981/ffffff?text=Интерьер+кухни"
                                alt="Интерьер кухни" class="w-full h-40 object-cover rounded-xl">
                        </div>
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://placehold.co/800x200/f59e0b/ffffff?text=Интерьер+спальни"
                                alt="Интерьер спальни" class="w-full h-40 object-cover rounded-xl">
                        </div>
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://placehold.co/800x200/8b5cf6/ffffff?text=Интерьер+ванной"
                                alt="Интерьер ванной" class="w-full h-40 object-cover rounded-xl">
                        </div>
                    </div>
                </div>

                <!-- Key Parameters -->
                <div class="bg-gray-100 rounded-xl p-6 mb-12">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/4">
                            <h2 class="text-xl font-bold text-gray-800 bg-gray-200 px-3 py-1.5 rounded-lg">Основные
                                параметры
                            </h2>
                        </div>
                        <div class="md:w-3/4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Площадь</p>
                                    <p class="font-semibold text-gray-800">72 м²</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Тип квартиры</p>
                                    <p class="font-semibold text-gray-800">Двухкомнатная</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">ЖК</p>
                                    <p class="font-semibold text-gray-800">Пример Парк</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Срок</p>
                                    <p class="font-semibold text-gray-800">4 месяца</p>
                                </div>
                                <div class="col-span-2">
                                    <p class="text-sm text-gray-500 mb-1">Стоимость</p>
                                    <p class="font-semibold text-gray-800">2,5 – 3 млн ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Task -->
                <div class="mb-12">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/4">
                            <h2 class="text-xl font-bold text-gray-800 bg-gray-200 px-3 py-1.5 rounded-lg">Задача
                                клиента</h2>
                        </div>
                        <div class="md:w-3/4">
                            <p class="text-gray-600 leading-relaxed">
                                Создать стильный и функциональный интерьер для комфортного проживания молодой пары.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- What We Did -->
                <div class="mb-12">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/4">
                            <h2 class="text-xl font-bold text-gray-800 bg-gray-200 px-3 py-1.5 rounded-lg">Что мы
                                сделали</h2>
                        </div>
                        <div class="md:w-3/4">
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <li>Разработали дизайн-проект</li>
                                <li>Выполнили демонтаж и отделочные работы</li>
                                <li>Обустроили кухню-гостиную, спальню и ванную</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- List of Works -->
                <div class="mb-12">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/4">
                            <h2 class="text-xl font-bold text-gray-800 bg-gray-200 px-3 py-1.5 rounded-lg">Список работ
                            </h2>
                        </div>
                        <div class="md:w-3/4">
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <li>Демонтаж перегородок</li>
                                <li>Прокладка электрики</li>
                                <li>Выравнивание стен и пола</li>
                                <li>Установка дверей и освещения</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Materials and Solutions -->
                <div class="mb-12">
                    <div class="flex flex-row md:flex-col gap-6">
                        <div class="w-fill flex items-center justify-center">
                            <h2 class="text-xl font-bold text-gray-800 bg-gray-200 px-3 py-1.5 rounded-lg">Материалы и
                                решения
                            </h2>
                            <div class="h-[0.5px] bg-gray-400 flex-1 ml-4"></div>
                        </div>
                        <div class="flex justify-stretch items-stretch gap-4">
                            <!-- Left: Materials -->
                            <div>
                                <div class="flex gap-4 mb-4">
                                    <div class="flex-1 text-center">
                                        <div
                                            class="border relative overflow-hidden rounded-lg mb-2 aspect-square bg-amber-100">
                                            <img src="https://placehold.co/100x100/d4a574/ffffff?text=Ламинат"
                                                alt="Ламинат" class="w-full h-full object-cover">
                                        </div>
                                        <p class="text-xs font-medium text-gray-800">Ламинат</p>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <div
                                            class="border relative overflow-hidden rounded-lg mb-2 aspect-square bg-gray-300">
                                            <img src="https://placehold.co/100x100/9ca3af/ffffff?text=Керамогранит"
                                                alt="Керамогранит" class="w-full h-full object-cover">
                                        </div>
                                        <p class="text-xs font-medium text-gray-800">Керамогранит</p>
                                    </div>
                                    <div class="flex-1 text-center">
                                        <div
                                            class="border relative overflow-hidden rounded-lg mb-2 aspect-square bg-gray-100">
                                            <img src="https://placehold.co/100x100/f3f4f6/333333?text=Натяжные"
                                                alt="Натяжные потолки" class="w-full h-full object-cover">
                                        </div>
                                        <p class="text-xs font-medium text-gray-800">Натяжные потолки</p>
                                    </div>
                                </div>
                                <!-- Buttons/Badges -->
                                <div class="flex w-full gap-2">
                                    <span
                                        class="w-full flex border items-center justify-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-md">Декоративные
                                        панели</span>
                                    <span
                                        class="w-full border text-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-md">Декоративные
                                        панели</span>
                                </div>
                            </div>
                            <!-- Right: Bedroom Images -->
                            <div class="flex flex-row h-full gap-3">
                                <div class="relative overflow-hidden rounded-lg w-full">
                                    <img src="https://placehold.co/300x200/e5e7eb/666666?text=Спальня+1" alt="Спальня 1"
                                        class="w-full h-48 object-cover rounded-lg">
                                </div>
                                <div class="relative overflow-hidden rounded-lg w-full">
                                    <img src="https://placehold.co/300x200/d1d5db/666666?text=Спальня+2" alt="Спальня 2"
                                        class="w-full h-48 object-cover rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="text-center py-12">
                    <p class="text-gray-600 mb-6">Современный и уютный интерьер, полностью готовый к проживанию.</p>
                    <button
                        class="bg-orange-500 text-white px-8 py-4 rounded-lg font-medium hover:bg-orange-600 transition inline-flex items-center justify-center gap-2 text-lg">
                        Хочу похожий ремонт
                        <i class="fas fa-arrow-right"></i>
                    </button>
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