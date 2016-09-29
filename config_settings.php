<?php
    
    class MainSiteConfig{
        private static $outer_config = array(
            'site_url'              => 'http://test10.ru/',          // URL Сайта
            'site_title'            => 'АстанаФото',                      // Название сайта(Будет выводиться если не задано для страницы)
            'site_set_session_path' => './cache_sess',                     // Путь к папке с сессиями
            'encryption_key'        => 'Super_secret_key_5203',            // Ключ Шифрования на сайте данных
            'db_host'               => 'localhost',                        // Сервер базы данных
            'db_user'               => 'root',                             // пользователь БД
            'db_password'           => '',                             // Пароль  БД
            'db_name'               => 'template',                  // Название БД
            'noreply_email'         => 'noreply@astanaphoto.pro',          // Email  для отправдения писем
            'email_from_name'       => 'Администрация сервиса',            // Имя для Email
        );

     
        public static function get_item($key)
        {
            return self::$outer_config[$key];
        }


    }


