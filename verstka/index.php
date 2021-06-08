<!-- ГЛАВНАЯ СТРАНИЦА -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,900&display=swap"
        rel="stylesheet">
    <title>Главная</title>
</head>

<body>

    <div class="container">

        <!-- header -->
        <div class="row  header">


            <?php include('header.php') ?>

        </div>

        <?php


?>
        <!-- main  -->
        <div class="row   main d-flex justify-content-between">
            <div class='col-md-5  marg_top'>
                <div class="main_about">
                    <div class="main_about__text">
                        <h1 class="main_h1">
                            LProgress</h1>
                        <p class="main_p all_p">
                            <?php echo $lan['main'][1] ?>
                        </p>
                    </div>
                    <div class="main_about__button">
                        <button class='button_here button_main' disabled><a class='a_main' href="form.php">
                                <?php echo $lan['main'][2] ?></a></button>
                    </div>
                </div>
            </div>
            <div class='col-md-1 header_soc'>




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


        <!-- о нас -->
        <!-- о нас в тексте -->
        <div class="row about_us__text " id="aboutusText">
            <div class="col-md-10 offset-md-1">
                <h2 class='all_h2 text-center'><?php echo $lan['about_us'][0] ?></h2>
            </div>
            <div class="col-md-12">
                <p class='text-center about_text__p'><?php echo $lan['about_us'][1] ?></p>
                <p class='text-center about_text__p about_text__pB'><?php echo $lan['about_us'][2] ?>
                </p>
                <p class='text-center about_text__p'><?php echo $lan['about_us'][3] ?>
                </p>
            </div>


            <div class="col-md-10 about_us__condit">
                <h3><?php echo $lan['about_us'][4] ?></h3>
                <p class='about_text__p'><?php echo $lan['about_us'][5] ?>
                </p>
                <p class='about_text__p'><?php echo $lan['about_us'][6] ?></p>
            </div>
        </div>



        <!-- о нас в цифрах -->
        <div id='about_num' class="row  about_us marg_might_top">
            <div class="col-md-12 about_us__head">
                <h2 class="all_h2 text-center"><?php echo $lan['numbers'][0] ?></h2>

            </div>
            <div class="col-md-10 offset-1 about_us__body  d-flex justify-content-between">
                <div class="about_us__item">
                    <div class="item__img">
                        <img class='img-thumbnail mx-auto d-block' width="160px" src="web/icon/percentage.png" alt="">
                    </div>
                    <div class="item__p ">
                        <p class='text-center orange_p'>15%</p>
                        <p class='text-center'><?php echo $lan['numbers'][1] ?></p>
                    </div>
                </div>
                <div class="about_us__item">
                    <div class="item__img d-block">
                        <img class='img-thumbnail mx-auto d-block' width="160px" src="web/icon/clock.png" alt="">
                    </div>
                    <div class="item__p ">
                        <p class='text-center orange_p'>15 <span class='orange_span'>мин</span> </p>
                        <p class='text-center'><?php echo $lan['numbers'][2] ?></p>
                    </div>
                </div>
                <div class="about_us__item">
                    <div class="item__img">
                        <img class='img-thumbnail mx-auto d-block' width="160px" src="web/icon/calendar.png" alt="">
                    </div>
                    <div class="item__p ">
                        <p class='text-center orange_p'>2 <span
                                class='orange_span'><?php echo $lan['numbers'][4] ?></span> </p>
                        <p class='text-center'><?php echo $lan['numbers'][3] ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- условия -->
    <div id='condition' class="back  marg_might_top ">
        <div class="container">
            <div class="row contiditions ">
                <div class="col-md-12 contiditions__head">
                    <h2 class="all_h2 text-center"><?php echo $lan['conditions'][0] ?></h2>

                </div>
                <div class="col-md-6  conditions_item offset-md-4">
                    <p class='cond_p first_p'>
                        <?php echo $lan['conditions'][1] ?>
                    </p>
                </div>
                <div class="col-md-6 conditions_item offset-md-4">
                    <p class='cond_p'>
                        <?php echo $lan['conditions'][2] ?>
                    </p>
                </div>
                <div class="col-md-6 conditions_item offset-md-4">
                    <p class='cond_p'>
                        <?php echo $lan['conditions'][3] ?>
                    </p>
                </div>
            </div>

        </div>
    </div>


    <!-- второй контейнер -->
    <div class="container">


        <!-- мы лучшие -->
        <div id='why_we' class="marg_might_top  we_are_best">
            <div class="row">

                <div class="col-md-12 we_are_best__head">
                    <h2 class="all_h2 text-center"><?php echo $lan['we_best'][0] ?></h2>

                </div>
            </div>

            <div class="row  d-flex justify-content-around we_item">

                <div class="col-md-3 ">
                    <div class="we_img">
                        <img class='img-thumbnail mx-auto d-block' width="200px" src="web/Оранжевый/rock.png" alt="">
                    </div>
                    <div class="we_p">
                        <p class='best_p text-center'><?php echo $lan['we_best']['item1'][0] ?></p>
                        <div class="border"></div>
                        <p class='text-center'><?php echo $lan['we_best']['item1'][1] ?></p>
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class="we_img">
                        <img class='img-thumbnail mx-auto d-block' width="200px" src="web/Оранжевый/safe.png" alt="">
                    </div>
                    <div class="we_p">
                        <p class='best_p text-center'><?php echo $lan['we_best']['item2'][0] ?></p>
                        <div class="border"></div>
                        <p class='text-center'><?php echo $lan['we_best']['item2'][1] ?></p>
                    </div>

                </div>
                <div class="col-md-3 ">
                    <div class="we_img">
                        <img class='img-thumbnail mx-auto d-block' width="200px" src="web/Оранжевый/fing.png" alt="">
                    </div>
                    <div class="we_p">
                        <p class='best_p text-center'><?php echo $lan['we_best']['item3'][0] ?></p>
                        <div class="border"></div>
                        <p class='text-center'><?php echo $lan['we_best']['item3'][1] ?></p>
                    </div>

                </div>

            </div>



        </div>



        <!-- почему мы лучшие -->
        <div class="marg_might_top why_are_we_best">
            <div class="row">

                <div class="col-md-12 we_are_best__head">
                    <h2 class="all_h2 text-center"><?php echo $lan['why_best'][0] ?></h2>

                </div>
            </div>
            <!-- причины - первый ряд -->
            <div class="row d-flex justify-content-around best_first why_we_are_best__body">

                <div class="col-md-3 ">
                    <img class='img-thumbnail d-block mx-auto' width="150px" src="web/icon/percentage.png" alt="">
                    <p class='text-center'><?php echo $lan['why_best'][1] ?> </p>
                </div>
                <div class="col-md-3 "><img class='img-thumbnail d-block mx-auto' width="150px" src="web/icon/tenge.png"
                        alt="">
                    <p class='text-center'><?php echo $lan['why_best'][2] ?></p>
                </div>
                <div class="col-md-3 "><img class='img-thumbnail d-block mx-auto' width="150px" src="web/icon/clock.png"
                        alt="">
                    <p class='text-center'><?php echo $lan['why_best'][3] ?></p>
                </div>
            </div>
            <!-- причины - второй ряд -->
            <div class="row d-flex justify-content-around why_we_are_best__body">

                <div class="col-md-3 "><img class='img-thumbnail d-block mx-auto' width="150px"
                        src="web/icon/comission.png" alt="">
                    <p class='text-center'><?php echo $lan['why_best'][4] ?></p>
                </div>
                <div class="col-md-3 "><img class='img-thumbnail d-block mx-auto' width="150px"
                        src="web/icon/calendar.png" alt="">
                    <p class='text-center'><?php echo $lan['why_best'][5] ?></p>
                </div>
                <div class="col-md-3 "><img class='img-thumbnail d-block mx-auto' width="150px" src="web/icon/park.png"
                        alt="">
                    <p class='text-center'><?php echo $lan['why_best'][6] ?></p>
                </div>
            </div>
        </div>

        <!-- контакты -->
        <div id='contact' class="contacts marg_might_top">
            <div class="row">
                <div class="col-md-12 contacts__head">
                    <h2 class="all_h2"><?php echo $lan['contact'][0] ?></h2>

                </div>

            </div>
            <div class="row contacts__body">
                <div class="col-md-5">
                    <div class="contacts__info">

                        <p> <b>Нур-Султан</b> <span style="margin-left: 50px;"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="24 / maps / pin">
                                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 23.3276L12.6577 22.7533C18.1887 17.9237 21 13.7068 21 10C21 4.75066 16.9029 1 12 1C7.09705 1 3 4.75066 3 10C3 13.7068 5.81131 17.9237 11.3423 22.7533L12 23.3276ZM12 20.6634C7.30661 16.4335 5 12.8492 5 10C5 5.8966 8.16411 3 12 3C15.8359 3 19 5.8966 19 10C19 12.8492 16.6934 16.4335 12 20.6634ZM12 5C14.7614 5 17 7.23858 17 10C17 12.7614 14.7614 15 12 15C9.23858 15 7 12.7614 7 10C7 7.23858 9.23858 5 12 5ZM9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10Z"
                                            fill="black" />
                                    </g>
                                </svg>


                                <a target="blank"
                                    href="https://www.google.com/maps/place/223,+%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%96%D0%B5%D0%BD%D0%B8%D1%81+72,+%D0%9D%D1%83%D1%80-%D0%A1%D1%83%D0%BB%D1%82%D0%B0%D0%BD+020000/@51.1894579,71.4051084,17z/data=!3m1!4b1!4m5!3m4!1s0x42458735955983c1:0xd7f51f9e6b50d15e!8m2!3d51.1894579!4d71.4072971?hl=ru-KG">
                                    ул. проспект Женис 72, оф. 223</a></span></p>





                        <p><b>Алматы</b> <span style="margin-left: 75px;"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="24 / maps / pin">
                                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 23.3276L12.6577 22.7533C18.1887 17.9237 21 13.7068 21 10C21 4.75066 16.9029 1 12 1C7.09705 1 3 4.75066 3 10C3 13.7068 5.81131 17.9237 11.3423 22.7533L12 23.3276ZM12 20.6634C7.30661 16.4335 5 12.8492 5 10C5 5.8966 8.16411 3 12 3C15.8359 3 19 5.8966 19 10C19 12.8492 16.6934 16.4335 12 20.6634ZM12 5C14.7614 5 17 7.23858 17 10C17 12.7614 14.7614 15 12 15C9.23858 15 7 12.7614 7 10C7 7.23858 9.23858 5 12 5ZM9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10Z"
                                            fill="black" />
                                    </g>
                                </svg>


                                <a target="blank"
                                    href="https://yandex.kz/maps/162/almaty/house/Y08YfgJkS0cEQFppfX51dXVibQ==/?ll=76.854224%2C43.244919&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16.65">
                                    улица Толе Би, 296В</a></span></p>




                        <p><b>Шымкент</b> <span style="margin-left: 50px;"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="24 / maps / pin">
                                        <path id="icon" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 23.3276L12.6577 22.7533C18.1887 17.9237 21 13.7068 21 10C21 4.75066 16.9029 1 12 1C7.09705 1 3 4.75066 3 10C3 13.7068 5.81131 17.9237 11.3423 22.7533L12 23.3276ZM12 20.6634C7.30661 16.4335 5 12.8492 5 10C5 5.8966 8.16411 3 12 3C15.8359 3 19 5.8966 19 10C19 12.8492 16.6934 16.4335 12 20.6634ZM12 5C14.7614 5 17 7.23858 17 10C17 12.7614 14.7614 15 12 15C9.23858 15 7 12.7614 7 10C7 7.23858 9.23858 5 12 5ZM9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10Z"
                                            fill="black" />
                                    </g>
                                </svg> <a target="blank"
                                    href="https://yandex.kz/maps/221/chimkent/house/YkAYcwBkTkAFQFpofX9zcHVlZQ==/?ll=69.574752%2C42.321961&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16.65">ул.
                                    Мангельдина, дом 36, кв 83</a> </span></p>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="contacts_contact">
                        <p>7 701 717-70-93 <br>
                            7 747 382-20-48 <br>
                            7 771 165-08-03</p>
                        <p>7 701 717-70-93 <br>
                            7 747 382-20-48 <br>
                            7 771 165-08-03</p>
                        <p>7 701 717-70-93 <br>
                            7 747 382-20-48 <br>
                            7 771 165-08-03</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- подвал -->
        <footer>
            <div class="row footer marg_might_top">

                <?php include('footer.php') ?>
            </div>
        </footer>
    </div>

</body>

</html>