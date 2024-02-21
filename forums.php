<div style="padding:50px"></div>
<div class="container">
    <?php
    include('classes/Command.php');
    $form = $_GET["form"];

    if (strtolower($form) == 'index') {
        include_once('forum/index.php');
    } else if (strtolower($form) == 'add') {
        include_once('forum/add.php');
    } else if (strtolower($form) == 'view') {
        include_once('forum/view.php');
    }
    ?>
</div>