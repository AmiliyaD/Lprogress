<?php
class L_widget_whyBest extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_whyBest', 'Виджет для наших достижений', [
            'name' => 'Lprogress - Почему мы лучшие',
            'description' => 'Почему мы лучше?'
        ]); 
    }

    public function form($instance)
    {
    ?>
   <p>
        <label for="<?php echo $this->get_field_id('webestImg-id') ?>">
        Ссылка на картику 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('webestImg-id') ?>'
         name='<?php echo $this->get_field_name('webestImg_name') ?>'
          value="<?php echo $instance['webestImg_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('webestBold-id') ?>">
        Заголовок
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('webestBold-id') ?>'
         name='<?php echo $this->get_field_name('webestBold_name') ?>'
          value="<?php echo $instance['webestBold_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('webestAbout-id') ?>">
        Описание 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('webestAbout-id') ?>'
         name='<?php echo $this->get_field_name('webestAbout_name') ?>'
          value="<?php echo $instance['webestAbout_name'] ?>">
        </p>

    <?php
    }

    public function widget($args, $instance)
    {
        ?>
       <div class="col-md-3 ">
                    <div class="we_img">
                        <img class='img-thumbnail mx-auto d-block' width="200px" src="<?php echo $instance['webestImg_name'] ?>" alt="">
                    </div>
                    <div class="we_p">
                        <p class='best_p text-center'><?php echo $instance['webestBold_name'] ?></p>
                        <div class="border"></div>
                        <p class='text-center'><?php echo $instance['webestAbout_name'] ?></p>
                    </div>

                </div>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
    return $new_instance;
    }

}