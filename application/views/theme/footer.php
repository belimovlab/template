        <div class="clearfix"></div>
        <div class="margin_top_20">
            <div class="text_align_center margin_top_20">
                <div class="bottoms_links margin_top_20">
                    <a href="<?php echo base_url('/about')?>">О проекте</a>
                    <a href="<?php echo base_url('/terms')?>">Условия использования</a>
                    <a href="<?php echo base_url('/about')?>">Рекламодателям</a>
                    <a href="<?php echo base_url('/about')?>">Поддержка</a>
                    <a href="<?php echo base_url('/about')?>">Обратная связь</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php foreach($js as $one):?>
            <?php if($one):?>
                <script src="/assets/js/<?php echo $one?>.js"></script>
            <?php endif;?>
        <?php endforeach;?>
    </body>
</html>