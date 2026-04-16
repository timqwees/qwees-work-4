<?php $site = Setting\Route\Function\Functions::site(); ?>
<?php
$calcData = (object) [
    // Типы объектов (id => [название, подпись, иконка])
    'objects' => [
        'studio' => ['Квартира-студия', 'до 35 м²', 'fa-border-all'],
        '1k' => ['1-комнатная квартира', 'до 45 м²', 'fa-table-cells'],
        '2k' => ['2-комнатная квартира', 'до 65 м²', 'fa-table-cells-large'],
        '3k' => ['3-комнатная квартира', 'до 85 м²', 'fa-grip'],
        '4k' => ['4-комнатная квартира', 'от 85 м²', 'fa-grip-vertical'],
    ],
    // Тип фонда
    'fonds' => [
        'новостройка' => ['Новостройка', 'Без отделки или с отделкой от застройщика', 'fa-building'],
        'вторичка' => ['Вторичка', 'С демонтажом/перепланировкой по необходимости', 'fa-house'],
    ],
    // Тип ремонта
    'repairs' => [
        'черновой' => ['Черновой ремонт', 'Подготовка под чистовую отделку', 'fa-trowel-bricks'],
        'косметический' => ['Косметический ремонт', 'Обновление отделки без сложных работ', 'fa-paint-roller'],
        'под_ключ' => ['Ремонт под ключ', 'Полный комплекс работ', 'fa-key'],
    ],
    // Пресеты площади (комнаты => м²)
    'areas' => ['28', '38', '55', '75', '95'],
    // Дополнительные опции (id => [название, цена за м², фикс цена])
    'opts' => [
        'дизайнер' => ['Нужна помощь дизайнера', 1200, 0],
        'демонтаж' => ['Демонтаж старой отделки', 900, 0],
        'шумоизоляция' => ['Шумоизоляция квартиры', 1100, 0],
        'теплый_пол' => ['Тёплый пол', 0, 35000],
    ],
    // Базовые цены за м² по типу ремонта
    'prices' => ['черновой' => 12000, 'косметический' => 16000, 'под_ключ' => 22000],
    // Коэффициент фонда
    'k' => ['новостройка' => 1.0, 'вторичка' => 1.12],
    // Диапазон расчёта
    'from' => 0.92,
    'to' => 1.10,
    // Площадь
    'min' => 10,
    'max' => 250,
    'default' => 30,
];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Калькулятор ремонта квартиры — рассчитать стоимость онлайн |
        <?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>
    </title>
    <meta name="description"
        content="Бесплатный онлайн-калькулятор ремонта квартиры. Рассчитайте стоимость ремонта под ключ за 1 минуту. Точный расчёт с учётом площади, типа ремонта и дополнительных опций.">
    <meta name="keywords"
        content="калькулятор ремонта квартиры, расчёт стоимости ремонта, сколько стоит ремонт, ремонт под ключ цена">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-crossorigin">
    <meta name="content-language" content="ru">
    <link rel="canonical"
        href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/calculator'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Калькулятор ремонта квартиры — рассчитать стоимость онлайн">
    <meta property="og:description"
        content="Бесплатный онлайн-калькулятор ремонта квартиры. Рассчитайте стоимость ремонта под ключ за 1 минуту.">
    <meta property="og:url"
        content="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? '') . '/calculator'); ?>">
    <meta property="og:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta property="og:site_name"
        content="<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?> — Ремонт квартир под ключ">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@pkvartira">
    <meta name="twitter:title" content="Калькулятор ремонта квартиры — рассчитать стоимость онлайн">
    <meta name="twitter:description"
        content="Бесплатный онлайн-калькулятор ремонта квартиры. Рассчитайте стоимость ремонта под ключ за 1 минуту.">
    <meta name="twitter:image"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/public/assets/images/logo/favicon/favicon-96x96.png">
    <meta name="twitter:creator" content="@pkvartira">
    <meta name="twitter:domain"
        content="<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>">

    <link rel="icon" type="image/png" href="/public/assets/images/logo/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/public/assets/images/logo/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/public/assets/images/logo/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/images/logo/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/public/assets/images/logo/favicon/site.webmanifest" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebApplication",
            "@id": "<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/calculator#calculator",
            "url": "<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/calculator",
            "name": "Калькулятор ремонта квартиры",
            "description": "Бесплатный онлайн-калькулятор для расчёта стоимости ремонта квартиры под ключ",
            "applicationCategory": "FinanceApplication",
            "operatingSystem": "Any",
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "RUB"
            },
            "publisher": {
                "@type": "Organization",
                "name": "<?= htmlspecialchars($site['name'] ?? 'ПКвартира'); ?>",
                "@id": "<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>#organization"
            }
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "<?= htmlspecialchars((isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://pkvartira.ru')); ?>/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Калькулятор"
                }
            ]
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </noscript>

    <script src="https://cdn.tailwindcss.com" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="preload" href="/public/assets/styles/main.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="/public/assets/styles/main.css">
    </noscript>
</head>

<body class="bg-white">

    <?php include_once './public/components/header.php'; ?>

    <main class="pt-20 bg-[#f3f4fb]">
        <section class="py-10" id="calculator">
            <div class="container mx-auto px-4 max-w-6xl">
                <div
                    class="bg-white rounded-2xl border border-[#e6e7ee] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden">
                    <div class="px-6 pt-6 pb-4">
                        <h1 class="text-[24px] md:text-[28px] font-extrabold text-[#2a2e3b]">Калькулятор ремонта
                            квартиры</h1>
                        <p class="mt-1 text-[13px] text-[#7a7f8c]">Рассчитайте стоимость ремонта квартиры за <span
                                class="font-bold">1 минуту</span></p>
                    </div>

                    <div class="px-6 pb-4">
                        <div class="flex items-center -space-x-4 text-[12px] font-bold" id="steps">
                            <div class="step-chip step-active z-[6] transition-all duration-300" data-step="0">Шаг 1
                            </div>
                            <div class="step-chip z-[5] transition-all duration-300" data-step="1">Шаг 2</div>
                            <div class="step-chip z-[4] transition-all duration-300" data-step="2">Шаг 3</div>
                            <div class="step-chip z-[3] transition-all duration-300" data-step="3">Шаг 4</div>
                            <div class="step-chip z-[2] transition-all duration-300" data-step="4">Шаг 5</div>
                            <div class="step-chip z-[1] transition-all duration-300" data-step="5">Шаг 6</div>
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <form class="rounded-xl bg-[#f5f6fb] border border-[#e6e7ee] p-5" action="/send/email"
                            method="POST" id="calcForm">

                            <div class="calc-step" data-step="0">
                                <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Ваши контакты</h2>
                                <p class="text-[12px] text-[#7a7f8c] mt-1">Оставьте контакты для получения расчёта</p>
                                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-[13px] font-bold text-[#2a2e3b] mb-2">Ваше имя
                                            *</label>
                                        <input type="text" name="имя" id="inputName" required
                                            class="w-full px-4 py-3 rounded-lg border border-[#e6e7ee] bg-white text-[14px] focus:outline-none focus:ring-2 focus:ring-[#1f5ea8]"
                                            placeholder="Иван Иванов">
                                    </div>
                                    <div>
                                        <label class="block text-[13px] font-bold text-[#2a2e3b] mb-2">Телефон *</label>
                                        <div
                                            class="flex items-center bg-white rounded-lg border border-[#e6e7ee] overflow-hidden">
                                            <span class="px-3 py-3 text-[14px] font-bold text-[#7a7f8c]">+7</span>
                                            <input type="tel" name="телефон" id="inputPhone" required
                                                class="flex-1 py-3 pr-4 bg-transparent text-[14px] focus:outline-none"
                                                placeholder="(999) 999-99-99">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="calc-step hidden" data-step="1">
                                <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Выберите тип объекта</h2>
                                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3" id="objectType">
                                </div>
                            </div>

                            <div class="calc-step hidden" data-step="2">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-[90px] h-[70px] rounded-lg overflow-hidden bg-white border border-[#e6e7ee] flex-shrink-0">
                                        <img alt="" class="w-full h-full object-cover"
                                            src="https://images.unsplash.com/photo-1501183638710-841dd1904471?auto=format&fit=crop&w=300&q=60">
                                    </div>
                                    <div>
                                        <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Квартира в новостройке или
                                            вторичка?</h2>
                                        <p class="text-[12px] text-[#7a7f8c] mt-1">Выберите тип фонда для корректного
                                            расчёта.</p>
                                    </div>
                                </div>
                                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3" id="fondType"></div>
                            </div>

                            <div class="calc-step hidden" data-step="3">
                                <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Выберите тип ремонта</h2>
                                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3" id="repairType">
                                </div>
                            </div>

                            <div class="calc-step hidden" data-step="4">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Нужна площадь</h2>
                                    <div class="flex items-center gap-2">
                                        <button class="area-btn" type="button" id="areaMinus">-</button>
                                        <div class="min-w-[72px] text-center">
                                            <div class="text-[22px] font-extrabold text-[#1f5ea8]" id="areaValue">30
                                            </div>
                                        </div>
                                        <button class="area-btn" type="button" id="areaPlus">+</button>
                                        <div class="text-[12px] text-[#7a7f8c]">м²</div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <input type="range" id="areaRange" class="w-full" min="10" max="250" value="30" />
                                </div>

                                <div class="mt-3 flex items-center gap-2">
                                    <div class="text-[12px] text-[#7a7f8c]">Подсказка:</div>
                                    <div class="flex flex-wrap gap-2" id="roomPresets"></div>
                                </div>
                            </div>

                            <div class="calc-step hidden" data-step="5">
                                <h2 class="text-[16px] font-extrabold text-[#2a2e3b]">Дополнительные опции</h2>
                                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3" id="options"></div>

                                <div class="mt-5 rounded-xl bg-white border border-[#e6e7ee] p-4">
                                    <div class="text-[16px] font-extrabold text-[#2a2e3b]">Получить точную смету по
                                        вашему объекту</div>
                                    <div
                                        class="mt-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                        <div>
                                            <div class="text-[12px] text-[#7a7f8c]">от <span
                                                    class="text-[20px] text-[#2a2e3b] font-extrabold"
                                                    id="sumMin">0</span> до <span
                                                    class="text-[20px] text-[#2a2e3b] font-extrabold"
                                                    id="sumMax">0</span> ₽</div>
                                            <div class="text-[11px] text-[#9aa0ad] mt-1">Срок выполнения: от 45 до 60
                                                дней</div>
                                        </div>
                                        <button type="button"
                                            class="h-[38px] px-6 rounded-md bg-[#ff7a21] text-white text-[13px] font-extrabold shadow-[0_4px_0_rgba(0,0,0,0.12)]">
                                            Получить смету
                                        </button>
                                    </div>
                                    <div class="mt-3 text-[11px] text-[#9aa0ad]">Для полной сметы со связью по телефону
                                        — менеджер уточнит детали и подготовит расчёт.</div>
                                </div>
                            </div>

                            <!-- Hidden inputs for form submission -->
                            <input type="hidden" name="тип_объекта" id="inputObject">
                            <input type="hidden" name="тип_фонда" id="inputFond">
                            <input type="hidden" name="тип_ремонта" id="inputRepair">
                            <input type="hidden" name="площадь" id="inputArea">
                            <input type="hidden" name="опции" id="inputOptions">
                            <input type="hidden" name="сумма_от" id="inputSumMin">
                            <input type="hidden" name="сумма_до" id="inputSumMax">

                            <div class="mt-4 flex items-center justify-between">
                                <button type="button" class="nav-btn" id="btnBack"><i
                                        class="fa-solid fa-chevron-left mr-2"></i>Назад</button>
                                <button type="button" class="nav-btn nav-next" id="btnNext">Далее</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div
                    class="mt-6 text-center flex flex-col justify-center items-center bg-[#1f5ea8] px-6 py-6 text-white">
                    <h3 class="text-3xl font-extrabold">Получить точную смету по вашему объекту</h4>
                        <form method="POST" action="/send/email"
                            class="mt-3 flex flex-col sm:flex-row gap-3 sm:items-center">
                            <div class="flex items-center bg-white/15 rounded-md overflow-hidden">
                                <div class="px-3 text-xl font-bold">+7</div>
                                <input type="hidden" name="Получить точную смету" value="">
                                <input name="телефон"
                                    class="bg-transparent p-2 outline-none placeholder-white/70 text-xl w-[220px]"
                                    placeholder="(999) 999-99-99" />
                            </div>
                            <button
                                class="py-3 px-6 rounded-md bg-[#ff7a21] text-white text-[13px] font-extrabold shadow-[0_4px_0_rgba(0,0,0,0.12)]">Получить
                                смету</button>
                        </form>
                        <div class="mt-3 grid grid-cols-1 sm:grid-cols-3 gap-2 text-lg text-white/90">
                            <div class="flex justify-center items-center gap-2"><i
                                    class="fa-solid fa-check"></i><span>Бесплатный выезд
                                    инженера</span></div>
                            <div class="flex justify-center items-center gap-2"><i
                                    class="fa-solid fa-check"></i><span>Точная смета за
                                    1 день</span></div>
                            <div class="flex justify-center items-center gap-2"><i
                                    class="fa-solid fa-check"></i><span>Ответим за 5–10
                                    минут</span></div>
                        </div>
                </div>


                <div
                    class="mt-6 bg-white rounded-2xl border border-[#e6e7ee] shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden">

                    <div class="px-6 py-6">
                        <div class="text-[18px] font-extrabold text-[#2a2e3b]">Получить точную смету <span
                                class="text-[#ff7a21]">вашему</span></div>
                        <div class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="rounded-xl bg-[#f5f6fb] border border-[#e6e7ee] p-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white border border-[#e6e7ee] flex items-center justify-center text-[#1f5ea8]">
                                    <i class="fa-solid fa-ruler-combined"></i>
                                </div>
                                <div class="mt-3 font-extrabold text-[#2a2e3b] text-[13px]">Замерщик бесплатно</div>
                                <div class="mt-1 text-[12px] text-[#7a7f8c]">Приедет и сделает точный замер помещения
                                </div>
                            </div>
                            <div class="rounded-xl bg-[#f5f6fb] border border-[#e6e7ee] p-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white border border-[#e6e7ee] flex items-center justify-center text-[#1f5ea8]">
                                    <i class="fa-solid fa-file-lines"></i>
                                </div>
                                <div class="mt-3 font-extrabold text-[#2a2e3b] text-[13px]">Точная смета</div>
                                <div class="mt-1 text-[12px] text-[#7a7f8c]">Подробный расчёт с перечнем работ и
                                    материалов</div>
                            </div>
                            <div class="rounded-xl bg-[#f5f6fb] border border-[#e6e7ee] p-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-white border border-[#e6e7ee] flex items-center justify-center text-[#1f5ea8]">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="mt-3 font-extrabold text-[#2a2e3b] text-[13px]">Ответим за 5–10 минут</div>
                                <div class="mt-1 text-[12px] text-[#7a7f8c]">Консультация и помощь с подбором решения
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include_once './public/components/footer.php'; ?>

    <style>
        .step-chip {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 26px;
            padding: 0 20px;
            background: #e9ecf7;
            color: #64708a;
            clip-path: polygon(0 0, calc(100% - 13px) 0, 100% 50%, calc(100% - 13px) 100%, 0 100%);
        }

        .step-chip.step-active {
            background: #1f5ea8;
            color: #fff;
        }

        .pick {
            background: #fff;
            border: 1px solid #e6e7ee;
            border-radius: 12px;
            padding: 14px;
            cursor: pointer;
            transition: transform .08s ease, box-shadow .08s ease, border-color .08s ease;
        }

        .pick:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.08);
        }

        .pick.active {
            border-color: #1f5ea8;
            box-shadow: 0 10px 26px rgba(31, 94, 168, 0.18);
        }

        .pick .t {
            font-weight: 800;
            color: #2a2e3b;
            font-size: 13px;
            line-height: 16px;
        }

        .pick .s {
            color: #7a7f8c;
            font-size: 12px;
            margin-top: 4px;
            line-height: 16px;
        }

        .pick .i {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f2f6ff;
            color: #1f5ea8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn {
            height: 34px;
            padding: 0 16px;
            border-radius: 8px;
            background: #eef0f8;
            color: #2a2e3b;
            font-weight: 800;
            font-size: 13px;
            border: 1px solid #dfe2ee;
        }

        .nav-btn.nav-next {
            background: #ff7a21;
            color: #fff;
            border-color: transparent;
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.12);
        }

        .area-btn {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            border: 1px solid #dfe2ee;
            background: #fff;
            font-weight: 900;
            color: #2a2e3b;
        }

        input[type=range] {
            accent-color: #1f5ea8;
        }

        .opt {
            background: #fff;
            border: 1px solid #e6e7ee;
            border-radius: 12px;
            padding: 12px;
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .opt input {
            margin-top: 3px;
        }
    </style>

    <script>
        const D = <?php echo json_encode($calcData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
        // Начальное состояние
        const S = { step: 1, object: null, fond: null, repair: null, area: D.default, opts: {} };
        // Установить начальные чекбоксы (демонтаж и шумоизоляция включены по умолчанию)
        S.opts = { дизайнер: 0, демонтаж: 1, шумоизоляция: 1, теплый_пол: 0 };

        const rub = (n) => Math.round(n).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

        // Расчёт суммы
        const calc = () => {
            const base = (D.prices[S.repair] || 0) * (D.k[S.fond] || 1) * S.area;
            let add = 0;
            for (let id in D.opts) {
                if (!S.opts[id]) continue;
                const o = D.opts[id];
                add += o[1] ? o[1] * S.area : o[2]; // [название, цена м², фикс цена]
            }
            const t = base + add;
            return { min: rub(t * D.from), max: rub(t * D.to) };
        };

        // Sync hidden inputs for form submission
        const syncInputs = () => {
            $('#inputObject').val(S.object || '');
            $('#inputFond').val(S.fond || '');
            $('#inputRepair').val(S.repair || '');
            $('#inputArea').val(S.area);
            $('#inputOptions').val(JSON.stringify(S.opts));
            const t = calc();
            $('#inputSumMin').val(t.min.replace(/\s/g, ''));
            $('#inputSumMax').val(t.max.replace(/\s/g, ''));
        };

        // Переключение шага
        const show = (step) => {
            S.step = step;
            $('[data-step]').addClass('hidden').filter('[data-step="' + step + '"]').removeClass('hidden');
            $('.step-chip').removeClass('step-active').filter('[data-step="' + step + '"]').addClass('step-active');
            const ok = step === 0 ? ($('#inputName').val() && $('#inputPhone').val()) : step === 1 ? S.object : step === 2 ? S.fond : step === 3 ? S.repair : true;
            $('#btnNext').prop('disabled', !ok).toggleClass('opacity-50 cursor-not-allowed', !ok).text(step === 5 ? 'Готово' : 'Далее');
            $('#btnBack').prop('disabled', step === 0).toggleClass('opacity-50 cursor-not-allowed', step === 0);
            if (step === 5) { const t = calc(); $('#sumMin').text(t.min); $('#sumMax').text(t.max); syncInputs(); }
        };

        // Рендер карточек выбора
        const mkPicks = (data, elId, key) => {
            let html = '';
            for (let id in data) {
                const [t, s, i] = data[id]; // [title, subtitle, icon]
                html += `<div class="pick" data-k="${key}" data-v="${id}"><div class="flex items-start gap-3"><div class="i"><i class="fa-solid ${i}"></i></div><div><div class="t">${t}</div><div class="s">${s}</div></div></div></div>`;
            }
            $('#' + elId).html(html);
        };

        // Рендер всех элементов
        const render = () => {
            mkPicks(D.objects, 'objectType', 'object');
            mkPicks(D.fonds, 'fondType', 'fond');
            mkPicks(D.repairs, 'repairType', 'repair');

            // Опции (чекбоксы)
            let optsHtml = '';
            for (let id in D.opts) {
                const [t, perM2, fixed] = D.opts[id];
                const price = perM2 ? '+' + rub(perM2) + ' ₽/м²' : '+' + rub(fixed) + ' ₽';
                const checked = S.opts[id] ? ' checked' : '';
                optsHtml += `<label class="opt" data-opt="${id}"><input type="checkbox"${checked}><div><div class="text-[13px] font-extrabold text-[#2a2e3b]">${t}</div><div class="text-[12px] text-[#7a7f8c] mt-1">${price}</div></div></label>`;
            }
            $('#options').html(optsHtml);

            // Пресеты площади
            const titles = ['Квартира студия', '1-комнатная', '2-комнатная', '3-комнатная', '4-комнатная'];
            let areasHtml = '';
            D.areas.forEach((a, i) => {
                areasHtml += `<button type="button" class="px-3 h-[26px] rounded-full bg-white border border-[#e6e7ee] text-[12px] font-bold text-[#2a2e3b]" data-area="${a}">${titles[i]}</button>`;
            });
            $('#roomPresets').html(areasHtml);

            $('#areaValue').text(S.area);
            $('#areaRange').val(S.area).attr('min', D.min).attr('max', D.max);
        };

        $(document).ready(function () {
            render();
            show(0);

            // Выбор карточки
            $(document).on('click', '.pick', function () {
                S[$(this).data('k')] = $(this).data('v');
                $('.pick[data-k="' + $(this).data('k') + '"]').removeClass('active');
                $(this).addClass('active');
                show(S.step);
            });

            // Чекбоксы опций
            $(document).on('click', '[data-opt]', function (e) {
                e.preventDefault();
                const $input = $(this).find('input[type="checkbox"]');
                $input.prop('checked', !$input.prop('checked')).trigger('change');
            });
            $(document).on('change', '[data-opt] input', function (e) {
                e.stopPropagation();
                S.opts[$(this).closest('[data-opt]').data('opt')] = this.checked ? 1 : 0;
                if (S.step === 5) show(5);
            });

            // Пресеты площади
            $(document).on('click', '[data-area]', function () {
                S.area = parseInt($(this).data('area'));
                $('#areaValue').text(S.area);
                $('#areaRange').val(S.area);
                if (S.step === 5) show(5);
            });

            // +/- площадь
            $('#areaMinus').click(() => { if (S.area > D.min) { S.area--; $('#areaValue').text(S.area); $('#areaRange').val(S.area); if (S.step === 5) show(5); } });
            $('#areaPlus').click(() => { if (S.area < D.max) { S.area++; $('#areaValue').text(S.area); $('#areaRange').val(S.area); if (S.step === 5) show(5); } });
            $('#areaRange').on('input', function () { S.area = parseInt(this.value); $('#areaValue').text(S.area); if (S.step === 5) show(5); });

            // Кнопки навигации
            $('#btnBack').click(() => show(Math.max(0, S.step - 1)));
            $('#btnNext').click(() => {
                const ok = S.step === 0 ? ($('#inputName').val() && $('#inputPhone').val()) : S.step === 1 ? S.object : S.step === 2 ? S.fond : S.step === 3 ? S.repair : true;
                if (ok) {
                    if (S.step === 5) {
                        syncInputs();
                        $('#calcForm').submit();
                    } else {
                        show(Math.min(5, S.step + 1));
                    }
                }
            });

            // Проверка заполнения полей шага 0
            $('#inputName, #inputPhone').on('input', () => show(0));

            // Защита от случайной отправки формы
            $('#calcForm').on('submit', function (e) {
                if (S.step !== 5) {
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>

</body>