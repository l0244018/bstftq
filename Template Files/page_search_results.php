<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Search Results</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Search Results -->
    <div class="page-header page-header-top clearfix">
        <!-- Dropdown Options -->
        <div class="btn-group pull-right">
            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Sort By <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu pull-right">
                <li class="active"><a href="javascript:void(0)"><i class="icon-circle"></i> Relevance</a></li>
                <li><a href="javascript:void(0)"><i class="icon-circle-blank"></i> Date</a></li>
                <li><a href="javascript:void(0)"><i class="icon-circle-blank"></i> Sales</a></li>
                <li><a href="javascript:void(0)"><i class="icon-circle-blank"></i> Popularity</a></li>
            </ul>
        </div>
        <div class="btn-group pull-right">
            <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Category <i class="icon-angle-down"></i></a>
            <ul class="dropdown-menu pull-right">
                <li class="active"><a href="javascript:void(0)"><i class="icon-circle"></i> Projects</a></li>
                <li><a href="javascript:void(0)"><i class="icon-circle-blank"></i> Users</a></li>
            </ul>
        </div>
        <!-- END Dropdown Options -->

        <h4 class="pull-left"><i class="icon-search"></i> 300 Results Found</h4>
    </div>

    <!-- Results -->
    <?php $j=1; for($i=0; $i<10; $i++) { ?>
    <div class="row-fluid">
        <div class="span6">
            <div class="media media-hover push">
                <a href="javascript:void(0)" class="pull-left">
                    <img src="img/placeholders/image_dark_120x120.png" class="media-object img-polaroid" alt="Image">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><small><span class="label label-success"><i class="icon-ok"></i></span></small> Project #<?php echo $j; ?> <small><span class="label label-warning"><?php echo rand(1, 12) .'-'. rand(2008, 2013); ?></span></small></h4>
                    <a href="javascript:void(0)">http://example-link-<?php echo $j++; ?>.com</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus.</p>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="media media-hover push">
                <a href="javascript:void(0)" class="pull-left">
                    <img src="img/placeholders/image_dark_120x120.png" class="media-object img-polaroid" alt="Image">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><small><span class="label label-success"><i class="icon-ok"></i></span></small> Project #<?php echo $j; ?> <small><span class="label label-warning"><?php echo rand(1, 12) .'-'. rand(2008, 2013); ?></span></small></h4>
                    <a href="javascript:void(0)">http://example-link-<?php echo $j++; ?>.com</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus.</p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- END Results -->

    <!-- Pagination -->
    <div class="pagination pagination-centered remove-margin">
        <ul>
            <li><a href="javascript:void(0)">Prev</a></li>
            <li><a href="javascript:void(0)">1</a></li>
            <li class="active"><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li class="disabled"><a href="javascript:void(0)">..</a></li>
            <li><a href="javascript:void(0)">15</a></li>
            <li><a href="javascript:void(0)">Next</a></li>
        </ul>
    </div>
    <!-- END Pagination -->
    <!-- END Search Results -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>