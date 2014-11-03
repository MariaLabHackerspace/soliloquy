<?php 
$nimbus_text_logo = trim(nimbus_get_option('nimbus_text_logo'));
if (!empty($nimbus_text_logo)) { 
?>
    <h1 class="text_logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo $nimbus_text_logo; ?></a></h1>
<?php 
}
?>

