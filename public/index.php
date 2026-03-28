<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ремонт квартир и домов под ключ | Профессиональные услуги</title>
  <meta name="description"
    content="Профессиональный ремонт квартир и домов под ключ. Современные решения, гарантия качества, опытные мастера.">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Custom Styles -->
  <style>
    /* Custom gradient backgrounds */
    .gradient-primary {
      background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
    }

    .gradient-secondary {
      background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }

    /* Swiper custom styles */
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #F2760A;
    }

    .swiper-pagination-bullet-active {
      background: #F2760A;
    }

    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }

    /* Custom animations */
    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    .float-animation {
      animation: float 3s ease-in-out infinite;
    }

    /* Lazy loading styles */
    .lazy {
      opacity: 1;
      transition: opacity 0.3s ease-iхжn-out;
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: loading 1.5s infinite;
      min-height: 100px;
    }

    .lazy.loaded {
      opacity: 1;
      background: none;
      animation: none;
    }

    @keyframes loading {
      0% {
        background-position: 200% 0;
      }

      100% {
        background-position: -200% 0;
      }
    }

    /* Button click animation */
    .cta-button {
      position: relative;
      overflow: hidden;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      transform-style: preserve-3d;
    }

    .cta-button::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    .cta-button:hover::before {
      width: 100%;
      height: 300px;
    }

    .cta-button:active {
      transform: scale(0.96) translateZ(0);
      box-shadow: 0 8px 25px rgba(251, 146, 60, 0.5);
    }

    .cta-button span {
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease;
    }

    .cta-button:hover span {
      transform: translateY(-2px);
    }

    /* Custom select styles */
    .custom-select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: 98% center;
      background-size: 20px;
    }

    /* Mobile menu styles */
    .mobile-menu {
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    }

    .mobile-menu.active {
      transform: translateX(0);
    }

    .mobile-menu-overlay {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease-in-out;
      backdrop-filter: blur(2px);
    }

    .mobile-menu-overlay.active {
      opacity: 1;
      pointer-events: auto;
    }

    /* Mobile animations */
    .mobile-menu-toggle {
      transition: all 0.3s ease;
    }

    .mobile-menu-toggle:hover {
      transform: scale(1.1);
    }

    .mobile-menu-close {
      transition: all 0.3s ease;
    }

    .mobile-menu-close:hover {
      transform: rotate(90deg);
    }

    /* Mobile optimizations */
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2rem;
        line-height: 1.2;
      }

      .hero-subtitle {
        font-size: 1.25rem;
      }

      .feature-card {
        min-height: auto;
      }

      .cta-button {
        width: 100%;
        max-width: 300px;
      }

      .price-card {
        transform: none !important;
        margin-bottom: 1rem;
      }
    }
  </style>
</head>

<body class="bg-white">

  <!-- Header -->
  <header class="bg-white shadow-sm fixed w-full top-0 z-50">
    <nav class="mx-auto px-6 py-4">
      <div class="flex justify-between items-center">
        <div class="flex items-center space-x-2">
          <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
            <i class="fas fa-home text-white"></i>
          </div>
          <div class="flex flex-col justify-center">
            <span class="text-xl font-bold text-gray-800">Ремонт у нас</span>
            <p class="text-sm text-gray-600 hidden sm:block">Ремонт квартир под ключ в Москве</p>
          </div>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="#services" class="text-gray-600 hover:text-blue-600 transition">Главная</a>
          <a href="#services" class="text-gray-600 hover:text-blue-600 transition">Услуги</a>
          <a href="#services" class="text-gray-600 hover:text-blue-600 transition">Цены</a>
          <a href="#calculator" class="text-gray-600 hover:text-blue-600 transition">Калькулятор</a>
          <a href="#portfolio" class="text-gray-600 hover:text-blue-600 transition">Портфолио</a>
          <a href="#reviews" class="text-gray-600 hover:text-blue-600 transition">Отзывы</a>
          <a href="#process" class="text-gray-600 hover:text-blue-600 transition">О компании</a>
          <a href="#contacts" class="text-gray-600 hover:text-blue-600 transition">Контакты</a>
        </div>

        <!-- Desktop Contact -->
        <div class="hidden lg:flex items-stretch items-end gap-6">
          <div class="flex flex-col justify-center items-center">
            <a href="tel:+74951234567" class="text-xl font-bold text-gray-800">+7 (495) 123-45-67</a>
            <p class="text-sm text-gray-600">Ежедневно с 9:00 до 21:00</p>
          </div>
          <button class="bg-orange-500 text-white px-6 rounded-lg hover:bg-orange-600 transition">
            Получить расчет
          </button>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden text-sm bg-orange-500 text-white p-2 rounded-lg hover:bg-orange-600 transition">
          Получить расчет
        </button>
        <button class="md:hidden mobile-menu-toggle p-2" aria-label="Открыть меню">
          <div class="relative w-6 h-5">
            <span class="absolute top-0 left-0 w-full h-0.5 bg-gray-800 transition-all duration-300"></span>
            <span class="absolute top-2 left-0 w-full h-0.5 bg-gray-800 transition-all duration-300"></span>
            <span class="absolute top-4 left-0 w-full h-0.5 bg-gray-800 transition-all duration-300"></span>
          </div>
        </button>
      </div>
    </nav>
  </header>

  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"></div>
  <div class="mobile-menu fixed left-0 top-0 h-full w-80 bg-white shadow-xl z-50 md:hidden overflow-y-auto scroll">
    <div class="p-6">
      <div class="flex justify-between items-center mb-8">
        <div class="flex items-center space-x-2">
          <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
            <i class="fas fa-home text-white"></i>
          </div>
          <span class="text-xl font-bold text-gray-800">Ремонт у нас</span>
        </div>
        <button class="mobile-menu-close p-2" aria-label="Закрыть меню">
          <i class="fas fa-times text-2xl text-gray-800"></i>
        </button>
      </div>

      <nav class="space-y-4 mb-8">
        <a href="#services"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Главная
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#services"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Услуги
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#services"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Цены
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#calculator"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Калькулятор
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#portfolio"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Портфолио
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#reviews"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Отзывы
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#process"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">О
          компании
          <i class="fa fa-arrow-right"></i>
        </a>
        <hr>
        <a href="#contacts"
          class="flex justify-between items-center py-3 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">Контакты
          <i class="fa fa-arrow-right"></i>
        </a>
      </nav>

      <div class="border-t pt-6">
        <div class="text-center mb-6">
          <a href="tel:+74951234567" class="text-2xl font-bold text-gray-800 block mb-2">+7 (495) 123-45-67</a>
          <p class="text-sm text-gray-600">Ежедневно с 9:00 до 21:00</p>
        </div>
      </div>
    </div>
  </div>

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
            <button
              class="cta-button relative bg-orange-500 text-white px-6 md:px-8 py-3 rounded-xl text-lg w-full max-w-xs md:w-auto">
              <span class="drop-shadow-lg font-sans">Получить бесплатный расчёт</span>
            </button>
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

        <div
          class="max-w-[95%] md:max-w-[80%] mx-auto flex flex-col flex-wrap md:flex-row gap-3 md:gap-4 justify-center items-center">
          <select id="phone"
            class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
            <option value="" selected disabled>Выберите тип квартиры</option>
            <option value="1 комнатная">1 комнатная</option>
            <option value="2 комнатная">2-х комнатная</option>
            <option value="3 комнатная">3-х комнатная</option>
          </select>
          <select id="phone"
            class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
            <option value="" selected disabled>Площадь квартиры, м²</option>
            <option value="1 комнатная">1 комнатная</option>
            <option value="2 комнатная">2-х комнатная</option>
            <option value="3 комнатная">3-х комнатная</option>
          </select>
          <select id="phone"
            class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 custom-select text-sm md:text-base">
            <option value="" selected disabled>Тип ремонта</option>
            <option value="1 комнатная">1 комнатная</option>
            <option value="2 комнатная">2-х комнатная</option>
            <option value="3 комнатная">3-х комнатная</option>
          </select>
          <input id="phone" placeholder=" Ваш телефон" type="tel" maxlength="12"
            class="w-full max-w-[350px] px-4 pr-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 text-sm md:text-base">
          <button
            class="cta-button relative bg-orange-500 text-white px-6 md:px-8 py-3 rounded-xl text-base md:text-xl w-full max-w-[350px] md:w-auto">
            <span class="drop-shadow-lg font-sans">Расчитать стоимость</span>
          </button>
        </div>
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
        <div class="swiper py-8 md:py-14 repairTypesSwiper mx-auto">
          <div class="swiper-wrapper flex items-stretch">
            <!-- Slide 1: Черновой ремонт -->
            <li class="swiper-slide">
              <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                <div class="relative">
                  <img
                    data-src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Черновой ремонт" class="lazy w-full h-36 md:h-48 object-cover">
                  <div
                    class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                    от 6000 ₽/м²
                  </div>
                </div>
                <div class="p-4 md:p-6">
                  <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Черновой ремонт</h3>
                  <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                    Cтроительные работы для подготовки помещения к чистовой отделке
                  </p>
                  <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Демонтажные работы</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Возведение перегородок</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Выравнивание стен и полов</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Инженерные коммуникации</li>
                  </ul>
                  <a class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
                    Подробнее →
                  </a>
                </div>
              </div>
            </li>

            <!-- Slide 2: Чистовой ремонт -->
            <li class="swiper-slide">
              <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                <div class="relative">
                  <img
                    data-src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Чистовой ремонт" class="lazy w-full h-36 md:h-48 object-cover">
                  <div
                    class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                    от 10000 ₽/м²
                  </div>
                </div>
                <div class="p-4 md:p-6">
                  <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Чистовой ремонт</h3>
                  <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                    Полная помещения с использованием качественных материалов
                  </p>
                  <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Покраска стен и потолков</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Напольные покрытия</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Установка дверей и плинтусов</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Сантехнические работы</li>
                  </ul>
                  <a class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
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
                  <img
                    data-src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Ремонт под ключ" class="lazy w-full h-36 md:h-48 object-cover">
                  <div
                    class="absolute top-2 md:top-4 right-2 md:right-4 bg-white px-2 py-1 md:px-3 md:py-1 rounded-full text-xs md:text-sm font-semibold">
                    от 18000 ₽/м²
                  </div>
                </div>
                <div class="p-4 md:p-6">
                  <h3 class="text-lg md:text-2xl font-bold text-gray-800 mb-2 md:mb-3">Ремонт под ключ</h3>
                  <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">
                    Полный комплекс работ от проектирования до финальной уборки
                  </p>
                  <ul class="text-gray-600 space-y-1 md:space-y-2 mb-4 md:mb-6 text-sm md:text-base">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Дизайн-проект</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Все строительные работы</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Закупка материалов</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Финальная уборка</li>
                  </ul>
                  <a class="text-[#6E8DC0] hover:text-[#4A78C3] transition font-semibold text-sm md:text-base">
                    Подробнее →
                  </a>
                </div>
              </div>
            </li>

            <!-- Slide 4: Косметический ремонт -->
            <li class="swiper-slide">
              <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="relative">
                  <img
                    data-src="https://avatars.mds.yandex.net/i?id=0ae54d0d7e84f3eae53d5ccef3163ae3905b9182-5527569-images-thumbs&n=13"
                    alt="Косметический ремонт" class="lazy w-full h-48 object-cover">
                  <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold">
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
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Установка декоративных элементов</li>
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
                  <img data-src="https://avatars.yandex.net/get-music-content/9838169/5e0d2b83.a.27150900-1/m1000x1000"
                    alt="Косметический ремонт" class="lazy w-full h-48 object-cover">
                  <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-semibold">
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
        <div class="flex flex-wrap gap-3 md:gap-4 justify-center max-w-[95%] md:max-w-[90%] mx-auto text-sm md:text-xl">
          <!-- Button 1 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-building text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт квартир в новостройке</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>

          <!-- Button 2 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-home text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт во вторичке</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>

          <!-- Button 3 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-couch text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт студии</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>

          <!-- Button 4 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-door-open text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт 1-комнатной</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>

          <!-- Button 5 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-bed text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт 2-комнатной</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>

          <!-- Button 6 -->
          <button
            class="flex items-center gap-2 md:gap-3 bg-white border border-gray-300 rounded-lg px-3 py-2 md:px-4 md:py-3 hover:bg-gray-50 transition shadow-sm w-full sm:w-auto justify-center"
            style="width: fit-content;">
            <i class="fas fa-house-user text-orange-500 text-sm md:text-base"></i>
            <span class="text-gray-800 font-medium">Ремонт 3-комнатной</span>
            <i class="fas fa-arrow-right text-orange-400 text-sm md:text-base"></i>
          </button>
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
          <a href="#"
            class="block md:absolute right-0 text-blue-600 hover:text-blue-700 transition font-semibold flex items-center gap-2">
            Смотреть всё портфолио
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Project Cards -->
        <div class="relative max-w-[80%] mx-auto">
          <!-- Swiper -->
          <div class="swiper projectsSwiper py-10">
            <div class="swiper-wrapper">
              <!-- Project 1 -->
              <div class="swiper-slide">
                <li class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                  <!-- Before/After Images -->
                  <div class="grid grid-cols-2">
                    <div class="relative border border-r-2 border-white">
                      <img
                        data-src="https://avatars.mds.yandex.net/i?id=fca7cb34399903484f6efce037992610_l-5875681-images-thumbs&n=13"
                        alt="До" class="lazy w-full h-48 object-cover">
                      <div
                        class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                        До
                      </div>
                    </div>
                    <div class="relative">
                      <img data-src="https://media-cdn.tripadvisor.com/media/photo-s/28/96/3c/a4/shared-pool.jpg"
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
                        Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет коридора, объединили гостиную
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
                <li class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                  <!-- Before/After Images -->
                  <div class="grid grid-cols-2">
                    <div class="relative border border-r-2 border-white">
                      <img
                        data-src="https://avatars.mds.yandex.net/i?id=fca7cb34399903484f6efce037992610_l-5875681-images-thumbs&n=13"
                        alt="До" class="lazy w-full h-48 object-cover">
                      <div
                        class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                        До
                      </div>
                    </div>
                    <div class="relative">
                      <img data-src="https://media-cdn.tripadvisor.com/media/photo-s/28/96/3c/a4/shared-pool.jpg"
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
                        Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет коридора, объединили гостиную
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
                <li class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                  <!-- Before/After Images -->
                  <div class="grid grid-cols-2">
                    <div class="relative border border-r-2 border-white">
                      <img
                        data-src="https://avatars.mds.yandex.net/i?id=fca7cb34399903484f6efce037992610_l-5875681-images-thumbs&n=13"
                        alt="До" class="lazy w-full h-48 object-cover">
                      <div
                        class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                        До
                      </div>
                    </div>
                    <div class="relative">
                      <img data-src="https://media-cdn.tripadvisor.com/media/photo-s/28/96/3c/a4/shared-pool.jpg"
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
                        Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет коридора, объединили гостиную
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
                <li class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition h-full">
                  <!-- Before/After Images -->
                  <div class="grid grid-cols-2">
                    <div class="relative border border-r-2 border-white">
                      <img
                        data-src="https://avatars.mds.yandex.net/i?id=fca7cb34399903484f6efce037992610_l-5875681-images-thumbs&n=13"
                        alt="До" class="lazy w-full h-48 object-cover">
                      <div
                        class="absolute top-2 left-2 bg-black bg-opacity-60 text-white px-2 py-1 rounded text-xs font-semibold">
                        До
                      </div>
                    </div>
                    <div class="relative">
                      <img data-src="https://media-cdn.tripadvisor.com/media/photo-s/28/96/3c/a4/shared-pool.jpg"
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
                        Полный ремонт под ключ с перепланировкой. Увеличили кухню за счет коридора, объединили гостиную
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
          <div class="swiper-button-prev projects-swiper-prev"></div>
          <div class="swiper-button-next projects-swiper-next"></div>
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
            <div class="bg-orange-500 text-white text-sm font-bold px-3 py-1 rounded-full inline-block mb-4">
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

        <div class="swiper portfolioSwiper mb-8">
          <div class="swiper-wrapper">
            <!-- slide 1 -->
            <div class="swiper-slide">
              <div class="relative group">
                <img
                  data-src="https://avatars.mds.yandex.net/i?id=9be9930d76375601a91d2adabbeeac41_l-4390197-images-thumbs&n=13"
                  alt="Проект 1" class="lazy w-full h-96 object-cover rounded-lg">
                <!-- hover background -->
                <div
                  class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                  <div class="text-white text-center">
                    <h3 class="text-2xl font-bold mb-2">Современная гостиная</h3>
                    <p class="mb-4">Площадь: 35 м²</p>
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                      Смотреть проект
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative group">
                <img
                  data-src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                  alt="Проект 2" class="lazy w-full h-96 object-cover rounded-lg">
                <div
                  class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                  <div class="text-white text-center">
                    <h3 class="text-2xl font-bold mb-2">Кухня-гостиная</h3>
                    <p class="mb-4">Площадь: 42 м²</p>
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                      Смотреть проект
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative group">
                <img
                  data-src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                  alt="Проект 3" class="lazy w-full h-96 object-cover rounded-lg">
                <div
                  class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                  <div class="text-white text-center">
                    <h3 class="text-2xl font-bold mb-2">Ванная комната</h3>
                    <p class="mb-4">Площадь: 12 м²</p>
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                      Смотреть проект
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative group">
                <img
                  data-src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                  alt="Проект 4" class="lazy w-full h-96 object-cover rounded-lg">
                <div
                  class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                  <div class="text-white text-center">
                    <h3 class="text-2xl font-bold mb-2">Спальня</h3>
                    <p class="mb-4">Площадь: 18 м²</p>
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition">
                      Смотреть проект
                    </button>
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
          <button class="bg-orange-500 text-white px-8 py-3 rounded-lg hover:bg-orange-600 transition">
            Смотреть все проекты
          </button>
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

        <div class="swiper reviewsSwiper mx-auto py-10">
          <div class="swiper-wrapper">
            <!-- 1 -->
            <div class="swiper-slide h-[200px]  bg-gray-100 p-6 shadow-lg rounded-lg">
              <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full object-cover"
                  src="https://avatars.mds.yandex.net/i?id=c4b14bde876b77f50f4df0639e6bb21c_sr-9144630-images-thumbs&n=13"
                  alt="Анна">
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Анна</h4>
                  <p class="text-sm text-gray-500">ремонт студии</p>
                  <div class="text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <p class="text-gray-600 line-clamp-3 overflow-hidden">
                текст текст текст текст текст текст текст текст текст текст текст текст
              </p>
            </div>
            <!-- 2 -->
            <div class="swiper-slide h-[200px] bg-gray-100 p-6 shadow-lg rounded-lg">
              <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                  alt="Сергей">
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Сергей</h4>
                  <p class="text-sm text-gray-500">2-комнатная</p>
                  <div class="text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <p class="text-gray-600 line-clamp-3 overflow-hidden">
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
              </p>
            </div>
            <!-- 3 -->
            <div class="swiper-slide h-[200px] bg-gray-100 p-6 shadow-lg rounded-lg">
              <div class="flex items-center mb-4">
                <img class="w-12 h-12 rounded-full object-cover"
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                  alt="Елена">
                <div class="ml-4">
                  <h4 class="font-bold text-gray-800">Елена</h4>
                  <p class="text-sm text-gray-500">новостройка</p>
                  <div class="text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <p class="text-gray-600 line-clamp-3 overflow-hidden">
                текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                текст текст текст
              </p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
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
                Срок ремонта зависит от площади и сложности работ. В среднем: эконом-ремонт - 30-45 дней,
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
                <h3 class="text-lg font-semibold text-gray-800">Работаете ли вы с материалами заказчика?</h3>
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
          <button
            class="bg-orange-500 text-white px-8 py-4 rounded-lg font-semibold hover:bg-orange-600 transition transform hover:scale-105">
            <i class="fas fa-phone mr-2"></i>
            Оставить заявку
          </button>
          <button
            class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
            <i class="fas fa-calculator mr-2"></i>
            Рассчитать стоимость
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-8 md:py-12">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        <div class="text-center md:text-left">
          <div class="flex items-center justify-center md:justify-start space-x-2 mb-4">
            <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
              <i class="fas fa-home text-white"></i>
            </div>
            <span class="text-xl font-bold">
              Ремонт у нас</span>
          </div>
          <p class="text-gray-300 text-sm md:text-base">
            Профессиональный ремонт квартир и домов под ключ с гарантией качества.
          </p>
        </div>

        <div class="text-center md:text-left">
          <h4 class="font-bold mb-4">Услуги</h4>
          <ul class="space-y-2 text-gray-300 text-sm md:text-base">
            <li><a href="#" class="hover:text-white transition">Ремонт квартир</a></li>
            <li><a href="#" class="hover:text-white transition">Ремонт домов</a></li>
            <li><a href="#" class="hover:text-white transition">Дизайн интерьера</a></li>
            <li><a href="#" class="hover:text-white transition">Отделочные работы</a></li>
          </ul>
        </div>

        <div class="text-center md:text-left">
          <h4 class="font-bold mb-4">Компания</h4>
          <ul class="space-y-2 text-gray-400 text-sm md:text-base">
            <li><a href="#" class="hover:text-white transition">О нас</a></li>
            <li><a href="#" class="hover:text-white transition">Портфолио</a></li>
            <li><a href="#" class="hover:text-white transition">Отзывы</a></li>
            <li><a href="#" class="hover:text-white transition">Контакты</a></li>
          </ul>
        </div>

        <div class="text-center md:text-left">
          <h4 class="font-bold mb-4">Контакты</h4>
          <ul class="space-y-2 text-gray-400 text-sm md:text-base">
            <li><i class="fas fa-phone mr-2"></i>+7 (495) 123-45-67</li>
            <li><i class="fas fa-envelope mr-2"></i>info@remontpronas.ru</li>
            <li><i class="fas fa-map-marker-alt mr-2"></i>Москва, ул. Примерная, 123</li>
          </ul>

          <div class="flex justify-center md:justify-start space-x-4 mt-4">
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-vk text-xl"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-telegram text-xl"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-whatsapp text-xl"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="border-t border-blue-800 mt-6 md:mt-8 pt-6 md:pt-8 text-center text-gray-300">
        <p class="text-sm md:text-base">&copy; 2026 Ремонт про нас. Все права защищены.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Lazy Loading Script -->
  <script>
    $(document).ready(function () {
      function lazyLoad() {
        $('.lazy').each(function () {
          var $img = $(this);
          var rect = this.getBoundingClientRect();
          var windowHeight = $(window).height();

          // Загружаем изображение если оно в области видимости или скоро появится
          // +200px для предварительной загрузки перед тем как пользователь увидит изображение
          if (rect.top >= -200 && rect.top <= windowHeight + 200) {
            if ($img.attr('data-src')) {
              $img.attr('src', $img.attr('data-src'));
              $img.removeAttr('data-src');
              $img.on('load', function () {
                $img.addClass('loaded');
              });
            }
          }
        });
      }

      // Initial check
      lazyLoad();

      // Check on scroll с throttling для производительности
      var scrollTimer;
      $(window).on('scroll', function () {
        if (scrollTimer) {
          clearTimeout(scrollTimer);
        }
        scrollTimer = setTimeout(lazyLoad, 100);
      });

      // Check on resize
      $(window).on('resize', lazyLoad);
    });
  </script>
  <script>
    // Initialize Portfolio Swiper
    const portfolioSwiper = new Swiper('.portfolioSwiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          loop: true,
        },
        1024: {
          slidesPerView: 3,
          loop: true,
        },
      },
    });

    // Initialize Reviews Swiper
    const reviewsSwiper = new Swiper('.reviewsSwiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          loop: true,
        },
        768: {
          slidesPerView: 2,
          loop: true,
        },
        1024: {
          slidesPerView: 3,
          loop: false, // Disable loop at 1024px to avoid warning with only 3 slides
        },
      },
    });

    // Initialize Repair Types Swiper
    const repairTypesSwiper = new Swiper('.repairTypesSwiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          loop: true,
        },
        768: {
          slidesPerView: 3,
          loop: true,
        },
        1024: {
          slidesPerView: 4,
          loop: true, // Keep loop enabled - we have 5 slides, enough for 4 per view
        },
      },
    });

    // Initialize Projects Swiper
    const projectsSwiper = new Swiper('.projectsSwiper', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.projects-swiper-next',
        prevEl: '.projects-swiper-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          loop: true,
        },
        768: {
          slidesPerView: 2,
          loop: true,
        },
        1024: {
          slidesPerView: 3,
          loop: true, // Keep loop enabled - we have 4 slides, enough for 3 per view
        },
      },
    });

    // Mobile menu functionality
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');

    function openMobileMenu() {
      mobileMenu.classList.add('active');
      mobileMenuOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
      mobileMenu.classList.remove('active');
      mobileMenuOverlay.classList.remove('active');
      document.body.style.overflow = 'auto';
    }

    if (mobileMenuToggle) {
      mobileMenuToggle.addEventListener('click', () => {
        if (mobileMenu.classList.contains('active')) {
          closeMobileMenu();
        } else {
          openMobileMenu();
        }
      });
    }

    if (mobileMenuClose) {
      mobileMenuClose.addEventListener('click', closeMobileMenu);
    }

    if (mobileMenuOverlay) {
      mobileMenuOverlay.addEventListener('click', closeMobileMenu);
    }

    // Close menu when clicking on navigation links
    const mobileMenuLinks = mobileMenu?.querySelectorAll('a[href^="#"]');
    mobileMenuLinks?.forEach(link => {
      link.addEventListener('click', () => {
        closeMobileMenu();
      });
    });

    // FAQ Toggle
    document.querySelectorAll('.faq-toggle').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('i');

        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
      });
    });

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>
  <!-- Calculator Section временно скрыт-->
  <section id="calculator" class="py-16 bg-blue-50 hidden">
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
  </section>
</body>

</html>
