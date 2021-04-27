<!--Tab: Create or edit page template-->
<?php
if ( !empty($_GET['action']) && 'edit' == $_GET['action'] ) {
    global $ADL_LP, $wpdb;
    $template_id = (!empty($_GET['id'])) ? absint($_GET['id']) : 0;
    $sql = $wpdb->prepare("SELECT * FROM {$ADL_LP->template_table_name} WHERE id=%d LIMIT 1", $template_id);
    $template = $wpdb->get_row($sql);
    ?>
<!--template editing code goes here-->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="head text-center">Edit Legal Page Template</h3>

                <h1 class="adl_lp_title">Edit Template</h1>
                <form action="" method="post" id="editLegalTemplate" data-id="<?= $template->id; ?>" data-type="<?= $template->type; ?>">
                    <div class="form-group">

                        <input type="text" name="lp_title" class="form-control" id="lp_title" placeholder="Enter a template name" value="<?= $template->name; ?>">
                    </div>
                    <?php
                    
                    wp_editor($template->content, 'adl_lp_template', array('editor_height' => 400));

                    ?>
                    <button type="submit" class="btn btn-primary btn-outline-rounded"> Update Template</button>
                    <?php wp_nonce_field( $ADL_LP->nonceAction(), $ADL_LP->nonceName()); ?>
                </form>
            </div> <!--ends .col-md-9 left column-->

            <div class="col-md-3">
                <h4 style="padding-top: 50px;">Shortcodes that you may use:</h4>
                <hr>
                <ul>
                    <li>
                        [siteUrl]
                    </li>
                    <li>
                        [siteName]
                    </li>
                    <li>
                        [businessNiche]
                    </li>
                    <li>
                        [phoneNumber]
                    </li>
                    <li>
                        [emailAddress]
                    </li>
                    <li>
                        [streetName]
                    </li>
                    <li>
                        [countryName]
                    </li>
                    <li>
                        [cityName]
                    </li>
                    <li>
                        [stateName]
                    </li>
                    <li>
                        [zipCode]
                    </li>
                    <li>
                        [mailingAddress]
                    </li>
                    <li>
                        [facebookUrl]
                    </li>
                    <li>
                        [googlePlusUrl]
                    </li>
                    <li>
                        [linkedInUrl]
                    </li>
                    <li>
                        [twitterUrl]
                    </li>
                </ul>
            </div>


        </div>
    </div>





<?php

} else {
// template creation codes go here
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h3 class="head text-center">Create New Page Template</h3>

            <h1 class="adl_lp_title">Add New Template</h1>
            <form action="" method="post" id="addNewLegalTemplate">
                <div class="form-group">
                    <input type="text" name="lp_title" class="form-control" id="lp_title" placeholder="Enter a template name">
                </div>
                <?php
                $content = ( isset( $_POST['adl_lp_template']  ) ) ? wp_kses_post( $_POST['adl_lp_template'] ): 'You can use shortcode in the content to use/print the option values you saved in the general setting tabs. eg. [siteUrl] etc.';

                wp_editor($content, 'adl_lp_template', array('editor_height' => 400));

                ?>
                <button type="submit" class="btn btn-primary btn-outline-rounded"> Save Template</button>
                <?php wp_nonce_field( $ADL_LP->nonceAction(), $ADL_LP->nonceName()); ?>
            </form>
        </div> <!--ends .col-md-9 left column-->

        <div class="col-md-3">
            <h4 style="padding-top: 50px;">Shortcodes that you may use:</h4>
            <hr>
            <ul>
                <li>
                    [siteUrl]
                </li>
                <li>
                    [siteName]
                </li>
                <li>
                    [businessNiche]
                </li>
                <li>
                    [phoneNumber]
                </li>
                <li>
                    [emailAddress]
                </li>
                <li>
                    [streetName]
                </li>
                <li>
                    [countryName]
                </li>
                <li>
                    [cityName]
                </li>
                <li>
                    [stateName]
                </li>
                <li>
                    [zipCode]
                </li>
                <li>
                    [mailingAddress]
                </li>
                <li>
                    [facebookUrl]
                </li>
                <li>
                    [googlePlusUrl]
                </li>
                <li>
                    [linkedInUrl]
                </li>
                <li>
                    [twitterUrl]
                </li>
            </ul>
        </div>


    </div>
</div>

<?php
} // ends template creation code
?>



