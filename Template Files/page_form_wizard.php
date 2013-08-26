<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Form Wizard</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Basic Form Wizard -->
    <form id="basic-wizard" action="page_form_wizard.php" method="post" class="form-horizontal form-box">
        <!-- Form Header -->
        <h4 class="form-box-header"><i class="icon-magic"></i> Basic Wizard</h4>

        <!-- Form Content -->
        <div class="form-box-content">

            <!-- First Step -->
            <div id="first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center active">1. Account</div>
                    <div class="span4 text-center">2. Personal</div>
                    <div class="span4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="example-username">Username</label>
                    <div class="controls">
                        <div class="input-append">
                            <input type="text" id="example-username" name="example-username">
                            <span class="add-on"><i class="icon-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-email">Email</label>
                    <div class="controls">
                        <div class="input-append">
                            <input type="text" id="example-email" name="example-email">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-password">Password</label>
                    <div class="controls">
                        <div class="input-append">
                            <input type="password" id="example-password" name="example-password">
                            <span class="add-on"><i class="icon-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-password2">Retype Password</label>
                    <div class="controls">
                        <div class="input-append">
                            <input type="password" id="example-password2" name="example-password2">
                            <span class="add-on"><i class="icon-asterisk"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="second" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center">1. Account <i class="icon-ok"></i></div>
                    <div class="span4 text-center active">2. Personal</div>
                    <div class="span4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="example-firstname">Firstname</label>
                    <div class="controls">
                        <input type="text" id="example-firstname" name="example-firstname">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-lastname">Lastname</label>
                    <div class="controls">
                        <input type="text" id="example-lastname" name="example-lastname">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-address">Address</label>
                    <div class="controls">
                        <input type="text" id="example-address" name="example-address">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-city">City</label>
                    <div class="controls">
                        <input type="text" id="example-city" name="example-city">
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Third Step -->
            <div id="third" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center">1. Account <i class="icon-ok"></i></div>
                    <div class="span4 text-center">2. Personal <i class="icon-ok"></i></div>
                    <div class="span4 text-center active">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="example-bio">Bio</label>
                    <div class="controls">
                        <textarea id="example-bio" name="example-bio" rows="3" class="textarea-large textarea-elastic"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-newsletter">Newsletter</label>
                    <div class="controls">
                        <input type="checkbox" id="example-newsletter" name="example-newsletter">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><a href="javascript:void(0)">Terms and Conditions</a></label>
                    <div class="controls">
                        <label class="checkbox" for="example-terms">
                            <input type="checkbox" id="example-terms" name="example-terms" value="1">
                            Accept
                        </label>
                    </div>
                </div>
            </div>
            <!-- END Third Step -->

            <!-- Form Buttons -->
            <div class="form-actions">
                <input type="reset" class="btn btn-danger" id="back" value="Back">
                <input type="submit" class="btn btn-success" id="next" value="Next">
            </div>
            <!-- END Form Buttons -->
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Basic Form Wizard -->

    <!-- Advanced Form Wizard -->
    <form id="advanced-wizard" action="page_form_wizard.php" method="post" class="form-horizontal form-box remove-margin">
        <!-- Form Header -->
        <h4 class="form-box-header"><i class="icon-magic"></i> Advanced Wizard - Ajax Submit + Field Validation + Custom Animation</h4>

        <!-- Form Content -->
        <div class="form-box-content">
            <!-- First Step -->
            <div id="advanced-first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center active">1. Personal</div>
                    <div class="span4 text-center">2. Account</div>
                    <div class="span4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="example-advanced-firstname">Firstname</label>
                    <div class="controls">
                        <input type="text" id="example-advanced-firstname" name="example-advanced-firstname">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-advanced-lastname">Lastname</label>
                    <div class="controls">
                        <input type="text" id="example-advanced-lastname" name="example-advanced-lastname">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-advanced-address">Address</label>
                    <div class="controls">
                        <input type="text" id="example-advanced-address" name="example-advanced-address">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-advanced-city">City</label>
                    <div class="controls">
                        <input type="text" id="example-advanced-city" name="example-advanced-city">
                    </div>
                </div>
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="advanced-second" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center">1. Personal <i class="icon-ok"></i></div>
                    <div class="span4 text-center active">2. Account</div>
                    <div class="span4 text-center">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="val_username">Username *</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input type="text" id="val_username" name="val_username" required>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="val_email">Email *</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input type="text" id="val_email" name="val_email" required>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="val_password">Password *</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-asterisk"></i></span>
                            <input type="password" id="val_password" name="val_password" required>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="val_confirm_password">Retype Password *</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-asterisk"></i></span>
                            <input type="password" id="val_confirm_password" name="val_confirm_password" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Third Step -->
            <div id="advanced-third" class="step">
                <!-- Step Info -->
                <div class="wizard-steps row-fluid">
                    <div class="span4 text-center">1. Personal <i class="icon-ok"></i></div>
                    <div class="span4 text-center">2. Account <i class="icon-ok"></i></div>
                    <div class="span4 text-center active">3. Extras</div>
                </div>
                <!-- END Step Info -->
                <div class="control-group">
                    <label class="control-label" for="example-advanced-bio">Bio</label>
                    <div class="controls">
                        <textarea id="example-advanced-bio" name="example-advanced-bio" rows="3" class="textarea-large textarea-elastic"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="example-advanced-newsletter">Newsletter</label>
                    <div class="controls">
                        <input type="checkbox" id="example-advanced-newsletter" name="example-advanced-newsletter">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><a href="javascript:void(0)">Terms and Conditions</a></label>
                    <div class="controls">
                        <label class="checkbox" for="val_terms">
                            <input type="checkbox" id="val_terms" name="val_terms" value="1">
                            Accept
                        </label>
                    </div>
                </div>
            </div>
            <!-- END Third Step -->

            <!-- Form Buttons -->
            <div class="form-actions">
                <input type="reset" class="btn btn-danger" id="back2" value="Back">
                <input type="submit" class="btn btn-success" id="next2" value="Next">
            </div>
            <!-- END Form Buttons -->
        </div>
        <!-- END Form Content -->
    </form>
    <!-- END Advanced Form Wizard -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        /* For advanced usage and examples please check out
         *  Jquery Wizard       -> http://www.thecodemine.org
         *  Jquery Form         -> http://malsup.com/jquery/form/
         *  Jquery Validation   -> https://github.com/jzaefferer/jquery-validation
         */

        /* Initialize Basic Wizard */
        $('#basic-wizard').formwizard({
            focusFirstInput : true,
            disableUIStyles : true
        });

        /* Initialize Advanced Wizard */
        $('#advanced-wizard').formwizard({
            disableUIStyles : true,
            formPluginEnabled: true,
            validationEnabled: true,
            validationOptions: {
                errorClass: "help-inline text-error",
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
                    val_terms: "Please accept the terms to continue"
		}
            },
            formOptions :{
                success: function(data){
                    // On success status returned
                },
                beforeSubmit: function(data){
                    alert('Form Submitted!');
                },
                dataType: 'json',
                resetForm: true
            },
            inAnimation : {height: 'show'},
            outAnimation: {height: 'hide'}
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>
