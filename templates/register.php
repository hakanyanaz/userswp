<?php do_action('uwp_template_before', 'register'); ?>
<div class="uwp-content-wrap">
    <div class="uwp-registration">
        <div class="uwp-rf-icon"><i class="fas fa-pencil-alt fa-fw"></i></div>
        <?php do_action('uwp_template_form_title_before', 'register'); ?>
        <h2><?php echo apply_filters('uwp_template_form_title', get_the_title(), 'register'); ?></h2>
        <?php do_action('uwp_template_display_notices', 'register'); ?>
        <form class="uwp-registration-form uwp_form" method="post" enctype="multipart/form-data">
            <?php do_action('uwp_template_fields', 'register'); ?>
            <?php do_action('uwp_social_fields', 'register'); ?>
            <input name="uwp_register_submit" value="<?php echo __( 'Create Account', 'userswp' ); ?>" type="submit">
        </form>
        <div class="uwp-login-now"><?php echo __( 'Already a Member?', 'userswp' ); ?> <a rel="nofollow" href="<?php echo uwp_get_login_page_url(); ?>"><?php echo __( 'Login Here', 'userswp' ); ?></a></div>
    </div>
</div>
<?php do_action('uwp_template_after', 'register'); ?>