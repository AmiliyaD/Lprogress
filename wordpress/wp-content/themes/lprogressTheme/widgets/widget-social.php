<?php
class L_widget_social extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_social', 'Социальные сети', [
            'name' => 'Lprogress - соц-сети',
            'description' => 'Cоц сети'
        ]); 
    }

    public function form($instance)
    {
    ?>
 <p>
        <label for="<?php echo $this->get_field_id('social-id') ?>">
        Ссылка на соц-сеть
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('social-id') ?>'
         name='<?php echo $this->get_field_name('social_name') ?>'
          value="<?php echo $instance['social_name'] ?>">
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('socialImg-id') ?>">
        Ссылка на картинку соц-сети
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('socialImg-id') ?>'
         name='<?php echo $this->get_field_name('socialImg_name') ?>'
          value="<?php echo $instance['socialImg_name'] ?>">
        </p>

    <?php
    }

    public function widget($args,$instance)
    {
        ?>



<div> <a href="<?php echo $instance['social_name'] ?>">
<img class='img-thumbnail' width="27px" alt='соцсеть' src="<?php echo $instance['socialImg_name'] ?>" alt=""></a></div>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
    return $new_instance;
    }

}