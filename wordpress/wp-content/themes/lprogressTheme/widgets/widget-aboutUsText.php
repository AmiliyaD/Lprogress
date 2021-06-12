<?php
class L_widget_aboutText extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_aboutText', 'Виджет для текста О нас', [
            'name' => 'Lprogress - О нас',
            'description' => 'О нас в тексте'
        ]); 
    }

    public function form($instance)
    {
        ?>
           <p>
        <label for="">Заголовок</label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('headTextId') ?>'
        name='<?php echo $this->get_field_name('headTextName') ?>'
        value="<?php echo $instance['headTextName'] ?>"
        >
        </p>

        <p>
        <label for="">О нас в тексте</label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutTextId') ?>'
        name='<?php echo $this->get_field_name('aboutTextName') ?>'
        value="<?php echo $instance['aboutTextName'] ?>"
        >
        </p>

        <p>
        <label for="">Выделено</label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutTextCh') ?>'
        name='<?php echo $this->get_field_name('aboutChName') ?>'
        value="<?php echo  $instance['aboutChName'] ?>"
        >
        </p>

        <p>
        <label for="">Снова О нас</label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutTextNew') ?>'
        name='<?php echo $this->get_field_name('aboutNew') ?>'
        value="<?php echo  $instance['aboutNew'] ?>"
        >
        </p>

        <p>
        <label for="">Краткие условия</label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('shortId') ?>'
        name='<?php echo $this->get_field_name('shortName') ?>'
        value="<?php  echo $instance['shortName'] ?>"
        >
        </p>
    <?php
    }

    public function widget( $args, $instance)
    {
        ?>
        <div class="row about_us__text " id="aboutusText">
                    <div class="col-md-10 offset-md-1">
                        <h2 class='all_h2 text-center'><?php echo $instance['headTextName'] ?></h2>
                    </div>
                    <div class="col-md-12">
                        <p class='text-center about_text__p'>
                        <?php echo $instance['aboutTextName'] ?>
                        </p>
                        <p class='text-center about_text__p about_text__pB'><?php echo $instance['aboutChName'] ?>
                </p>
                <p class='text-center about_text__p'><?php echo $instance['aboutNew']?>
                </p>
                    </div>
        
        
             
                </div>
        
        
                <?php
    }
    public function update($new_instance, $old_instance)
    {
    return $new_instance;
    }

}