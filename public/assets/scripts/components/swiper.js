$(document).ready(() => {
    // Простая инициализация всех слайдеров
    if (typeof Swiper !== 'undefined') {
        console.log('Swiper загружен, инициализация слайдеров...');
        
        // Инициализация swiper-type-1 (Portfolio)
        $('.swiper-type-1').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: { delay: 4000, disableOnInteraction: false },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 640: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
            });
        });
        
        // Инициализация swiper-type-2 (Reviews)
        $('.swiper-type-2').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: { delay: 2000, disableOnInteraction: false },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 640: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
            });
        });
        
        // Инициализация swiper-type-3 (Repair Types)
        $('.swiper-type-3').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: { delay: 5000, disableOnInteraction: false },
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 640: { slidesPerView: 2 }, 768: { slidesPerView: 3 }, 1024: { slidesPerView: 4 } }
            });
        });
        
        // Инициализация swiper-type-4 (Projects)
        $('.swiper-type-4').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: { delay: 4000, disableOnInteraction: false },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 640: { slidesPerView: 2 }, 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
            });
        });
        
        // Инициализация swiper-type-5 (About)
        $('.swiper-type-5').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 10,
                    stretch: 0,
                    depth: 150,
                    modifier: 2,
                    slideShadows: true
                },
                speed: 1000,
                autoplay: { delay: 3000, disableOnInteraction: false },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 640: { slidesPerView: 2 }, 768: { slidesPerView: 3 }, 1024: { slidesPerView: 5 } }
            });
        });

        // Инициализация swiper-type-6 (list 6)
        $('.swiper-type-6').each(function() {
            new Swiper(this, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                speed: 1000,
                autoplay: { delay: 2000, disableOnInteraction: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 320: { slidesPerView: 2 }, 480: { slidesPerView: 3 }, 640: { slidesPerView: 4 }, 768: { slidesPerView: 5 }, 1024: { slidesPerView: 6 } }
            });
        });
        
        console.log('Все слайдеры инициализированы!');
        
    } else {
        console.error('Swiper не загружен!');
        // Повторная попытка через 500мс
        setTimeout(() => $(document).ready(arguments.callee), 500);
    }
});//end