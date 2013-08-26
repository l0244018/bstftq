<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Errors</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Error Tabs -->
    <div class="row-fluid">
        <div class="offset2 span8">
            <ul id="error-tabs" class="nav nav-pills" data-toggle="tabs">
                <li><a href="#error-tabs-400">400</a></li>
                <li><a href="#error-tabs-401">401</a></li>
                <li><a href="#error-tabs-403">403</a></li>
                <li class="active"><a href="#error-tabs-404">404</a></li>
                <li><a href="#error-tabs-500">500</a></li>
                <li><a href="#error-tabs-503">503</a></li>
            </ul>
        </div>
    </div>
    <!-- END Error Tabs -->

    <!-- Tabs content -->
    <div class="tab-content tab-content-default">
        <!-- 400 Error -->
        <div id="error-tabs-400" class="tab-pane row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 400</div>
                    <div class="error-text">Ooops.. <strong>Bad Request</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 400 Error -->

        <!-- 401 Error -->
        <div id="error-tabs-401" class="tab-pane row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 401</div>
                    <div class="error-text">Ooops.. <strong>Unauthorized</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search2" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 401 Error -->

        <!-- 403 Error -->
        <div id="error-tabs-403" class="tab-pane row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 403</div>
                    <div class="error-text">Ooops.. <strong>Forbidden</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search3" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 403 Error -->

        <!-- 404 Error -->
        <div id="error-tabs-404" class="tab-pane active row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 404</div>
                    <div class="error-text">Ooops.. <strong>Page not found</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search4" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 404 Error -->

        <!-- 500 Error -->
        <div id="error-tabs-500" class="tab-pane row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 500</div>
                    <div class="error-text">Ooops.. <strong>Internal Server Error</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search5" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 500 Error -->

        <!-- 503 Error -->
        <div id="error-tabs-503" class="tab-pane row-fluid">
            <div class="offset2 span8">
                <div class=" error-container">
                    <div class="error-code"><i class="icon-warning-sign"></i> 503</div>
                    <div class="error-text">Ooops.. <strong>Service Unavailable</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-append">
                            <input type="text" id="example-error-search6" placeholder="Search..">
                            <button class="btn"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 503 Error -->
    </div>
    <!-- END Tabs content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>