


<h1 style="color: grey; margin-bottom: 40px; border-bottom: 2px solid #b5b5b5; padding-bottom: 21px;"><i class="fa fa-tasks" aria-hidden="true"></i> Tasks you must Finish...</h1>
<div class="row">
    <div href="#" data-toggle="modal" data-target="#createCard" class="create col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-3 text-center">
        <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
        <h4 style="font-weight: bold;">Create new Card</h4>
    </div>
    <div class=" col-xs-12 col-sm-6 col-md-3" >
        <div class="thumbnail">
            <img src="<?= base_url('assets/img/logo.jpg'); ?>" alt="img" data-toggle="modal" data-target="#myModal" class="img-card"/>
            <div class="clearfix"></div>
            <img src="<?= base_url('assets/img/avatar-1.png'); ?>" alt="img" class="img-circle pull-right admin-img">
            <div class="caption">
                <h3>TAsk Title</h3>
                <p>
                    Eslam <span class="label label-default">Admin</span> <span class="pull-right">Due Date</span> <br/>
                    5 <strong style="cursor:pointer" data-toggle="tooltip" data-placement="right" title="Ahmed / Medo / Alaa / Memo">Members</strong> <span class="pull-right">2016-7-2</span><br>
                </p>
                <p><a href="#" class="btn btn-srch" role="button">Done</a> <a href="#" class="btn btn-trash" role="button">in trash</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal create card -->
<div class="modal fade" id="createCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="createCard">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create new Card</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Add members to this card</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-xs-8 col-xs-offset-2" style="margin-top: 7px;">
                                    <form class="form-inline" role="search">
                                        <div class="input-group col-xs-12">
                                            <input width="100%" type="text" class="form-control" placeholder="Search..." />
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-srch">Add</button>
                                            </span>
                                        </div>
                                    </form> 
                                </div>
                                <!-- <div class="col-md-8">
                                    <div class="progress height-17">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <div class="progress height-17">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only">20% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-info" style="width: 25%">
                                            <span class="sr-only">10% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div><!-- the end of panal-body -->
                        </div><!-- the end of panal-model -->
                    </div> <!-- end of col-12 -->
                </div><!-- end of the first row -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Description <small>general</small></h3>
                        <div class="well well-lg">
                            <div class="main">
                                <!-- <a href="#" class="btn btn-prima pull-right edit">edit</a>  -->
                                <h4>Main</h4>
                                <div class="form-group">
                                  <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="main">
                                <!-- <a href="#" class="btn pull-right edit" >edit</a>  -->
                                <h4>Links</h4>
                                <div class="form-group">
                                  <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <h4>Illustrating Images</h4>
                            <!-- <form action="" method="" > -->
                                <div class="input-group space">
                                    <input type="file" class="form-control" aria-label="...">
                                    <!-- <input type="file" class="form-control btn btn-default"> -->
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="file">Upload</button>
                                    </div>
                                </div>
                            <!-- </form> -->
                            <div class="main">
                                <!-- <a href="#" class="btn btn-prima pull-right edit">edit</a>  -->
                                <h4>Final Notes</h4>
                                <div class="form-group">
                                  <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                        </div><!--  end of well-one -->
                        <h3>Attachments</h3>
                        <div class="well well-lg">
                                <div class="input-group space">
                                    <input type="file" class="form-control" aria-label="...">
                                    <!-- <input type="file" class="form-control btn btn-default"> -->
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="file">Upload</button>
                                    </div>
                                </div>
                            <!-- <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object height-50" src="http://www.spraginslaw.com/wp-content/uploads/2014/11/silicon-beach-email-icon-1.png">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">PSD File</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    <a href="#">Download</a>
                                </div>
                            </div><!-- emd of the media-1 --
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object height-50" src="http://www.spraginslaw.com/wp-content/uploads/2014/11/silicon-beach-email-icon-1.png">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <h4 class="media-heading">PSD File</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    <a href="#">Download</a>
                                </div>
                            </div> --><!-- end of the media-2 -->
                        </div><!-- end of well-two -->
                        <!-- <h3>Comments <small>general</small></h3>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="...">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group --
                        </div><!-- /input-group --
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">user</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                </p>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">user</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">user</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end of the big media body --
                        </div> --><!-- end of the big media -->
                    </div><!-- end of col-9 -->
                    <!-- <div class="col-md-2 col-md-offset-1">
                        <h4 class="text-center">Add</h4>
                        <div class="btn-group-vertical space" role="group" aria-label="...">
                            <a class="btn btn-default"><i class="fa fa-user-plus" aria-hidden="true"></i>  Members</a>
                            <a class="btn btn-default"><i class="fa fa-tags" aria-hidden="true"></i>  Description</a>
                            <a class="btn btn-default"><i class="fa fa-file-image-o" aria-hidden="true"></i> Attatchments</a>
                            <a class="btn btn-default"><i class="fa fa-list-ol" aria-hidden="true"></i>  CheckList</a>
                            <a class="btn btn-default"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Due Date</a>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="...">
                            <a class="btn btn-default"><i class="fa fa-files-o" aria-hidden="true"></i>  Copy</a>
                            <a class="btn btn-default"><i class="fa fa-share-alt" aria-hidden="true"></i>  Share</a>
                            <a class="btn btn-default"><i class="fa fa-check" aria-hidden="true"></i> Subscribe </a>
                        </div>
                    </div> --><!-- end of col-2 -->
                </div><!-- end of the second row -->
            </div><!-- end of model-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal create card -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Card title</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Dashboard</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-4" style="margin-top: 7px;">
                                    <img  class="img-circle height-30 marginLR" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"  data-toggle="tooltip" data-placement="top" title="aaa">
                                    <img class="height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                    <img class="height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                </div>
                                <div class="col-md-8">
                                    <div class="progress height-17">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <div class="progress height-17">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only">20% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-info" style="width: 25%">
                                            <span class="sr-only">10% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- the end of panal-body -->
                        </div><!-- the end of panal-model -->
                    </div> <!-- end of col-12 -->
                </div><!-- end of the first row -->
                <div class="row">
                    <div class="col-md-9">
                        <h3>Description <small>general</small></h3>
                        <div class="well well-lg">
                            <div class="main">
                                <a href="#" class="btn btn-prima pull-right edit" data-toggle="modal" data-target="#mainDisc">edit</a> 
                                <h4>Main</h4>
                                <p class="space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta illum corporis, voluptatum nisi vitae, praesentium fuga quisquam! Rem, fugiat! Ipsum deleniti, repellat? Sint, nobis, aperiam.</p> 
                            </div>
                            <div class="main">
                                <a href="#" class="btn pull-right edit" data-toggle="modal" data-target="#mainDisc">edit</a> 
                                <h4>Links</h4>
                                <p><a href="#">https://www.youtube.com/</a></p>
                                <p><a href="#">https://www.article19.org/</a></p>
                                <p class="space"><a href="#">https://www.trello.com/</a></p>
                            </div>
                            <h4>Illustrating Images</h4>
                            <form action="" method="" >
                                <div class="input-group space">
                                    <input type="file" class="form-control" aria-label="...">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Upload</button>
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="thumbnail">
                                <img src="http://www.enspire.com/wp-content/uploads/2014/02/LDS_Art_Home.png">
                            </a>
                            <a href="#" class="thumbnail">
                                <img src="http://il2.picdn.net/shutterstock/videos/8535565/thumb/9.jpg">
                            </a>
                            <div class="main">
                                <a href="#" class="btn btn-prima pull-right edit" data-toggle="modal" data-target="#mainDisc">edit</a> 
                                <h4>Final Notes</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus impedit similique earum, perferendis ipsa laboriosam incidunt molestias esse ratione fuga. Dolorem impedit, pariatur! Laborum, beatae!</p>
                            </div>
                        </div><!--  end of well-one -->
                        <h3>Attachments</h3>
                        <div class="well well-lg">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object height-50" src="http://www.spraginslaw.com/wp-content/uploads/2014/11/silicon-beach-email-icon-1.png">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">PSD File</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    <a href="#">Download</a>
                                </div>
                            </div><!-- emd of the media-1 -->
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object height-50" src="http://www.spraginslaw.com/wp-content/uploads/2014/11/silicon-beach-email-icon-1.png">
                                    </a>
                                </div>
                                <div class="media-body">

                                    <h4 class="media-heading">PSD File</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    <a href="#">Download</a>
                                </div>
                            </div><!-- end of the media-2 -->
                        </div><!-- end of well-two -->
                        <h3>Comments <small>general</small></h3>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="...">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">user</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                </p>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">user</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object height-30 img-circle" src="https://cdn3.iconfinder.com/data/icons/digital-marketing/512/user_business_person_businessman_man_flat_icon-512.png">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">user</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laboriosam.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end of the big media body -->
                        </div><!-- end of the big media -->
                    </div><!-- end of col-9 -->
                    <div class="col-md-2 col-md-offset-1">
                        <h4 class="text-center">Add</h4>
                        <div class="btn-group-vertical space" role="group" aria-label="...">
                            <a class="btn btn-default"><i class="fa fa-user-plus" aria-hidden="true"></i>  Members</a>
                            <!-- <a class="btn btn-default"><i class="fa fa-tags" aria-hidden="true"></i>  Description</a> -->
                            <a class="btn btn-default"><i class="fa fa-file-image-o" aria-hidden="true"></i> Attatchments</a>
                            <!-- <a class="btn btn-default"><i class="fa fa-list-ol" aria-hidden="true"></i>  CheckList</a> -->
                            <a class="btn btn-default"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Due Date</a>
                        </div>
                        <!-- <div class="btn-group-vertical" role="group" aria-label="...">
                            <a class="btn btn-default"><i class="fa fa-files-o" aria-hidden="true"></i>  Copy</a>
                            <a class="btn btn-default"><i class="fa fa-share-alt" aria-hidden="true"></i>  Share</a>
                            <a class="btn btn-default"><i class="fa fa-check" aria-hidden="true"></i> Subscribe </a>
                        </div> -->
                    </div><!-- end of col-2 -->
                </div><!-- end of the second row -->
            </div><!-- end of model-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal  -->


 <!-- start of modal  editing -->
    <div class="modal fade" id="mainDisc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="mainDisc">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cog"></i> Edit Card Info</h4>
                </div><!--end of modal header -->
                <div class="modal-body">
                    <h4>your new information here...</h4>
                    <div class="form-group">
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div><!-- end of modal Footer -->
            </div>
        </div>
    </div>
    <!-- end of modal editing -->
