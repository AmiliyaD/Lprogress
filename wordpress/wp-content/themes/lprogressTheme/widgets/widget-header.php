<?php
class L_widget_header extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget', 'Виджет для шапки', [
            'name' => 'Lprogress - Шапка',
            'description' => 'Для шапки'
        ]); 
    }

    public function form($instance)
    {
        ?>
        <p>
        <label for="<?php echo $this->get_field_id('head-id') ?>">
        Введите заголовок
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('head-id') ?>'
         name='<?php echo $this->get_field_name('head_name') ?>'
          value="<?php echo $instance['head_name'] ?>">
        </p>
      
        <p>
        <label for="<?php echo $this->get_field_id('headP_id') ?>">
        Введите описание
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('headP_id') ?>' 
          name='<?php echo $this->get_field_name('headP_name') ?>'
          value='<?php echo $instance['headP_name'] ?>'>
        </p>
        <?php
    }





    public function widget($args, $instance )
    {
        $social = '';
        $debt = '';

        $pos = stripos(get_pagenum_link(), 'http://lprogress/wordpress/kk/');
        if($pos ===  0) {
           $social = 'Біз әлеуметтік желілердеміз';
           $debt = 'Несие алу';
        }
        else if ($pos === false) {
            $social = 'Мы в соц-сетях';
            $debt  = 'Взять займ';
        }
        ?>

<div class="main_about">
                    <div class="main_about__text">
                        <h1 class="main_h1">
                           <?php echo $instance['head_name'] ?></h1>
                        <p class="main_p all_p">
                        <?php echo $instance['headP_name'] ?>
                        </p>
                    </div>
                    <div class="main_about__button">
                        <button class='button_here button_main' disabled><a class='a_main' href="http://lprogress/wordpress/take/">
                                <?php echo $debt ?></a></button>
                    </div>
                </div>
        <?php
    }




    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}