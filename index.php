<?php
    include_once ('frontend/layout/head.php');
?>
	<div class="container">
       
            <!-- Top Part -->
            <?php
                include_once ('frontend/layout/top_area.php')
            ?>
            <!-- Toplink End Area -->
 
       <div class="clearfix"></div>
       
       
       <!-- Menupart Area -->

        <?php
        include_once ('frontend/layout/menu_area.php')
        ?>
        <!-- Menupart Area End --> 
        
        
        
       <!-- Aboutus Area -->

        <?php
        include_once ('frontend/layout/about.php')
        ?>
       
        
       <!-- Experience Area -->

        <?php
        include_once ('frontend/layout/exprience.php')
        ?>
     
     <!-- Skills Area -->

        <?php
        include_once ('frontend/layout/skill.php')
        ?>
     
     <!-- Contact Us Area -->
        <?php
        include_once ('frontend/layout/contact.php')
        ?>

        
    </div>

<?php
include_once ('frontend/layout/footer.php');
?>