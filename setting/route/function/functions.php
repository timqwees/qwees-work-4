<?php declare(strict_types=1);

namespace Setting\Route\Function;

use App\Models\Router\Routes;
use App\Config\Database;
use App\Config\Session;
use App\Models\Network\Network;
use App\Controllers\AuthController;
use App\Controllers\MailController;
use App\Models\Article\Article;
use App\Models\Network\Message;
use App\Models\User\User;
use Exception;
use LDAP\ResultEntry;
use App\Controllers\API\API;

class Functions
{
    //======СПИСОК ФУНКЦИЙ / LIST FUNCTIONS===========//

    # Главная страница || Main page (В маршрутных функциях писать, только маршрут в path болье ничего не нужно)
    public function on_Main($path = '/public/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница контактов || Contact page
    public function on_Contact($path = '/public/pages/contact/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница акций || Stocks page
    public function on_Stocks($path = '/public/pages/stocks/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница о компании || About page
    public function on_About($path = '/public/pages/about/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница другие || Other page
    public function on_Other($path = '/public/pages/other/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница отзывы || Reviews page
    public function on_Reviews($path = '/public/pages/reviews/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница портфолио || Portfolio page
    public function on_Portfolio($path = '/public/pages/portfolio/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница услуги || Services page
    public function on_Services($path = '/public/pages/services/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница цены || Prices page
    public function on_Prices($path = '/public/pages/prices/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница блог || Blog page
    public function on_Blog($path = '/public/pages/blog/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    # Страница калькулятор || Calculator page
    public function on_Calculator($path = '/public/pages/calculator/index.php')
    {
        Routes::auto_element(dirname(__DIR__, 3) . $path, get_defined_vars());
    }

    // siteInfo
    public static function site(): array
    {
        return [
            'url' => '',
            'phone' => '+79777777777',
            'email' => 'info@pkvartira.ru',
            'address' => '',
            'kartaAdress' => '',
            'telegram' => '',
            'whatsapp' => '',
            'vk' => '',
            'max' => ''
        ];
    }

    /**
     * @param object $data Данные письма
     * @return void
     */
    public static function sendMail(object $data): void
    {
        $message = "Информация:\n";
        foreach ($data as $key => $value) {
            $message .= ucfirst($key) . ': ' . $value . "\n<br>";
        }
        try {
            (new MailController())->onMail('info@pkvartira.ru', 'Заявление с сайта', $message);
        } catch (Exception $e) {
            error_log('Mail Error: ' . $e->getMessage());
        }
        if (!isset($data->both))
            Network::onRedirect('/');
    }
}