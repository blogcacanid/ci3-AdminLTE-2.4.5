<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo base_url() . 'assets/dist/img/cacan-160x160.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Cacan Blog</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'v1' ? 'active' : '' ?>"><a href="<?= site_url('dashboard/v1'); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'v2' ? 'active' : '' ?>"><a href="<?= site_url('dashboard/v2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'widgets' ? 'active' : '' ?>">
            <a href="<?= site_url('widgets'); ?>">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <span class="pull-right-container">
                    <small class="label pull-right bg-green">new</small>
                </span>
            </a>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'charts' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'chartjs' ? 'active' : '' ?>"><a href="<?= site_url('charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'morris' ? 'active' : '' ?>"><a href="<?= site_url('charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'flot' ? 'active' : '' ?>"><a href="<?= site_url('charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'inline_charts' ? 'active' : '' ?>"><a href="<?= site_url('charts/inline_charts'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'ui_elements' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'general' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'icons' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/icons'); ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'buttons' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/buttons'); ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'sliders' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/sliders'); ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'timeline' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/timeline'); ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'modals' ? 'active' : '' ?>"><a href="<?= site_url('ui_elements/modals'); ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'forms' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'general_elements' ? 'active' : '' ?>"><a href="<?= site_url('forms/general_elements'); ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'advanced_elements' ? 'active' : '' ?>"><a href="<?= site_url('forms/advanced_elements'); ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'editors' ? 'active' : '' ?>"><a href="<?= site_url('forms/editors'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'tables' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'simple_tables' ? 'active' : '' ?>"><a href="<?= site_url('tables/simple_tables'); ?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'data_tables' ? 'active' : '' ?>"><a href="<?= site_url('tables/data_tables'); ?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'calendar' ? 'active' : '' ?>">
            <a href="<?= site_url('calendar'); ?>">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <span class="pull-right-container">
                    <small class="label pull-right bg-red">3</small>
                    <small class="label pull-right bg-blue">17</small>
                </span>
            </a>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'mailbox' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'inbox' ? 'active' : '' ?>"><a href="<?= site_url('mailbox/inbox'); ?>"><i class="fa fa-circle-o"></i> Inbox</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'compose' ? 'active' : '' ?>"><a href="<?= site_url('mailbox/compose'); ?>"><i class="fa fa-circle-o"></i> Compose</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'read' ? 'active' : '' ?>"><a href="<?= site_url('mailbox/read'); ?>"><i class="fa fa-circle-o"></i> Read</a></li>
            </ul>
        </li>
        <li class="<?php echo $this->uri->segment(1) == 'examples' ? 'active' : '' ?> treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $this->uri->segment(2) == 'invoice' ? 'active' : '' ?>"><a href="<?= site_url('examples/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'profile' ? 'active' : '' ?>"><a href="<?= site_url('examples/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'login' ? 'active' : '' ?>"><a href="<?= site_url('examples/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'register' ? 'active' : '' ?>"><a href="<?= site_url('examples/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'lockscreen' ? 'active' : '' ?>"><a href="<?= site_url('examples/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'error_404' ? 'active' : '' ?>"><a href="<?= site_url('examples/error_404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'error_500' ? 'active' : '' ?>"><a href="<?= site_url('examples/error_500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'blank_page' ? 'active' : '' ?>"><a href="<?= site_url('examples/blank_page'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'pace_page' ? 'active' : '' ?>"><a href="<?= site_url('examples/pace_page'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Level One
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
