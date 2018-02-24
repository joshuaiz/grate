<?php 
/*
* This is the base sidebar template. If you add an additional sidebar called 'sidebar2' 
* and want to make changes to your sidebar, copy this template to a file called 
* 'sidebar-sidebar2.php'.
*
*/
?>

<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

    <aside class="sidebar wrap" role="complementary">

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    </aside>

<?php endif; ?>
