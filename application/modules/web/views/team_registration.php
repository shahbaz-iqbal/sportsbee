<?php $this->load->view('header') ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Register Your Team Here </h4>
                        </div>  
                    </div> 
                </div>  
                <!-- end page title -->
                <div class="row">
                    <div class="col-12 text-left">
                        <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-2" style="padding: 0px;">
                                <label style="color: #FFAC1B !important; font-size: 16px !important; padding-left: 20px !important;">Register as:</label>
                            </div>
                            <div class="col-md-4" style="padding: 0px;margin-left: -85px;">
                                <select class="form-control" id="register_as">
                                    <option value="player">Player</option>
                                    <option value="team" selected>Team as Captain</option>
                                    <option value="sponsor">Sponsor <small>(Coming Soon)</small></option>
                                </select>
                            </div>
                        </div>
                        <!-- <p style="color: #FFAC1B !important; font-size: 16px !important; padding-left: 20px !important;" class="text-50">If You Want to Register As A Player? <a href="<?php echo base_url() ?>/registration" style="font-size: 16px !important; color: #B22E06 !important;" class="text-danger ml-1"><b>Signup</b></a></p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php if ($this->session->flashdata('add')) { ?>
                                        <p class="alert alert-success"><?php echo $this->session->flashdata('add'); ?></p>
                                    <?php } else if ($this->session->flashdata('error')) { ?>
                                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <form id="msform" name="msform" action="<?php echo base_url('registration/insert_team'); ?>" method="POST">
                                <ul class="nav nav-pills navtab-bg nav-justified">
                                    <li class="nav-item ">
                                        <a href="#aboutme" style="pointer-events: none !important;" data-toggle="tab" aria-expanded="true" class="nav-link active aboutme">
                                            Team Detail
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#timeline" style="pointer-events: none !important;" data-toggle="tab" aria-expanded="false" class="nav-link timeline">
                                            Caption Detail
                                        </a>
                                    </li>
                                   <!--  <li class="nav-item">
                                        <a href="#settings" style="pointer-events: none !important;" data-toggle="tab" aria-expanded="false" class="nav-link settings">
                                            Captain Profile Image
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="aboutme">
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-baseball-bat mr-1"></i>Basic Info </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="playertype">Select Sports</label>
                                                    <select class="form-control" name="playertype" id="playertype">
                                                        <option class="bloodgrouplist"  selected value="1">Cricket</option>
                                                        <option class="bloodgrouplist" disabled value="2">Football (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="3">Kabbadi (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="4">BaseBall (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="5">Tennis (Coming Soon)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Team Name<span style="color:red;">..*</span></label>
                                                    <input type="text" onfocusout="checkteamname()" class="form-control" id="teamname" maxlength="190" name="teamname" placeholder="Enter Team Name">
                                                    <span id="teamnamespan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="userbio">Description (optional)</label>
                                                    <textarea class="form-control" class="form-control" id="description" name="description" rows="3" style="resize: none" placeholder="Write Team Description..." maxlength="240"></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-home-variant mr-1"></i> Address</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City<span style="color:red;">..*</span></label>
                                                    <input type="text" id="teamcity" name="teamcity" placeholder="Enter City" class="form-control" onfocusout="checkteamcity()" maxlength="100" size="28" class="form-control">
                                                    <span id="teamcityspan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">Postal Code</label>
                                                    <input type="number" id="teampostalcode" name="teampostalcode" placeholder="Enter Postal Code" class="form-control" maxlength="10" size="28" class="form-control">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="city">Address<span style="color:red;">..*</span></label>
                                                    <textarea class="form-control" id="teamaddress" name="teamaddress" style="resize: none" onfocusout="checkteamaddress()" rows="3"  placeholder="Address..." maxlength="490"></textarea>
                                                    <span id="teamaddressspan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-calendar-clock mr-1"></i>Teem  History or Interested In  </h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Matches history or interested in</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxOne" name="teammatchtype[]" value="1"><label for="checkboxOne">Hard Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxTwo" name="teammatchtype[]" value="2"><label for="checkboxTwo">Tape Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxThree" name="teammatchtype[]" value="3"><label for="checkboxThree">Tnnis Ball&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Teams Category</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxFour" name="teamcategory[]" value="1"><label for="checkboxFour">Local Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxFive" name="teamcategory[]" value="2"><label for="checkboxFive">School Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxSix" name="teamcategory[]" value="3"><label for="checkboxSix">College Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxSeven" name="teamcategory[]" value="4"><label for="checkboxSeven">University Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxEight" name="teamcategory[]" value="5"><label for="checkboxEight">Custom Team (Organization)&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button  type="button" class="btn btn-outline-warning waves-effect waves-light mt-2" onclick="moveto2level()">Next <i class="mdi mdi-chevron-right"></i> </button>
                                        </div>
                                    </div> <!-- end tab-pane -->
                                    <!-- end about me section content -->

                                    <div class="tab-pane show" id="timeline">
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Full Name<span style="color:red;">..*</span></label>
                                                    <input type="text" onfocusout="checkfullname()" class="form-control" id="fullname" maxlength="190" name="fullname" placeholder="Enter first name">
                                                    <span id="fullnamespan" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Father Name<span style="color:red;">..*</span></label>
                                                    <input type="text" onfocusout="checkfathername()" class="form-control" id="fathername" name="fathername" placeholder="Enter father name" maxlength="190">
                                                    <span id="fathernamespan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cnic">Cnic/B-Form #<span style="color:red;">..*</span></label>
                                                    <input type="text" class="form-control" id="cnic" name="cnic" onchange="checkcnic()" placeholder="e.g. 33303-3188908-7" maxlength="15">
                                                    <span id="cnicspan" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label>Birthday</label>
                                                    <input type="text" id="basic-datepicker" name="dob" class="form-control flatpickr-input active" placeholder="Select Your Date of Birth" readonly="readonly" onchange="checkDate()"><span id="dobspan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="labelstyle">Gender <span style="color:red;">..*</span></label>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="gengerclass">male
                                                                <input type="radio" checked name="gender" id="male" value="male">
                                                                <span class="gendercheckmark"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="gengerclass">female
                                                                <input type="radio" name="gender" id="female" value="female">
                                                                <span class="gendercheckmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                            </style>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="bloodgroup">Your Blood Group</label>
                                                    <select class="form-control bloodgroupselect" name="bloodgroup" id="bloodgroup">
                                                        <option class="bloodgrouplist" selected value="Unknown">Unknown</option>
                                                        <option class="bloodgrouplist" value="A Positive">A Positive</option>
                                                        <option class="bloodgrouplist" value="A Negative">A Negative</option>
                                                        <option class="bloodgrouplist" value="B Positive">B Positive</option>
                                                        <option class="bloodgrouplist" value="B Negative">B Negative</option>
                                                        <option class="bloodgrouplist" value="AB Positive">AB Positive</option>
                                                        <option class="bloodgrouplist" value="AB Negative">AB Negative</option>
                                                        <option class="bloodgrouplist" value="AB Unknown">AB Unknown</option>
                                                        <option class="bloodgrouplist" value="O Positive">O Positive</option>
                                                        <option class="bloodgrouplist" value="O Negative">O Negative</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="userbio">Status/Bio (optional)</label>
                                                    <textarea class="form-control" class="form-control" id="bio" name="bio" rows="3" style="resize: none" placeholder="Write your status..." maxlength="240"></textarea>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-lock mr-1"></i> Sportsbee Account</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">E-mail<span style="color:red;">..*</span></label>
                                              <input type="text" class="form-control" onchange="checkemail()" name="gmail" id="email"  placeholder="Enter E-mail" maxlength="150">
                                                    <span id="email_result" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="lastname">Username<span style="color:red;">..*</span></label>
                                                    <input type="text" id="username" name="username" placeholder="Enter User Name" class="form-control" onchange="checkusername()"  size="28" class="form-control">
                                                    <span id="usernamespan" style="color: red;"></span>
                                                </div>
                                            </div>  <!-- end col -->

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Password<span style="color:red;">..*</span></label>
                                                    <input type="password" class="form-control" id="password" name="password" onfocusout="checkpassword()" placeholder="Enter Password" maxlength="190">
                                                    <span id="passwordspan" style="color: red;"></span>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        <div class="row">
                                            
                                            
                                        </div> <!-- end row -->
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-cellphone mr-1"></i> Contact Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone1">Mobile #<span style="color:red;">..*</span></label>
                                                    <input type="text" class="form-control" id="phone1" maxlength="11" size="11" name="phone1" onchange="checkphone1()" placeholder="Enter 11 digit mobile #" onchange="check_phone_availbility">
                                                    <span id="phone1span" style="color: red;"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Second Mobile # (optional)</label>
                                                    <input type="text" class="form-control" id="phone2" name="phone2" onfocusout="checkphone2()" maxlength="15" size="15" placeholder="Enter second number">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-home-variant mr-1"></i> Address</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City<span style="color:red;">..*</span></label>
                                                    <input type="text" id="city" name="city" placeholder="Enter City" class="form-control" onfocusout="checkcity()" maxlength="100" size="28" class="form-control">
                                                    <span id="cityspan" style="color: red;"></span>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">Postal Code</label>
                                                    <input type="number" id="postalcode" name="postalcode" placeholder="Enter Postal Code" class="form-control" onfocusout="checkcity()" maxlength="10" size="28" class="form-control">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="city">Address<span style="color:red;">..*</span></label>
                                                    <textarea class="form-control" id="address" name="address" style="resize: none" onfocusout="checkaddress()" rows="3"  placeholder="Address..." maxlength="490"></textarea>
                                                    <span id="addressspan" style="color: red;"></span>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social (optional)</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-fb">Facebook</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="social-fb" placeholder="Url" id="facebook" name="facebook" maxlength="295">
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
                                                        <input type="text" class="form-control" id="social-tw" placeholder="Username" id="twitter" name="twitter" maxlength="295">
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
                                                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Url" maxlength="295">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="social-lin">Youtube</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Url" maxlength="295">
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->                

                                        <h3 style="color: #B22E06;" class="mb-3 text-uppercase text-center p-2"><i class="mdi mdi-baseball-bat" mr-1"></i>Sports Info </h3>
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-human-handsup mr-1"></i>You Play as a </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="playtype">Play as a</label>
                                                   <select class="custom-select"  name="playtype" id="playas">
                                                          <!-- <?php if (count($playas) > 0) { ?>
                                                   <?php foreach ($playas as $playas) { ?>
                                                   
                                             <option class="bloodgrouplist"  selected value="<?php echo
                                             $playas->play_as_id; ?>"> <?php echo  $playas->name; ?></option>
                                                       <?php } ?>
                                                       <?php } ?> -->

                                                        <option value="BatsMan">BatsMan</option>
                                                        <option value="Bowler">Bowler</option>
                                                        <option value="All Rounder">All Rounder</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="switch-field"style="margin-top: 33px; margin-left: 145px; ">
                                                        <input type="radio" id="radio-one" name="switch" value="Left Hand" checked/>
                                                        <label for="radio-one">Left Hand</label>
                                                        <input type="radio" id="radio-two" name="switch" value="Right Hand" />
                                                        <label for="radio-two">Right Hand</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-calendar-clock mr-1"></i>You have experienced in </h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Type Of Matches</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxNine" name="matchtype[]" value="1"><label for="checkboxNine">Hard Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxTen" name="matchtype[]" value="2"><label for="checkboxTen">Tape Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxEleven" name="matchtype[]" value="3"><label for="checkboxEleven">Tnnis Ball&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Type Of Teams</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxTwelve" name="teamtype[]" value="1"><label for="checkboxTwelve">Local Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxThirteen" name="teamtype[]" value="2"><label for="checkboxThirteen">School Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxFourteen" name="teamtype[]" value="3"><label for="checkboxFourteen">College Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxFifteen" name="teamtype[]" value="4"><label for="checkboxFifteen">University Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxSixteen" name="teamtype[]" value="5"><label for="checkboxSixteen">Custom Team (Organization)&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-left">
                                                    <button  type="button" class="btn btn-outline-warning waves-effect waves-light mt-2" onclick="backto1level()"><i class="mdi mdi-chevron-left"> Prev </i> </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="text-right">
                                                            <button  type="button" class="btn btn-outline-warning waves-effect waves-light mt-2"><i class="mdi mdi-content-save" id="sa-warning" onclick="movetosavelevel()"> Save </i> </button>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                   <!-- end timline content -->
                                    <!-- end settings content-->

                                </div> <!-- end tab-content -->
                            </form>
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <?php $this->load->view('footer') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
                                                        function moveto2level() {
                                                            var check = 0;
                                                            if ($('#teamname').val() == '') {
                                                                $('#teamnamespan').text("Please Enter Your Team Name!");
                                                                document.forms["msform"]["teamname"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#teamcity').val() == '') {
                                                                $('#teamcityspan').text("Please Enter City Name!");
                                                                document.forms["msform"]["teamcity"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#teamaddress').val() == '') {
                                                                $('#teamaddressspan').text("Please Enter father name!");
                                                                document.forms["msform"]["teamaddress"].style.border = "1px solid red";
                                                                check = 1;
                                                            }check=0;
                                                            if (check == 1) {
                                                                swal('missing fields', 'Please Fill the Required Fields', 'error');
                                                            } else {
                                                                document.getElementsByClassName("timeline")[0].click();
                                                                document.getElementsByClassName("aboutme")[0].style.background = "#00b318";
                                                                document.getElementsByClassName("timeline")[0].style.background = "#B22E06";
                                                            }
                                                        }
                                                        function backto1level() {
                                                            document.getElementsByClassName("aboutme")[0].click();
                                                            document.getElementsByClassName("aboutme")[0].style.background = "#B22E06";
                                                            document.getElementsByClassName("timeline")[0].style.background = "#FFAC1B";
                                                        }
                                                        function movetosavelevel() {
                                                            var check = 0;
                                                            if ($('#fullname').val() == '') {
                                                                $('#fullnamespan').text("Please Enter Your Name!");
                                                                document.forms["msform"]["fullname"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#city').val() == '') {
                                                                $('#cityspan').text("Please Enter City Name!");
                                                                document.forms["msform"]["city"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#fathername').val() == '') {
                                                                $('#fathernamespan').text("Please Enter father name!");
                                                                document.forms["msform"]["fathername"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#cnic').val() == '') {
                                                                $('#cnicspan').text("Please Enter Your Cnic Number!");
                                                                document.forms["msform"]["cnic"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#dob').val() == '') {
                                                                $('#dobspan').text("Please Select Your Date Of Birth!");
                                                                document.forms["msform"]["dob"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#gmail').val() == '') {
                                                                $('#gmailspan').text("Please Enter Your Gamil!");
                                                                document.forms["msform"]["gmail"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#password').val() == '') {
                                                                $('#passwordspan').text("Please Enter Password!");
                                                                document.forms["msform"]["password"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#username').val() == '') {
                                                                $('#usernamespan').text("Please Enter Username!");
                                                                document.forms["msform"]["username"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#phone1').val() == '') {
                                                                $('#phone1span').text("Please Enter Phone Number!");
                                                                document.forms["msform"]["phone1"].style.border = "1px solid red";
                                                                check = 1;
                                                            }
                                                            if ($('#address').val() == '') {
                                                                $('#addressspan').text("Please Enter Address!");
                                                                document.forms["msform"]["address"].style.border = "1px solid red";
                                                                check = 1;
                                                            }check=0;
                                                            if (check == 1) {
                                                                swal('missing fields', 'one of field', 'error');
                                                            } else {
                                                                // document.getElementsByClassName("settings")[0].click();
                                                                // document.getElementsByClassName("timeline")[0].style.background = "#00b318";



                $('#sa-warning').click(function(){

                Swal.fire({
                         title: 'You want to submit these details?',
                         html: 'heyyy',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Submit it!'
                       }).then((result) => {
                         if (result.value) {
                            console.log(msform);
                            $('#msform').attr('action', '<?php echo base_url('web/registration/insert_player'); ?>');
                            $('#msform').submit();
                            
                           //var form = $("#add_form").serialize();
                           // alert();
                          /* $.ajax({
                               type:"POST",
                               url:base_url+"do_add",
                               data:form,
                               success:function(response){
                                   console.log(response);
                                   if (response != 'error') {
                                       Swal.fire(
                                         'Submited!',
                                         'Your form has been submited.',
                                         'success'
                                       );
                                       setTimeout(function(){ window.location.href=response; },3000);
                                   }else{
                                       Swal.fire(
                                         'ERROR!',
                                         'Your form did not submited.',
                                         'error'
                                       )
                                   }
                               }
                           });*/
                         }
                       })
                        }); 
                                                            
                                                        }}
                                                        function backto2level() {
                                                            document.getElementsByClassName("timeline")[0].click();
                                                            document.getElementsByClassName("timeline")[0].style.background = "#B22E06";
                                                        }
                                                        function checkteamname() {
                                                            var x = document.forms["msform"]["teamname"].value;
                                                            var alphaExp = /^\w+$/;
                                                            if (document.forms["msform"]["teamname"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["teamname"].style.border = "1px solid green";
                                                                    $('#teamnamespan').text("");
                                                                } else {
                                                                    $('#teamname').val("");
                                                                    document.forms["msform"]["teamname"].placeholder = "only alphabets and numbers allowed in team name!";
                                                                    document.forms["msform"]["teamname"].style.border = "1px solid red";
                                                                }
                                                            } else {
                                                                $('#teamname').val("");
                                                                document.forms["msform"]["teamname"].style.border = "1px solid red";
                                                                document.forms["msform"]["teamname"].placeholder = "team name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkfullname() {
                                                            var x = document.forms["msform"]["fullname"].value;
                                                            var alphaExp = /^[a-zA-Z][a-zA-Z\s]+$/;
                                                            if (document.forms["msform"]["fullname"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["fullname"].style.border = "1px solid green";
                                                                    $('#fullnamespan').text("");
                                                                } else {
                                                                    $('#fullname').val("");
                                                                    document.forms["msform"]["fullname"].placeholder = "only alphabet put in name!";
                                                                    document.forms["msform"]["fullname"].style.border = "1px solid red";

                                                                }
                                                            } else {
                                                                $('#fullname').val("");
                                                                document.forms["msform"]["fullname"].style.border = "1px solid red";
                                                                document.forms["msform"]["fullname"].placeholder = "name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkcity() {
                                                            var x = document.forms["msform"]["city"].value;
                                                            var alphaExp = /^[a-zA-Z][a-zA-Z\s]+$/;
                                                            if (document.forms["msform"]["city"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["city"].style.border = "1px solid green";
                                                                    $('#cityspan').text("");
                                                                } else {
                                                                    $('#city').val("");
                                                                    document.forms["msform"]["city"].placeholder = "only alphabet put in city!";
                                                                    document.forms["msform"]["city"].style.border = "1px solid red";
                                                                }
                                                            } else {
                                                                $('#city').val("");
                                                                document.forms["msform"]["city"].style.border = "1px solid red";
                                                                document.forms["msform"]["city"].placeholder = "city name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkteamcity() {
                                                            var x = document.forms["msform"]["teamcity"].value;
                                                            var alphaExp = /^[a-zA-Z][a-zA-Z\s]+$/;
                                                            if (document.forms["msform"]["teamcity"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["teamcity"].style.border = "1px solid green";
                                                                    $('#teamcityspan').text("");
                                                                } else {
                                                                    $('#teamcity').val("");
                                                                    document.forms["msform"]["teamcity"].placeholder = "only alphabet put in city!";
                                                                    document.forms["msform"]["teamcity"].style.border = "1px solid red";
                                                                }
                                                            } else {
                                                                $('#teamcity').val("");
                                                                document.forms["msform"]["teamcity"].style.border = "1px solid red";
                                                                document.forms["msform"]["teamcity"].placeholder = "city name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkfathername() {
                                                            var x = document.forms["msform"]["fathername"].value;
                                                            var alphaExp = /^[a-zA-Z][a-zA-Z\s]+$/;
                                                            if (document.forms["msform"]["fathername"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["fathername"].style.border = "1px solid green";
                                                                    $('#fathernamespan').text("");
                                                                } else {
                                                                    $('#fathername').val("");
                                                                    document.forms["msform"]["fathername"].placeholder = "only alphabet put in name!";
                                                                    document.forms["msform"]["fathername"].style.border = "1px solid red";
                                                                }
                                                            } else {
                                                                $('#fathername').val("");
                                                                document.forms["msform"]["fathername"].style.border = "1px solid red";
                                                                document.forms["msform"]["fathername"].placeholder = "name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkcnic() {
                                                            var x = document.forms["msform"]["cnic"].value;
                                                            if (document.forms["msform"]["cnic"].value.length != 15) {

                                                                document.forms["msform"]["cnic"].style.border = "1px solid red";
                                                                $('#cnic').val("");
                                                                document.forms["msform"]["cnic"].placeholder = "cnic must be contain 15 digits!";
                                                            } else {
                                                                document.forms["msform"]["cnic"].style.border = "1px solid green";
                                                                $('#cnicspan').text("");
                                                            }
                                                        }
                                                        $(function () {

                                                            $('#cnic').keydown(function (e) {
                                                                var key = e.charCode || e.keyCode || 0;
                                                                $text = $(this);
                                                                if (key !== 8 && key !== 9) {
                                                                    if ($text.val().length === 5) {
                                                                        $text.val($text.val() + '-');
                                                                    }
                                                                    if ($text.val().length === 13) {
                                                                        $text.val($text.val() + '-');
                                                                    }
                                                                    if ($text.val().length === 15) {
                                                                        var temp = $text.val();
                                                                        var lastChar = temp.substr(temp.length - 1);
                                                                        if (lastChar % 2 == 0) {
                                                                            radiobtn = document.getElementById("female");
                                                                            radiobtn.checked = true;
                                                                        } else {
                                                                            radiobtn = document.getElementById("male");
                                                                            radiobtn.checked = true;
                                                                        }
                                                                    }
                                                                }

                                                                return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
                                                            })
                                                        });
                                                        $(function () {

                                                            $('#phone1').keydown(function (e) {
                                                                var key = e.charCode || e.keyCode || 0;
                                                                $text = $(this);
                                                                if (key !== 8 && key !== 9) {
                                                                    if ($text.val().length === 0) {
                                                                        $text.val($text.val() + '(');
                                                                    }
                                                                    if ($text.val().length === 5) {
                                                                        $text.val($text.val() + ')');
                                                                    }
                                                                    if ($text.val().length === 6) {
                                                                        $text.val($text.val() + ' ');
                                                                    }
                                                                    if ($text.val().length === 10) {
                                                                        $text.val($text.val() + '-');
                                                                    }

                                                                }

                                                                return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
                                                            })
                                                        });
                                                        $(function () {

                                                            $('#phone2').keydown(function (e) {
                                                                var key = e.charCode || e.keyCode || 0;
                                                                $text = $(this);
                                                                if (key !== 8 && key !== 9) {
                                                                    if ($text.val().length === 0) {
                                                                        $text.val($text.val() + '(');
                                                                    }
                                                                    if ($text.val().length === 5) {
                                                                        $text.val($text.val() + ')');
                                                                    }
                                                                    if ($text.val().length === 6) {
                                                                        $text.val($text.val() + ' ');
                                                                    }
                                                                    if ($text.val().length === 10) {
                                                                        $text.val($text.val() + '-');
                                                                    }

                                                                }

                                                                return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
                                                            })
                                                        });
                                                        function checkdob() {

                                                            var today = new Date();
                                                            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                                                            var x = document.forms["msform"]["dob"].value;
                                                                    const date1 = new Date(x);
                                                                    const date2 = new Date(date);
                                                                    const diffTime = Math.abs(date2 - date1);
                                                                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                                                                    if (x == "") {
                                                                document.forms["msform"]["dob"].style.border = "1px solid red";
                                                                document.forms["msform"]["dob"].placeholder = "must be required!";
                                                                $('#dobspan').text("Please Enter Your Age!");
                                                            } else {
                                                                if (diffDays < 5475) {
                                                                    $('#dob').val("");
                                                                    $('#dobspan').text("Your must be 15 year old!");
                                                                    document.forms["msform"]["dob"].style.border = "1px solid red";
                                                                } else {
                                                                    document.forms["msform"]["dob"].style.border = "1px solid green";
                                                                    $('#dobspan').text("");
                                                                }
                                                            }
                                                        }
                                                        function checkgmail() {
                                                            var alphaExp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                                                            if (document.forms["msform"]["gmail"].value.length > 8 && document.forms["msform"]["gmail"].value.match(alphaExp)) {
                                                                document.forms["msform"]["gmail"].style.border = "1px solid green";
                                                                $('#gmailspan').text("");
                                                            } else {
                                                                $('#gmail').val("");
                                                                document.forms["msform"]["gmail"].placeholder = "gmail not valid!";
                                                                document.forms["msform"]["gmail"].style.border = "1px solid red";
                                                            }

                                                        }
                                                        function checkpassword() {
                                                            var alphaExp = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
                                                            var x1 = document.forms["msform"]["password"].value;
                                                            if (document.forms["msform"]["password"].value.length > 5) {
                                                                if (x1.match(alphaExp)) {
                                                                    document.forms["msform"]["password"].style.border = "1px solid blue";
                                                                } else {
                                                                    $('#password').val("");
                                                                    document.forms["msform"]["password"].style.border = "1px solid red";
                                                                    document.forms["msform"]["password"].placeholder = "contain at least one number and capital charater";
                                                                }
                                                            } else {
                                                                $('#password').val("");
                                                                document.forms["msform"]["password"].style.border = "1px solid red";
                                                                document.forms["msform"]["password"].placeholder = "password must be greater then 5 digit!";
                                                            }
                                                        }
                                                        function checkconformpassword() {
                                                            var x1 = document.forms["msform"]["password"].value;
                                                            var x2 = document.forms["msform"]["conformpassword"].value;
                                                            if (document.forms["msform"]["password"].value.length > 5) {
                                                                if (x1 == x2) {
                                                                    document.forms["msform"]["password"].style.border = "1px solid green";
                                                                    document.forms["msform"]["conformpassword"].style.border = "1px solid green";
                                                                    $('#passwordspan').text("");
                                                                } else {
                                                                    $('#password').val("");
                                                                    $('#conformpassword').val("");
                                                                    document.forms["msform"]["password"].style.border = "1px solid red";
                                                                    document.forms["msform"]["password"].placeholder = "password not match try again!";
                                                                    document.forms["msform"]["conformpassword"].style.border = "1px solid red";
                                                                    document.forms["msform"]["conformpassword"].placeholder = "password not match try again!";

                                                                }
                                                            } else {
                                                                $('#password').val("");
                                                                $('#conformpassword').val("");
                                                                document.forms["msform"]["password"].style.border = "1px solid red";
                                                                document.forms["msform"]["password"].placeholder = "password must be greater then 5 digit!";
                                                            }
                                                        }
                                                        function checkusername() {
                                                            var x = document.forms["msform"]["username"].value;
                                                            var alphaExp = /^\w+$/;
                                                            if (document.forms["msform"]["username"].value.length > 2) {

                                                                if (x.match(alphaExp)) {

                                                                    document.forms["msform"]["username"].style.border = "1px solid green";
                                                                    $('#usernamespan').text("");
                                                                } else {
                                                                    $('#username').val("");
                                                                    document.forms["msform"]["username"].placeholder = "only alphabets and numbers allowed in username!";
                                                                    document.forms["msform"]["username"].style.border = "1px solid red";
                                                                }
                                                            } else {
                                                                $('#username').val("");
                                                                document.forms["msform"]["username"].style.border = "1px solid red";
                                                                document.forms["msform"]["username"].placeholder = "name must be greater then 2 digit!";

                                                            }
                                                        }
                                                        function checkaddress() {
                                                            if (document.forms["msform"]["address"].value.length > 5) {
                                                                document.forms["msform"]["address"].style.border = "1px solid green";
                                                                $('#addressspan').text("");
                                                            } else {
                                                                $('#address').val("");
                                                                document.forms["msform"]["address"].placeholder = "address must be greater then 5 digit!";
                                                                document.forms["msform"]["address"].style.border = "1px solid red";
                                                            }

                                                        }
                                                        function checkteamaddress() {
                                                            if (document.forms["msform"]["teamaddress"].value.length > 5) {
                                                                document.forms["msform"]["teamaddress"].style.border = "1px solid green";
                                                                $('#teamaddressspan').text("");
                                                            } else {
                                                                $('#teamaddress').val("");
                                                                document.forms["msform"]["teamaddress"].placeholder = "address must be greater then 5 digit!";
                                                                document.forms["msform"]["teamaddress"].style.border = "1px solid red";
                                                            }

                                                        }
                                                        function checkphone1() {
                                                            if (document.forms["msform"]["phone1"].value.length < 14) {

                                                                document.forms["msform"]["phone1"].style.border = "1px solid red";
                                                                $('#phone1').val("");
                                                                document.forms["msform"]["phone1"].placeholder = "phone must greater then 9 digits!";
                                                            } else {
                                                                document.forms["msform"]["phone1"].style.border = "1px solid green";
                                                                $('#phone1span').text("");
                                                            }
                                                        }
                                                        function checkphone2() {
                                                            if (document.forms["msform"]["phone2"].value.length < 14) {

                                                                $('#phone2').val("");
                                                                document.forms["msform"]["phone2"].placeholder = "phone must greater then 9 digits!";
                                                            }
                                                        }
                                                        $(document).ready(function(){
                $("#register_as").change(function(){
                    var register_as = $(this).val();
                    if (register_as == "team") {
                        window.location.href="<?php echo base_url('web/team_registration'); ?>";
                    }else if (register_as == "player") {
                        window.location.href="<?php echo base_url('web/player_registration'); ?>";
                    }
                });
            });
        </script>

