<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Editable DataTables</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Editable Datatables -->
    <h3 class="page-header page-header-top">Editable Datatables <small>Flexible, easy to set up and responsive!</small></h3>

    <!-- Features -->
    <div class="push">
        <h4 class="sub-header">Features</h4>
        <ul class="icons-ul">
            <li><i class="icon-li icon-ok text-success"></i> Just click a cell to edit its data</li>
            <li><i class="icon-li icon-ok text-success"></i> Make editable only the cells you want by adding a class <code>.editable-td</code></li>
            <li><i class="icon-li icon-ok text-success"></i> Add new editable rows to the table</li>
            <li><i class="icon-li icon-ok text-success"></i> Delete any row you want</li>
            <li><i class="icon-li icon-ok text-success"></i> Still responsive! Hide any cell on mobiles or tablets without affecting the functionality</li>
            <li><i class="icon-li icon-arrow-right text-black"></i> Easily set up your rows</li>
            <li><i class="icon-li icon-arrow-right text-black"></i> The data is ready to be sent and handled in your backend when
                <ul class="icons-ul">
                    <li><i class="icon-li icon-ok text-success"></i> deleting a row</li>
                    <li><i class="icon-li icon-ok text-success"></i> adding a new row</li>
                    <li><i class="icon-li icon-ok text-success"></i> editing a cell</li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END Features -->

    <!-- Toolbar -->
    <div class="push">
        <div class="btn-group pull-right">
            <button class="btn btn-inverse" data-toggle="tooltip" title="Extra Info"><i class="icon-info-sign"></i></button>
            <button class="btn" data-toggle="tooltip" title="Settings"><i class="icon-cog"></i></button>
        </div>
        <button id="addRow" class="btn btn-success"><i class="icon-plus"></i> Add New User</button>
    </div>
    <!-- END Toolbar -->

    <!-- Table -->
    <table id="example-editable-datatables" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="span1"></th>
                <th class="span1 text-center">#</th>
                <th><i class="icon-user"></i> Username</th>
                <th class="hidden-phone"><i class="icon-envelope-alt"></i> Email</th>
                <th class="hidden-phone"><i class="icon-file"></i> Notes</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add ids to tr and td, so that you can use them to handle the data in your backend -->
            <!-- Make sure to add the .editable-td class to the inputs you would like to be editable! -->
            <!-- Also make sure to set up the cells you add here in the addHandle() function accordingly -->
            <?php for($i=1; $i<31; $i++) { ?>
            <tr id="<?php echo $i; ?>">
                <td class="span1 text-center">
                    <a href="javascript:void(0)" id="delRow<?php echo $i; ?>" class="btn btn-mini btn-danger delRow"><i class="icon-remove"></i></a>
                </td>
                <td id="id<?php echo $i; ?>" class="span1 text-center"><?php echo $i; ?></td>
                <td id="username<?php echo $i; ?>" class="editable-td">username<?php echo $i; ?></td>
                <td id="email<?php echo $i; ?>" class="editable-td hidden-phone">user<?php echo $i; ?>@example.com</td>
                <td id="notes<?php echo $i; ?>" class="editable-td hidden-phone">Notes</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Table -->
    <!-- END Editable Datatables -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){

        // Hold our table to a variable
        var exampleDatatable = $('#example-editable-datatables');

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
                    .attr('id', 'username' + id);

                // Setup fourth cell (email)
                $(nRow)
                    .children('td:nth-child(4)')
                    .addClass('editable-td')
                    .addClass('hidden-phone')
                    .attr('id', 'email' + id);

                // Setup fifth cell (notes)
                $(nRow)
                    .children('td:nth-child(5)')
                    .addClass('editable-td')
                    .addClass('hidden-phone')
                    .attr('id', 'notes' + id);

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