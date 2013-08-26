<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">DataTables</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Datatables -->
    <h3 class="page-header page-header-top">Advanced Tables <small>Full DataTables Integration</small></h3>

    <table id="example-datatables" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="span1"></th>
                <th class="span1 hidden-phone">#</th>
                <th><i class="icon-user"></i> Username</th>
                <th class="hidden-phone hidden-tablet"><i class="icon-envelope-alt"></i> Email</th>
                <th><i class="icon-bolt"></i> Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $labels['0']['class'] = "";
            $labels['0']['text'] = "Inactive";
            $labels['1']['class'] = "label-success";
            $labels['1']['text'] = "Approved!";
            $labels['2']['class'] = "label-important";
            $labels['2']['text'] = "Unapproved";
            $labels['3']['class'] = "label-warning";
            $labels['3']['text'] = "Pending..";
            $labels['4']['class'] = "label-info";
            $labels['4']['text'] = "Manual Approval";
            $labels['5']['class'] = "label-inverse";
            $labels['5']['text'] = "Spam Account";
            ?>
            <?php for($i=1; $i<31; $i++) { ?>
            <tr>
                <td class="span1">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                    </div>
                </td>
                <td class="span1 hidden-phone"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-phone hidden-tablet">user<?php echo $i; ?>@example.com</td>
                <?php $rand = rand(0, 5); ?>
                <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Datatables -->

    <!-- Datatables in the grid -->
    <h3 class="page-header">Datatables <small>In the grid</small></h3>

    <div class="row-fluid">
        <div class="span6">
            <table id="example-datatables2" class="table table-striped table-bordered table-hover push">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="icon-user"></i> Username</th>
                        <th><i class="icon-bolt"></i> Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class'] = "";
                    $labels['0']['text'] = "Inactive";
                    $labels['1']['class'] = "label-success";
                    $labels['1']['text'] = "Approved!";
                    $labels['2']['class'] = "label-important";
                    $labels['2']['text'] = "Unapproved";
                    $labels['3']['class'] = "label-warning";
                    $labels['3']['text'] = "Pending..";
                    $labels['4']['class'] = "label-info";
                    $labels['4']['text'] = "Manual Approval";
                    $labels['5']['class'] = "label-inverse";
                    $labels['5']['text'] = "Spam Account";
                    ?>
                    <?php for($i=1; $i<31; $i++) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                        <?php $rand = rand(0, 5); ?>
                        <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="span6">
            <table id="example-datatables3" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="icon-user"></i> Username</th>
                        <th><i class="icon-bolt"></i> Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class'] = "";
                    $labels['0']['text'] = "Inactive";
                    $labels['1']['class'] = "label-success";
                    $labels['1']['text'] = "Approved!";
                    $labels['2']['class'] = "label-important";
                    $labels['2']['text'] = "Unapproved";
                    $labels['3']['class'] = "label-warning";
                    $labels['3']['text'] = "Pending..";
                    $labels['4']['class'] = "label-info";
                    $labels['4']['text'] = "Manual Approval";
                    $labels['5']['class'] = "label-inverse";
                    $labels['5']['text'] = "Spam Account";
                    ?>
                    <?php for($i=1; $i<31; $i++) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                        <?php $rand = rand(0, 5); ?>
                        <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables in the grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        /* Initialize Datatables */
        $('#example-datatables').dataTable({ "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ] });
        $('#example-datatables2').dataTable();
        $('#example-datatables3').dataTable();
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>