<?php $this->load->view('web/header'); ?>
<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Profile</h4>
                </div>
            </div> 
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card-box text-center">
                    <div class="dashboard_profile_image" style="">

                        <div style=" border-radius: 50%; background-color: darkorange;position: relative; width: 30px !important; height: 30px !important; color: #fff; padding: 4px !important; margin-top: 140px !important; margin-left: 125px !important; font-size: 14px; font-weight: 700;">C</div>

                    </div>
                    <h4 class="mb-0">profile name</h4>
                    <p class="text-muted">username</p>
                    <div class="text-left mt-3">
                        <h4 class="font-13 text-uppercase">Status :</h4>
                    </div>
                    <div class="text-center mt-3">
                        <p class="text-muted font-13 mb-3">bio
                        </p>
                    </div>
                    <div class="text-left mt-3">

                        <p class="mb-2 font-13"><strong>Full Name :</strong> <span class="text-muted ml-2"></span></p>

                        <p class="mb-2 font-13"><strong>Mobile :</strong><span class="text-muted ml-2"></span></p>

                        <p class="mb-2 font-13"><strong>Email :</strong> <span class="text-muted ml-2 "></span></p>

                        <p class="mb-1 font-13"><strong>Location :</strong> <span class="text-muted ml-2"></span></p>
                    </div>

                    <ul class="social-list list-inline mt-3 mb-0">

                        <li class="list-inline-item"> 
                            <a href="" class="social-list-item border-primary text-primary"><i
                                    class="mdi mdi-facebook"></i></a>
                        </li>


                        <li class="list-inline-item"> 
                            <a href="" class="social-list-item border-secondary text-secondary"><i
                                    class="mdi mdi-instagram"></i></a>
                        </li>


                        <li class="list-inline-item">
                            <a href="" class="social-list-item border-info text-info"><i
                                    class="mdi mdi-twitter"></i></a>
                        </li>


                        <li class="list-inline-item">
                            <a href="" class="social-list-item border-danger text-danger"><i
                                    class="mdi mdi-youtube"></i></a>
                        </li>

                    </ul> 
                </div> <!-- end card-box -->

                <div class="card-box">


                </div> <!-- end card-box-->

            </div> <!-- end col-->

            <div class="col-lg-8 col-xl-8">
                <div class="card-box">
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link">
                                About Me
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="aboutme">

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                Experience</h5>

                            <ul class="list-unstyled timeline-sm">
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2015 - 18</span>
                                    <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                    <p>websitename.com</p>
                                    <p class="text-muted mt-2">Everyone realizes why a new common language
                                        would be desirable: one could refuse to pay expensive translators.
                                        To achieve this, it would be necessary to have uniform grammar,
                                        pronunciation and more common words.</p>

                                </li>
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2012 - 15</span>
                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                    <p>Software Inc.</p>
                                    <p class="text-muted mt-2">If several languages coalesce, the grammar
                                        of the resulting language is more simple and regular than that of
                                        the individual languages. The new common language will be more
                                        simple and regular than the existing European languages.</p>
                                </li>
                                <li class="timeline-sm-item">
                                    <span class="timeline-sm-date">2010 - 12</span>
                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                    <p>Coderthemes LLP</p>
                                    <p class="text-muted mt-2 mb-0">The European languages are members of
                                        the same family. Their separate existence is a myth. For science
                                        music sport etc, Europe uses the same vocabulary. The languages
                                        only differ in their grammar their pronunciation.</p>
                                </li>
                            </ul>

                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
                                Projects</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Clients</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>App design and development</td>
                                            <td>01/01/2015</td>
                                            <td>10/15/2018</td>
                                            <td><span class="badge badge-info">Work in Progress</span></td>
                                            <td>Halette Boivin</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Coffee detail page - Main Page</td>
                                            <td>21/07/2016</td>
                                            <td>12/05/2018</td>
                                            <td><span class="badge badge-success">Pending</span></td>
                                            <td>Durandana Jolicoeur</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Poster illustation design</td>
                                            <td>18/03/2018</td>
                                            <td>28/09/2018</td>
                                            <td><span class="badge badge-pink">Done</span></td>
                                            <td>Lucas Sabourin</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Drinking bottle graphics</td>
                                            <td>02/10/2017</td>
                                            <td>07/05/2018</td>
                                            <td><span class="badge badge-blue">Work in Progress</span></td>
                                            <td>Donatien Brunelle</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Landing page design - Home</td>
                                            <td>17/01/2017</td>
                                            <td>25/05/2021</td>
                                            <td><span class="badge badge-warning">Coming soon</span></td>
                                            <td>Karel Auberjo</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- end tab-pane -->
                        <!-- end about me section content -->

                        <div class="tab-pane show active" id="timeline">

                            <!-- comment box -->
                            <form action="" class="comment-area-box mt-2 mb-3" method="POST">
                                <input type="hidden" name="player_id" value="">
                                <input type="hidden" name="sport_type" value="">
                                <input type="hidden" name="type" value="1">
                                <span class="input-icon">
                                    <textarea name="text" rows="3" class="form-control" placeholder="Write something..."></textarea>
                                </span>
                                <div class="comment-area-btn">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-sm btn-dark waves-effect waves-light">Post</button>
                                    </div>

                                    <div>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="mdi mdi-camera"></i></a>
                                        <a href="#" class="btn btn-sm btn-light text-black-50"><i class="mdi mdi-video"></i></a>
                                        <label>View: </label>
                                        <select class="small bloodgroupselect" name="allow">
                                            <option value="0">All</option>
                                            <option value="1">Team</option>
                                            <option value="2">Only me</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <!-- end comment box -->

                            <!-- Story Box-->

                            <div class="border border-light p-2 mb-3">
                                <div class="media">
                                    <img class="mr-2 avatar-sm rounded-circle" src=""
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="m-0"></h5>
                                        <p class="text-muted"><small>

                                            </small></p>
                                    </div>
                                </div>
                                <p>post text</p>
                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                            class="mdi mdi-heart-outline"></i> Like</a>

                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                            class="mdi mdi-delete"></i> delete</a>

                                </div>
                            </div>

                            <!-- Story Box-->
                            <div class="border border-light p-2 mb-3">
                                <div class="media">
                                    <img class="mr-2 avatar-sm rounded-circle" src="<?php echo base_url('assets/web/images/users/user-4.jpg'); ?>"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="m-0">Thelma Fridley</h5>
                                        <p class="text-muted"><small>about 1 hour ago</small></p>
                                    </div>
                                </div>
                                <div class="font-16 text-center font-italic text-dark">
                                    <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                    sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                    porta. Mauris massa.
                                </div>

                                <div class="post-user-comment-box">
                                    <div class="media">
                                        <img class="mr-2 avatar-sm rounded-circle" src="<?php echo base_url('assets/web/images/users/user-3.jpg'); ?>"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3 hours ago</small></h5>
                                            Nice work, makes me think of The Money Pit.

                                            <br/>
                                            <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i
                                                    class="mdi mdi-reply"></i> Reply</a>

                                            <div class="media mt-3">
                                                <a class="pr-2" href="#">
                                                    <img src="<?php echo base_url('assets/web/images/users/user-4.jpg'); ?>" class="avatar-sm rounded-circle"
                                                         alt="Generic placeholder image">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="mt-0">Kathleen Thomas <small class="text-muted">5 hours ago</small></h5>
                                                    i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media mt-2">
                                        <a class="pr-2" href="#">
                                            <img src="<?php echo base_url('assets/web/images/users/user-1.jpg'); ?>" class="rounded-circle"
                                                 alt="Generic placeholder image" height="31">
                                        </a>
                                        <div class="media-body">
                                            <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i
                                            class="mdi mdi-heart"></i> Like (28)</a>
                                    <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i
                                            class="mdi mdi-share-variant"></i> Share</a>
                                </div>
                            </div>

                            <!-- Story Box-->
                            <div class="border border-light p-2 mb-3">
                                <div class="media">
                                    <img class="mr-2 avatar-sm rounded-circle" src="<?php echo base_url('assets/web/images/users/user-6.jpg'); ?>"
                                         alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="m-0">Jeremy Tomlinson</h5>
                                        <p class="text-muted"><small>15 hours ago</small></p>
                                    </div>
                                </div>
                                <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                <iframe src='https://player.vimeo.com/video/87993762' height='300' class="img-fluid border-0"></iframe>
                            </div>

                            <div class="text-center">
                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                            </div>

                        </div>
                        <!-- end timeline content-->

                        <div class="tab-pane" id="settings">
                            <form>
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="userbio">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="useremail">Email Address</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyname">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cwebsite">Website</label>
                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-fb">Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-tw">Twitter</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-insta">Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-lin">Linkedin</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-sky">Skype</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-gh">Github</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->

                    </div> <!-- end tab-content -->
                </div> <!-- end card-box-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- end container -->
</div>
<?php $this->load->view('web/footer'); ?>