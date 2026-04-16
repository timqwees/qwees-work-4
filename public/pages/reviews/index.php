<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Отзывы клиентов — реальные мнения |
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>
    </title>
    <meta name="description"
        content="Отзывы клиентов о ремонте квартир. Рейтинг 5.0/5, реальные фото и видео отзывы, проверенные заказчики.">
    <meta name="keywords" content="отзывы, отзывы о ремонте, рейтинг ремонт, мнения клиентов">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/reviews'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Отзывы клиентов — реальные мнения | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta property="og:description"
        content="Отзывы клиентов о ремонте квартир. Рейтинг 5.0/5, реальные фото и видео отзывы.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/reviews'); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title"
        content="Отзывы клиентов — реальные мнения | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta name="twitter:description"
        content="Отзывы клиентов о ремонте квартир. Рейтинг 5.0/5, реальные фото и видео отзывы.">
    <meta name="twitter:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta name="twitter:creator" content="@pkvartira">
    <meta name="twitter:domain"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>">
    <meta name="twitter:description"
        content="Отзывы клиентов о ремонте квартир и домов под ключ. Реальные мнения, рейтинг 5,0/5, примеры выполненных работ. Москва и область.">
    <meta name="twitter:image" content="https://pkvartira.ru/images/twitter-image.jpg">

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
        "@id": "https://pkvartira.ru/reviews/#webpage",
        "url": "https://pkvartira.ru/reviews/",
        "name": "Отзывы клиентов - Ремонт квартир и домов под ключ",
        "description": "Отзывы клиентов о ремонте квартир и домов под ключ. Реальные мнения и оценки.",
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
        "@id": "https://pkvartira.ru/reviews/#breadcrumb",
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
            "name": "Отзывы",
            "item": "https://pkvartira.ru/reviews/"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "https://pkvartira.ru/reviews/#faq",
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

        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Что говорят наши клиенты</h1>
                        <p class="text-gray-600">Честные отзывы от владельцев квартир, для которых мы провели ремонт под
                            ключ в Москве и области.</p>
                    </div>

                    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 md:p-8">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                            <div class="md:col-span-4">
                                <div class="flex flex-col items-center md:items-start">

                                    <review-lab-simple data-widgetid="69d6a3731ab6330a0b879de7"></review-lab-simple>
                                    <script src="https://app.reviewlab.ru/widget/index-simple.js" defer></script>

                                </div>
                            </div>

                            <div class="md:col-span-8">
                                <div class="space-y-4 md:border-l border-gray-200 pl-6">
                                    <div class="flex items-center gap-4">
                                        <i class="fas fa-check-circle text-orange-500 text-xl w-6"></i>
                                        <div class="flex items-center gap-3">
                                            <span class="text-2xl font-extrabold text-gray-900">100+</span>
                                            <span class="text-gray-600 md:text-xl">честных отзывов</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="fas fa-heart text-orange-500 text-xl w-6"></i>
                                        <div class="flex items-center gap-3">
                                            <span class="text-2xl font-extrabold text-gray-900">900+</span>
                                            <span class="text-gray-600 md:text-xl">довольных клиентам</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="fas fa-thumbs-up text-orange-500 text-xl w-6"></i>
                                        <div class="flex items-center gap-3">
                                            <span class="text-2xl font-extrabold text-gray-900">100%</span>
                                            <span class="text-gray-600 md:text-xl">рекомендовали нас близким и
                                                знакомым</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6">
                        <a href="tel:<?php echo $site['phone']; ?>"
                            class="inline-flex items-center justify-center px-8 py-3 rounded-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold shadow hover:from-orange-600 hover:to-orange-700 transition">
                            Оставить заявку на ремонт
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-12">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Оставленные отзывы клиентов</h2>

                    <review-lab data-widgetid="69d6a3731ab6330a0b879de7"></review-lab>
                    <script src="https://app.reviewlab.ru/widget/index-es2015.js" defer></script>

                </div>
            </div>
        </section>

        <section class="pb-12">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Реальные объекты наших клиентов</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <img class="w-full h-44 object-cover" src="/public/assets/images/pages/reviews/img.png"
                                alt="Проект 1">
                            <div class="p-4">
                                <div class="font-semibold text-center text-gray-900">Виктор Андреев</div>
                                <a href="#"
                                    class="mt-3 inline-flex w-full items-center justify-center px-4 py-2 rounded-lg bg-blue-700 text-white font-semibold hover:bg-blue-800 transition">Смотреть
                                    проект</a>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <img class="w-full h-44 object-cover" src="/public/assets/images/pages/reviews/img.png"
                                alt="Проект 2">
                            <div class="p-4">
                                <div class="font-semibold text-center text-gray-900">Ольга и Антон Никифоровы</div>
                                <a href="#"
                                    class="mt-3 inline-flex w-full items-center justify-center px-4 py-2 rounded-lg bg-blue-700 text-white font-semibold hover:bg-blue-800 transition">Смотреть
                                    проект</a>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
                            <img class="w-full h-44 object-cover" src="/public/assets/images/pages/reviews/img.png"
                                alt="Проект 3">
                            <div class="p-4">
                                <div class="font-semibold text-center text-gray-900">Елена Сергеева</div>
                                <a href="#"
                                    class="mt-3 inline-flex w-full items-center justify-center px-4 py-2 rounded-lg bg-blue-700 text-white font-semibold hover:bg-blue-800 transition">Смотреть
                                    проект</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-16">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Готовы обсудить стоимость вашего
                            ремонта?</h2>
                        <p class="mt-2 text-gray-600">Оставьте заявку, обсудим проект, сориентируем по цене и срокам</p>
                        <a href="tel:<?= $site['phone']; ?>"
                            class="mt-6 inline-flex items-center justify-center px-10 py-4 rounded-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold shadow hover:from-orange-600 hover:to-orange-700 transition">
                            Оставить заявку
                        </a>
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
    <script src="/public/assets/scripts/components/faq.js" defer></script>

    <script src="https://myreviews.dev/widget/dist/index.js" defer></script>
    <script>
        (function () {
            var myReviewsInit = function () {
                new window.myReviews.BlockWidget({
                    uuid: "1d241d42-ea23-4cd7-9053-ea70e3006641",
                    name: "g88142113",
                    additionalFrame: "none",
                    lang: "ru",
                    widgetId: "1"
                }).init();

                new window.myReviews.StickerWidget({
                    uuid: "1d241d42-ea23-4cd7-9053-ea70e3006641",
                    name: "sticker_2",
                    additionalFrame: "none",
                    lang: "ru",
                    widgetId: "2",
                    serviceId: "2"
                }).init();
            };

            if (document.readyState === "loading") {
                document.addEventListener('DOMContentLoaded', function () {
                    myReviewsInit();
                });
            } else {
                myReviewsInit();
            }
        })();
    </script>
</body>

</html>