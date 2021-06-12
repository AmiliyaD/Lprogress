<!-- ШАПКА -->
<?php 
include('lang.php');
$lan = lang($_GET['lang']);
?>
<nav class="navbar  navbar-expand-lg">
<?php if($_GET['lang'] == 'kz'): ?>
                <a class="navbar-brand" href="index.php?lang=kz">
                <?php elseif($_GET['lang'] == 'ru'): ?>
                    <a class="navbar-brand" href="index.php?lang=ru">
                    <?php else: ?> 
                        <a class="navbar-brand" href="index.php?lang=ru">
                <?php endif; ?>
                    <img src="web/logo/LProgress.png" width="150px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse header_left navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav header_a">
                    <?php if($_GET['lang'] == 'kz'): ?>
                        <a class="nav-item nav-link active main_a" href="index.php?lang=kz#condition"><?php echo $lan['menu'][0] ?> <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=kz#contact"><?php echo $lan['menu'][1] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=kz#aboutusText"><?php echo $lan['menu'][4] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=kz#why_we"><?php echo $lan['menu'][2] ?></a>
                        <?php elseif($_GET['lang'] == 'ru'): ?>
                            <a class="nav-item nav-link active main_a" href="index.php?lang=ru#condition"><?php echo $lan['menu'][0] ?> <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#contact"><?php echo $lan['menu'][1] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#aboutusText"><?php echo $lan['menu'][4] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#why_we"><?php echo $lan['menu'][2] ?></a>
                        <?php else: ?> 
                            <a class="nav-item nav-link active main_a" href="index.php?lang=ru#condition"><?php echo $lan['menu'][0] ?> <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#contact"><?php echo $lan['menu'][1] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#aboutusText"><?php echo $lan['menu'][4] ?></a>
                        <a class="nav-item nav-link main_a" href="index.php?lang=ru#why_we"><?php echo $lan['menu'][2] ?></a>
                     <?php endif; ?>
                            <a class="nav-item nav-link main_a" href="?lang=kz">Каз</a>
                            <a class="nav-item nav-link main_a" href="?lang=ru">Рус</a>
                        <!-- <button class='nav-item nav-link trasnlate' id='kz'>Каз</button> -->
                    </div>
                </div>
            </nav>



<style>
button {
    background: none;
    border: none;
}
</style>