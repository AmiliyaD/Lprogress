<?php
class L_widget_contact extends WP_Widget {
    public function __construct()
    {
        parent::__construct('L_widget_contact', 'Виджет для контактов', [
            'name' => 'Lprogress - Контакты',
            'description' => 'Контакты и улицы'
        ]); 
    }

    public function form($instance)
    {
        ?>
 <p>
        <label for="<?php echo $this->get_field_id('city-id') ?>">
       Город
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('city-id') ?>'
         name='<?php echo $this->get_field_name('city_name') ?>'
          value="<?php echo $instance['city_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('street-id') ?>">
        Название улицы
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('street-id') ?>'
         name='<?php echo $this->get_field_name('street_name') ?>'
          value="<?php echo $instance['street_name'] ?>">
        </p>

        
        <p>
        <label for="<?php echo $this->get_field_id('streetCart-id') ?>">
     Ссылка на карту с улицей
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('streetCart-id') ?>'
         name='<?php echo $this->get_field_name('streetCart_name') ?>'
          value="<?php echo $instance['streetCart_name'] ?>">
        </p>



        <p>
        <label for="<?php echo $this->get_field_id('contacts-id') ?>">
       Контакты 
        </label>
        <br>
        <input type="text" id='<?php echo $this->get_field_id('contacts-id') ?>'
         name='<?php echo $this->get_field_name('contacts_name') ?>'
          value="<?php echo $instance['contacts_name'] ?>">
        </p>

        <?php
    
    }

    public function widget($args, $instance)
    {
      ?>
<div class="row contacts__body">
                <div class="col-md-5">
                    <div class="contacts__info">

                        <p> <b><?php echo $instance['city_name'] ?></b> <span style="margin-left: 50px;"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="24 / maps / pin">
                                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 23.3276L12.6577 22.7533C18.1887 17.9237 21 13.7068 21 10C21 4.75066 16.9029 1 12 1C7.09705 1 3 4.75066 3 10C3 13.7068 5.81131 17.9237 11.3423 22.7533L12 23.3276ZM12 20.6634C7.30661 16.4335 5 12.8492 5 10C5 5.8966 8.16411 3 12 3C15.8359 3 19 5.8966 19 10C19 12.8492 16.6934 16.4335 12 20.6634ZM12 5C14.7614 5 17 7.23858 17 10C17 12.7614 14.7614 15 12 15C9.23858 15 7 12.7614 7 10C7 7.23858 9.23858 5 12 5ZM9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10Z"
                                            fill="black" />
                                    </g>
                                </svg>


                                <a target="blank"
                                    href="<?php echo $instance['streetCart_name'] ?>">
                                    <?php echo $instance['street_name'] ?></a></span></p>





                       
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="contacts_contact">
                        <p><?php echo $instance['contacts_name'] ?></p>
                      
                    </div>
                </div>
            </div>
      <?php  
    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}