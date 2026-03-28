<?php

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
}
