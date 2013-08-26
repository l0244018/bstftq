<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">UI Elements</a></li>
        <li class="active"><a href="">Forms</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Text Inputs -->
    <form class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Text Inputs</h4>
        <div class="form-box-content">
            <!-- Input Sizes -->
            <div class="control-group">
                <label class="control-label" for="example-input-mini">Mini</label>
                <div class="controls">
                    <input type="text" id="example-input-mini" class="input-mini">
                    <span class="help-inline"><code>.input-mini</code></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-small">Small</label>
                <div class="controls">
                    <input type="text" id="example-input-small" class="input-small">
                    <span class="help-inline"><code>.input-small</code></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-medium">Medium</label>
                <div class="controls">
                    <input type="text" id="example-input-medium" class="input-medium">
                    <span class="help-inline"><code>.input-medium</code></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-large">Large</label>
                <div class="controls">
                    <input type="text" id="example-input-large" class="input-large">
                    <span class="help-inline"><code>.input-large</code></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-xlarge">xLarge</label>
                <div class="controls">
                    <input type="text" id="example-input-xlarge" class="input-xlarge">
                    <span class="help-inline"><code>.input-xlarge</code></span>
                </div>
            </div>
            <!-- END Input Sizes -->

            <!-- Disabled Input -->
            <div class="control-group">
                <label class="control-label">Disabled</label>
                <div class="controls">
                    <input type="text" class="input-xlarge uneditable-input" disabled>
                    <span class="help-inline"><code>.uneditable-input</code></span>
                </div>
            </div>
            <!-- END Disabled Input -->

            <!-- Inline input and placeholder -->
            <div class="control-group">
                <label class="control-label" for="example-input-inline">Inline</label>
                <div class="controls">
                    <input type="text" id="example-input-inline" class="input-medium" placeholder="Placeholder text..">
                    <input type="text" class="input-small">
                    <span class="help-block">Placeholder attribute works with older browsers too!</span>
                </div>
            </div>
            <!-- END Inline input and placeholder -->

            <!-- Prepend Content -->
            <div class="control-group">
                <label class="control-label" for="example-input-prepend">Prepend Content</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on">@</span>
                        <input type="text" id="example-input-prepend" class="input-small" placeholder="username">
                    </div>
                    <div class="input-prepend">
                        <span class="add-on">Firstname:</span>
                        <input type="text" id="example-input-prepend2" class="input-small" placeholder="enter..">
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-twitter"></i></span>
                        <input type="text" id="example-input-prepend3" class="input-small" placeholder="@username">
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-facebook"></i></span>
                        <input type="text" id="example-input-prepend4" class="input-small" placeholder="@username">
                    </div>
                    <span class="help-block"><em>Text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-prepend">
                        <button class="btn">Search</button>
                        <input type="text" id="example-input-prepend-btn" class="input-small" placeholder="username">
                    </div>
                    <div class="input-prepend">
                        <button class="btn btn-success"><i class="icon-search"></i></button>
                        <input type="text" id="example-input-prepend-btn2" class="input-small" placeholder="search..">
                    </div>
                    <div class="input-prepend">
                        <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                        <button class="btn btn-info"><i class="icon-twitter"></i></button>
                        <button class="btn btn-danger"><i class="icon-pinterest"></i></button>
                        <input type="text" id="example-input-prepend-btn3" class="input-small" placeholder="@username">
                    </div>
                    <span class="help-block"><em>Buttons with text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-prepend">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                Action
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Option 1</a></li>
                                <li><a href="javascript:void(0)">Option 2</a></li>
                                <li><a href="javascript:void(0)">Option 3</a></li>
                            </ul>
                        </div>
                        <input id="example-input-prepend-dd" type="text" placeholder="...">
                    </div>
                    <div class="input-prepend">
                        <div class="btn-group">
                            <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                        <input id="example-input-prepend-dd2" type="text" placeholder="@username">
                    </div>
                    <span class="help-block"><em>Buttons and Dropdowns</em></span>
                </div>
            </div>
            <!-- END Prepend Content -->

            <!-- Append Content -->
            <div class="control-group">
                <label class="control-label" for="example-input-append">Append Content</label>
                <div class="controls">
                    <div class="input-append">
                        <input type="text" id="example-input-append" class="input-mini text-right" placeholder="00">
                        <span class="add-on">.00</span>
                    </div>
                    <div class="input-append">
                        <input type="text" id="example-input-append2" class="input-small" placeholder="Email">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                    </div>
                    <div class="input-append">
                        <input type="text" id="example-input-append3" class="input-large" placeholder="Add url">
                        <span class="add-on"><i class="icon-rss"></i></span>
                    </div>
                    <span class="help-block"><em>Text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-append">
                        <input type="text" id="example-input-append-btn" class="input-small" placeholder="username">
                        <button class="btn">Search</button>
                    </div>
                    <div class="input-append">
                        <input type="text" id="example-input-append-btn2" class="input-small" placeholder="search..">
                        <button class="btn btn-success"><i class="icon-search"></i></button>
                    </div>
                    <div class="input-append">
                        <input type="text" id="example-input-append-btn3" class="input-small" placeholder="@username">
                        <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                        <button class="btn btn-info"><i class="icon-twitter"></i></button>
                        <button class="btn btn-danger"><i class="icon-pinterest"></i></button>
                    </div>
                    <span class="help-block"><em>Buttons with text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-append">
                        <input id="example-input-append-dd" type="text" placeholder="...">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                Action
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Option 1</a></li>
                                <li><a href="javascript:void(0)">Option 2</a></li>
                                <li><a href="javascript:void(0)">Option 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="input-append">
                        <input id="example-input-append-dd2" type="text" placeholder="@username">
                        <div class="btn-group">
                            <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="help-block"><em>Buttons and Dropdowns</em></span>
                </div>
            </div>
            <!-- END Append Content -->

            <!-- Prepend and append Content -->
            <div class="control-group">
                <label class="control-label" for="example-input-preapppend">Prepend &amp; Append Content</label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <span class="add-on">$</span>
                        <input type="text" id="example-input-preapppend" class="input-mini text-right" placeholder="00">
                        <span class="add-on">.00</span>
                    </div>
                    <div class="input-prepend input-append hidden-phone">
                        <span class="add-on"><i class="icon-facebook"></i></span>
                        <span class="add-on">Facebook</span>
                        <input type="text" id="example-input-preapppend2" class="input-small text-center" placeholder="@username">
                        <span class="add-on"><i class="icon-user"></i></span>
                    </div>
                    <span class="help-block"><em>Text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                        <input type="text" id="example-input-preapppend-btn" class="input-small text-center" placeholder="@username">
                        <button class="btn btn-info"><i class="icon-twitter"></i></button>
                    </div>
                    <div class="input-prepend input-append">
                        <button class="btn btn-primary hidden-phone"><i class="icon-facebook"></i></button>
                        <button class="btn btn-primary">Friends</button>
                        <input type="text" id="example-input-preapppend-btn2" class="input-small text-center" placeholder="@username">
                        <button class="btn btn-info"><i class="icon-twitter"></i></button>
                        <button class="btn btn-info hidden-phone">Followers</button>
                    </div>
                    <span class="help-block"><em>Buttons with text or icons</em></span>
                </div>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Edit</a></li>
                                <li><a href="javascript:void(0)">Delete</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-preappend-dd" class="input-mini" placeholder="@username">
                        <button class="btn btn-warning"><i class="icon-warning-sign"></i></button>
                    </div>
                    <div class="input-prepend input-append">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-google-plus"></i> Google Plus+</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> Linkedin</a></li>
                                <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                        <input type="text" id="example-input-preappend-dd2" class="input-small" placeholder="@username">
                        <button class="btn btn-primary"><i class="icon-facebook"></i></button>
                    </div>
                    <span class="help-block"><em>Buttons and Dropdowns</em></span>
                </div>
            </div>
            <!-- END Prepend and append Content -->

            <!-- Typeahead example, initialized in main.js - uiDemo() -->
            <div class="control-group">
                <label class="control-label" for="example-input-typeahead">Typeahead</label>
                <div class="controls">
                    <div class="input-append">
                        <input type="text" id="example-input-typeahead" class="example-typeahead" placeholder="search..">
                        <button class="btn"><i class="icon-search"></i></button>
                    </div>
                    <span class="help-inline"><code>.example-typeahead</code></span>
                </div>
            </div>
            <!-- END Typeahead example -->

            <div class="form-actions">
                <input type="submit" class="btn btn-success" value="Save changes">
                <input type="submit" class="btn btn-danger" value="Cancel">
            </div>
        </div>
    </form>
    <!-- END Text Inputs -->

    <!-- Validation States -->
    <form class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Validation States</h4>
        <div class="form-box-content">
            <div class="control-group">
                <label class="control-label" for="example-input-tooltip">Tooltip</label>
                <div class="controls">
                    <input type="text" id="example-input-tooltip" data-toggle="tooltip" data-placement="right" title="Info!">
                    <span class="help-block">Tooltip with info</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-popover">Popover</label>
                <div class="controls">
                    <input type="text" id="example-input-popover" data-toggle="popover" data-placement="top" data-title="Information" data-content="This is some dummy content! Inform the user about input requirements!">
                    <span class="help-block">Popover with info</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label text-error" for="example-input-email">Email (*)</label>
                <div class="controls">
                    <input type="email" id="example-input-email" placeholder="test@example.com" required>
                    <span class="help-block"><em>For browsers that support </em> <code>required</code> <em>attribute, the border of the input remains red until the content is valid!</em></span>
                </div>
            </div>
            <div class="control-group success">
                <label class="control-label" for="example-input-success">Success</label>
                <div class="controls">
                    <input type="text" id="example-input-success">
                    <span class="help-inline"><i class="icon-ok"></i> Valid!</span>
                </div>
            </div>
            <div class="control-group info">
                <label class="control-label" for="example-input-info">Info</label>
                <div class="controls">
                    <input type="text" id="example-input-info">
                    <span class="help-inline"><i class="icon-info-sign"></i> Email exists!</span>
                </div>
            </div>
            <div class="control-group warning">
                <label class="control-label" for="example-input-warning">Warning</label>
                <div class="controls">
                    <input type="password" id="example-input-warning">
                    <span class="help-inline"><i class="icon-warning-sign"></i> The password is too small!</span>
                </div>
            </div>
            <div class="control-group error">
                <label class="control-label" for="example-input-error">Error</label>
                <div class="controls">
                    <input type="text" id="example-input-error">
                    <input type="password" id="example-input-error2">
                    <span class="help-inline"><i class="icon-remove"></i> Login failed!</span>
                </div>
            </div>
        </div>
    </form>
    <!-- END Validation States -->

    <!-- Pickers -->
    <form class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Pickers</h4>
        <div class="form-box-content">
            <!-- Colorpicker -->
            <div class="control-group">
                <label class="control-label" for="example-input-colorpicker">Color</label>
                <div class="controls">
                    <input type="text" id="example-input-colorpicker" class="input-mini input-colorpicker">
                    <span class="help-inline"><code>.input-colorpicker</code></span>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-append input-colorpicker color" data-color="#db4a39">
                        <input type="text" class="input-mini">
                        <span class="add-on"><i style="background-color: #db4a39"></i></span>
                    </div>
                    <span class="help-inline">As a component</span>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-append input-colorpicker color" data-color="rgba(0,0,0,1)" data-color-format="rgba">
                        <input type="text">
                        <span class="add-on"><i style="background-color: rgba(0,0,0,1)"></i></span>
                    </div>
                    <span class="help-inline">RGBa</span>
                </div>
            </div>
            <!-- END Colorpicker -->

            <!-- Timepicker -->
            <div class="control-group">
                <label class="control-label" for="example-input-timepicker">Time</label>
                <div class="controls">
                    <div class="input-append bootstrap-timepicker">
                        <input type="text" id="example-input-timepicker" class="input-mini input-timepicker">
                        <span class="add-on"><i class="icon-time"></i></span>
                        <span class="help-inline"><code>.input-timepicker</code></span>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-input-datepicker">Date</label>
                <div class="controls">
                    <input type="text" id="example-input-datepicker" class="input-small input-datepicker">
                    <span class="help-inline"><code>.input-datepicker</code></span>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-append date input-datepicker" data-date="30-04-2013" data-date-format="dd-mm-yyyy">
                        <input type="text" class="input-small">
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>
                    <span class="help-inline">As a component</span>
                </div>
            </div>
            <!-- END Timepicker -->

            <!-- Daterangepicker -->
            <div class="control-group">
                <label class="control-label" for="example-input-daterangepicker">Date Range</label>
                <div class="controls">
                    <div class="input-append">
                        <input type="text" id="example-input-daterangepicker" class="input-daterangepicker">
                        <span class="add-on"><i class="icon-calendar"></i></span>
                        <span class="help-inline"><code>.input-daterangepicker</code></span>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Advanced Date Range</label>
                <div class="controls">
                    <div id="example-advanced-daterangepicker" class="btn">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <b class="caret"></b>
                    </div>
                </div>
            </div>
            <!-- END Daterangepicker -->

            <div class="form-actions">
                <button class="btn btn-success"><i class="icon-save"></i> Save</button>
                <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
            </div>
        </div>
    </form>
    <!-- END Pickers -->

    <!-- Textareas -->
    <form class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Textareas</h4>
        <div class="form-box-content">
            <div class="control-group">
                <label class="control-label" for="example-textarea">Default</label>
                <div class="controls">
                    <textarea id="example-textarea" rows="3"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Disabled</label>
                <div class="controls">
                    <textarea class="uneditable-textarea" rows="3" disabled>This is a disabled textarea!</textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-textarea-large">Large</label>
                <div class="controls">
                    <textarea id="example-textarea-large" class="textarea-large" rows="10"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-textarea-editor">WYSIWYG Editor</label>
                <div class="controls">
                    <textarea id="example-textarea-editor" class="textarea-editor textarea-large" rows="10"></textarea>
                    <span class="help-block">Add the <code>.textarea-editor</code> class to a textarea to transform it into a wysiwyg editor</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-textarea-elastic">Elastic</label>
                <div class="controls">
                    <textarea id="example-textarea-elastic" class="textarea-elastic" rows="3"></textarea>
                    <span class="help-block">Add the <code>.textarea-elastic</code> class to a textarea and will auto expand as you write</span>
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-success"><i class="icon-save"></i> Save</button>
                <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
            </div>
        </div>
    </form>
    <!-- END Textareas -->

    <!-- Checkboxes, Radios & Selects -->
    <form class="form-horizontal form-box" onsubmit="return false;">
        <h4 class="form-box-header">Switches, Checkboxes, Radios & Selects</h4>
        <div class="form-box-content">
            <!-- Switches -->
            <div class="control-group">
                <label class="control-label">Switches</label>
                <div class="controls">
                    <div class="input-switch switch-large">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch switch-small">
                        <input type="checkbox" checked>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-switch" data-on="primary">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch" data-on="info">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch" data-on="success">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch" data-on="warning">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch" data-on="danger">
                        <input type="checkbox" checked>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-switch" data-on="success" data-off="danger">
                        <input type="checkbox" checked>
                    </div>
                    <div class="input-switch" data-on="success" data-off="danger" data-on-label="<i class='icon-ok icon-white'></i>" data-off-label="<i class='icon-remove'></i>">
                        <input type="checkbox" checked>
                    </div>
                </div>
            </div>
            <!-- END Switches -->

            <!-- Checkboxes -->
            <div class="control-group">
                <label class="control-label">Checkboxes</label>
                <div class="controls">
                    <label class="checkbox" for="example-checkbox1">
                        <input type="checkbox" id="example-checkbox1" value="option1"> Option1
                    </label>
                    <label class="checkbox" for="example-checkbox2">
                        <input type="checkbox" id="example-checkbox2" value="option2"> Option2
                    </label>
                    <label class="checkbox" for="example-checkbox3">
                        <input type="checkbox" id="example-checkbox3" value="option3"> Option3
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Inline Checkboxes</label>
                <div class="controls">
                    <label class="checkbox inline" for="example-checkbox-inline1">
                        <input type="checkbox" id="example-checkbox-inline1" value="option1"> Option1
                    </label>
                    <label class="checkbox inline" for="example-checkbox-inline2">
                        <input type="checkbox" id="example-checkbox-inline2" value="option2"> Option2
                    </label>
                    <label class="checkbox inline" for="example-checkbox-inline3">
                        <input type="checkbox" id="example-checkbox-inline3" value="option3"> Option3
                    </label>
                </div>
            </div>
            <!-- END Checkboxes -->

            <!-- Radios -->
            <div class="control-group">
                <label class="control-label">Radios</label>
                <div class="controls">
                    <label class="radio" for="example-radio1">
                        <input type="radio" id="example-radio1" name="example-radios" value="option1"> Option1
                    </label>
                    <label class="radio" for="example-radio2">
                        <input type="radio" id="example-radio2" name="example-radios" value="option2"> Option2
                    </label>
                    <label class="radio" for="example-radio3">
                        <input type="radio" id="example-radio3" name="example-radios" value="option3"> Option3
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Inline Radios</label>
                <div class="controls">
                    <label class="radio inline" for="example-radio-inline1">
                        <input type="radio" id="example-radio-inline1" name="example-radios-inline" value="option1"> Option1
                    </label>
                    <label class="radio inline" for="example-radio-inline2">
                        <input type="radio" id="example-radio-inline2" name="example-radios-inline" value="option2"> Option2
                    </label>
                    <label class="radio inline" for="example-radio-inline3">
                        <input type="radio" id="example-radio-inline3" name="example-radios-inline" value="option3"> Option3
                    </label>
                </div>
            </div>
            <!-- END Radios -->

            <!-- Selects -->
            <div class="control-group">
                <label class="control-label" for="example-select">Select</label>
                <div class="controls">
                    <select id="example-select">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-select-multiple">Multiple Select</label>
                <div class="controls">
                    <select id="example-select-multiple" multiple="multiple">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                </div>
            </div>
            <!-- END Selects -->

            <!-- Chosen plugin -->
            <div class="control-group">
                <label class="control-label" for="example-select-chosen">Chosen Select</label>
                <div class="controls">
                    <select id="example-select-chosen" class="select-chosen">
                        <option>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-chosen</code></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="example-select-chosen-multiple">Chosen Select Multiple</label>
                <div class="controls">
                    <select id="example-select-chosen-multiple" multiple="multiple" class="select-chosen">
                        <option selected>html</option>
                        <option>css</option>
                        <option>javascript</option>
                        <option>php</option>
                        <option>mysql</option>
                    </select>
                    <span class="help-block"><code>.select-chosen</code></span>
                </div>
            </div>
            <!-- END Chosen plugin -->

            <div class="form-actions">
                <button class="btn btn-success"><i class="icon-wrench"></i> Update Settings</button>
            </div>
        </div>
    </form>
    <!-- END Checkboxes, Radios & Selects -->

    <!-- File Upload -->
    <form class="form-horizontal form-box" enctype="multipart/form-data" onsubmit="return false;">
        <h4 class="form-box-header">File Upload</h4>
        <div class="form-box-content">
            <div class="control-group">
                <label class="control-label" for="example-file">Default</label>
                <div class="controls">
                    <input type="file" id="example-file">
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-success"><i class="icon-upload"></i> Upload</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
    <!-- END File Upload -->

    <!-- Dropzone -->
    <div class="form-box hidden-phone">
        <h4 class="form-box-header form-box-header-push">Dropzone <small>Just add <code>.dropzone</code> class to a form! On unsupported browsers it will fall back to normal input</small></h4>
        <div class="form-box-content">
            <form action="page_forms.php" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file">
                </div>
            </form>
        </div>
    </div>
    <!-- END Dropzone -->

    <!-- Input Grid -->
    <form class="form-box remove-margin">
        <h4 class="form-box-header form-box-header-push">Input Grid</h4>
        <div class="form-box-content">
            <div class="controls controls-row">
                <input type="text" class="span1" placeholder=".span1">
                <input type="text" class="span5" placeholder=".span5">
            </div>
            <div class="controls controls-row">
                <input type="text" class="span2" placeholder=".span2">
                <input type="text" class="span4" placeholder=".span4">
            </div>
            <div class="controls controls-row">
                <input type="text" class="span3" placeholder=".span3">
                <input type="text" class="span3" placeholder=".span3">
            </div>
            <div class="controls controls-row">
                <input type="text" class="span4" placeholder=".span4">
                <input type="text" class="span2" placeholder=".span2">
            </div>
            <div class="controls controls-row">
                <input type="text" class="span5" placeholder=".span5">
                <input type="text" class="span1" placeholder=".span1">
            </div>
            <div class="controls">
                <input type="text" class="span6" placeholder=".span6">
            </div>
        </div>
    </form>
    <!-- END Input Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>