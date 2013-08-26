<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Profile</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Profile -->
    <h3 class="page-header page-header-top"><i class="icon-user"></i> John Doe <small>Web developer</small></h3>

    <div class="row-fluid">
        <!-- First Column | Image and menu -->
        <div class="span3">
            <div class="text-center">
                <img src="img/placeholders/image_light_360x270.png" alt="image">
            </div>
            <ul class="nav nav-tabs nav-stacked">
                <li><a href="javascript:void(0)"><i class="icon-coffee"></i> Portfolio</a></li>
                <li><a href="javascript:void(0)"><i class="icon-paper-clip"></i> Projects</a></li>
                <li><a href="javascript:void(0)"><i class="icon-picture"></i> Gallery</a></li>
            </ul>
            <ul class="nav nav-tabs nav-stacked">
                <li><a href="javascript:void(0)"><i class="icon-share-alt"></i> Follow</a></li>
                <li><a href="javascript:void(0)"><i class="icon-envelope-alt"></i> Send Message</a></li>
            </ul>
            <ul class="nav nav-tabs nav-stacked">
                <li><a href="javascript:void(0)"><i class="icon-facebook"></i> Facebook</a></li>
                <li><a href="javascript:void(0)"><i class="icon-twitter"></i> Twitter</a></li>
                <li><a href="javascript:void(0)"><i class="icon-linkedin"></i> LinkedIn</a></li>
                <li><a href="javascript:void(0)"><i class="icon-pinterest"></i> Pinterest</a></li>
                <li><a href="javascript:void(0)"><i class="icon-github"></i> Github</a></li>
            </ul>
        </div>
        <!-- END First Column | Image and menu -->

        <!-- Second Column | Main content -->
        <div class="span6">
            <h4>Experience</h4>
            <ul class="icons-ul push">
                <li><i class="icon-li icon-arrow-right"></i> <strong>Company #1</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
                <li><i class="icon-li icon-arrow-right"></i> <strong>Company #2</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
                <li><i class="icon-li icon-arrow-right"></i> <strong>Company #3</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
            </ul>
            <h4>About</h4>
            <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            <h4><i class="icon-book"></i> Address</h4>
            <address>
                <strong>Company</strong><br>
                Street 000<br>
                City, CA 00000<br>
                <abbr title="Phone">P:</abbr> (000) 000-00000
            </address>
            <h4>Favorite Quote</h4>
            <blockquote>
                <p>This is an awesome quote!</p>
                <small>Someone famous <cite title="Source Title">Source Title</cite></small>
            </blockquote>
        </div>
        <!-- END Second Column | Main content -->

        <!-- Third Column | Right Sidebar -->
        <div class="span3">
            <h5 class="page-header-sub">Actions</h5>
            <div class="btn-group push">
                <button class="btn btn-success" data-toggle="tooltip" title="Ask for a quote"><i class="icon-plus"></i> Hire now!</button>
                <button class="btn btn-info" data-toggle="tooltip" title="Send a message"><i class="icon-envelope"></i></button>
            </div>
            <div class="btn-group push">
                <button class="btn btn-danger" data-toggle="tooltip" title="Add to favorites"><i class="icon-star"></i></button>
                <button class="btn btn-warning" data-toggle="tooltip" title="Follow"><i class="icon-share-alt"></i></button>
                <button class="btn btn-primary" data-toggle="tooltip" title="Share Profile"><i class="icon-share"></i></button>
            </div>
            <h5 class="page-header-sub"><i class="icon-bolt"></i> Current Status</h5>
            <div class="alert alert-success"><i class="icon-ok-sign"></i> Available for hire</div>
            <h5 class="page-header-sub"><i class="icon-certificate"></i> Skills</h5>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="span1"><span class="label label-inverse">HTML</span></td>
                        <td>
                            <div class="progress progress-success progress-mini">
                                <div class="bar" style="width: 85%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">CSS</span></td>
                        <td>
                            <div class="progress progress-warning progress-mini">
                                <div class="bar" style="width: 70%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">Javascript</span></td>
                        <td>
                            <div class="progress progress-success progress-mini">
                                <div class="bar" style="width: 100%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">PHP</span></td>
                        <td>
                            <div class="progress progress-success progress-mini">
                                <div class="bar" style="width: 100%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">Photoshop</span></td>
                        <td>
                            <div class="progress progress-warning progress-mini">
                                <div class="bar" style="width: 60%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">Node.js</span></td>
                        <td>
                            <div class="progress progress-danger progress-mini">
                                <div class="bar" style="width: 45%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="span1"><span class="label label-inverse">Java</span></td>
                        <td>
                            <div class="progress progress-danger progress-mini">
                                <div class="bar" style="width: 40%"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h5 class="page-header-sub"><i class="icon-flag"></i> Featured Projects</h5>
            <ul class="icons-ul">
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #1</strong>, <a href="javascript:void(0)">exampleproject1.com</a></li>
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #2</strong>, <a href="javascript:void(0)">exampleproject2.com</a></li>
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #3</strong>, <a href="javascript:void(0)">exampleproject3.com</a></li>
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #4</strong>, <a href="javascript:void(0)">exampleproject4.com</a></li>
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #5</strong>, <a href="javascript:void(0)">exampleproject5.com</a></li>
                <li><i class="icon-li icon-angle-right"></i> <strong>Project #6</strong>, <a href="javascript:void(0)">exampleproject6.com</a></li>
            </ul>
        </div>
        <!-- END Third Column | Right Sidebar -->
    </div>
    <!-- END Profile -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<?php include 'inc/bottom.php'; // Close body and html tags ?>