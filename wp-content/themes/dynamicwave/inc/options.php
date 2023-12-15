<?php

function dynamic_option_page() {
    add_menu_page(
            'Option Page', 
            'Dynamic Option', 
            'administrator', 
            'option_page', 
            'dynamic_contact_data', 
            'dashicons-id', 
            19);
    
}
add_action('admin_menu', 'dynamic_option_page');

function dynamic_contact_setings() {
    register_setting('dynamic_contact_data', 'dynamic_contact_title');
    register_setting('dynamic_contact_data', 'dynamic_address');
    register_setting('dynamic_contact_data', 'dynamic_phone');
    register_setting('dynamic_contact_data', 'dynamic_mobile_1');
    register_setting('dynamic_contact_data', 'dynamic_mobile2');
    register_setting('dynamic_contact_data', 'dynamic_email_1');
    register_setting('dynamic_contact_data', 'dynamic_email_2');
};
add_action('init', 'dynamic_contact_setings');

function dynamic_contact_data() {
    ?>

<h1>Dynamic contact data</h1>

<form method="post" action="options.php">
    <?php

    settings_fields('dynamic_contact_data');
    do_settings_sections('dynamic_contact_data')

?>
<table class="form-table">
    <tr><th>Info Section Title:</th>
        <td>
            <input type="text" name="dynamic_contact_title" value="<?php echo esc_attr(get_option('dynamic_contact_title')) ?>">
        </td>
        
    </tr>
    <tr>
        <th>Address:</th>
        <td>
            <input type="text" name="dynamic_address" value="<?php echo esc_attr(get_option('dynamic_address')) ?>">
        </td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>
            <input type="text" name="dynamic_phone" value="<?php echo esc_attr(get_option('dynamic_phone')) ?>">
        </td>
    </tr>
    <tr>
        <th>Mobile-1:</th>
        <td>
            <input type="text" name="dynamic_mobile_1" value="<?php echo esc_attr(get_option('dynamic_mobile_1')) ?>">
        </td>
    </tr>
    <tr>
        <th>Mobile-2:</th>
        <td>
            <input type="text" name="dynamic_mobile_2" value="<?php echo esc_attr(get_option('dynamic_mobile_2')) ?>">
        </td>
    </tr>
    <tr>
        <th>Email-1:</th>
        <td>
            <input type="text" name="dynamic_email_1" value="<?php echo esc_attr(get_option('dynamic_email_1')) ?>">
        </td>
    </tr>
    <tr>
        <th>Email-2:</th>
        <td>
            <input type="text" name="dynamic_email_2" value="<?php echo esc_attr(get_option('dynamic_email_2')) ?>">
        </td>
    </tr>
</table>
<?php
submit_button();
?>
    
</form>
<?php
}
?>