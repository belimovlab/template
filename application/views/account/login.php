<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>        
        <div class="container_15">
            <div class="grid_11 panel">
                <div class="panel_wrapper">
                    <div class="panel_title"><?php echo $title;?></div>
                    <div class="panel_content">
                        <form action="<?php echo base_url('/account/try_login')?>" method="POST">
                            <p>
                                <label>Ваш Email</label>
                            </p>
                            <p>
                                <input type='text' name='email' placeholder="Введите ваш Email..." tabindex="1">
                            </p>
                            <p>
                                <label>Ваш пароль</label>
                            </p>
                            <p>
                                <input type='password' name='password' placeholder="Введите ваш пароль..." tabindex="2">
                            </p>
                            <p class="text_align_center margin_top_20">
                                <button class="btn btn_blue" type="submit"><i class="fa fa-check"></i> Войти в сервис</button>
                            </p>
                        
                        </form>
                        
                        <div class="more_users border_top">
                            <p class="text_align_center users_is_use">
                                С нами уже <strong id="users_is_use">3 234</strong> пользователя!
                            </p>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="grid_4">
                <div class="panel_blue">
                    <div class="panel_wrapper">
                        <div class="panel_blue_title">Регистрация</div>
                        <div class="panel_content">
                            <p>Как!? У вас еще нет аккаунта !?</p>
                            <p>Вот небольшая часть того, что вы теряете:</p>
                            <div class="registration_features">
                                <ul>
                                    <li>Постоянные клиенты</li>
                                    <li>Удобный способ составить свое портфолио</li>
                                    <li>Возможность вести общение с клиентами</li>
                                    <li>Быстрый поиск нужного исполнителя</li>
                                    <li>Быть в курсе акций и скидок от исполнителей</li>
                                    <li>Быть нужным</li>
                                    <li>Быть профессионалом</li>
                                </ul>
                            </div>
                            <p class="margin_top_20 text_align_center">
                                <a href="<?php echo base_url('/account/registration')?>" class="registration_features_link">Я хочу зарегистрироваться!</a>
                            </p>
                        </div>
                    </div>
                </div>

                    <div class="panel_dark_blue margin_top_20">
                        <div class="panel_wrapper">
                            <div class="panel_blue_title">Восстановление пароля</div>
                            <div class="panel_content">
                                <p>Воспользуйтесь системой восстановления пароля, если вы не помните свой пароль.</p>
                                <p class="margin_top_20 text_align_center">
                                    <a href="<?php echo base_url('/account/remind')?>" class="registration_features_link">Восстановить пароль</a>
                                </p>
                            </div>
                        </div>
                    </div>
 
            </div>
        </div>
        
<?php echo $footer;