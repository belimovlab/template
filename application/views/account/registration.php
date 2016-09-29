<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>        
        <div class="container_15">
            <div class="grid_11 panel">
                <div class="panel_wrapper">
                    <div class="panel_title"><?php echo $title;?></div>
                    <div class="panel_content">
                        <p>
                            <div class="registration_wrapper">
                                <div class="registration_specialist" id="rs_div">
                                    <span></span> Я исполнитель, хочу найти клиентов
                                </div><div class="registration_user border_spec" id="ru_div">
                                    <span></span> Я заказчик, хочу найти исполнителей
                                </div>
                            </div>
                        </p>
                        <script>
                            window.my_mans = <?php echo $user_count;?>;
                        </script>
                        <?php if($error):?>
                        <p class="error">
                            <?php echo $error;?>
                        </p>
                        <?php endif;?>
                        
                        <form action="<?php echo base_url('/account/try_registration')?>" method="POST">
                            <input type="hidden" name="user_role" value="specialist" id="role_id"/>
                            <p>
                                <label>Введите Email</label>
                            </p>
                            <p>
                                <input type='email' name='email' placeholder="Введите ваш Email..." tabindex="1" class="big_field" autocomplete="off" required>
                            </p>
                            <p class="padding_top_20px">
                                <label>Ваш пароль</label>
                            </p>
                            <p>
                                <input type='password' name='password' id="password" placeholder="Введите ваш пароль..." tabindex="2" class="big_field" autocomplete="off" required>
                            </p>
                            <p class="padding_top_20px">
                                <label>Подтверждение пароля</label>
                            </p>
                            <p>
                                <input type='password' name='repassword' id="repassword" placeholder="Подтвердите ваш пароль..." tabindex="3" class="big_field" autocomplete="off" required>
                            </p>
                            <p class="text_align_center margin_top_20">
                                <button class="action_button" type="submit"><i class="fa fa-check"></i> Я соглашаюсь с условиями использования и регистрируюсь</button>
                            </p>
                            <p class="text_align_center font_size_11px margin_top_20">Регистрируясь в сервисе, вы автоматически соглашаетесь с <a href="<?php echo base_url('/terms')?>" class="terms_user">условиями использования сервиса</a>.</p>
                        
                        </form>
                        

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="grid_4">
                <div class="panel_blue">
                    <div class="panel_wrapper">
                        <div class="panel_blue_title">Авторизация</div>
                        <div class="panel_content">
                            <p>Уже есть аккаунт?</p>
                            <p>Если у вас уже есть аккаунт, то не надо заводить второй.</p>
                            <p>Можно просто выполнить несколько простых действий:</p>
                            <div class="registration_features">
                                <ul>
                                    <li>Перейти на страницу авторизации</li>
                                    <li>Ввести Email и ваш пароль</li>
                                </ul>
                            </div>
                            <p class="margin_top_20 text_align_center">
                                <a href="<?php echo base_url('/account/login')?>" class="registration_features_link">Войти</a>
                            </p>
                        </div>
                    </div>
                </div>

                    <div class="panel_dark_blue margin_top_20">
                        <div class="panel_wrapper">
                            <div class="panel_blue_title">Уже с нами</div>
                            <div class="panel_content">
                                <p class="text_align_center font_size_20px"><strong><span  id="in_service_man"><?php echo $user_count?></span></strong></p>
                                <p class="text_align_center"> ровно столько человек уже пользуются сервисом.</p>
                                
                            </div>
                        </div>
                    </div>
 
            </div>
        </div>
        
<?php echo $footer;