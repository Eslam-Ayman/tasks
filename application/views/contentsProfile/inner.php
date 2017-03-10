
<!--
start side bar
=======================-->
<div class="container-fluid">
    <div class="row">
        <aside class="col-xs-6 col-sm-3 col-md-2 sidebar">
            <i class="fa fa-angle-double-right fa-3x" aria-hidden="true"></i>
            <form class="form-inline" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." />
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-srch">Search</button>
                    </span>
                </div>
            </form> 

            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?= base_url('task/mustDo'); ?>"><i class="fa fa-table"></i>Must Do</a></li>
                <li ><a href="<?= base_url('task/done'); ?>" ><i class="fa fa-check-square-o"></i>Done</a></li>
                <li ><a href="<?= base_url('task/trash'); ?>" ><i class="fa fa-trash-o"></i>in Trash</a></li>
            </ul>

            <ul class="nav nav-sidebar">
                <li ><a href="<?= base_url('task/members'); ?>" ><i class="fa fa-users"></i>Members</a></li>
                <li ><a href="<?= base_url('task/comments'); ?>" ><i class="fa fa-comments-o"></i>Comments</a></li>
                <li ><a href="<?= base_url('task/chat'); ?>" ><i class="fa fa-envelope-o"></i>Chat</a></li>
            </ul>

            <div class="ftr T-FOOTER text-center">
                <div id="T-a">
                    <a href="#"><i class="fa fa-facebook fa-lg" id="T-i1"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg" id="T-i2"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-lg" id="T-i3"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-lg" id="T-i4"></i></a>
                </div>
                <span>&copy; All rights are resieved for TASKS 2016</span>
            </div>
        </aside>
        <!--  ***********************************************      content section     *************************************************************   -->
        <section class="content col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
            <div class="container" >
                <?php $this->load->view($innerContent); ?>
            </div>
        </section>
    </div><!-- /.row of this page -->
</div><!-- /.container-fluid -->

