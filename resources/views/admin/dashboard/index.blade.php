@extends('admin.layouts.main')

@section('content')

<section id="main" role="main">



     @include('admin.layouts.partials.left-sidebar')

     @include('admin.layouts.partials.right-sidebar')

        <!-- Content -->
        <section id="content" class="container">

             @include('admin.layouts.partials.shortcuts')

            <!-- Main Graph -->
            <div class="block">
                <h2>Traffic Statistics</h2>
                <div class="config">
                    <a href="index.html" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                        <i class="icon-loop-2"></i>
                    </a>

                    <a href="index.html" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                        <i class="icon-wrench"></i>
                    </a>
                </div>
                <div class="media">
                    <div class="pull-left sub-graph hidden-xs">
                        <div class="sub-item">
                            <div id="site-impressions" class="tiny-charts"></div>
                            <small class="small">Site Impressions</small>
                        </div>

                        <div class="sub-item">
                            <div id="site-bandwith" class="tiny-charts"></div>
                            <small class="small">Site Bandwith(mb)</small>
                        </div>

                        <div class="sub-item">
                            <div id="side-pie2" class="tiny-charts side-pie-tiny"></div>
                            <div id="side-pie3" class="tiny-charts side-pie-tiny"></div>
                            <small class="small">Percentage difference</small>
                        </div>
                    </div>
                    <div id="areaChart" class="main-graph media-body"></div>
                </div>

            </div>

            <div class="row m-container">
                <!-- Today's Activity -->
                <div class="col-md-6 masonry listview-block">
                    <div class="block">
                        <h2>Today's Activity</h2>
                        <div class="config">
                            <a href="index.html" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="icon-loop-2"></i>
                            </a>
                            <a href="index.html" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                <i class="icon-wrench"></i>
                            </a>
                        </div>

                        <div class="listview activity">
                            <div class="media">
                                <div class="number red pull-left">640</div>
                                <div class="media-body">
                                    <span>Facebook Likes</span>
                                </div>
                            </div>

                            <div class="media">
                                <div class="number green pull-left">101</div>
                                <div class="media-body">
                                    <span>Twitter Followers</span>
                                </div>
                            </div>

                            <div class="media">
                                <div class="number blue pull-left">12K</div>
                                <div class="media-body">
                                    <span>Page Impressions</span>
                                </div>
                            </div>

                            <div class="media">
                                <div class="number yellow pull-left">20K</div>
                                <div class="media-body">
                                    <span>Youtube Views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="col-md-6 masonry listview-block">
                    <div class="block">
                        <h2>Latest Blog Posts</h2>
                        <div class="config">
                            <a href="index.html" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="icon-loop-2"></i>
                            </a>

                            <a href="index.html" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                <i class="icon-wrench"></i>
                            </a>
                        </div>

                        <div class="listview">
                            <div class="media">
                                <a class="pull-left" href="index.html#">
                                    <img src="img/profile-pics/1.jpg" alt="" class="poster-pic"></a>
                                <div class="media-body">
                                    <small>
                                        2 Hours before by
                                        <a href="index.html#">Jhon Beeber</a>
                                    </small>
                                    <a href="index.html#" class="post-title">Lorem ipsum dolor sit amet, consectetur adip...</a>
                                    <div class="btn-group controls">
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="index.html#">
                                    <img src="img/profile-pics/2.jpg" alt="" class="poster-pic"></a>
                                <div class="media-body">
                                    <small>
                                        4 Hours before by
                                        <a href="index.html#">David Melon</a>
                                    </small>
                                    <a href="index.html#" class="post-title">Sed scelerisque sapien dapibus sollicitudin...</a>
                                    <div class="btn-group controls">
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="index.html#">
                                    <img src="img/profile-pics/3.jpg" alt="" class="poster-pic"></a>
                                <div class="media-body">
                                    <small>
                                        2 Days ago by
                                        <a href="index.html#">Stathon Max</a>
                                    </small>
                                    <a href="index.html#" class="post-title">Fusce eros turpis, ultrices aliquam aliquet eget...</a>
                                    <div class="btn-group controls">
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="index.html#">
                                    <img src="img/profile-pics/4.jpg" alt="" class="poster-pic"></a>
                                <div class="media-body">
                                    <small>
                                        5 Days ago by
                                        <a href="index.html#">Malinda Hollaway</a>
                                    </small>
                                    <a href="index.html#" class="post-title">Vivamus interdum massa diam, sit amet posuere...</a>
                                    <div class="btn-group controls">
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Edit" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="Delete" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="index.html#" data-toggle="tooltip" data-original-title="View" class="ttips btn btn-gr-gray btn-xs">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Post -->
                <div class="col-md-6 masonry">
                    <div class="block">
                        <h2>Post an Article</h2>
                        <div class="config">
                            <a href="index.html" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="icon-loop-2"></i>
                            </a>
                            <a href="index.html" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                <i class="icon-wrench"></i>
                            </a>
                        </div>
                        <form id="quick-post" class="block-body form-validation">
                            <div class="form-group">
                                <label for="articleTitle">Article Title</label>
                                <input type="text" class="form-control input-sm validate[required] input-sm" id="articleTitle" placeholder="eg: My first post"></div>

                            <div class="form-group">
                                <label>Alias</label>
                                <input type="text" class="form-control input-sm validate[required] input-sm" placeholder="eg: My-first-post"></div>

                            <div class="form-group">
                                <label>Category</label>
                                <br/>
                                <select class="select" data-style="btn-gr-gray">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                    <option>Category 4</option>
                                    <option>Category 5</option>
                                    <option>Category 6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="post">Post</label>
                                <textarea class="form-control input-sm validate[required] input-sm" id="post" placeholder="eg. Lorem ipsum dolor sit amet, consectetur adipiscing elit..."></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-xs" value="PUBLISH">
                            <input type="submit" class="btn btn-success btn-xs" value="SAVE"></form>
                    </div>
                </div>

                <!-- Todo List -->
                <div class="col-md-6 masonry">
                    <div class="block">
                        <h2>Todo Lists</h2>
                        <div class="config">
                            <a href="index.html" data-original-title="Add&nbsp;New" class="ttips" data-toggle="modal" data-target="#addNew-todo">
                                <i class="icon-plus add-new-todo"></i>
                            </a>
                            <a href="index.html" data-toggle="tooltip" data-original-title="Refresh" class="ttips">
                                <i class="icon-loop-2"></i>
                            </a>
                            <a href="index.html" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                <i class="icon-wrench"></i>
                            </a>
                        </div>
                        <div class="listview todo-list">
                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value="" checked></label>
                                <div class="media-body">
                                    Nulla vel metus scelerisque ante sollicitudin commodo purus
                                    <div class="list-options">
                                        <button class="btn btn-gr-gray btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value=""></label>
                                <div class="media-body">
                                    Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam
                                    <br/>
                                    <small>
                                        An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes
                                    </small>
                                    <br/>
                                </div>
                                <div class="list-options">
                                    <button class="btn btn-gr-gray btn-sm">Delete</button>
                                </div>
                            </div>

                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value=""></label>
                                <div class="media-body">
                                    Inermis patrioque temporibus at ius, eos ei case partem blandit
                                    <br/>
                                    <small>Sumo doming delicata in cum. Eos at augue viderer principes</small>
                                </div>
                                <div class="list-options">
                                    <button class="btn btn-gr-gray btn-sm">Delete</button>
                                </div>
                            </div>

                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value=""></label>
                                <div class="media-body">
                                    Billa vel metus scelerisque ante sollicitudin commodo
                                    <br/>
                                    <small>Lorem ipsum dolor sit amet, per cu solet docendi</small>
                                </div>
                                <div class="list-options">
                                    <button class="btn btn-gr-gray btn-sm">Delete</button>
                                </div>
                            </div>

                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value=""></label>

                                <div class="media-body">Per an urbanitas elaboraret qui, et dicit sadipscing vel</div>
                                <div class="list-options">
                                    <button class="btn btn-gr-gray btn-sm">Delete</button>
                                </div>
                            </div>

                            <div class="media">
                                <label class="pull-left">
                                    <input class="check-all" type="checkbox" value=""></label>
                                <div class="media-body">
                                    Per an error perpetua, fierent fastidii recteque ad pro
                                    <br/>
                                    <small>
                                        An erant explicari salutatus duo, sumo doming delicata in cum. Eos at augue viderer principes
                                    </small>
                                    <br/>
                                </div>
                                <div class="list-options">
                                    <button class="btn btn-gr-gray btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add new todo list modal -->
                    <div class="modal fade" id="addNew-todo">
                        <div class="modal-dialog modal-narrow">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Add New Todo List</h4>
                                </div>
                                <form class="form-horizontal form-validation" role="form">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control validate[required] input-sm" placeholder="..."></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Detail</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control auto-size input-sm" placeholder="Optional"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm" data-dismiss="modal">Cancel</button>
                                        <input type="submit" class="btn btn-sm" value="Add"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>



@stop
