<?php

    require "partials/header.php";
    require "partials/navigation.php";
    require "partials/title.php";
?>
<div style="padding:25px;" class="d-flex">
        <?php 
            foreach ($cards as $card){
                require "partials/card.php";
            }
        ?>
</div>

<?php require "partials/footer.php"; ?>