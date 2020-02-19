<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?php 
require 'head.php'; 
require 'header.php';
?>
</header>
    <body class="<?php echo($page['body'] ); ?>">
        <div class="FnB_Air">
            <?php require 'list.php';?>
            <div class="container">
                <?php
                require $body;
                require 'footer.php';
                ?>
            </div>
        </div>
    </body>
</html>