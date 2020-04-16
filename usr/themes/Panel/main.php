<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<?php 
require(Usr_TPanel_PATH.'/head.php');
require(Usr_TPanel_PATH.'/header.php');
?>
    <body class="<?php echo($page['body'] ); ?>">
        <div class="AirBee_Not">
            <?php require(Usr_TPanel_PATH.'/list.php'); ?>
            <div class="container">
                <?php require $body; ?>
            </div>
            <?php require(Usr_TPanel_PATH.'/footer.php'); ?>
        </div>
    </body>
</html>