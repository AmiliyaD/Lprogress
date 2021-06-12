<?php
class L_widget_headAll extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widgetAll', 'Заголовки для виджетов', [
            'name' => 'Lprogress - Заголовоки',
            'description' => 'Заголовки для виджетов'
        ]); 
    }

    public function form($instance)
    {
        ?>
        <p>
        <label for="<?php echo $this->get_field_id('headAll-id') ?>">
        Введите заголовок
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('headAll-id') ?>'
         name='<?php echo $this->get_field_name('headAll_name') ?>'
          value="<?php echo $instance['headAll_name'] ?>">
        </p>
      
 
        <?php
    }





    public function widget($args, $instance )
    {
      ?>
      <div class="col-md-12 about_us__head">
                <h2 class="all_h2 text-center"><?php echo $instance['headAll_name'] ?></h2>

            </div>
        <?php
    }




    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}