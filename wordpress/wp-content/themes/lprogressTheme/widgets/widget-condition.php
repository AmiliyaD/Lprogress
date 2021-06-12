<?php
class L_widget_condition extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_condition', 'Виджет для условий', [
            'name' => 'Lprogress - Условие',
            'description' => 'Условие кредитования'
        ]); 
    }

    public function form($instance)
    {
    ?>
 
    <p>
 <label for="<?php echo $this->get_field_id('condition-id') ?>">
        Введите условие
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('condition-id') ?>'
         name='<?php echo $this->get_field_name('condition_name') ?>'
          value="<?php echo $instance['condition_name'] ?>">
        </p>
    <?php
    }
    


    public function widget($args,$instance)
    {
       ?>

                <div class="col-md-6  conditions_item offset-md-4">
                    <p class='cond_p first_p'>
                        <?php echo $instance['condition_name'] ?>
                    </p>
                </div>
                
               
       <?php
    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}