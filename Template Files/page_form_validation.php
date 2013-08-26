<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Form Validation</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Form Validation, Validation Initialization happens at the bottom of the page -->
    <form id="form-validation" action="page_form_validation.php" method="post" class="form-horizontal form-box remove-margin">
        <!-- Form Header -->
        <h4 class="form-box-header">Form Validation <small>Validate easily with Javascript before sending data for process</small></h4>

        <!-- Form Content -->
        <div class="form-box-content">
            <div class="control-group">
                <label class="control-label" for="val_username">Username *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input type="text" id="val_username" name="val_username">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_email">Email *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" id="val_email" name="val_email">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_password">Password *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                        <input type="password" id="val_password" name="val_password">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_confirm_password">Retype Password *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                        <input type="password" id="val_confirm_password" name="val_confirm_password">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_website">Website *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-globe"></i></span>
                        <input type="text" id="val_website" name="val_website" value="http://" class="input-large">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_date">Date *</label>
                <div class="controls">
                    <div class="input-prepend date input-datepicker" data-date="04-30-2013" data-date-format="mm-dd-yyyy">
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <input type="text" id="val_date" name="val_date" class="input-small">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_range">Range [1, 100] *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                        <input type="text" id="val_range" name="val_range" class="input-small">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_number">Number *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                        <input type="text" id="val_number" name="val_number" class="input-small">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_digits">Digits *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-asterisk"></i></span>
                        <input type="text" id="val_digits" name="val_digits" class="input-small">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_credit_card">Credit Card *</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-credit-card"></i></span>
                        <input type="text" id="val_credit_card" name="val_credit_card" data-toggle="tooltip" title="Try 446-667-651">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_skill">Best Skill *</label>
                <div class="controls">
                    <select id="val_skill" name="val_skill">
                        <option value="">Please select</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="javascript">Javascript</option>
                        <option value="php">PHP</option>
                        <option value="mysql">MySQL</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="val_terms">Service Terms *</label>
                <div class="controls">
                    <label class="checkbox" for="val_terms">
                        <input type="checkbox" id="val_terms" name="val_terms" value="1"> I agree
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> Reset</button>
                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit</button>
            </div>
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Form Validation -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){

        /* For advanced usage and examples please check out
         *  Jquery Validation   -> https://github.com/jzaefferer/jquery-validation
         */

        /* Initialize Form Validation */
        $('#form-validation').validate({
            errorClass: "help-inline text-error", // You can add help-block instead of help-inline if you like validation messages under the inputs
            errorElement: "span",
            errorPlacement: function(error, element) {
                element.parents(".controls").append(error);
            },
            highlight: function(e){
                $(e).closest(".control-group").removeClass("success error").addClass("error");
            },
            success: function(e){
                e.addClass("valid").closest(".control-group").removeClass("success error").addClass("success");
            },
            rules: {
                val_username: {
                    required: true,
                    minlength: 2
                },
                val_password: {
                    required: true,
                    minlength: 5
                },
                val_confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#val_password"
                },
                val_email: {
                    required: true,
                    email: true
                },
                val_website: {
                    required: true,
                    url: true
                },
                val_date: {
                    required: true,
                    date: true
                },
                val_range: {
                    required: true,
                    range: [1, 100]
                },
                val_number: {
                    required: true,
                    number: true
                },
                val_digits: {
                    required: true,
                    digits: true
                },
                val_skill: {
                    required: true
                },
                val_credit_card: {
                    required: true,
                    creditcard: true
                },
                val_terms: {
                    required: true
                }
            },
            messages: {
                val_username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                val_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                val_confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                val_email: "Please enter a valid email address",
                val_website: "Please enter your website!",
                val_date: "Please select a date!",
                val_range: "Please enter a number between 1 and 100!",
                val_number: "Please enter a number!",
                val_digits: "Please enter digits!",
                val_credit_card: "Please enter a valid credit card!",
                val_skill: "Please select a skill!",
                val_terms: "You must agree to the terms!"
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>
