<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>
<?php include 'inc/class/class.db.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)"><?php echo _("Bstftq"); ?></a></li>
        <li class="active"><a href=""><?php echo _("Dashboard"); ?></a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Your Content -->
    <h3 class="page-header page-header-top"><i class="icon-circle-blank"></i> <?php echo _("Project list"); ?></h3>

    <!-- Toolbar -->
    <div class="push">
        <div class="btn-group pull-right">
            <button class="btn btn-inverse" data-toggle="tooltip" title="Extra Info"><i class="icon-info-sign"></i></button>
            <button class="btn" data-toggle="tooltip" title="Settings"><i class="icon-cog"></i></button>
        </div>
        <button id="addRow" class="btn btn-success"><i class="icon-plus"></i> Add New User</button>
    </div>
    <!-- END Toolbar -->
    
    <?php 
    	$db = new db("mysql:host=localhost;port=3306;dbname=bstsftq", "root", "");
    	$lstProject = $db->select("project");
    ?>

    <!-- Table -->
    <table id="project-datatables" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="span1"></th>
                <th class="span1 text-center"><?php echo _("Id"); ?></th>
                <th class="hidden-phone"><i class="icon-envelope-alt"></i> <?php echo _("Code"); ?></th>
                <th class="hidden-phone"><i class="icon-file"></i> <?php echo _("Short Desc"); ?></th>
                <th class="hidden-phone"><i class="icon-file"></i> <?php echo _("Long Desc"); ?></th>
            </tr>
        </thead>
        <tbody>
            <!-- Add ids to tr and td, so that you can use them to handle the data in your backend -->
            <!-- Make sure to add the .editable-td class to the inputs you would like to be editable! -->
            <!-- Also make sure to set up the cells you add here in the addHandle() function accordingly -->
            <?php for($i = 0; $i < count($lstProject); $i++) { ?>
	            <tr id="<?php echo $i; ?>">
	                <td class="span1 text-center">
	                    <a href="javascript:void(0)" id="delRow<?php echo $i; ?>" class="btn btn-mini btn-danger delRow"><i class="icon-remove"></i></a>
	                </td>
	                <td id="id<?php echo $i; ?>" class="span1 text-center"><?php echo $lstProject[$i]['projectId']; ?></td>
	                <td id="scode<?php echo $i; ?>" class="editable-td"><?php echo $lstProject[$i]['code']; ?></td>
	                <td id="longDesc<?php echo $i; ?>" class="editable-td hidden-phone"><?php echo $lstProject[$i]['shortDesc']; ?></td>
	                <td id="shortDesc<?php echo $i; ?>" class="editable-td hidden-phone"><?php echo $lstProject[$i]['longDesc']; ?></td>
	            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Table -->
    <!-- END Editable Datatables -->
    <!-- End Your Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){

        // Hold our table to a variable
        var exampleDatatable = $('#project-datatables');

        /*
         * Function for handing the data after a cell has been edited
         *
         * From here you can send the data with ajax (for example) to handle in your backend
         *
         */
        var reqHandle = function(value, settings){

            // this, the edited td element
            console.log(this);

            // $(this).attr('id'), get the id of the edited td
            console.log($(this).attr('id'));

            // $(this).parent('tr').attr('id'), get the id of the row
            console.log($(this).parent('tr').attr('id'));

            // value, the new value the user submitted
            console.log(value);

            // settings, the settings of jEditable
            console.log(settings);

            // Here you can send and handle the data in your backend
            // ...

            // For this example, just return the data the user submitted
            return(value);
        };

        /*
         * Function for initializing jEditable handlers to the table
         *
         * For advance usage you can check http://www.appelsiini.net/projects/jeditable
         *
         */
        var initEditable = function(rowID){

            // Hold the elements that the jEditable with be initialized
            var elements;

            // If we don't have a rowID apply to all td elements with .editable-td class
            if (!rowID)
                elements = $('td.editable-td', editableTable.fnGetNodes());
            else
                elements = $('td.editable-td', editableTable.fnGetNodes(rowID));

            elements.editable(reqHandle, {
                "callback": function( sValue, y ) {
                    // Update the table cell after the edit has been processed
                    var aPos = editableTable.fnGetPosition(this);
                    editableTable.fnUpdate(sValue, aPos[0], aPos[1]);

                    // Little fix for responsive table after edit
                    exampleDatatable.css('width', '100%');
                },
                "submitdata": function ( value, settings ) {
                    // Sent some extra data
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": editableTable.fnGetPosition(this)[2]
                    };
                },
                indicator : '<i class="icon-spinner icon-spin"></i>',
                cssclass : 'remove-margin',
                submit: 'Ok',
                cancel: 'Cancel'
            });
        };

        /*
         * Function for deleting table row
         *
         */
        var delHandle = function(){

            // When the user clicks on a delete button
            $('body').on('click','a.delRow', function(){
                var aPos = editableTable.fnGetPosition(this.parentNode);
                var aData = editableTable.fnGetData(aPos[0]);
                var rowID = $(this).parents('tr').attr('id');

                // Here you can handle the deletion of the row in your backend
                // ...

                // Delete row if success with the backend
                editableTable.fnDeleteRow(aPos[0]);
            });
        };

        /*
         * Function for adding table row
         *
         */
        var addHandle = function(){

            // When the user clicks on the 'Add New User' button
            $("#addRow").click(function(){

                // Here you can handle your backend data (eg: adding a row to database and return the id of the row)

                // ..

                // Create a new row and set it up
                var rowID = editableTable.fnAddData(['', '', '', '', '']);

                // Example id, here you should add the one you created in your backend
                var id = rowID[0] + 1;

                // Update the id cell, so that our table redraw and resort (new row goes first in datatable)
                editableTable.fnUpdate(id, rowID[0], 1);

                // Get the new row
                var nRow = editableTable.fnGetNodes(rowID[0]);

                /*
                 * In the following section you should set up your cells
                 */
                // Add id to tr element
                $(nRow).attr('id', id);

                // Setup first cell with the delete button
                $(nRow)
                    .children('td:nth-child(1)')
                    .addClass('text-center')
                    .html('<a href="javascript:void(0)" id="delRow' + id + '" class="btn btn-mini btn-danger delRow"><i class="icon-remove"></i></a>');

                // Setup second cell (id)
                $(nRow)
                    .children('td:nth-child(2)')
                    .attr('id', 'id' + id)
                    .addClass('span1')
                    .addClass('text-center');

                // Setup third cell (username)
                $(nRow)
                    .children('td:nth-child(3)')
                    .addClass('editable-td')
                    .attr('id', 'code' + id);

                // Setup fourth cell (email)
                $(nRow)
                    .children('td:nth-child(4)')
                    .addClass('editable-td')
                    .addClass('hidden-phone')
                    .attr('id', 'shortDesc' + id);

                // Setup fifth cell (notes)
                $(nRow)
                    .children('td:nth-child(5)')
                    .addClass('editable-td')
                    .addClass('hidden-phone')
                    .attr('id', 'longDesc' + id);

                // Setup your other cells the same way (if you have more)
                // ...

                // Initialize jEditable to the new row
                initEditable(rowID[0]);

                // Little fix for responsive table after adding a new row
                exampleDatatable.css('width', '100%');
            });
        };

        // Initialize Datatables
        var editableTable = exampleDatatable.dataTable({
            "aaSorting": [[ 1, 'desc' ]],
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [0]
            }]
        });

        // Initialize jEditable
	initEditable();

        // Handle rows deletion
        delHandle();

        // Handle new rows
        addHandle();
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>