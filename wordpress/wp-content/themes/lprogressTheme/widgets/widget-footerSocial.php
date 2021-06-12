<?php
class L_widget_Footersocial extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_Footersocial', 'Социальные сети в подвале', [
            'name' => 'Lprogress - подвал-соц-сети',
            'description' => 'Cоц сети в подвале'
        ]); 
    }

    public function form($instance)
    {
    ?>
 <p>
        <label for="<?php echo $this->get_field_id('socialFoot-id') ?>">
        Ссылка на соц-сеть
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('socialFoot-id') ?>'
         name='<?php echo $this->get_field_name('socialFoot_name') ?>'
          value="<?php echo $instance['socialFoot_name'] ?>">
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('socialFootImg-id') ?>">
        Ссылка на картинку соц-сети
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('socialFootImg-id') ?>'
         name='<?php echo $this->get_field_name('socialFootImg_name') ?>'
          value="<?php echo $instance['socialFootImg_name'] ?>">
        </p>

    <?php
    }

    public function widget($args,$instance)
    {
        ?>


<a href="<?php echo $instance['socialFoot_name'] ?>"><img class='img-thumbnail'  width="30px"  src="<?php echo $instance['socialFootImg_name'] ?>" alt=""></a>
        <?php
    }
    public function update($new_instance, $old_instance)
    {
    return $new_instance;
    }

}