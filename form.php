<?php 
session_start();

session_destroy();
?>
<!-- СТРАНИЦА ФОРМЫ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,900&display=swap"
        rel="stylesheet">
    <title>Взять займ</title>
</head>

<body>
    <div class="form">
        <div class="container">
            <!-- шапка -->
            <div class="row header">
                <?php include('header.php') ?>
            </div>


            <!-- форма -->
            <p><?php echo $_SESSION['message']; ?></p>
            <div class="row take_debt__form d-flex justify-content-between">
       
                <form class="col-md-4 debt_form" method="post" action="functions.php">
                    <div class="debt_form__text">
                        <p class='form_h2'><?php echo $lan['take_debt'][0] ?></p>
                        <h1>LProgress</h1>
                    </div>
                    <!-- поля ввода -->

                    <div class="debt_form__input">
                        <div class="vert"></div>
                        <input class='debt_inp' name='name' placeholder="<?php echo $lan['take_debt'][1] ?>" type="text">
                        <input placeholder="<?php echo $lan['take_debt'][2] ?>" name='email' class='debt_inp' type="text">
                        <input placeholder="<?php echo $lan['take_debt'][3] ?>" name='phone' class='debt_inp' type="text">
                    </div>
                    <button class='form_button button_here button_main'><?php echo $lan['take_debt'][4] ?></button>
                </form>
                <div class="col-md-1">



                <div> <a href="https://www.google.com/"><img class='img-thumbnail' width="26px" src="web/icon/google.png" alt=""></a></div>
                <div><a href="https://www.instagram.com/"><img class='img-thumbnail' width="26px" src="web/icon/ins.png" alt=""></a></div>
                <div><a href="https://vk.com/feed"><img class='img-thumbnail' width="26px" src="web/icon/vk.png" alt=""></a></div>
                <div> <a href="https://web.whatsapp.com/"><img class='img-thumbnail' width="26px" src="web/icon/waht.png" alt=""></a></div>
                    <div class="line">
                        <svg width="2" height="71" viewBox="0 0 2 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 71L1 4.76837e-07" stroke="black" stroke-opacity="0.5" />
                        </svg>

                    </div>
                    <div class="word">
                    <p><?php echo $lan['menu'][3] ?></p>
                    </div>

                </div>
            </div>


            <!-- информация -->
            <div class="form_info marg_might_top">
                <div class="row form_info__head">
                    <h2 class="all_h2 text-center">
                       <?php echo $lan['best_again'][0] ?>
                    </h2>
                </div>
                <div class="all_item">

                    <div class="row form_info__body">
                        <div class="col-md-4 offset-md-4">
                            <img class='img-thumbnail' src="web/icon/speedometer.png" alt="">
                            <p class='form_p text-center'>   <?php echo $lan['best_again']['item1'][0] ?></p>
                        </div>

                    </div>
                    <div class="row form_info_items d-flex justify-content-around">
                        <div class="col-md-2">

                            <p class='form_items_pHead'><?php echo $lan['best_again']['item1'][1] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item1'][2] ?></p>
                        </div>
                        <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
                        </svg>

                        <!-- <div class="border"></div> -->
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item1'][3] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item1'][4] ?></p>
                        </div>
                        <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
                        </svg>

                        <!-- <div class="border"></div> -->
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item1'][5] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item1'][6] ?></p>
                        </div>
                    </div>

                </div>

                <div class="all_item">

                    <div class="row form_info__body">
                        <div class="col-md-4 offset-md-4">
                            <img class='img-thumbnail' src="web/icon/badge.png" alt="">
                            <p class='form_p text-center'><?php echo $lan['best_again']['item2'][0] ?></p>
                        </div>

                    </div>
                    <div class="row form_info_items d-flex justify-content-around">
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item2'][1] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item2'][2] ?></p>
                        </div>

                        <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
                        </svg>
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item2'][3] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item2'][4] ?></p>
                        </div>
                    </div>

                </div>
                <div class="all_item">

                    <div class="row form_info__body">
                        <div class="col-md-4 offset-md-4">
                            <img class='img-thumbnail' src="web/icon/stock-exchange-app.png" alt="">
                            <p class='form_p text-center'><?php echo $lan['best_again']['item3'][0] ?></p>
                        </div>

                    </div>
                    <div class="row form_info_items d-flex justify-content-around">
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item3'][1] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item3'][2] ?></p>
                        </div>
                        <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
                        </svg>
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item3'][3] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item3'][4] ?></p>
                        </div>
                        <svg width="150" height="1" viewBox="0 0 150 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="149.003" y2="0.5" stroke="#FF9900" />
                        </svg>
                        <div class="col-md-2">
                            <p class='form_items_pHead'><?php echo $lan['best_again']['item3'][5] ?></p>
                            <p class='form_items_pBody'><?php echo $lan['best_again']['item3'][6] ?></p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row footer marg_might_top">

                <?php include('footer.php') ?>
            </div>

        </div>
    </div>





</body>

</html>