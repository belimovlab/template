<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <meta name="viewport" content="width=1200px">
        <link rel="icon" href="/assets/images/favicon_1.ico" type="image/x-icon"/>
        <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="/assets/css/common/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/grid.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/common/common.css" rel="stylesheet" type="text/css"/>
        <script src="/assets/js/jquery-3.1.1.min.js"></script>
        <script src="/assets/js/main_app.js"></script>
        <?php foreach($css as $one):?>
            <?php if($one):?>
                <link href="/assets/css/<?php echo $one?>.css" rel="stylesheet" type="text/css"/>
            <?php endif;?>
        <?php endforeach;?>
                
        <script src="/assets/js/progress.min.js"></script>
    </head>
    <body>
        <?php if($push_message):?>
        <div class="top_push">
            <div class="container_15">
                <div class="grid_15 text_align_center">
                    <span class="offer_text"><i class="fa fa-bullhorn"></i> Вы еще не знакомы с нашим новым сервисом? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('/tour') ?>"><i class="fa fa-bell"></i> Ознакомьтесь с возможностями сервиса</a></span>
                    <span class="offer_close">Спасибо, не надо <i class="fa fa-close"></i></span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php endif;?>
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
			    <a href="<?php echo base_url('/account/login') ?>" class="btn btn_blue">Войти</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        
        
        <?php if($user_info):?>
        <div class="container_15">
            <div class="grid_15">
                <div class="sub_top">
                    <div class="content_top">
                        <a href="<?php echo base_url('/profile')?>">Мой профиль</a>

                        <span class="right_balance">
                            <a href="<?php echo base_url('/messages')?>">Сообщения ( 0 ) </a>
                            <a href="<?php echo base_url('/balance')?>">1 250 <i class="fa fa-rub"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php endif;?>

        <?php if(!$user_info->user_id):?>
        <div class="clearfix"></div>
        <div class="margin_top_20"> </div>
        <?php endif;
        
