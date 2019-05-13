<h1> Pokemon Theme Options </h1>
<h3 class="title"> Manage Options </h3>
<p> Customize Sidebar Options </p>


<!-- registar_settings in functio-admin.php  -->


<form method="post" action=" ">
 <?php settings_fields('pokemon-settings-group'); //function-admin.php line 25 ?>
 <?php do_settings_sections('Pokemon_page'); ?>
 <?php submit_button(); ?>

</form>