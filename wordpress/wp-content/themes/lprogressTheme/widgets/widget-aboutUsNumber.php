<?php
class L_widget_aboutNumber extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_aboutNumber', 'Страница с формами', [
            'name' => 'Lprogress - деньги под залог',
            'description' => 'Оформление страницы с формой'
        ]); 
    }

    public function form($instance)
    {
        ?>
 <p>
        <label for="<?php echo $this->get_field_id('formImg-id') ?>">
        Ссылка на картинку 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('formImg-id') ?>'
         name='<?php echo $this->get_field_name('formImg_name') ?>'
          value="<?php echo $instance['formImg_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('formHead-id') ?>">
        Заголовок
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('formHead-id') ?>'
         name='<?php echo $this->get_field_name('formHead_name') ?>'
          value="<?php echo $instance['formHead_name'] ?>">
        </p>


<!-- блоки -->
        <p>
        <label for="<?php echo $this->get_field_id('aboutOne-id') ?>">
       Блок первый (описание)
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutOne-id') ?>'
         name='<?php echo $this->get_field_name('aboutOne_name') ?>'
          value="<?php echo $instance['aboutOne_name'] ?>">

          <input type="text" id='<?php echo $this->get_field_id('aboutOneP-id') ?>'
         name='<?php echo $this->get_field_name('aboutOneP_name') ?>'
          value="<?php echo $instance['aboutOneP_name'] ?>">
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('aboutTwo-id') ?>">
       Блок второй (описание)
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutTwo-id') ?>'
         name='<?php echo $this->get_field_name('aboutTwo_name') ?>'
          value="<?php echo $instance['aboutTwo_name'] ?>">

           
          <input type="text" id='<?php echo $this->get_field_id('aboutTwoP-id') ?>'
         name='<?php echo $this->get_field_name('aboutTwoP_name') ?>'
          value="<?php echo $instance['aboutTwoP_name'] ?>">
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('aboutThree-id') ?>">
       Блок третий (описание, если нужен) 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('aboutThree-id') ?>'
         name='<?php echo $this->get_field_name('aboutThree_name') ?>'
          value="<?php echo $instance['aboutThree_name'] ?>">

          <input type="text" id='<?php echo $this->get_field_id('aboutThreeP-id') ?>'
         name='<?php echo $this->get_field_name('aboutThreeP_name') ?>'
          value="<?php echo $instance['aboutThreeP_name'] ?>">
        </p>

        <?php
    
    }


    // Form

    public function widget($args, $instance)
    {
        ?>
 <div class="all_item">

<div class="row form_info__body">
    <div class="col-md-4 offset-md-4">
        <img class='img-thumbnail' src="<?php echo $instance['formImg_name'] ?>" alt="">
        <p class='form_p text-center'>   <?php echo $instance['formHead_name']?></p>
    </div>

</div>
<div class="row form_info_items d-flex justify-content-around">
    <div class="col-md-2">

        <p class='form_items_pHead'><?php echo $instance['aboutOne_name'] ?></p>
        <p class='form_items_pBody'><?php echo $instance['aboutOneP_name'] ?></p>
    </div>
    <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
    </svg>


    <div class="col-md-2">
        <p class='form_items_pHead'><?php echo $instance['aboutTwo_name']  ?></p>
        <p class='form_items_pBody'><?php echo $instance['aboutTwoP_name']  ?></p>
    </div>
    <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
    </svg>


    <div class="col-md-2">
        <p class='form_items_pHead'><?php echo $instance['aboutThree_name']  ?></p>
        <p class='form_items_pBody'><?php echo $instance['aboutThreeP_name']  ?></p>
    </div>
</div>

</div>
        <?php
    }

    // update
    public function update($new_instance, $old_instance)
    {
    return $new_instance;
    }

}