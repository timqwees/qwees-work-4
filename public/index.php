<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ в Москве
    </title>
    <meta name="description"
        content="Профессиональный ремонт квартир и домов под ключ в Москве. Гарантия 3 года, прозрачные цены, опытные мастера. Бесплатный выезд и смета.">
    <meta name="keywords"
        content="ремонт квартир, ремонт под ключ, ремонт квартир Москва, отделка квартир, дизайн интерьера">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '')); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ в Москве">
    <meta property="og:description"
        content="Профессиональный ремонт квартир и домов под ключ. Гарантия 3 года, прозрачные цены, бесплатный выезд и смета.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '')); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — ремонт квартир под ключ в Москве">
    <meta name="twitter:description"
        content="Профессиональный ремонт квартир и домов под ключ. Гарантия 3 года, прозрачные цены.">
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
        "@id": "https://pkvartira.ru/contact/#webpage",
        "url": "https://pkvartira.ru/contact/",
        "name": "Контакты - Ремонт квартир и домов под ключ",
        "description": "Контактная информация для заказа ремонта квартир и домов под ключ. Телефоны, адрес, часы работы.",
        "isPartOf": {
          "@id": "https://pkvartira.ru/#website"
        },
        "about": {
          "@id": "https://pkvartira.ru/#organization"
        },
        "inLanguage": "ru-RU"
      },
      {
        "@type": "Service",
        "@id": "https://pkvartira.ru/#service",
        "name": "Ремонт квартир под ключ",
        "description": "Профессиональный ремонт квартир и домов под ключ в Москве",
        "provider": {
          "@id": "https://pkvartira.ru/#organization"
        },
        "serviceType": "Ремонтные услуги",
        "areaServed": {
          "@type": "City",
          "name": "Москва"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Услуги по ремонту",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Черновой ремонт",
                "description": "Строительные работы для подготовки помещения к чистовой отделке"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Чистовой ремонт",
                "description": "Полная отделка помещения с использованием качественных материалов"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Ремонт под ключ",
                "description": "Полный комплекс работ от проектирования до финальной уборки"
              }
            }
          ]
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://pkvartira.ru/contact/#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Главная",
            "item": "https://yourdomain.com"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Контакты",
            "item": "https://pkvartira.ru/contact/"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://pkvartira.ru/contact/#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "Какие виды ремонта вы выполняете?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Мы выполняем черновой, чистовой, косметический ремонт и ремонт под ключ для квартир и домов."
            }
          },
          {
            "@type": "Question",
            "name": "Какая гарантия на ваши работы?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Мы предоставляем гарантию на все виды работ до 3 лет."
            }
          },
          {
            "@type": "Question",
            "name": "Работаете ли вы по договору?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Да, мы работаем только по официальному договору с фиксированными сроками и ценой."
            }
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
    <main class="pt-20 flex flex-col gap-6">

        <!-- Hero Content -->
        <section
            class="relative text-white py-12 md:py-20 bg-[url(https://donhaus.ru/wp-content/uploads/2025/09/i-5.webp)] bg-center bg-cover bg-no-repeat">
            <div
                class="absolute z-0 top-0 left-0 right-0 bottom-0 w-full h-full bg-gradient-to-r from-[#DADADAE5] via-white to-transparent">
            </div>
            <div class="relative z-10 container mx-auto px-4">
                <div class="max-w-3xl">
                    <h1 class="z-10 hero-title text-4xl md:text-5xl font-bold mb-6 text-black">
                        Ремонт квартир под ключ<br> в Москве <span class="text-orange-500">— с гарантией 3 года</span>
                    </h1>
                    <p class="z-10 hero-subtitle text-2xl md:text-3xl mb-8 text-gray-800 max-w-2xl">
                        Рассчитаем стоимость за 1 минуту и зафиксируем цену в договоре </p>

                    <!-- Feature Cards -->
                    <ul class="flex flex-wrap gap-3 md:gap-4 mb-6 md:mb-8 justify-start">
                        <!-- block 1 -->
                        <li
                            class="feature-card flex items-center justify-center bg-white py-2 px-4 md:py-1 md:px-6 space-x-3 md:space-x-4 rounded-lg shadow-lg">
                            <i class="fa fa-clock text-orange-500 text-xl md:text-2xl"></i>
                            <div class="flex flex-col items-start justify-center">
                                <span class="text-base md:text-lg font-semibold text-gray-800">Бесплатный</span>
                                <p class="text-black text-xs md:text-sm -translate-y-1">замер за 24 часа</p>
                            </div>
                        </li>
                        <!-- block 2 -->
                        <li
                            class="feature-card flex items-center justify-center bg-white py-2 px-4 md:py-1 md:px-6 space-x-3 md:space-x-4 rounded-lg shadow-lg">
                            <i class="fa fa-clock text-orange-500 text-xl md:text-2xl"></i>
                            <div class="flex flex-col items-start justify-center">
                                <span class="text-base md:text-lg font-semibold text-gray-800">Финансирование</span>
                                <p class="text-black text-xs md:text-sm -translate-y-1">Сумма в договоре</p>
                            </div>
                        </li>
                        <!-- block 3 -->
                        <li
                            class="feature-card flex items-center justify-center bg-white py-2 px-4 md:py-1 md:px-6 space-x-3 md:space-x-4 rounded-lg shadow-lg">
                            <i class="fa fa-clock text-orange-500 text-xl md:text-2xl"></i>
                            <div class="flex flex-col items-start justify-center">
                                <span class="text-base md:text-lg font-semibold text-gray-800">Гарантия</span>
                                <p class="text-black text-xs md:text-sm -translate-y-1">На все проекты 3 года</p>
                            </div>
                        </li>

                    </ul>

                    <!-- CTA Button -->
                    <div class="text-center">
                        <a href="tel:<?php echo $site['phone']; ?>"
                            class="cta-button relative bg-orange-500 text-white px-6 md:px-8 py-3 rounded-xl text-lg w-full max-w-xs md:w-auto">
                            <span class="drop-shadow-lg font-sans">Получить бесплатный расчёт</span>
                        </a>
                        <p class="text-xs md:text-sm text-gray-600 mt-3">
                            Ответим за 5 минут • Бесплатно • Без обязательств
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- 2 -->
        <section
            class="py-16 bg-gradient-to-r from-[#D1E4F2] from-[#DFEFFB] from-[#D1E4F2] border-solid border rounded-2xl">
            <div class="container mx-auto px-4">
                <!-- title -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Узнать стоимость ремонта за 30 секунд
                    </h2>
                </div>

                <form action="/send/email" method="POST"
                    class="max-w-[95%] md:max-w-[80%] mx-auto flex flex-col flex-wrap md:flex-row gap-3 md:gap-4 justify-center items-center">
                    <select name="тип квартиры"
                        class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
                        <option value="" selected disabled>Выберите тип квартиры</option>
                        <option value="1 комнатная">1 комнатная</option>
                        <option value="2 комнатная">2-х комнатная</option>
                        <option value="3 комнатная">3-х комнатная</option>
                    </select>
                    <select name="площадь квартиры"
                        class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
                        <option value="" selected disabled>Площадь квартиры, м²</option>
                        <option value="1 комнатная">1 комнатная</option>
                        <option value="2 комнатная">2-х комнатная</option>
                        <option value="3 комнатная">3-х комнатная</option>
                    </select>
                    <select name="Тип квартиры"
                        class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
                        <option value="" selected disabled>Тип ремонта</option>
                        <option value="1 комнатная">1 комнатная</option>
                        <option value="2 комнатная">2-х комнатная</option>
                        <option value="3 комнатная">3-х комнатная</option>
                    </select>
                    <input name="телефон" placeholder="Ваш телефон" type="tel" maxlength="12"
                        class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
                    <button
                        class="cta-button relative bg-orange-500 text-white px-6 md:px-8 py-3 rounded-xl text-base md:text-xl w-full max-w-[350px] md:w-auto">
                        <span class="drop-shadow-lg font-sans">Расчитать стоимость</span>
                    </button>
                </form>
            </div>
        </section>

        <!-- 3 -->
        <section class="py-6 md:py-10 rounded-2xl">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">

                    <!-- Card 1 -->
                    <div class="p-3 md:p-4 text-center">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 bg-[#E7F2F9] rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <i class="fas fa-file-contract text-[#3F6A9B] text-lg md:text-2xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-semibold text-gray-800 mb-1">Работаем по договору</h3>
                        <p class="text-xs md:text-base">с фиксированными сроками</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="p-3 md:p-4 text-center">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 bg-[#E7F2F9] rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <i class="fas fa-file-contract text-[#3F6A9B] text-lg md:text-2xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-semibold text-gray-800 mb-1">Соблюдаем сроки</h3>
                        <p class="text-xs md:text-base">или платим неустойку</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="p-3 md:p-4 text-center">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 bg-[#E7F2F9] rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <i class="fas fa-file-contract text-[#3F6A9B] text-lg md:text-2xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-semibold text-gray-800 mb-1">Бесплатная доставка</h3>
                        <p class="text-xs md:text-base">материалов от партнеров</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="p-3 md:p-4 text-center">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 bg-[#E7F2F9] rounded-full flex items-center justify-center mx-auto mb-3 md:mb-4">
                            <i class="fas fa-file-contract text-[#3F6A9B] text-lg md:text-2xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-semibold text-gray-800 mb-1">Опыт более 10 лет,</h3>
                        <p class="text-xs md:text-base">реальные бригады, славяне</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- 4 -->
        <section class="py-16 rounded-2xl">
            <div class="container mx-auto px-4">
                <!-- title -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Какие виды ремонта мы делаем
                    </h2>
                    <p class="text-xl text-gray-600">
                        Выберите подходящий вариант для вашего помещения
                    </p>
                </div>

                <!-- swiper -->
                <div class="swiper swiper-type-3 py-8 md:py-14 mx-auto">
                    <div class="swiper-wrapper flex items-stretch">
                        <!-- Slide 1: Черновой ремонт -->
                        <li class="swiper-slide">
                            <div
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                <div class="relative">
                                    <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                        alt="Черновой ремонт" class="lazy w-full h-36 md:h-48 object-cover">
                                    <div
                                        class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                                        от 6000 ₽/м²
                                    </div>
                                </div>
                                <div class="p-4 md:p-6">
                                    <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Черновой ремонт
                                    </h3>
                                    <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                                        Cтроительные работы для подготовки помещения к чистовой отделке
                                    </p>
                                    <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Демонтажные работы</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Возведение перегородок</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Выравнивание стен и полов
                                        </li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Инженерные коммуникации</li>
                                    </ul>
                                    <a
                                        class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
                                        Подробнее →
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Slide 2: Чистовой ремонт -->
                        <li class="swiper-slide">
                            <div
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                <div class="relative">
                                    <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                        alt="Чистовой ремонт" class="lazy w-full h-36 md:h-48 object-cover">
                                    <div
                                        class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                                        от 10000 ₽/м²
                                    </div>
                                </div>
                                <div class="p-4 md:p-6">
                                    <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Чистовой ремонт
                                    </h3>
                                    <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                                        Полная помещения с использованием качественных материалов
                                    </p>
                                    <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Покраска стен и потолков
                                        </li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Напольные покрытия</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Установка дверей и плинтусов
                                        </li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Сантехнические работы</li>
                                    </ul>
                                    <a
                                        class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
                                        Подробнее →
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Slide 3: Ремонт под ключ -->
                        <li class="swiper-slide">
                            <!-- absolute -->
                            <div class="absolute -top-5 md:-top-7 left-2 md:left-4 z-10">
                                <span
                                    class="bg-orange-500 text-white px-2 md:px-4 py-1 md:py-2 rounded-t-xl text-xs md:text-sm font-bold">
                                    Популярно
                                </span>
                            </div>
                            <div
                                class="bg-white border border-orange-500 border-2 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition relative h-full">
                                <div class="absolute bg-orange-100 h-full w-full opacity-20"></div>
                                <div class="relative">
                                    <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                        alt="Ремонт под ключ" class="lazy w-full h-36 md:h-48 object-cover">
                                    <div
                                        class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                                        от 18000 ₽/м²
                                    </div>
                                </div>
                                <div class="p-4 md:p-6">
                                    <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Ремонт под ключ
                                    </h3>
                                    <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                                        Полный комплекс работ от проектирования до финальной уборки
                                    </p>
                                    <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Дизайн-проект</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Все строительные работы</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Закупка материалов</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Финальная уборка</li>
                                    </ul>
                                    <a
                                        class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
                                        Подробнее →
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Slide 4: Косметический ремонт -->
                        <li class="swiper-slide">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                                <div class="relative">
                                    <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                        alt="Косметический ремонт" class="lazy w-full h-48 object-cover">
                                    <div
                                        class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold">
                                        от 7000 ₽/м²
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Косметический ремонт</h3>
                                    <p class="text-gray-600 mb-4">
                                        Обновление интерьера без серьезных строительных работ
                                    </p>
                                    <ul class="text-gray-600 space-y-2 mb-6">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Покраска стен</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Замена освещения</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Установка декоративных
                                            элементов</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Мелкий ремонт</li>
                                    </ul>
                                    <a class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold">
                                        Подробнее →
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Slide 5: Дополнительный -->
                        <li class="swiper-slide">
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                                <div class="relative">
                                    <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                        alt="Косметический ремонт" class="lazy w-full h-48 object-cover">
                                    <div
                                        class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold">
                                        от Unknown ₽/м²
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Unkown services</h3>
                                    <p class="text-gray-600 mb-4">
                                        Тестовое обьявление для наполнения слайдера
                                    </p>
                                    <ul class="text-gray-600 space-y-2 mb-6">
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Пустой</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Пустой</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Пустой</li>
                                        <li><i class="fas fa-check text-green-500 mr-2"></i>Пустой</li>
                                    </ul>
                                    <a class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold">
                                        Подробнее →
                                    </a>
                                </div>
                            </div>
                        </li>

                    </div>
                    <div class="swiper-pagination mt-8"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!-- 5 -->
        <section class="px-4 py-8 rounded-2xl">
            <div class="container mx-auto">
                <div
                    class="flex flex-wrap gap-3 md:gap-4 justify-center max-w-[95%] md:max-w-[90%] mx-auto text-sm md:text-xl">
                    <!-- Button 1 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-building text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт квартир в новостройке</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>

                    <!-- Button 2 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-home text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт во вторичке</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>

                    <!-- Button 3 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-couch text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт студии</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>

                    <!-- Button 4 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-door-open text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт 1-комнатной</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>

                    <!-- Button 5 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-bed text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт 2-комнатной</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>

                    <!-- Button 6 -->
                    <a href="/"
                        class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
                        style="width: fit-content;">
                        <i class="fas fa-house-user text-orange-500 text-sm md:text-base"></i>
                        <span class="text-gray-800 font-medium">Ремонт 3-комнатной</span>
                        <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- 6 -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <!-- Header -->
                <div
                    class="relative mx-auto max-w-[75%] flex flex-col md:flex-row items-start md:items-center justify-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                        Наши последние работы
                    </h2>
                    <a href="/portfolio"
                        class="block md:absolute right-0 text-blue-600 hover:text-blue-700 transition font-semibold flex items-center gap-2">
                        Смотреть всё портфолио
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Project Cards -->
                <div class="relative max-w-[80%] mx-auto">
                    <!-- Swiper -->
                    <div class="swiper swiper-type-4 py-10">
                        <div class="swiper-wrapper">
                            <!-- Project 1 -->
                            <div class="swiper-slide">
                                <li
                                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                    <!-- Before/After Images -->
                                    <div class="grid grid-cols-2">
                                        <div class="relative border border-r-2 border-white">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="До" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                                                До
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="После" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-green-600 bg-opacity-90 text-white px-2 py-1 rounded text-xs font-semibold">
                                                После
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Info -->
                                    <div class="flex flex-col justify-between items-center p-6">

                                        <!-- up -->
                                        <div class="flex flex-col">
                                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                                Ремонт трехкомнатной квартиры в ЖК «Солнечный»
                                            </h3>
                                            <p class="text-gray-600 mb-4">
                                                Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет
                                                коридора, объединили гостиную
                                                с
                                                балконом.
                                            </p>
                                        </div>

                                        <!-- down -->
                                        <div class="flex items-center justify-between w-full gap-2">

                                            <div class="flex flex-col items-start justify-start text-sm text-gray-500">
                                                <div class="relative">
                                                    <i class="fas fa-ruler-combined mr-1"></i>
                                                    85 м²
                                                </div>
                                                <div class="relative">
                                                    <i class="fas fa-clock mr-1"></i>
                                                    3 месяца
                                                </div>
                                            </div>

                                            <a href="#"
                                                class="text-orange-500 hover:text-orange-600 transition font-semibold flex items-center gap-1">
                                                Смотреть проект
                                                <i class="fas fa-arrow-right text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <!-- Project 2 -->
                            <div class="swiper-slide">
                                <li
                                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                    <!-- Before/After Images -->
                                    <div class="grid grid-cols-2">
                                        <div class="relative border border-r-2 border-white">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="До" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                                                До
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="После" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-green-600 bg-opacity-90 text-white px-2 py-1 rounded text-xs font-semibold">
                                                После
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Info -->
                                    <div class="flex flex-col justify-between items-center p-6">

                                        <!-- up -->
                                        <div class="flex flex-col">
                                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                                Ремонт трехкомнатной квартиры в ЖК «Солнечный»
                                            </h3>
                                            <p class="text-gray-600 mb-4">
                                                Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет
                                                коридора, объединили гостиную
                                                с
                                                балконом.
                                            </p>
                                        </div>

                                        <!-- down -->
                                        <div class="flex items-center justify-between w-full gap-2">

                                            <div class="flex flex-col items-start justify-start text-sm text-gray-500">
                                                <div class="relative">
                                                    <i class="fas fa-ruler-combined mr-1"></i>
                                                    85 м²
                                                </div>
                                                <div class="relative">
                                                    <i class="fas fa-clock mr-1"></i>
                                                    3 месяца
                                                </div>
                                            </div>

                                            <a href="#"
                                                class="text-orange-500 hover:text-orange-600 transition font-semibold flex items-center gap-1">
                                                Смотреть проект
                                                <i class="fas fa-arrow-right text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <!-- Project 3 -->
                            <div class="swiper-slide">
                                <li
                                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                    <!-- Before/After Images -->
                                    <div class="grid grid-cols-2">
                                        <div class="relative border border-r-2 border-white">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="До" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                                                До
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="После" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-green-600 bg-opacity-90 text-white px-2 py-1 rounded text-xs font-semibold">
                                                После
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Info -->
                                    <div class="flex flex-col justify-between items-center p-6">

                                        <!-- up -->
                                        <div class="flex flex-col">
                                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                                Ремонт трехкомнатной квартиры в ЖК «Солнечный»
                                            </h3>
                                            <p class="text-gray-600 mb-4">
                                                Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет
                                                коридора, объединили гостиную
                                                с
                                                балконом.
                                            </p>
                                        </div>

                                        <!-- down -->
                                        <div class="flex items-center justify-between w-full gap-2">

                                            <div class="flex flex-col items-start justify-start text-sm text-gray-500">
                                                <div class="relative">
                                                    <i class="fas fa-ruler-combined mr-1"></i>
                                                    85 м²
                                                </div>
                                                <div class="relative">
                                                    <i class="fas fa-clock mr-1"></i>
                                                    3 месяца
                                                </div>
                                            </div>

                                            <a href="#"
                                                class="text-orange-500 hover:text-orange-600 transition font-semibold flex items-center gap-1">
                                                Смотреть проект
                                                <i class="fas fa-arrow-right text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>

                            <!-- Project 4 -->
                            <div class="swiper-slide">
                                <li
                                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                                    <!-- Before/After Images -->
                                    <div class="grid grid-cols-2">
                                        <div class="relative border border-r-2 border-white">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="До" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                                                До
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <img data-src="/public/assets/images/pages/main/виды_работы/img.webp"
                                                alt="После" class="lazy w-full h-48 object-cover">
                                            <div
                                                class="absolute top-2 left-2 bg-green-600 bg-opacity-90 text-white px-2 py-1 rounded text-xs font-semibold">
                                                После
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Project Info -->
                                    <div class="flex flex-col justify-between items-center p-6">

                                        <!-- up -->
                                        <div class="flex flex-col">
                                            <h3 class="text-xl font-bold text-gray-800 mb-2">
                                                Ремонт трехкомнатной квартиры в ЖК «Солнечный»
                                            </h3>
                                            <p class="text-gray-600 mb-4">
                                                Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет
                                                коридора, объединили гостиную
                                                с
                                                балконом.
                                            </p>
                                        </div>

                                        <!-- down -->
                                        <div class="flex items-center justify-between w-full gap-2">

                                            <div class="flex flex-col items-start justify-start text-sm text-gray-500">
                                                <div class="relative">
                                                    <i class="fas fa-ruler-combined mr-1"></i>
                                                    85 м²
                                                </div>
                                                <div class="relative">
                                                    <i class="fas fa-clock mr-1"></i>
                                                    3 месяца
                                                </div>
                                            </div>

                                            <a href="#"
                                                class="text-orange-500 hover:text-orange-600 transition font-semibold flex items-center gap-1">
                                                Смотреть проект
                                                <i class="fas fa-arrow-right text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <!-- 7 -->
        <section id="process" class="py-16 bg-blue-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Процесс работы
                    </h2>
                    <p class="text-xl text-gray-600">
                        Как мы работаем от идеи до реализации
                    </p>
                </div>

                <div class="relative grid md:grid-cols-4 gap-8">

                    <div class="hidden md:block absolute w-full h-0.5 bg-gray-300 top-10 z-0"></div>

                    <div class="text-center z-10">
                        <div
                            class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            1
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Заявка</h3>
                        <p class="text-gray-600">
                            Оставляете заявку или звоните нам для консультации
                        </p>
                    </div>

                    <div class="text-center z-10">
                        <div
                            class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            2
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Замер и расчет</h3>
                        <p class="text-gray-600">
                            Бесплатный выезд специалиста и точный расчет стоимости
                        </p>
                    </div>

                    <div class="text-center z-10">
                        <div
                            class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            3
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Договор и работы</h3>
                        <p class="text-gray-600">
                            Заключение договора и начало ремонтных работ
                        </p>
                    </div>

                    <div class="text-center z-10">
                        <div
                            class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            4
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Сдача проекта</h3>
                        <p class="text-gray-600">
                            Готовый объект и гарантия на выполненные работы
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8 -->
        <section id="prices" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Цены на наши услуги
                    </h2>
                    <p class="text-xl text-gray-600">
                        Прозрачное ценообразование без скрытых платежей
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white border-2 border-gray-200 rounded-xl p-8 hover:border-blue-600 transition">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Эконом</h3>
                        <div class="text-3xl font-bold text-blue-600 mb-4">от 3 000 ₽/м²</div>
                        <ul class="text-gray-600 space-y-3 mb-8">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Базовая отделка</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Стандартные материалы</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Срок: 30-45 дней</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Гарантия: 1 год</li>
                        </ul>
                        <button class="w-full bg-gray-200 text-gray-800 py-3 rounded-lg hover:bg-gray-300 transition">
                            Выбрать пакет
                        </button>
                    </div>

                    <div class="bg-blue-600 text-white rounded-xl p-8 transform scale-105 shadow-xl">
                        <div
                            class="bg-orange-500 text-white text-sm font-bold px-3 py-1 rounded-full inline-block mb-4">
                            ПОПУЛЯРНЫЙ
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Стандарт</h3>
                        <div class="text-3xl font-bold text-orange-300 mb-4">от 5 000 ₽/м²</div>
                        <ul class="space-y-3 mb-8">
                            <li><i class="fas fa-check text-orange-300 mr-2"></i>Качественная отделка</li>
                            <li><i class="fas fa-check text-orange-300 mr-2"></i>Хорошие материалы</li>
                            <li><i class="fas fa-check text-orange-300 mr-2"></i>Срок: 45-60 дней</li>
                            <li><i class="fas fa-check text-orange-300 mr-2"></i>Гарантия: 2 года</li>
                        </ul>
                        <button
                            class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-600 transition font-semibold">
                            Выбрать пакет
                        </button>
                    </div>

                    <div class="bg-white border-2 border-gray-200 rounded-xl p-8 hover:border-blue-600 transition">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Премиум</h3>
                        <div class="text-3xl font-bold text-blue-600 mb-4">от 8 000 ₽/м²</div>
                        <ul class="text-gray-600 space-y-3 mb-8">
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Дизайнерский ремонт</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Премиум материалы</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Срок: 60-90 дней</li>
                            <li><i class="fas fa-check text-green-500 mr-2"></i>Гарантия: 5 лет</li>
                        </ul>
                        <button class="w-full bg-gray-200 text-gray-800 py-3 rounded-lg hover:bg-gray-300 transition">
                            Выбрать пакет
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9 -->
        <section id="portfolio" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Наши работы
                    </h2>
                    <p class="text-xl text-gray-600">
                        Примеры реализованных проектов
                    </p>
                </div>

                <div class="swiper swiper-type-1 mb-8">
                    <div class="swiper-wrapper">
                        <!-- slide 1 -->
                        <div class="swiper-slide">
                            <div class="relative group">
                                <img data-src="/public/assets/images/pages/main/виды_работы/img2.webp" alt="Проект 1"
                                    class="lazy w-full h-96 object-cover rounded-lg">
                                <!-- hover background -->
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                    <div class="text-white text-center">
                                        <h3 class="text-2xl font-bold mb-2">Современная гостиная</h3>
                                        <p class="mb-4">Площадь: 35 м²</p>
                                        <a href=""
                                            class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                                            Смотреть проект
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative group">
                                <img data-src="/public/assets/images/pages/main/виды_работы/img2.webp" alt="Проект 2"
                                    class="lazy w-full h-96 object-cover rounded-lg">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                    <div class="text-white text-center">
                                        <h3 class="text-2xl font-bold mb-2">Кухня-гостиная</h3>
                                        <p class="mb-4">Площадь: 42 м²</p>
                                        <a href=""
                                            class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                                            Смотреть проект
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative group">
                                <img data-src="/public/assets/images/pages/main/виды_работы/img2.webp" alt="Проект 3"
                                    class="lazy w-full h-96 object-cover rounded-lg">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                    <div class="text-white text-center">
                                        <h3 class="text-2xl font-bold mb-2">Ванная комната</h3>
                                        <p class="mb-4">Площадь: 12 м²</p>
                                        <a href=""
                                            class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                                            Смотреть проект
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="relative group">
                                <img data-src="/public/assets/images/pages/main/виды_работы/img2.webp" alt="Проект 4"
                                    class="lazy w-full h-96 object-cover rounded-lg">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                    <div class="text-white text-center">
                                        <h3 class="text-2xl font-bold mb-2">Спальня</h3>
                                        <p class="mb-4">Площадь: 18 м²</p>
                                        <a href=""
                                            class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                                            Смотреть проект
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="text-center">
                    <a href="" class="bg-orange-500 text-white px-8 py-3 rounded-lg hover:bg-orange-600 transition">
                        Смотреть все проекты
                    </a>
                </div>
            </div>
        </section>

        <!-- 10 -->
        <section id="reviews" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Отзывы клиентов
                    </h2>
                    <p class="text-xl text-gray-600">
                        Что говорят о нас наши клиенты
                    </p>
                </div>

                <review-lab data-widgetid="69d6a3731ab6330a0b879de7"></review-lab>
                <script src="https://app.reviewlab.ru/widget/index-es2015.js" defer></script>

            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Часто задаваемые вопросы
                    </h2>
                    <p class="text-xl text-gray-600">
                        Ответы на популярные вопросы о наших услугах
                    </p>
                </div>

                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-lg p-6">
                            <button class="w-full text-left flex justify-between items-center faq-toggle">
                                <h3 class="text-lg font-semibold text-gray-800">Какой срок выполнения ремонта?</h3>
                                <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                            </button>
                            <div class="mt-4 text-gray-600 hidden faq-content">
                                Срок ремонта зависит от площади и сложности работ. В среднем: эконом-ремонт - 30-45
                                дней,
                                стандартный - 45-60 дней, дизайнерский - 60-90 дней.
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-6">
                            <button class="w-full text-left flex justify-between items-center faq-toggle">
                                <h3 class="text-lg font-semibold text-gray-800">Какая гарантия на работы?</h3>
                                <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                            </button>
                            <div class="mt-4 text-gray-600 hidden faq-content">
                                Мы предоставляем гарантию от 1 года до 5 лет в зависимости от выбранного пакета услуг.
                                Все гарантийные обязательства закреплены в договоре.
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-6">
                            <button class="w-full text-left flex justify-between items-center faq-toggle">
                                <h3 class="text-lg font-semibold text-gray-800">Работаете ли вы с материалами заказчика?
                                </h3>
                                <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                            </button>
                            <div class="mt-4 text-gray-600 hidden faq-content">
                                Да, мы можем работать с материалами заказчика. В этом случае стоимость работ
                                будет скорректирована после оценки объема и сложности работ.
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-6">
                            <button class="w-full text-left flex justify-between items-center faq-toggle">
                                <h3 class="text-lg font-semibold text-gray-800">Как происходит оплата?</h3>
                                <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                            </button>
                            <div class="mt-4 text-gray-600 hidden faq-content">
                                Оплата производится поэтапно: предоплата 30%, промежуточные платежи
                                по завершении этапов работ, финальный платеж после сдачи объекта.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 gradient-primary text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Готовы начать ремонт вашей мечты?
                </h2>
                <p class="text-xl mb-8 text-gray-100">
                    Оставьте заявку и получите бесплатную консультацию и расчет стоимости
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:<?php echo $site['phone']; ?>"
                        class="bg-orange-500 text-white px-8 py-4 rounded-lg font-semibold hover:bg-orange-600 transition transform hover:scale-105">
                        <i class="fas fa-phone mr-2"></i>
                        Оставить заявку
                    </a>
                    <a href="/calculator"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                        <i class="fas fa-calculator mr-2"></i>
                        Рассчитать стоимость
                    </a>
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
    <script src="/public/assets/scripts/components/faq.js" defer></script>

</body>

</html>