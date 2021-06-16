<!-- Template Name: TakeDebt -->
<?php

get_header();
$spanDe = '';
$social = '';
$pos = stripos(get_pagenum_link(), 'http://lprogress/wordpress/kk/');
if($pos ===  0) {
   $social = 'Біз әлеуметтік желілердеміз';
   $spanDe = 'Несие алыңыз';
}
else if ($pos === false) {
    $social = 'Мы в соц-сетях';
    $spanDe = 'Взять займ в';
};
?>
<div class="form">
        <div class="container">
      

            <!-- форма -->
            <p></p>
            <div class="row take_debt__form d-flex justify-content-between">
       
                <form class="col-md-4 debt_form" method="post" action="functions.php">
                    <div class="debt_form__text">
                        <p class='form_h2'><?php echo $spanDe ?></p>
                        <h1>LProgress</h1>
                    </div>
                    <!-- поля ввода -->

                    <div class="debt_form__input">
                        <div class="vert"></div>
                 <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
                    </div>
                  
                </form>
                <div class="col-md-1">

        
                <?php dynamic_sidebar('society') ?>
                    <div class="line">
                        <svg width="2" height="71" viewBox="0 0 2 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 71L1 4.76837e-07" stroke="black" stroke-opacity="0.5" />
                        </svg>

                    </div>
                    <div class="word">
                    <p><?php echo $social; ?></p>
                    </div>

                </div>
            </div>


            <!-- информация -->
            <div class="form_info marg_might_top">
                <div class="row form_info__head">
                   <?php dynamic_sidebar('form_des_head') ?>
                </div>
             <?php dynamic_sidebar('form_des') ?>

            </div>
            <?php dynamic_sidebar('lang') ?>
<?php get_footer() ?>