<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo $header;?>        
        <div class="container_15">
            <div class="grid_11 panel">
                <div class="panel_wrapper">
                    <div class="panel_title"><?php echo $title;?></div>
                    <div class="panel_content">
                       
                        <?php if($error):?>
                        <p class="error">
                            <?php echo $error;?>
                        </p>
                        <?php endif;?>
                        
                        <p class="text_align_justify">
                            На ваш Email, указанный при регистрации, выслан код активации вашего аккаунта. Введите этот код ниже или перейдите по ссылке в письме для активации вашего аккаунта.
                        </p>
                        
                        <form action="<?php echo base_url('/account/registration_active_save')?>" method="POST">
                            <input type="hidden" name="user_email" value="<?php echo $reg_user_info['email']?>"/>
                            <p class="text_align_center">
                                <label>Введите ваш код активации</label>
                            </p>
                            <p class="text_align_center">
                                <input type='text' name='active_code' placeholder="Код..." tabindex="1" class="big_field reg_active_code" autocomplete="off" required minlength="5" maxlength="5">
                            </p>
                            
                            <p class="text_align_center margin_top_20">
                                <button class="action_button" type="submit"><i class="fa fa-check"></i> Завершить регистрацию</button>
                            </p>                        
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