<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Главная страница</title>
        <meta name="viewport" content="width=1200px">
        <link rel="icon" href="/assets/images/favicon_1.ico" type="image/x-icon"/>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="/assets/css/common/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/grid.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/common.css" rel="stylesheet" type="text/css"/>
        <script src="/assets/js/main.js"></script>
        <script src="/assets/js/progress.min.js"></script>
    </head>
    <body>
        
        <div class="top_push">
            <div class="container_15">
                <div class="grid_15 text_align_center">
                    <span class="offer_text"><i class="fa fa-bullhorn"></i> Вы еще не знакомы с нашим новым сервисом? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('/tour') ?>"><i class="fa fa-bell"></i> Ознакомьтесь с возможностями сервиса</a></span>
                    <span class="offer_close">Спасибо, не надо <i class="fa fa-close"></i></span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <header>
            <div class="container_15">
                <div class="grid_3 logo">
                    <a href="<?php echo base_url('/') ?>"><img src="/assets/images/logo_new_2.png"></a>
                </div>
                <div class="grid_6 navigation">
                    <a href="<?php echo base_url('/doer') ?>">Исполнители</a>
                    <a href="<?php echo base_url('/actions') ?>">Акции</a>
                    <a href="<?php echo base_url('/contest') ?>">Конкурсы</a>
                    <a href="<?php echo base_url('/news') ?>">Статьи</a>
                </div>
                <div class="grid_6 login_area">
                    <div class="login_area_user">
                        <div class="logout">
			    <a href="<?php echo base_url('/login') ?>" class="btn btn_blue">Войти</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        
        <div class="container_15">
            <div class="grid_15">
                <div class="sub_top">
                    <div class="content_top">
                        <a href="/profile">Мой профиль</a>

                        <span class="right_balance">
                            <a href="/messages">Сообщения ( 0 ) </a>
                            <a href="balance">1 250 <i class="fa fa-rub"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="container_15">
            <div class="grid_11">
		<div class="panel">
                    <div class="panel_wrapper">
                        <div class="panel_title"><span class="fw_300">Святослав</span> Белимов<span class="age_spec"> // Фотограф, 29 лет</span> <span class="right_edit"><a href="<?php echo base_url('/profile/edit')?>">Редактировать</a></span></div>
                        <div class="panel_content">
                            <div class="user_info_left">
                                
                                <div class="user_info_left_item">
                                    <div class="user_info_left_item_name">
                                        Специализация:
                                    </div><div class="user_info_left_item_value">Портретная съемка</div>
                                </div>
                                
                                <div class="user_info_left_item">
                                    <div class="user_info_left_item_name">
                                        Доп. специализации:
                                    </div><div class="user_info_left_item_value">
                                        <ul>
                                            <li>Портретная съемка</li>
                                            <li>Портретная съемка</li>
                                            <li>Портретная съемка</li>
                                            <li>Портретная съемка</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="user_info_left_item">
                                    <div class="user_info_left_item_name">
                                        Опыт:
                                    </div><div class="user_info_left_item_value">
                                        3 года
                                    </div>
                                </div>
                                <div class="user_info_left_item">
                                    <div class="user_info_left_item_name">
                                        Информация:
                                    </div><div class="user_info_left_item_value text_align_justify">
                                        Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div><div class="user_info_right">
                                <p class="cost_descr">Стоимость услуг:</p>
                                <div class="user_info_right_cost">3 500 <i class="fa fa-rub"></i></div>
                                <div class="user_info_right_sub_cost">/ час</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel margin_top_20">
                    <div class="panel_wrapper">
                        <div class="panel_title">Отзывы <span class="right_edit"><a href="<?php echo base_url('/reviews/edit')?>">Редактировать</a></span></div>
                        <div class="panel_content">
                            <div class="reviews_content">
                                <div class="reviews_content_item">
                                    <p class="reviews_value reviews_plus">0</p>
                                    <p class="reviews_text">положительных</p>
                                </div><div class="reviews_content_item">
                                    <p class="reviews_value reviews_neutral">0</p>
                                    <p class="reviews_text">нейтральных</p>
                                </div><div class="reviews_content_item">
                                    <p class="reviews_value reviews_minus">0</p>
                                    <p class="reviews_text">отрицательных</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="reviews_content text_align_center">
                                <div class="clearfix"></div>
                                <a href="<?php echo base_url('/reviews')?>" class="full_button">Посмотреть все отзывы</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel margin_top_20">
                    <div class="panel_wrapper">
                        <div class="panel_title">Лучшие работы <span class="right_edit"><a href="<?php echo base_url('/best/edit')?>">Редактировать</a></span></div>
                        <div class="panel_content">
                            <div class="best_content">
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_1.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_2.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_3.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_4.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_5.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel margin_top_20">
                    <div class="panel_wrapper">
                        <div class="panel_title">Портфолио<span class="right_edit"><a href="<?php echo base_url('/best/edit')?>">Редактировать</a></span></div>
                        <div class="panel_content">
                            <div class="best_content">
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_1.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_2.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_3.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_4.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_5.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_1.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_2.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_3.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_4.jpg">
                                </div>
                                <div class="best_content_item">
                                    <img src="/assets/images/best/best_5.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div class="panel margin_top_20">
                    <div class="panel_wrapper">
                        <div class="panel_title">Сертификаты и благодарственные письма <span class="right_edit"><a href="<?php echo base_url('/best/edit')?>">Редактировать</a></span></div>
                        <div class="panel_content">
                            <div class="thank_mail">
                                <div class="thank_mail_item">
                                    <img src="/assets/images/best/mail_1.png">
                                </div>
                                <div class="thank_mail_item">
                                    <img src="/assets/images/best/mail_2.png">
                                </div>
                                <div class="thank_mail_item">
                                    <img src="/assets/images/best/mail_3.png">
                                </div>
                                <div class="thank_mail_item">
                                    <img src="/assets/images/best/mail_2.png">
                                </div>
                                <div class="thank_mail_item">
                                    <img src="/assets/images/best/mail_1.png">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="reviews_content text_align_center">
                                <div class="clearfix"></div>
                                <a href="<?php echo base_url('/reviews')?>" class="full_button">Посмотреть все отзывы</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="actions_dates margin_top_20"> 
                    <div class="actions_dates_item panel"> 
                        
                        <div class="panel_wrapper"> 
                            <div class="panel_title">Акции и скидки<span class="right_edit"><a href="<?php echo base_url('/best/edit')?>"><i class="fa fa-tasks"></i></a></span></div> 
                            <div class="panel_content"> 
                                <div class="panel_inner_content"> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_photo"><img src="/assets/images/action_temp.png"></div> 
                                        <div class="service_item_service_name_photo">Осенние скидки для всех!</div> 
                                        <div class="service_item_service_cost">Только сегодня самые лучщие скидки на весь осенний период!</div> 
                                    </div> 
                                </div> 
                                <div class="clearfix"></div>
                                <div class="service_item_more">
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url('/reviews')?>" class="full_button">Посмотреть все акции и скидки</a>
                                </div>
                                <div class="clearfix"></div> 
                            </div> 
                        </div>
                        
                        <div class="clearfix"></div>
                        
                    </div><div class="actions_dates_item panel"> 
                        <div class="panel_wrapper"> 
                            <div class="panel_title">Свободные даты<span class="right_edit"><a href="<?php echo base_url('/best/edit')?>">Редактировать</a></span></div> 
                            <div class="panel_content"> 
                                <div class="panel_inner_content"> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">29.09.2016</div> 
                                        <div class="service_item_service_cost">Свободная дата</div>
                                    </div> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">29.09.2016</div> 
                                        <div class="service_item_service_cost">Свободная дата</div>
                                    </div> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">29.09.2016</div> 
                                        <div class="service_item_service_cost">Свободная дата</div>
                                    </div> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">29.09.2016</div> 
                                        <div class="service_item_service_cost">Свободная дата</div>
                                    </div> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">29.09.2016</div> 
                                        <div class="service_item_service_cost">Свободная дата</div>
                                    </div> 
                                </div>
                                <div class="clearfix"></div>
                                <div class="service_item_more">
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url('/reviews')?>" class="full_button">Посмотреть все свободные даты</a>
                                </div>
                                <div class="clearfix"></div> 
                            </div> 
                        </div> 
                        <div class="clearfix"></div> 
                    </div><div class="actions_dates_item panel"> 
                        <div class="panel_wrapper"> 
                            <div class="panel_title">Услуги<span class="right_edit"><a href="<?php echo base_url('/best/edit')?>">Редактировать</a></span></div> 
                            <div class="panel_content"> 
                                <div class="panel_inner_content"> 
                                    <div class="service_item"> 
                                        <div class="service_item_service_name">Фотосъемка свадьбы</div> 
                                        <div class="service_item_service_cost">10 000 - 20 000 <i class="fa fa-rub"></i></div> 
                                        <div class="service_item_service_sub_cost">за день</div> 
                                    </div> 
                                <div class="service_item"> 
                                    <div class="service_item_service_name">Фотосъемка Love Story</div> 
                                    <div class="service_item_service_cost">20 000 - 50 000 <i class="fa fa-rub"></i></div> 
                                    <div class="service_item_service_sub_cost">за день</div> 
                                </div> 
                                <div class="service_item"> 
                                    <div class="service_item_service_name">Фотокнига</div> 
                                    <div class="service_item_service_cost">3 000 - 70 000 <i class="fa fa-rub"></i></div> 
                                    <div class="service_item_service_sub_cost">за день</div> 
                                </div> 
                                <div class="service_item"> 
                                    <div class="service_item_service_name">Выездная фотосъемка</div> 
                                    <div class="service_item_service_cost">от 8 000 <i class="fa fa-rub"></i></div> 
                                    <div class="service_item_service_sub_cost">за час</div> 
                                </div> 
                                <div class="clearfix"></div> 
                                </div> 
                                <div class="clearfix"></div>
                                <div class="service_item_more">
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url('/reviews')?>" class="full_button">Посмотреть все услуги</a>
                                </div>
                                <div class="clearfix"></div> 
                            </div> 
                        </div> 
                        <div class="clearfix"></div> 
                    </div> 
                    </div> 
                <div class="clearfix"></div>
                
                
            </div>






            <div class="grid_4">
                
                <div class=" panel_blue right_panel_sub_content">
                    <div class="panel_wrapper">
                        <div class="main_avatar">
                            <img src="/assets/images/avatar.png">
                            <span class="profi">PROFI</span>
                        </div>
                        <a href="/">Изменить фотографию</a>
                        <a href="/" class="a_profi">Купить PROFI</a>
                        <a href="/"><i class="fa fa-gear"></i> Настройки аккаунта</a>
                    </div>
                    <div class="dark_panel_title">
                        Рейтинг пользователя
                    </div>
                    <div class="rating_right rating_right_plus">
                        0
                    </div>
                    <div class="dark_panel_title">
                        Контакты <span class="edit_right"><a href="<?php echo base_url('/contacts/edit')?>">Редактировать</a></span>
                    </div>
                    <div class="panel_wrapper">
                        <ul>
                            <li><i class="fa fa-phone"></i> +7 965 974 74 74</li>
                            <li><i class="fa fa-envelope"></i> sbelimov@gmail.com</li>
                            <li><i class="fa fa-skype"></i> swat_online</li>
                            <li><a href="https://vk.com/belimov" target="_blank"><i class="fa fa-vk"></i> Вконтакте</a></li>
                            <li><a href="https://facebook.com/svyatoslav.belimov" target="_blank"><i class="fa fa-facebook"></i> facebook</a></li>
                            <li><a href="https://twitter.com/belimovlab" target="_blank"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li><a href="https://ok.ru/svyatoslav.belimov" target="_blank"><i class="fa fa-odnoklassniki"></i> Одноклассники</a></li>
                            <li><a href="http://astana.cms" target="_blank"><i class="fa fa-link"></i> WEB сайт</a></li>
                        </ul>
                    </div>
                    <div class="dark_panel_title">
                        Статистика 
                    </div>
                    <div class="panel_wrapper">
                        <ul>
                            <li><i class="fa fa-comments"></i> Отзывы 
                                <span class="right_value "> 0 </span>
                            </li>
                            <li><i class="fa fa-star"></i> В избранном <span class="right_value"> 0</span></li>
                            <li><i class="fa fa-eye"></i> Просмотры <span class="right_value"> 0</span></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="panel_dark_blue margin_top_20">
                    <div class="dark_panel_title">Баланс</div>
                    <div class="panel_wrapper">
                        <div class="balance_right">
                            1 250 <i class="fa fa-rub"></i>
                        </div>
                        <div class="right_panel_sub_content">
                            <a href="https://vk.com/belimov" target="_blank"><i class="fa fa-money"></i> Пополнить баланс</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="margin_top_20"> </div>
    </body>
</html>