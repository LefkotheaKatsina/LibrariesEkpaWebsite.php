<?php
    session_start();
    if(!isset($_SESSION["username"])){
        include_once 'sessionVariables.php';
    }
?>
<html>
<?php
include 'header.php'
?>
<body id="body">
    <div id="allcontent" class="borderDesign">
        <?php
            include 'body_header.php'
        ?>
        <?php
            include 'body_main_nav.php'
        ?>
        <div id="main">
            <?php 
                include 'myCarousel.php'
            ?>
            <?php 
                include 'searchContainer.php'
            ?>
            <?php
                include 'down_menu.php'
            ?>
        </div>
        <?php
            include 'footer.php'
        ?>
    </div> 
    

</body>
</html>