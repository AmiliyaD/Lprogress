<?php
class L_widget_weBest extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_weBest', 'Виджет для наших достижений', [
            'name' => 'Lprogress - Мы лучшие',
            'description' => 'Чем мы лучше?'
        ]); 
    }

    public function form($instance)
    {
    ?>


        <p>
        <label for="<?php echo $this->get_field_id('numbersImg-id') ?>">
        Ссылка на картинку 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('numbersImg-id') ?>'
         name='<?php echo $this->get_field_name('numbersImg_name') ?>'
          value="<?php echo $instance['numbersImg_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('numbersBold-id') ?>">
        Оранжевый текст (если нужен)
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('numbersBold-id') ?>'
         name='<?php echo $this->get_field_name('numbersBold_name') ?>'
          value="<?php echo $instance['numbersBold_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('aboutNumbers-id') ?>">
        Описание 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutNumbers-id') ?>'
         name='<?php echo $this->get_field_name('aboutNumbers_name') ?>'
          value="<?php echo $instance['aboutNumbers_name'] ?>">
        </p>

    <?php
    }

    public function widget($args, $instance)
    {
        ?>
  <div class="col-md-4 about_us__item">
                    <div class="item__img">
                        <img class='img-thumbnail mx-auto d-block' width="160px" src="<?php echo $instance['numbersImg_name'] ?>" alt="">
                    </div>
                    <div class="item__p ">
                 
                        <p class='text-center orange_p'><?php echo $instance['numbersBold_name'] ?></p>

                  
                        <p class='text-center'><?php echo $instance['aboutNumbers_name'] ?></p>
                    </div>
                </div>

        <?php
    }


    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}