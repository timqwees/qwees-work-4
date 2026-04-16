<?php $site = Setting\Route\Function\Functions::site(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Контакты — связаться с нами |
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>
    </title>
    <meta name="description"
        content="Контакты <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>. Телефон, адрес, WhatsApp, Telegram. Бесплатная консультация и выезд на объект.">
    <meta name="keywords" content="контакты, телефон, адрес, связаться, ремонт квартир">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/contact'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Контакты — связаться с нами | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta property="og:description"
        content="Контакты <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>. Телефон, адрес, WhatsApp, Telegram. Бесплатная консультация.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/contact'); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title"
        content="Контакты — связаться с нами | <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>">
    <meta name="twitter:description"
        content="Контакты <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>. Телефон, адрес, WhatsApp, Telegram. Бесплатная консультация.">
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

        <!-- Contact Section -->
        <section>
            <div class="container mx-auto px-4">
                <div class="text-start mb-12">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Контакты
                    </h1>
                    <p class="text-xl text-gray-600">
                        Свяжитесь с нами для консультации
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Left Column -->
                    <div>
                        <!-- Address -->
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>Наш адрес
                            </h2>
                            <p class="text-gray-700 text-lg mb-2">Москва, ул. Примерная, д. 5, офис 45</p>
                            <p class="text-gray-600 mb-4">ЖК "Пример Парк", 5 минут от метро "Примерная"</p>
                            <a href="tel:<?= $site['phone']; ?>"
                                class="cta-button bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">
                                Записаться на визит
                            </a>
                        </div>

                        <!-- Map -->
                        <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
                            <iframe
                                src="https://yandex.ru/map-widget/v1/?um=constructor%3A8926e81e8830c84de818fa1c2bff8fc2b53477d370e416a1e2bf890ad13f2855&amp;source=constructor"
                                width="100%" height="400" frameborder="0"></iframe>
                        </div>

                        <!-- Phone -->
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-phone-alt text-blue-600 mr-3"></i>+7 (495) 123-45-67
                            </h2>
                            <a href="tel:<?= $site['phone']; ?>"
                                class="cta-button bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                                Позвонить нам
                            </a>
                        </div>

                        <!-- Messengers -->
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-comment-dots text-blue-600 mr-3"></i>Мессенджеры
                            </h2>
                            <div class="flex space-x-4 mb-3">
                                <a href="<?= $site['telegram']; ?>"
                                    class="text-blue-500 hover:text-blue-700 text-4xl"><i
                                        class="fab fa-telegram"></i></a>
                                <a href="<?= $site['whatsapp']; ?>"
                                    class="text-green-500 hover:text-green-700 text-4xl"><i
                                        class="fab fa-whatsapp"></i></a>
                                <a href="<?= $site['max'] ?>"
                                    class="flex items-center text-gray-600 hover:text-blue-600 transition">
                                    <img class="h-9 w-9" src="/public/assets/images/icons/MAX.svg" alt="Logo Max">
                                </a>
                            </div>
                            <a href="mailto:<?php echo $site['email']; ?>"
                                class="text-blue-600 hover:underline">Написать нам</a>
                        </div>

                        <!-- Company Details -->
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-building text-blue-600 mr-3"></i>Реквизиты
                            </h2>
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <p class="text-gray-700 mb-2"><strong>ООО "Ремонт-Профи"</strong></p>
                                <p class="text-gray-600 mb-2">ИНН: 7712345678</p>
                                <p class="text-gray-600 mb-2">ОГРН: 1237700123456</p>
                                <p class="text-gray-600">Юридический адрес: Москва, ул. Примерная, д. 5, офис 45</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <!-- Contact Form -->
                        <div class="bg-white border rounded-xl p-8">
                            <h2 class="text-3xl font-bold text-gray-800 mb-6">Оставить заявку</h2>
                            <form action="/send/email" method="POST" class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Ваше имя *</label>
                                    <input name="имя" type="text" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Телефон *</label>
                                    <input name="телефон" type="tel" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                                    <input name="почта" type="email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Тип ремонта</label>
                                    <select name="тип ремонта"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                        <option>Ремонт под ключ</option>
                                        <option>Черновой ремонт</option>
                                        <option>Чистовой ремонт</option>
                                        <option>Косметический ремонт</option>
                                        <option>Дизайн-проект</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Площадь (м²)</label>
                                    <input name="площадь" type="number"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Сообщение</label>
                                    <textarea name="сообщение" rows="4"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input type="checkbox" id="privacy" class="mr-2" required>
                                    <label for="privacy" class="text-gray-600 text-sm">
                                        Согласен с <a href="#" class="text-blue-600 hover:underline">политикой
                                            конфиденциальности</a>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-600 transition">
                                    Отправить заявку
                                </button>
                            </form>
                        </div>

                        <!-- Working Hours -->
                        <div class="mt-8 bg-blue-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-clock text-blue-600 mr-3"></i>Время работы
                            </h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Понедельник - Пятница</span>
                                    <span class="font-semibold text-gray-800">9:00 - 19:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Суббота</span>
                                    <span class="font-semibold text-gray-800">10:00 - 17:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-700">Воскресенье</span>
                                    <span class="font-semibold text-gray-800">Выходной</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Остались вопросы?
                </h2>
                <p class="text-xl mb-8">
                    Наши специалисты готовы проконсультировать вас по любым вопросам
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:<?= $site['phone']; ?>"
                        class="bg-orange-500 text-white px-8 py-4 rounded-lg font-semibold hover:bg-orange-600 transition">
                        <i class="fas fa-phone mr-2"></i>
                        Позвонить нам
                    </a>
                    <a href="mailto:<?php echo $site['email']; ?>?cc=<?php echo $site['email']; ?>&body=Здравствуйте, хотели бы получить консультацию по вашим услугам"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                        <i class="fas fa-envelope mr-2"></i>
                        Написать письмо
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

    <!-- <section id="calculator" class="py-16 bg-blue-50 hidden">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
          Калькулятор стоимости ремонта
        </h2>
        <p class="text-xl text-gray-600">
          Рассчитайте примерную стоимость вашего проекта
        </p>
      </div>

      <div class="max-w-4xl mx-auto bg-white rounded-xl p-8 shadow-lg">
        <div class="grid md:grid-cols-2 gap-8">
          <div>
            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Тип помещения</label>
              <select
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                <option>Квартира</option>
                <option>Дом</option>
                <option>Офис</option>
                <option>Коммерческое помещение</option>
              </select>
            </div>

            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Площадь (м²)</label>
              <input type="number" placeholder="Например: 50"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Количество комнат</label>
              <input type="number" placeholder="Например: 2"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Ванная комната</label>
              <select
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                <option>1</option>
                <option>2</option>
                <option>3+</option>
              </select>
            </div>
          </div>

          <div>
            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Тип ремонта</label>
              <div class="space-y-3">
                <label class="flex items-center">
                  <input type="radio" name="repair-type" class="mr-3 text-blue-600">
                  <span>Экономный ремонт</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" name="repair-type" class="mr-3 text-blue-600" checked>
                  <span>Капитальный ремонт</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" name="repair-type" class="mr-3 text-blue-600">
                  <span>Дизайнерский ремонт</span>
                </label>
              </div>
            </div>

            <div class="mb-6">
              <label class="block text-gray-700 font-semibold mb-2">Дополнительные услуги</label>
              <div class="space-y-2">
                <label class="flex items-center">
                  <input type="checkbox" class="mr-3 text-blue-600">
                  <span>Дизайн-проект</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="mr-3 text-blue-600">
                  <span>Монтаж сантехники</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="mr-3 text-blue-600">
                  <span>Электромонтажные работы</span>
                </label>
                <label class="flex items-center">
                  <input type="checkbox" class="mr-3 text-blue-600">
                  <span>Установка мебели</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-8 p-6 bg-blue-50 rounded-lg">
          <div class="flex justify-between items-center">
            <div>
              <div class="text-gray-600">Примерная стоимость:</div>
              <div class="text-3xl font-bold text-blue-600">от 150 000 ₽</div>
            </div>
            <button class="bg-orange-500 text-white px-8 py-3 rounded-lg hover:bg-orange-600 transition">
              Получить точный расчет
            </button>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</body>

</html>