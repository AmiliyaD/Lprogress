<?php 

get_header();
?>

<!-- проверка на язык -->
   <?php 

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
 <!-- main  -->
 <div class='container'> 
 <?php 
 $a  = $_SESSION['message'];

 echo $a;
         unset($_SESSION['message']);
     
           ?>
        <div class="row   main d-flex justify-content-between">
            <div class='col-md-5  marg_top'>
                <?php dynamic_sidebar('head_sidebar') ?>
            </div>
            <div class='col-md-1 header_soc'>



    <?php dynamic_sidebar('society') ?>

                <!-- <div> <a href="https://www.google.com/"><img class='img-thumbnail' width="26px" src="web/icon/google.png" alt=""></a></div>
                <div><a href="https://www.instagram.com/"><img class='img-thumbnail' width="26px" src="web/icon/ins.png" alt=""></a></div>
                <div><a href="https://vk.com/feed"><img class='img-thumbnail' width="26px" src="web/icon/vk.png" alt=""></a></div>
                <div> <a href="https://web.whatsapp.com/"><img class='img-thumbnail' width="26px" src="web/icon/waht.png" alt=""></a></div> -->
                <div class="line">
                    <svg width="2" height="71" viewBox="0 0 2 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 71L1 4.76837e-07" stroke="black" stroke-opacity="0.5" />
                    </svg>

                </div>
                <div class="word">
                    <p><?php echo $social ?></p>
                </div>
            </div>
        </div>
     
        
   


        <!-- о нас -->
        <!-- о нас в тексте -->
     <?php dynamic_sidebar('about_us__sidebar') ?>


        <!-- о нас в цифрах -->
        <div id='about_num' class="row  about_us marg_might_top">
           <?php dynamic_sidebar('about_numbers_head') ?>
            <div class="col-md-10 offset-1 about_us__body  d-flex justify-content-between">

            <?php dynamic_sidebar('about_numbers') ?>
              
            </div>
        </div>

    </div>


    <!-- условия -->
    <div id='condition' class="back  marg_might_top ">
        <div class="container">
            <div class="row contiditions ">
            
                <?php dynamic_sidebar('conditions') ?>
            <?php dynamic_sidebar('condition_1')  ?>
            </div>

        </div>
    </div>


    <!-- второй контейнер -->
    <div class="container">


        <!-- мы лучшие -->
        <div id='why_we' class="marg_might_top  we_are_best">
            <div class="row">

                <?php dynamic_sidebar('we_are_best_head') ?>
            </div>

            <div class="row  d-flex justify-content-around we_item">

              <?php dynamic_sidebar('we_are_best') ?>

            </div>



        </div>


 
        <!-- почему мы лучшие -->
        <div class="marg_might_top why_are_we_best">
            <div class="row">

               <?php dynamic_sidebar('why_are_best_head') ?>
            </div>

            <!-- причины - первый ряд -->
          

            <div class="row d-flex justify-content-around why_we_are_best__body">

            <?php dynamic_sidebar('why_are_best') ?>
  

            
            </div>
            <!-- причины - второй ряд -->
           
        </div>

        <!-- контакты -->
        <div id='contact' class="contacts marg_might_top">
            <div class="row">
               <?php dynamic_sidebar('contacts_header') ?>

            </div>
            <?php dynamic_sidebar('contacts') ?>
        </div>
        <?php dynamic_sidebar('lang') ?>
<?php get_footer() ?>