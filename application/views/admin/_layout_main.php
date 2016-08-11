<? $this->load->view('admin/components/page_head');?>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url('admin/dashboard') ?>"><?= $meta_title; ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><?= anchor('admin/pages', 'Pages'); ?></li>
                <li><?= anchor('admin/users', 'Users'); ?></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <!-- Main Colimn-->
        <div class="col-md-9">
            <section>
                <h2>Page Name</h2>
            </section>
        </div>
        <!-- Side bar -->
        <div class="col-md-3">
            <p><?= mailto('admin@mai.ua','<i class="glyphicon glyphicon-user"></i>   admin@mai.ua') ?> </p>
            <p><?= anchor('admin/user/logout', '<i class="glyphicon glyphicon-log-out"></i>  Logout') ?> </p>
        </div>
    </div>
</div>

<? $this->load->view('admin/components/page_footer');?>