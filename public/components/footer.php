<!-- Footer -->
<footer class="text-blue-600 py-8 md:py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <style>
                @media (min-width: 375px) and (max-width: 768px) {
                    footer .grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }
            </style>
            <div class="md:text-left space-y-4">
                <div class="flex items-center space-x-2">
                    <!-- logo name -->
                    <a href="/" class="flex items-center space-x-2">
                        <img class="h-14" src="/public/assets/images/logo/full.svg" alt="Logo Проект Квартира">
                    </a>
                </div>
                <p class="text-gray-600 text-sm md:text-base">
                    Профессиональный ремонт квартир и домов под ключ с гарантией качества.
                </p>
            </div>

            <div class="md:text-left">
                <h4 class="font-bold mb-4">Услуги</h4>
                <ul class="space-y-2 text-gray-600 text-sm md:text-base">
                    <li><a href="#" class="hover:text-blue-600 transition">Ремонт квартир</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Ремонт домов</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Дизайн интерьера</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Отделочные работы</a></li>
                </ul>
            </div>

            <div class="md:text-left">
                <h4 class="font-bold mb-4">Компания</h4>
                <ul class="space-y-2 text-gray-600 text-sm md:text-base">
                    <li><a href="/about" class="hover:text-blue-600 transition">О нас</a></li>
                    <li><a href="/portfolio" class="hover:text-blue-600 transition">Портфолио</a></li>
                    <li><a href="/reviews" class="hover:text-blue-600 transition">Отзывы</a></li>
                    <li><a href="/contact" class="hover:text-blue-600 transition">Контакты</a></li>
                </ul>
            </div>

            <div class="md:text-left">
                <h4 class="font-bold mb-4">Контакты</h4>
                <ul class="space-y-2 text-gray-600 text-sm md:text-base">
                    <li><a href="tel:<?php echo $site['phone']; ?>"><i class="fas fa-phone mr-2"></i>+7 (495) 123-45-67</a></li>
                    <li><a href="mailto:<?php echo $site['email']; ?>"><i class="fas fa-envelope mr-2"></i><?php echo $site['email']; ?></li>
                    <li><a href="<?php echo $site['kartaAdress']; ?>"><i class="fas fa-map-marker-alt mr-2"></i>Москва, ул. Примерная, 123</a></li>
                </ul>

                <div class="flex justify-start md:justify-start space-x-4 mt-4">
                    <a href="<?= $site['vk'] ?>" class="text-blue-600 hover:text-blue-600 transition">
                        <i class="fab fa-vk text-xl"></i>
                    </a>
                    <a href="<?= $site['telegram'] ?>" class="text-[#2AABEE] hover:text-blue-600 transition">
                        <i class="fab fa-telegram text-xl"></i>
                    </a>
                    <a href="<?= $site['whatsapp'] ?>" class="text-[#25D366] hover:text-blue-600 transition">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                    <a href="<?=$site['max']?>" class="flex items-center text-gray-600 hover:text-blue-600 transition">
                        <img class="h-5 w-5" src="/public/assets/images/icons/MAX.svg" alt="Logo Max">
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 mt-6 md:mt-8 pt-6 md:pt-8 text-center text-gray-600">
            <p class="text-sm md:text-base">&copy; 2026 Проект Квартира. Все права защищены.</p>
        </div>
    </div>
</footer>