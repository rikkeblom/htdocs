<?php
    session_start();
    $_page = "explore";
    require_once __DIR__.'/languages.php';
    require_once __DIR__.'/comp-header.php'
?>

<div id="content-menu-flex">
    <?php require_once __DIR__.'/comp-navigation.php'?>
    <div id="content">
        <div class="header-match-margin"></div>
        <main class="subpage" id="explore">
            <section id="hero">
                <h1 class="title"><?= $dictionairy[$language.'_explore']?></h1>
            </section> 
        </main>
        <?php require_once __DIR__.'/comp-footer.php'?>
    </div>
</div>