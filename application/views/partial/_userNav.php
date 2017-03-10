<nav class="navbar navbar-inverse nav-color navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('task'); ?>">Tasks</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?= base_url('users/signOut'); ?>" id="sinup">Sign Out</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-lg"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ahmed put new carde</a></li>
                        <li><a href="#">Date of carde-1 has expired</a></li>
                        <li><a href="#">Eslam has added new member</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">See More ...</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="assets/inner.php#/mustDo"><?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="#"><?php echo $_SESSION['email']; ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">+20-<?php echo $_SESSION['phone']; ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#/profile" data-toggle="tooltip" data-placement="bottom" title="Profile Setting"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>