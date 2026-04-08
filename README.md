### Доступные типы слайдеров:


| Класс       | BreakPoint (точки смещения)            |
| ------------------ | ----------------------------------------------------- |
| `.swiper-type-1` | 1→2→3 (стандартный портфолио) |
| `.swiper-type-2` | 1→1→2→3 (отзывы)                           |
| `.swiper-type-3` | 1→2→3→4 (типы ремонта)                |
| `.swiper-type-4` | 1→2→2→3 (проекты)                         |
| `.swiper-type-5` | 1→2→3→4→5 (типы ремонта + отзывы)        |

**Использование:**

Добавляем нужный класс к контейнеру swiper:

```html
<div class="swiper swiper-type-1">
  <ul class="swiper-wrapper">
    <li class="swiper-slide">Слайд 1</li>
    <li class="swiper-slide">Слайд 2</li>
  </li>
</div>
```

---

# SEO-настройки при дублировании страниц

При копировании страницы необходимо изменить следующие SEO-поля в `<head>`:

##  Обязательные поля для изменения

**Базовые мета-теги (строки 10-16):**

```html
<title>Новый заголовок страницы | Название сайта</title>
<meta name="description" content="Уникальное описание страницы (150-160 символов)">
<meta name="keywords" content="ключевые, слова, через, запятую">
<link rel="canonical" href="https://pkvartira.ru/new-page/">
```

**Open Graph (строки 19-25):**

```html
<meta property="og:title" content="Новый заголовок страницы">
<meta property="og:description" content="Уникальное описание страницы">
<meta property="og:url" content="https://pkvartira.ru/new-page/">
<meta property="og:image" content="https://pkvartira.ru/images/new-page-image.jpg">
```

**Twitter Card (строки 28-31):**

```html
<meta name="twitter:title" content="Новый заголовок страницы">
<meta name="twitter:description" content="Уникальное описание страницы">
<meta name="twitter:image" content="https://pkvartira.ru/images/twitter-new-page.jpg">
```

### Структурированные данные (JSON-LD)

**WebPage (строки 96-107):**

```json
{
  "@type": "WebPage",
  "@id": "https://pkvartira.ru/new-page/#webpage",
  "url": "https://pkvartira.ru/new-page/",
  "name": "Название страницы",
  "description": "Описание страницы"
}
```

**BreadcrumbList (строки 154-169):**

```json
{
  "@type": "BreadcrumbList",
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
      "name": "Раздел",
      "item": "https://pkvartira.ru/section/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Текущая страница",
      "item": "https://pkvartira.ru/new-page/"
    }
  ]
}
```

### Поля которые не трогать

- **Organization** - информация о компании (строки 55-82)
- **WebSite** - общий сайт (строки 85-93)
- **Service** - услуги (строки 110-151)
- **FAQPage** - можно дополнять вопросами (строки 172-199)
- **Дополнительные мета-теги** (строки 33-47)
- **Фавиконы** (строки 42-47)

##  Рекомендации

1. **Уникальность** - каждый title и description должен быть уникальным
2. **Длина** - title до 60 символов, description 150-160 символов
3. **Ключевые слова** - используйте релевантные запросы
4. **Изображения** - создавайте уникальные OG изображения размером 1200x630px
5. **URL** - используйте человеко-понятные URL (чпу)

### Чек-лист для новой страницы

- [ ] Изменить title
- [ ] Изменить description
- [ ] Обновить keywords
- [ ] Указать правильный canonical URL
- [ ] Обновить Open Graph мета-теги
- [ ] Обновить Twitter Card
- [ ] Изменить WebPage в JSON-LD
- [ ] Настроить хлебные крошки
- [ ] Создать уникальные изображения для соцсетей
- [ ] Проверить валидность JSON-LD

# Микроданные (itemscope/itemprop)

**Когда использовать:** Дополнительная разметка для контента, которого нет в JSON-LD

### Отзывы с рейтингом (Review)

```html
<div itemscope itemtype="https://schema.org/Review" class="bg-white p-6 rounded-lg shadow">
  <div class="flex items-center mb-4">
    <img itemprop="author" src="/images/avatar.jpg" alt="Анна" class="w-12 h-12 rounded-full mr-4">
    <div>
      <h4 itemprop="author" class="font-bold">Анна Петрова</h4>
      <meta itemprop="datePublished" content="2024-03-15">15 марта 2024
    </div>
  </div>
  
  <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating" class="mb-3">
    <meta itemprop="ratingValue" content="5">
    <meta itemprop="bestRating" content="5">
    <div class="text-yellow-400">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>
  </div>
  
  <h5 itemprop="name" class="font-semibold mb-2">Отличный ремонт кухни!</h5>
  <p itemprop="reviewBody" class="text-gray-600">
    Сделали ремонт кухни под ключ. Все качественно, в срок. Рекомендую!
  </p>
</div>
```

### Товары и услуги (Product/Offer)

```html
<div itemscope itemtype="https://schema.org/Product" class="bg-white p-6 rounded-lg shadow">
  <meta itemprop="sku" content="REM-001">
  <meta itemprop="category" content="Ремонтные услуги">
  
  <h3 itemprop="name" class="text-xl font-bold mb-2">Ремонт под ключ</h3>
  <p itemprop="description" class="text-gray-600 mb-4">
    Полный комплекс работ от проектирования до финальной уборки
  </p>
  
  <div itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="mb-4">
    <meta itemprop="priceCurrency" content="RUB">
    <meta itemprop="price" content="18000">
    <meta itemprop="availability" href="https://schema.org/InStock" content="InStock">
    <meta itemprop="validFrom" content="2024-01-01">
  
    <div class="text-2xl font-bold text-orange-500">
      от <span itemprop="price">18 000</span> ₽/м²
    </div>
  </div>
  
  <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="4.8">
    <meta itemprop="reviewCount" content="47">
    <meta itemprop="bestRating" content="5">
  
    <div class="text-sm text-gray-600">
      Рейтинг: <span itemprop="ratingValue">4.8</span> 
      (<span itemprop="reviewCount">47</span> отзывов)
    </div>
  </div>
</div>
```

### Локальный бизнес (LocalBusiness)

```html
<div itemscope itemtype="https://schema.org/LocalBusiness" class="bg-gray-50 p-6 rounded-lg">
  <meta itemprop="name" content="ООО Ремонт-Профи">
  <meta itemprop="telephone" content="+7-495-123-45-67">
  <meta itemprop="email" content="info@remont-profi.ru">
  
  <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
    <meta itemprop="streetAddress" content="ул. Примерная, д. 5, офис 45">
    <meta itemprop="addressLocality" content="Москва">
    <meta itemprop="postalCode" content="123456">
    <meta itemprop="addressCountry" content="RU">
  </div>
  
  <div itemprop="openingHoursSpecification" itemscope itemtype="https://schema.org/OpeningHoursSpecification">
    <meta itemprop="dayOfWeek" content="Monday,Tuesday,Wednesday,Thursday,Friday">
    <meta itemprop="opens" content="09:00">
    <meta itemprop="closes" content="19:00">
  </div>
  
  <div class="flex items-center mb-3">
    <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
    <span itemprop="address">Москва, ул. Примерная, д. 5, офис 45</span>
  </div>
  
  <div class="flex items-center">
    <i class="fas fa-phone-alt text-blue-600 mr-3"></i>
    <span itemprop="telephone">+7 (495) 123-45-67</span>
  </div>
</div>
```

###  События (Event)

```html
<div itemscope itemtype="https://schema.org/Event" class="bg-blue-50 p-6 rounded-lg">
  <meta itemprop="name" content="Бесплатная консультация по ремонту">
  <meta itemprop="description" content="Получите профессиональную консультацию по вашему проекту">
  
  <div itemprop="startDate" content="2024-04-20T10:00">
    <i class="fas fa-calendar text-blue-600 mr-2"></i>
    20 апреля 2024, 10:00
  </div>
  
  <div itemprop="location" itemscope itemtype="https://schema.org/Place">
    <meta itemprop="name" content="Офис Ремонт-Профи">
    <meta itemprop="address" content="Москва, ул. Примерная, д. 5">
  </div>
  
  <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
    <meta itemprop="price" content="0">
    <meta itemprop="priceCurrency" content="RUB">
    <meta itemprop="availability" content="InStock">
  
    <span class="text-green-600 font-semibold">Бесплатно</span>
  </div>
</div>
```

### FAQ (в HTML)

```html
<div itemscope itemtype="https://schema.org/FAQPage">
  <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="mb-4">
    <h4 itemprop="name" class="font-bold text-lg mb-2">
      Какой срок выполнения ремонта?
    </h4>
    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <p itemprop="text" class="text-gray-600">
        Срок ремонта зависит от площади и сложности работ. В среднем: 
        эконом-ремонт - 30-45 дней, стандартный - 45-60 дней.
      </p>
    </div>
  </div>
</div>
```

### Важные правила

1. **Не дублируйте** - если данные уже в JSON-LD, не добавляйте itemscope
2. **Используйте для контента** - который генерируется динамически
3. **Проверяйте валидность** - Google Rich Results Test
4. **Полные данные** - указывайте все обязательные поля schema.org

### Приоритет использования:

1. **JSON-LD в head** (основной способ)
2. **itemscope/itemprop** (для специфического контента)
3. **Microdata + JSON-LD** (только при необходимости)
