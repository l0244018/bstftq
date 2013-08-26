<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">UI Elements</a></li>
        <li class="active"><a href="">General</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Buttons and Dropdowns -->
    <h3 class="page-header page-header-top">Buttons + Dropdown Menus</h3>

    <!-- Simple Buttons -->
    <h4 class="sub-header">Buttons <small>You can have all kinds of buttons with different colors and sizes like shown on the following examples</small></h4>
    <div class="row-fluid">
        <div class="span6">
            <h4>Simple Buttons</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="span3"><code>.btn</code></td>
                        <td><button type="button" class="btn">Default</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-primary</code></td>
                        <td><button type="button" class="btn btn-primary">Primary</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-success</code></td>
                        <td><button type="button" class="btn btn-success">Success</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-danger</code></td>
                        <td><button type="button" class="btn btn-danger">Danger</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-warning</code></td>
                        <td><button type="button" class="btn btn-warning">Warning</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-info</code></td>
                        <td><button type="button" class="btn btn-info">Info</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-inverse</code></td>
                        <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.btn-link</code></td>
                        <td><button type="button" class="btn btn-link">Link</button></td>
                    </tr>
                    <tr>
                        <td class="span3"><code>.btn</code> <code>.disabled</code></td>
                        <td>
                            <a class="btn disabled" href="javascript:void(0)">Link</a>
                            <button class="btn disabled" type="submit" disabled>Button</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span6">
            <h4>Sizes</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-mini</code></td>
                        <td>
                            <button type="button" class="btn btn-mini">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-small</code></td>
                        <td>
                            <button type="button" class="btn btn-small">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-large</code></td>
                        <td>
                            <button type="button" class="btn btn-large">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-mini</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-mini btn-success">Success</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-small</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-small btn-success">Default</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="span4"><code>.btn</code> <code>.btn-large</code> <code>.btn-success</code></td>
                        <td>
                            <button type="button" class="btn btn-large btn-success">Default</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Simple Buttons -->

    <h4 class="sub-header">Buttons Group and Dropdowns</h4>

    <!-- Button group -->
    <div class="well push">
        <p>Use buttons inside a div with <code>.btn-group</code> class to create a group</p>
        <div class="btn-group">
            <button class="btn">Left</button>
            <button class="btn">Middle</button>
            <button class="btn">Right</button>
        </div>
    </div>
    <!-- END Button group -->

    <!-- Button group vertical -->
    <div class="well push">
        <p>Add the extra <code>.btn-group-vertical</code> class for a vertical group</p>
        <div class="btn-group btn-group-vertical">
            <button class="btn">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
        </div>
    </div>
    <!-- END Button group vertical -->

    <!-- Button groups and dropdowns -->
    <div class="well push">
        <p>Use any button within a <code>.btn-group</code> and the proper dropdown<br>menu markup to trigger it. Dropdown menus have many options<br>such as disabled links, second level menus or split buttons</p>
        <div class="btn-group hidden-phone">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Extra options <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li><a href="javascript:void(0)">Second link</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Another link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Action <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="javascript:void(0)">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">First link</a></li>
                        <li><a href="javascript:void(0)">Second link</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Another link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="btn-group dropup">
            <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="icon-beer"></i> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="javascript:void(0)">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">First link</a></li>
                        <li><a href="javascript:void(0)">Second link</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Another link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="btn-group">
            <a class="btn btn-success"><i class="gemicon-small-gear1 gemicon-small-white"></i></a>
            <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">First link</a></li>
                <li class="disabled"><a href="javascript:void(0)">This is a disabled link</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
                    <a tabindex="-1" href="javascript:void(0)">More options</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">First link</a></li>
                        <li><a href="javascript:void(0)">Second link</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Another link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END Button groups and dropdowns -->

    <!-- Toolbar -->
    <div class="well push">
        <p>Combine sets of divs with <code>.btn-group</code> classes inside<br> a div with <code>.btn-toolbar</code> class to create a toolbar!<br>Remember that you can use any icon, color or size you want!</p>
        <div class="btn-toolbar">
            <div class="btn-group">
                <button class="btn btn-mini"><i class="icon-file"></i></button>
                <button class="btn btn-mini"><i class="icon-save"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-mini"><i class="icon-cut"></i></button>
                <button class="btn btn-mini"><i class="icon-copy"></i></button>
                <button class="btn btn-mini"><i class="icon-paste"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-mini"><i class="icon-bold"></i></button>
                <button class="btn btn-mini"><i class="icon-italic"></i></button>
                <button class="btn btn-mini"><i class="icon-underline"></i></button>
                <button class="btn btn-mini"><i class="icon-strikethrough"></i></button>
            </div>
        </div>
        <div class="btn-toolbar">
            <div class="btn-group">
                <button class="btn btn-warning"><i class="icon-align-left"></i></button>
                <button class="btn btn-warning"><i class="icon-align-center"></i></button>
                <button class="btn btn-warning"><i class="icon-align-right"></i></button>
            </div>
            <div class="btn-group">
                <button class="btn btn-info"><i class="icon-indent-left"></i></button>
                <button class="btn btn-info"><i class="icon-indent-right"></i></button>
            </div>
            <div class="btn-group hidden-phone">
                <button class="btn btn-success"><i class="icon-list-ul"></i></button>
                <button class="btn btn-success"><i class="icon-list-ol"></i></button>
                <button class="btn btn-success"><i class="icon-table"></i></button>
            </div>
            <div class="btn-group hidden-phone">
                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">First link</a></li>
                    <li><a href="javascript:void(0)">Second link</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Another link</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END Toolbar -->
    <!-- END Buttons -->

    <!-- Navigation Elements -->
    <h3 class="page-header">Navigation Elements <small>Navs, Navbar, Breadcrumbs, Pagination, Tabs and Accordion</small></h3>

    <!-- Navs -->
    <h4 class="sub-header">Navs <small>Navs are created with <code>&lt;ul&gt;</code> lists. Just add the right class and the list will formatted accordingly!</small></h4>

    <!-- Tabs -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-tabs</code></p>
        <ul class="nav nav-tabs">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
        </ul>
    </div>
    <!-- END Tabs -->

    <!-- Pills -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-pills</code></p>
        <ul class="nav nav-pills">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
        </ul>
    </div>
    <!-- END Pills -->

    <!-- Tabs Stacked -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-tabs</code> <code>.nav-stacked</code></p>
        <ul class="nav nav-tabs nav-stacked">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
        </ul>
    </div>
    <!-- END Tabs Stacked -->

    <!-- Pills Stacked -->
    <div class="push">
        <p class="well"><code>.nav</code> <code>.nav-pills</code> <code>.nav-stacked</code></p>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
        </ul>
    </div>
    <!-- END Pills Stacked -->

    <!-- Navbars -->
    <h4 class="sub-header">Navbar</h4>

    <div class="navbar">
        <div class="navbar-inner remove-radius remove-box-shadow">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="javascript:void(0)">Logo</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                        <li class="active"><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Profile</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Another action</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Extra</li>
                                <li><a href="javascript:void(0)">First Link</a></li>
                                <li><a href="javascript:void(0)">Second Link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-left" action="page_ui_general.php">
                        <input type="text" class="search-query span2" placeholder="Search">
                    </form>
                    <ul class="nav pull-right">
                        <li><a href="javascript:void(0)"><i class="icon-umbrella"></i></a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Action #2</a></li>
                                <li><a href="javascript:void(0)">Action #3</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-inverse">
        <div class="navbar-inner remove-radius remove-box-shadow">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse2">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="javascript:void(0)">Logo</a>
                <div class="nav-collapse collapse navbar-responsive-collapse2">
                    <ul class="nav">
                        <li class="active"><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Profile</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Another action</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Extra</li>
                                <li><a href="javascript:void(0)">First Link</a></li>
                                <li><a href="javascript:void(0)">Second Link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-left" action="page_ui_general.php">
                        <input type="text" class="search-query span2" placeholder="Search">
                    </form>
                    <ul class="nav pull-right">
                        <li><a href="javascript:void(0)"><i class="icon-umbrella"></i></a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Action #2</a></li>
                                <li><a href="javascript:void(0)">Action #3</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Navbars -->

    <!-- Breadcumbs -->
    <h4 class="sub-header">Breadcrumbs <small>A <code>&lt;ul&gt;</code> list can easily become a breadcrumb</small></h4>
    <div class="push">
        <p class="well"><code>.breadcrumb</code></p>
        <ul class="breadcrumb">
            <li><a href="javascript:void(0)">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
            <li><a href="javascript:void(0)">Settings</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
            <li class="active">Profile</li>
        </ul>
        <ul class="breadcrumb">
            <li><a href="javascript:void(0)">Home</a> <span class="divider"><i class="icon-arrow-right"></i></span></li>
            <li><a href="javascript:void(0)">Settings</a> <span class="divider"><i class="icon-arrow-right"></i></span></li>
            <li class="active">Profile</li>
        </ul>
    </div>
    <!-- END Breadcumbs -->

    <!-- Pagination -->
    <h4 class="sub-header">Pagination <small>Just a <code>&lt;div&gt;</code> with <code>.pagination</code> class and a <code>&lt;ul&gt;</code> list inside (pager excluded)</small></h4>

    <!-- Standard Pagination -->
    <div class="push">
        <p class="well">Standard Pagination</p>
        <div class="pagination">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Standard Pagination -->

    <!-- Pagination States -->
    <div class="push">
        <p class="well">Active and disabled states</p>
        <div class="pagination">
            <ul>
                <li class="disabled"><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li class="active"><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Pagination States -->

    <!-- Pagination Sizes -->
    <div class="push">
        <p class="well">Add an extra class for different sizes <code>.pagination-large</code> <code>.pagination-small</code> <code>.pagination-mini</code></p>
        <div class="pagination pagination-large">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="pagination pagination-small">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="pagination pagination-mini">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Pagination Sizes -->

    <!-- Pagination Alignments -->
    <div class="push">
        <p class="well">Add an extra class for different alignments <code>.pagination-centered</code> <code>.pagination-right</code></p>
        <div class="pagination">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="pagination pagination-centered">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
        <div class="pagination pagination-right">
            <ul>
                <li><a href="javascript:void(0)">Prev</a></li>
                <li><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- END Pagination Alignments -->

    <!-- Pager -->
    <div class="push">
        <p class="well">Pager for simple pagination. A <code>&lt;ul&gt;</code> with <code>.pager</code> class</p>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)"><i class="icon-arrow-left"></i> Prev</a></li>
            <li class="next"><a href="javascript:void(0)">Next <i class="icon-arrow-right"></i></a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)">Prev</a></li>
            <li class="next"><a href="javascript:void(0)">Next</a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="javascript:void(0)"><i class="icon-arrow-left"></i></a></li>
            <li class="next"><a href="javascript:void(0)"><i class="icon-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- END Pager -->

    <!-- Working Tabs, just add data-toggle="tabs" in the ul tab list -->
    <h4 class="sub-header">Tabs</h4>

    <div class="row-fluid">
        <div class="span4 clearfix">
            <h4>Aligned left</h4>
            <div class="tabs-left">
                <ul id="example-tabs" class="nav nav-tabs" data-toggle="tabs">
                    <li class="active"><a href="#example-tabs-home">Home</a></li>
                    <li><a href="#example-tabs-profile">Profile</a></li>
                    <li><a href="#example-tabs-messages">Messages</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="example-tabs-home">Home Content!</div>
                    <div class="tab-pane" id="example-tabs-profile">Profile Content!</div>
                    <div class="tab-pane" id="example-tabs-messages">Messages Content!</div>
                </div>
            </div>
        </div>
        <div class="span4 clearfix">
            <h4>Normal</h4>
            <ul id="example-tabs2" class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#example-tabs2-home">Home</a></li>
                <li><a href="#example-tabs2-profile">Profile</a></li>
                <li><a href="#example-tabs2-messages">Messages</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="example-tabs2-home">Home Content!</div>
                <div class="tab-pane" id="example-tabs2-profile">Profile Content!</div>
                <div class="tab-pane" id="example-tabs2-messages">Messages Content!</div>
            </div>
        </div>
        <div class="span4 clearfix">
            <h4>Aligned Right</h4>
            <div class="tabs-right">
                <ul id="example-tabs3" class="nav nav-tabs" data-toggle="tabs">
                    <li class="active"><a href="#example-tabs3-home">Home</a></li>
                    <li><a href="#example-tabs3-profile">Profile</a></li>
                    <li><a href="#example-tabs3-messages">Messages</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="example-tabs3-home">Home Content!</div>
                    <div class="tab-pane" id="example-tabs3-profile">Profile Content!</div>
                    <div class="tab-pane" id="example-tabs3-messages">Messages Content!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Working Tabs -->

    <!-- Accordion -->
    <h4 class="sub-header">Accordion</h4>

    <div class="accordion" id="example-accordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#example-accordion" href="#example-accordion-content1">Option 1</a>
            </div>
            <div id="example-accordion-content1" class="accordion-body collapse in">
                <div class="accordion-inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#example-accordion" href="#example-accordion-content2">Option 2</a>
            </div>
            <div id="example-accordion-content2" class="accordion-body collapse">
                <div class="accordion-inner">Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#example-accordion" href="#example-accordion-content3">Option 3</a>
            </div>
            <div id="example-accordion-content3" class="accordion-body collapse">
                <div class="accordion-inner">Content!</div>
            </div>
        </div>
    </div>
    <!-- END Accordion -->
    <!-- END Navigation Elements -->

    <!-- Alerts -->
    <h3 class="page-header">Alerts</h3>

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> The task was completed!
    </div>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Info!</strong> This is a message just to let you know!
    </div>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong> Ohh, no.. The system failed us!
    </div>
    <div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> Be careful, a lot can happen with these options!
    </div>
    <!-- END Alerts -->

    <!-- Progress Bars -->
    <h3 class="page-header">Progress Bars</h3>

    <table class="table table-borderless">
        <tbody>
            <tr>
                <td class="span2">
                    <!-- Code of demo is at the bottom of this page -->
                    <button id="example-progress-bar-button" type="button" class="btn btn-success" data-loading-text="Working..">
                        <i class="icon-play"></i> Demo
                    </button>
                </td>
                <td>
                    <div id="example-progress-bar" class="progress">
                        <div class="bar bar-danger"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="span2">Default style</td>
                <td>
                    <div class="progress">
                        <div class="bar" style="width: 15%">15%</div>
                    </div>
                    <div class="progress progress-info">
                        <div class="bar" style="width: 30%">30%</div>
                    </div>
                    <div class="progress progress-success">
                        <div class="bar" style="width: 45%">45%</div>
                    </div>
                    <div class="progress progress-warning">
                        <div class="bar" style="width: 60%">60%</div>
                    </div>
                    <div class="progress progress-danger">
                        <div class="bar" style="width: 75%">75%</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="span2">Mini</td>
                <td>
                    <div class="progress progress-mini">
                        <div class="bar" style="width: 15%"></div>
                    </div>
                    <div class="progress progress-mini progress-info">
                        <div class="bar" style="width: 30%"></div>
                    </div>
                    <div class="progress progress-mini progress-success">
                        <div class="bar" style="width: 45%"></div>
                    </div>
                    <div class="progress progress-mini progress-warning">
                        <div class="bar" style="width: 60%"></div>
                    </div>
                    <div class="progress progress-mini progress-danger">
                        <div class="bar" style="width: 75%"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="span2">With stripes</td>
                <td>
                    <div class="progress progress-striped">
                        <div class="bar" style="width: 15%">15%</div>
                    </div>
                    <div class="progress progress-striped progress-info">
                        <div class="bar" style="width: 30%">30%</div>
                    </div>
                    <div class="progress progress-striped progress-success">
                        <div class="bar" style="width: 45%">45%</div>
                    </div>
                    <div class="progress progress-striped progress-warning">
                        <div class="bar" style="width: 60%">60%</div>
                    </div>
                    <div class="progress progress-striped progress-danger">
                        <div class="bar" style="width: 75%">75%</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="span2">Animated stripes (on modern browsers)</td>
                <td>
                    <div class="progress progress-striped active">
                        <div class="bar" style="width: 15%">Loading..</div>
                    </div>
                    <div class="progress progress-striped progress-info active">
                        <div class="bar" style="width: 30%">Loading..</div>
                    </div>
                    <div class="progress progress-striped progress-success active">
                        <div class="bar" style="width: 45%">Loading..</div>
                    </div>
                    <div class="progress progress-striped progress-warning active">
                        <div class="bar" style="width: 60%">Loading..</div>
                    </div>
                    <div class="progress progress-striped progress-danger active">
                        <div class="bar" style="width: 75%">Loading..</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="span2">Stacked bars</td>
                <td>
                    <div class="progress">
                        <div class="bar" style="width: 15%;">15%</div>
                        <div class="bar bar-info" style="width: 15%;">15%</div>
                        <div class="bar bar-success" style="width: 30%;">30%</div>
                        <div class="bar bar-warning" style="width: 10%;">10%</div>
                        <div class="bar bar-danger" style="width: 10%;">10%</div>
                    </div>
                    <div class="progress progress-striped">
                        <div class="bar" style="width: 15%;">15%</div>
                        <div class="bar bar-info" style="width: 15%;">15%</div>
                        <div class="bar bar-success" style="width: 30%;">30%</div>
                        <div class="bar bar-warning" style="width: 10%;">10%</div>
                        <div class="bar bar-danger" style="width: 10%;">10%</div>
                    </div>
                    <div class="progress progress-striped active">
                        <div class="bar" style="width: 15%;">15%</div>
                        <div class="bar bar-info" style="width: 15%;">15%</div>
                        <div class="bar bar-success" style="width: 30%;">30%</div>
                        <div class="bar bar-warning" style="width: 10%;">10%</div>
                        <div class="bar bar-danger" style="width: 10%;">10%</div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END Progress Bars -->

    <!-- Loaders -->
    <h3 class="page-header">Loaders <small>Use one of the 12 loading gifs or make any FontAwesome icon spin (on modern browsers)!</small></h3>

    <div class="row-fluid">
        <div class="span6">
            <h4 class="sub-header">Gifs</h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><code>.loader-01</code></td>
                        <td><span class="loader-01"></span></td>
                        <td><code>.loader-07</code></td>
                        <td><span class="loader-07"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-02</code></td>
                        <td><span class="loader-02"></span></td>
                        <td><code>.loader-08</code></td>
                        <td><span class="loader-08"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-03</code></td>
                        <td><span class="loader-03"></span></td>
                        <td><code>.loader-09</code></td>
                        <td><span class="loader-09"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-04</code></td>
                        <td><span class="loader-04"></span></td>
                        <td><code>.loader-10</code></td>
                        <td><span class="loader-10"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-05</code></td>
                        <td><span class="loader-05"></span></td>
                        <td><code>.loader-11</code></td>
                        <td><span class="loader-11"></span></td>
                    </tr>
                    <tr>
                        <td><code>.loader-06</code></td>
                        <td><span class="loader-06"></span></td>
                        <td><code>.loader-12</code></td>
                        <td><span class="loader-12"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="span5 offset1">
            <h4 class="sub-header">FontAwesome <small><code>.icon-spin</code> to any icon!</small></h4>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><code>.icon-spin</code> <code>.icon-asterisk</code></td>
                        <td><i class="icon-asterisk icon-spin"></i></td>
                    </tr>
                    <tr>
                        <td><code>.icon-spin</code> <code>.icon-spinner</code></td>
                        <td><i class="icon-spinner icon-spin"></i></td>
                    </tr>
                    <tr>
                        <td><code>.icon-spin</code> <code>.icon-spinner</code> <code>.icon-2x</code></td>
                        <td><i class="icon-spinner icon-spin icon-2x"></i></td>
                    </tr>
                    <tr>
                        <td><code>.icon-spin</code> <code>.icon-spinner</code> <code>.icon-4x</code></td>
                        <td><i class="icon-spinner icon-spin icon-4x"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Loaders -->

    <!-- Popovers, Tooltips & Modals -->
    <h3 class="page-header">Popovers, Tooltips &amp; Modals</h3>

    <div class="row-fluid">
        <!-- Popovers -->
        <div class="span5">
            <h4 class="sub-header">Popovers</h4>
            <button class="btn btn-success" data-toggle="popover" data-content="This is an information popup! Use it easy with the content you want!" title="Popover!">Popover</button>
            <button class="btn hidden-phone hidden-tablet" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="top" title="Popover on top!"><i class="icon-arrow-up"></i></button>
            <button class="btn hidden-phone hidden-tablet" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="right" title="Popover on right!"><i class="icon-arrow-right"></i></button>
            <button class="btn hidden-phone hidden-tablet" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="bottom" title="Popover on bottom!"><i class="icon-arrow-down"></i></button>
            <button class="btn hidden-phone hidden-tablet" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="left" title="Popover on left!"><i class="icon-arrow-left"></i></button>
        </div>
        <!-- END Popovers -->

        <!-- Tooltips -->
        <div class="span4">
            <h4 class="sub-header">Tooltips</h4>
            <a href="javascript:void(0)" data-toggle="tooltip" title="General tooltip!">Tooltip</a><br><br>
            <a href="javascript:void(0)" class="hidden-phone hidden-tablet" data-toggle="tooltip" data-placement="top" title="Tooltip on top!">Tooltip Top</a><br>
            <a href="javascript:void(0)" class="hidden-phone hidden-tablet" data-toggle="tooltip" data-placement="right" title="Tooltip on right!">Tooltip Right</a><br>
            <a href="javascript:void(0)" class="hidden-phone hidden-tablet" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom!">Tooltip Bottom</a><br>
            <a href="javascript:void(0)" class="hidden-phone hidden-tablet" data-toggle="tooltip" data-placement="left" title="Tooltip on left!">Tooltip Left</a><br>
        </div>
        <!-- END Tooltips -->

        <!-- Modals -->
        <div class="span3">
            <h4 class="sub-header">Modals</h4>
            <!-- Modal link -->
            <a href="#example-modal" class="btn" data-toggle="modal">Launch demo modal</a>

            <!-- Modal itself -->
            <div id="example-modal" class="modal hide">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4>Modal Heading</h4>
                </div>
                <div class="modal-body">
                    <p>Modal Content..</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
            <!-- END Modal itself -->
        </div>
        <!-- END Modals -->
    </div>
    <!-- END Popovers, Tooltips & Modals -->

    <!-- Carousel -->
    <h3 class="page-header">Carousel</h3>

    <div class="row-fluid">
        <div class="span6">
            <div id="example-carousel" class="carousel slide remove-margin">
                <ol class="carousel-indicators">
                    <li data-target="#example-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#example-carousel" data-slide-to="1"></li>
                    <li data-target="#example-carousel" data-slide-to="2"></li>
                    <li data-target="#example-carousel" data-slide-to="3"></li>
                    <li data-target="#example-carousel" data-slide-to="4"></li>
                    <li data-target="#example-carousel" data-slide-to="5"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#example-carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#example-carousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <div class="span6">
            <div id="example-carousel2" class="carousel remove-margin">
                <ol class="carousel-indicators">
                    <li data-target="#example-carousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#example-carousel2" data-slide-to="1"></li>
                    <li data-target="#example-carousel2" data-slide-to="2"></li>
                    <li data-target="#example-carousel2" data-slide-to="3"></li>
                    <li data-target="#example-carousel2" data-slide-to="4"></li>
                    <li data-target="#example-carousel2" data-slide-to="5"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_dark_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/placeholders/image_light_900x700.png" alt="fakeimg">
                        <div class="carousel-caption text-left">
                            <h4>Caption</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida.</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#example-carousel2" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#example-carousel2" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>
    <!-- END Carousel -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function () {
        // Demostration of progress bars
        var pbBar = $('#example-progress-bar .bar');
        var pbButton = $('#example-progress-bar-button');

        pbButton.click(function(){
            $(this).button('loading');
            var i = 1;
            interval = setInterval(function() {
                pbBar.css('width', i + '%');
                if (i > 15)
                    pbBar.html(i * 10 + '/1000');
                if (i === 33)
                    pbBar.removeClass('bar-danger').addClass('bar-warning');
                if (i === 66)
                    pbBar.removeClass('bar-warning').addClass('bar-success');
                i++;
                if (i > 100) {
                    clearInterval(interval);
                    pbButton.html('Done!');
                    pbBar.html('<i class="icon-ok"></i>');
                }
            }, 50);
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>