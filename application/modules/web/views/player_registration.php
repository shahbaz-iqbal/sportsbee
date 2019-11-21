<?php $this->load->view('header') 
//echo $users;
?>
        <div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Register Your Account Here </h4>
                        </div>
                    </div>
                </div>  
                <!-- end page title -->
                <div class="row" id="register_as_div">
                    <div class="col-12 text-left">
                        <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-2" style="padding: 0px;">
                                <label style="color: #FFAC1B !important; font-size: 16px !important; padding-left: 20px !important;">Register as:</label>
                            </div>
                            <div class="col-md-4" style="padding: 0px;margin-left: -85px;">
                                <select class="form-control" id="register_as">
                                    <option value="player">Player</option>
                                    <option value="team">Team as Captain</option>
                                    <option value="sponsor">Sponsor <small>(Coming Soon)</small></option>
                                </select>
                            </div>
                        </div>
                       <!--  <p style="color: #FFAC1B !important; font-size: 16px !important; padding-left: 20px !important;" class="text-50">If You Want to Register Team? <a href="<?php //echo base_url('registration/team_registration'); ?>" style="font-size: 16px !important; color: #B22E06 !important;" class="text-danger ml-1"><b>Add Team</b></a></p> -->
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
                            <form id="msform" name="msform"  method="POST"  enctype="multipart/form-data" >
                                <ul class="nav nav-pills navtab-bg nav-justified">
                                    <li class="nav-item ">
                                        <a href="#aboutme" id="title_aboutme" style="pointer-events: none !important;" data-toggle="tab" aria-expanded="true" class="nav-link active aboutme">
                                            Personal Detail
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#timeline" id="title_timeline" style="pointer-events: none !important;" data-toggle="tab" aria-expanded="false" class="nav-link timeline">
                                            Sports Detail
                                        </a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="aboutme">
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname">Name<span style="color:red;">..*</span></label>
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
                                        <div class="text-right">
                                            <button  type="button" class="btn btn-outline-warning waves-effect waves-light mt-2" onclick="moveto2level()">Next <i class="mdi mdi-chevron-right" id="sa-close"></i> </button>
                                        </div>
                                    </div> <!-- end tab-pane -->
                                    <!-- end about me section content -->
                                    <div class="tab-pane show" id="timeline">
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-human-handsup mr-1"></i>You Play as a </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Select Sports</label>
                                                   <select class="form-control" name="" id="playtype">
                                               <!--       <?php if (count($users) > 0) { ?>
                                               <?php foreach ($users as $user) { ?> -->
                                                   
                                             <option class="bloodgrouplist"  selected value="<?php echo $user->sport_id; ?>"> <?php echo $user->sport_name; ?></option>
                                                       <?php } ?>
                                                       <?php } ?>
                                                       <!-- <label for="">Select Sports</label>
                                                    <select class="form-control" name="" id="playtype">-->
                                                    <option class="bloodgrouplist"  selected disabled value="">Select Option</option> -->
                                                        <option class="bloodgrouplist" disabled value="Football">Football (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="Kabbadi">Kabbadi (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="BaseBall">BaseBall (Coming Soon)</option>
                                                        <option class="bloodgrouplist" disabled value="Tennis">Tennis (Coming Soon)</option>
                                                    </select>
                                                    <span id="playtypespan" style="color: red;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                    <label for="playertype">Play as a</label>

                                                    <select class="custom-select"  name="playertype" id="playertype">
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
                                                    <span id="playertypespan" style="color: red;"></span>
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
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi  mdi-account-multiple mr-1"></i>If You want to send request to any team </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastname">Send Request to team (optional)</label>
                                                    <input type="text" id="team_id" name="team_id" placeholder="Search Team" class="form-control" maxlength="300" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-calendar-clock mr-1"></i>You have experienced in </h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Type Of Matches</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxOne" name="matchtype[]" value="Hard Ball"><label for="checkboxOne">Hard Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxTwo" name="matchtype[]" value="Tape Ball"><label for="checkboxTwo">Tape Ball&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxThree" name="matchtype[]" value="Tennis Ball"><label for="checkboxThree">Tenis Ball&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="typematches">Type Of Teams</label>
                                                    <ul class="ks-cboxtags">
                                                        <li><input type="checkbox" id="checkboxFour" name="teamtype[]" value="Local Team"><label for="checkboxFour">Local Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxFive" name="teamtype[]" value="School Team"><label for="checkboxFive">School Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxSix" name="teamtype[]" value="College Team"><label for="checkboxSix">College Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxSeven" name="teamtype[]" value="University Team"><label for="checkboxSeven">University Team&nbsp;</label></li>
                                                        <li><input type="checkbox" id="checkboxEight" name="teamtype[]" value="Organization"><label for="checkboxEight">Custom Team (Organization)&nbsp;</label></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-left">
                                                    <button  type="button" class="btn btn-outline-warning  waves-effect waves-light mt-2" onclick="backto1level()"><i class="mdi mdi-chevron-left"> Prev </i> </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="text-right">
                                                            <button  type="button" class="btn btn-outline-warning waves-effect waves-light mt-2"><i class="mdi mdi-content-save" id="sa-warning" onclick="movetosavelevel()"> Save </i> </button>
                                                        </div>
                                                
                                            </div>
                                        </div> 
                                    </div>
                                    <!-- end timeline content-->
                                                       
                                                    
                                            
                                </div> <!-- end tab-content -->
                            </form>
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!-- Spinner -->

       


     
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
<?php $this->load->view('footer') ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("#register_as").change(function(){
                    var register_as = $(this).val();
                    if (register_as == "team") {
                        window.location.href="<?php echo base_url('web/team_registration'); ?>";
                    }else if (register_as == "player") {
                        window.location.href="<?php echo base_url('web/player_registration'); ?>";
                    }
                });
            })
            function moveto2level() {
                //Hiding Registered as selection//

                $('#register_as_div').hide();
               
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


                
                if ($('#email').val() == '') {
                    $('#email_result').text("Please Enter Your Eamil!");
                    document.forms["msform"]["email"].style.border = "1px solid red";
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
                    $('#phone1span').text("Please Enter Mobile Number!");
                    document.forms["msform"]["phone1"].style.border = "1px solid red";
                    check = 1;
                }
                if ($('#address').val() == '') {
                    $('#addressspan').text("Please Enter Address!");
                    document.forms["msform"]["address"].style.border = "1px solid red";
                    check = 1;
                } check=0;
                if (check == 1) {
                    swal('missing fields', 'Please Fill the Required Fields', 'error');
                } else {
                    // alert();
                     var t;
                    Swal.fire({
                    title:"Moving to next step!",
                    html:"",
                    timer:1e3,
                    onBeforeOpen:function(){
                    Swal.showLoading()}
                    });
                 
                    document.getElementsByClassName("timeline")[0].click();
                    // Get the focused element:
                      // var $focused = $(':focus');
                       // Get the focused element:
                     //var hasFocus = $('foo').is(':focus');
                    document.getElementsByClassName("aboutme")[0].style.background = "#fda81a";
                    document.getElementsByClassName("timeline")[0].style.background = "#B22E06";
                   // document.getElementsByClassName("timeline")[0].style.box-shadow= "5px";
                    document.getElementsByClassName("timeline")[0].style.border= "5px";
                    document.getElementsByClassName("timeline")[0].style.border= "solid";
                    document.getElementsByClassName("timeline")[0].style.border= "#fda81a";

                    //   load_options_sports();

                    // function load_options_sports(){
                    //     console.log('i am load function');
                    //        var id_is=1;
                    //     $.ajax({
                    //         url:"<?php echo base_url() ?>web/Registration/load_options_sports",
                    //         method:"post",
                    //         data:{data:id_is},
                    //         success:function(data){
                    //            // console.log(data);
                    //            alert(data);
                    //         }
                    //     });

                   // }

                      // $('#title_aboutme').focus();
                }
            }//end of function moveto2level

            function backto1level() {
                document.getElementsByClassName("aboutme")[0].click();
                document.getElementsByClassName("aboutme")[0].style.background = "#B22E06";
                document.getElementsByClassName("timeline")[0].style.background = "#FFAC1B";
            }
            //3rd page is no more
             function movetosavelevel() {
            //     document.getElementsByClassName("settings")[0].click();
            //     document.getElementsByClassName("timeline")[0].style.background = "#00b318";
                
                //Get values of sport detail form 
                   var check2level=0;
                   var handis="";
                   var typeofmatches=[];
                   var typeofteam=[];
                   var playt="";
                   var playert="";
                 
                                          //playtype & playertype
                                             playt=$('#playtype').val();
                                             playert=$('#playertype').val();
                                        
                                            //console.log(playt);
                                            //console.log(playert);
                                           
                                            //handis
                                             handis=$("input[name='switch']:checked").val();
                                            // console.log(handis);
                                          
                                           //matchtype
                                           $.each($("input[name='matchtype[]']:checked"), function(){

                                                               typeofmatches.push($(this).val());

                                                      });
                                                          //console.log(typeofmatches[1]);

                                           //teamtype[]
                                              
                                             
                                            $.each($("input[name='teamtype[]']:checked"),function(){
                                                typeofteam.push($(this).val());
                                            });
                                                           // $.each(typeofteam, function(i, val) {
                                                           //     test += val +'<br>';          
                                                           //     });
                                                           // console.log(test);
                //Get values of basic information form


                  var Fullname=$('#fullname').val();
                  var City=$('#city').val();
                  var Fathername=$('#fathername').val();
                  var Cnic=$('#cnic').val();
                  var Dob=$('#dob').val();
                  var Gmail=$('#email').val();
                  var Password=$('#password').val();
                  var Username=$('#username').val();
                  var Phone1=$('#phone1').val();
                  var Phone2=$('#phone2').val();
                  var Address=$('#address').val();
                  var Bloodgroup=$('#bloodgroup').val();
                  var Postalcode=$('#postalcode').val();
                  var Bio=$('#bio').val();
                  var Gender=$("input[name='gender']:checked").val();


                 //..................Setting Pop up Information Content ........//
                 
                 var textt = '<div class="row" ><div class="col-md-6" ><fieldset class="savepop-border"><legend class="savepop-border">Personal Information</legend>'+
              '<div class="table-responsive">'+'<table  class="border border-light table table-condensed cellspacing="0" cellpadding="5" border="1">'+
                            '<tr><td>Fist name</td><td>'+Fullname+'</td></tr>'+                                 
                            '<tr><td>Father name</td><td>'+Fathername +'</td></tr>'+
                           '<tr><td>Cnic</td><td>'+Cnic+'</td></tr>'+
                           '<tr><td>Birthday</td><td>'+Dob+'</td></tr>'+
                           '<tr><td>Gender</td><td>'+Gender+ '</td></tr>'+
                           '<tr><td>Bloodgroup</td><td>'+Bloodgroup+'</td></tr>'+
                           '<tr><td>Staus/Bio</td><td>'+Bio+'</td></tr>'+
                           '</table></div></fieldset></div>'+
                           '<div class="col-md-6" ><fieldset class="savepop-border">'+
                           '<legend class="savepop-border">Sportsbee Account</legend>'+
                           '<div class="table-responsive">'+
    ' <table  class="border border-light table  table-condensed cellspacing="0" cellpadding="5" border="1">'+
                           ' <tr><td>Email</td><td>'+Gmail+'</td></tr>'+
                           '<tr><td>Username</td><td>'+Username +'</td></tr>'+
                           '<tr><td>Password</td><td>'+Password+'</td></tr>'+
                           '<tr><td>Mobile #</td><td>'+ Phone1+'</td></tr>'+
                           '<tr><td>Address</td><td>'+Address+'</td></tr>'+
                           '</table></div></fieldset></div></div>'+
                           '<div class="row"><div class="col-md-6" ><fieldset class="savepop-border">'+
                           '<legend class="savepop-border">Sportsbee Account</legend><div class="table-responsive">'+
    ' <table  class="border border-light table  table-condensed cellspacing="0" cellpadding="5" border="1">'+
                           ' <tr><td>Selected sport</td><td>'+playt+'</td></tr>'+
                           '<tr><td>Play as a</td><td>'+playert +'</td></tr>'+
                           '<tr><td>Preferable playing side</td><td>'+handis+'</td></tr>'+
                           '</table></div></fieldset></div></div>';
         


/* If want to run without fill fields 
            var textt = '<fieldset class="savepop-border"><legend class="savepop-border">Personal Information</legend>'+
              '<div class="table-responsive">'+'<table  class="border border-light table table-condensed cellspacing="0" cellpadding="5" border="1">'+
                            '<tr><td>Fist name</td><td>'+'Fullname'+'</td></tr>'+                                 
                            '<tr><td>Father name</td><td>'+'Gmail' +'</td></tr>'+
                           '<tr><td>Cnic</td><td>'+' Password'+'</td></tr>'+
                           '<tr><td>Birthday</td><td>'+ 'Phone1'+'</td></tr>'+
                           '<tr><td>Gender</td><td>'+'Postalcode'+ '</td></tr>'+
                           '<tr><td>Bloodgroup</td><td>'+' Address'+'</td></tr>'+
                           '<tr><td>Staus/Bio</td><td>'+' Address'+'</td></tr>'+
                           '</table></div></fieldset>'+
                           '<fieldset class="savepop-border">'+
                           '<legend class="savepop-border">Sportsbee Account</legend><div class="table-responsive">'+
    ' <table  class="border border-light table  table-condensed cellspacing="0" cellpadding="5" border="1">'+
                           ' <tr><td>Email</td><td>'+'Fullname'+'</td></tr>'+
                           '<tr><td>Username</td><td>'+'Gmail' +'</td></tr>'+
                           '<tr><td>Password</td><td>'+' Password'+'</td></tr>'+
                           '<tr><td>Mobile #</td><td>'+ 'Phone1'+'</td></tr>'+
                           '<tr><td>Address</td><td>'+' Address'+'</td></tr>'+
                           '</table></div></fieldset>';

                           */

                           /*

                           '<fieldset class="savepop-border"><legend class="savepop-border">Social Account</legend><div class="table-responsive">'+
     '<table  class=" border border-light table  table-condensed cellspacing="0" cellpadding="5" border="1">'+
                            '<tr><td>Email</td><td>'+'Fullname'+'</td></tr>'+
                           '<tr><td>Username</td><td>'+'Gmail' +'</td></tr>'+
                           '<tr><td>Password</td><td>'+' Password'+'</td></tr>'+
                           '<tr><td>Mobile #</td><td>'+ 'Phone1'+'</td></tr>'+
                           '<tr><td>Address</td><td>'+' Address'+'</td></tr>'+
                           '</table></div></fieldset> <br>'

                           */


                 //......................               ..........................//


                    $('#sa-warning').click(function(){

                Swal.fire({
                         title: 'You want to submit these details?',
                         html: textt,
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

             }); //save button action and confirm validation code




                   

                

             }//end of movetosavelevel
            function backto2level() {
                document.getElementsByClassName("timeline")[0].click();
                document.getElementsByClassName("timeline")[0].style.background = "#B22E06";
            }
            function checkfullname() {
                var x = document.forms["msform"]["fullname"].value;
                var alphaExp = /^([a-zA-Z])[a-zA-Z\s]{2,20}$/;
                

                    if (x.match(alphaExp)) {

                        document.forms["msform"]["fullname"].style.border = "1px solid #fda81a";
                        $('#fullnamespan').text("");
                    } else {
                        $('#fullname').val("");
                        document.forms["msform"]["fullname"].placeholder = "Invalid!";
                        document.forms["msform"]["fullname"].style.border = "1px solid red";
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
                        document.forms["msform"]["city"].placeholder = "Invalid!";
                        document.forms["msform"]["city"].style.border = "1px solid red";
                    }
                } else {
                    $('#city').val("");
                    document.forms["msform"]["city"].style.border = "1px solid red";
                    document.forms["msform"]["city"].placeholder = "Invalid!";

                }
            }
            function checkfathername() {
                var x = document.forms["msform"]["fathername"].value;
                var alphaExp = /^[a-zA-Z][a-zA-Z\s]{2,20}$/;
               

                    if (x.match(alphaExp)) {

                        document.forms["msform"]["fathername"].style.border = "1px solid green";
                        $('#fathernamespan').text("");
                    } else {
                        $('#fathername').val("");
                        document.forms["msform"]["fathername"].placeholder = "Invalid!";
                        document.forms["msform"]["fathername"].style.border = "1px solid red";
                    }
                } 

            function checkcnic() {
                var x = document.forms["msform"]["cnic"].value;
               // var x = document.forms["msform"]["city"].value;
               var alphaExp = /^\d{5}-\d{7}-\d+$/;
               
                    
                if (document.forms["msform"]["cnic"].value.length != 15) {

                    document.forms["msform"]["cnic"].style.border = "1px solid red";
                    $('#cnic').val("");
                    document.forms["msform"]["cnic"].placeholder = "Invalid ! :Cnic must be contain 15 digits!";
                } else {
                    if (x.match(alphaExp)) {
                    document.forms["msform"]["cnic"].style.border = "1px solid green";
                    $('#cnicspan').text("");
                       }else{
                          document.forms["msform"]["cnic"].style.border = "1px solid red";
                    $('#cnic').val("");
                    document.forms["msform"]["cnic"].placeholder = "Invalid cnic can't contain !" ;
                    $('#cnicspan').html("");
                       }
                }
            }
            $(function () {
                    
                $('#cnic').keyup(function (e) {
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
                            //console.log('i am in ===15 tag testing');
                           


                            console.log('i am runing for ajax in 15 digits');
                            var cnic_ = $text.val();
                            var alphaExp = /^\d{5}-\d{7}-\d+$/;
                            if (cnic_.match(alphaExp)) {
                            $.ajax({
                                url:'<?php echo base_url() ?>web/Registration/check_cnic_availbility',
                                method:'post',
                                data:{cnic:cnic_},
                                success:function(data){
                                    $('#cnicspan').html(data);
                                }
                            });
                            var temp = $text.val();
                            var lastChar = temp.substr(temp.length - 1);
                            if (lastChar % 2 == 0) {
                                radiobtn = document.getElementById("female");
                                radiobtn.checked = true;
                            } else {
                                radiobtn = document.getElementById("male");
                                radiobtn.checked = true;
                            }

                            //Checking availablity

                            
                        }else{
                            console.log('i am not match with regs');
                            document.forms["msform"]["cnic"].style.border = "1px solid red";
                                $('#cnic').val("");
                                document.forms["msform"]["cnic"].placeholder = "Invalid cnic can't contain !" ;
                                $('#cnicspan').html("");
                        }
                    }}
       var abc=(key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
    
                    return abc; 
                });
            });
            $(function () {
                $('#phone1').keyup(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $text = $(this);
                     var alphaExp = /^[0-9]+$/;
                     var x=$text.val();
           // function check_phone_availbility(){
                console.log('i am check of phn 1');
               // phn1_val=$('#phone1').val();
               if (x.match(alphaExp)) {
                if( $text.val().length ===11){

                    console.log('i am runing for ajax phn numbers');
                             var phn1 = $text.val();
                             console.log(phn1);
                             $.ajax({
                            url:'<?php echo base_url() ?>web/Registration/check_phone1_availbility',
                                 method:'post',
                                 data:{phone1:phn1},
                                 success:function(data){
                                     $('#phone1span').html(data);

                                 }
                             });
                }}else{
                    $('#phone1span').html('Inavlid!');
                     document.forms["msform"]["phone1"].style.border = "1px solid red";
                    $('#phone1').val("");
                }

            })
                })
            // $(function () {

            //     $('#phone1').keydown(function (e) {
            //         var key = e.charCode || e.keyCode || 0;
            //         $text = $(this);
            //         if (key !== 8 && key !== 9) {
            //             if ($text.val().length === 0) {
            //                 $text.val($text.val() + '(');
            //             }
            //             if ($text.val().length === 5) {
            //                 $text.val($text.val() + ')');
            //             }
            //             if ($text.val().length === 6) {
            //                 $text.val($text.val() + ' ');
            //             }
            //             if ($text.val().length === 10) {
            //                 $text.val($text.val() + '-');

                            
            //             }
            //             if(  $text.val().length === 14){
            //                  console.log('i am runing for ajax at 10 numbers');
            //                  var phn1 = $text.val();
            //                  console.log(phn1);
            //                  $.ajax({
            //                 url:'<?php echo base_url() ?>web/Registration/check_phone1_availbility',
            //                      method:'post',
            //                      data:{phone1:phn1},
            //                      success:function(data){
            //                          $('#phone1span').html(data);
            //                      }
            //                  });
            //             }

            //         }

            //         return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
            //     })
            // });
            $(function () {
                // if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
                //        // $phone is valid
                //      }

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
           /* function checkdob() {

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
            }*/


            function checkemail(){
                    
                    var email=$('#email').val();
                if(email !=''){
                      
                       $.ajax({
                        url:"<?php echo base_url() ?>/web/Registration/check_email_avalibility",
                        method:"post",
                        data:{email:email},
                        success:function(data){
                            $('#email_result').html(data);
                            var str=data;
                            if(str =='<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already registered</label>'){
                                document.forms["msform"]["email"].style.border = "1px solid red";
                                $('#email').val('');
                             //console.log('i am already regiterded');
                               }
                          }
                       });
                   }
            }
             
            // function checkgmail() {
            //     var alphaExp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            //     if (document.forms["msform"]["email"].value.length > 8 && document.forms["msform"]["gmail"].value.match(alphaExp)) {
            //         document.forms["msform"]["email"].style.border = "1px solid green";
            //         $('#email_result').text("");
            //     } else {
            //         $('#gmail').val("");
            //         document.forms["msform"]["email"].placeholder = "Invalid!";
            //         document.forms["msform"]["email"].style.border = "1px solid red";
            //     }

            // }
           function checkpassword() {
                var alphaExp = /((?=.*\d)|(?=.*[a-z])|(?=.*[A-Z]))(?=.{4,})/;
                var x1 = document.forms["msform"]["password"].value;
                if (document.forms["msform"]["password"].value.length > 3) {
                    if (x1.match(alphaExp)) {
                        document.forms["msform"]["password"].style.border = "1px solid blue";
                    } else {
                        $('#password').val("");
                        document.forms["msform"]["password"].style.border = "1px solid red";
                        document.forms["msform"]["password"].placeholder = "Invalid Password";
                    }
                } else {
                    $('#password').val("");
                    document.forms["msform"]["password"].style.border = "1px solid red";
                    document.forms["msform"]["password"].placeholder = "password must be greater then 3 digit!";
                }
             }
            // function checkconformpassword() {
            //     var x1 = document.forms["msform"]["password"].value;
            //     var x2 = document.forms["msform"]["conformpassword"].value;
            //     if (document.forms["msform"]["password"].value.length > 5) {
            //         if (x1 == x2) {
            //             document.forms["msform"]["password"].style.border = "1px solid green";
            //             document.forms["msform"]["conformpassword"].style.border = "1px solid green";
            //             $('#passwordspan').text("");
            //         } else {
            //             $('#password').val("");
            //             $('#conformpassword').val("");
            //             document.forms["msform"]["password"].style.border = "1px solid red";
            //             document.forms["msform"]["password"].placeholder = "password not match try again!";
            //             document.forms["msform"]["conformpassword"].style.border = "1px solid red";
            //             document.forms["msform"]["conformpassword"].placeholder = "password not match try again!";

            //         }
            //     } else {
            //         $('#password').val("");
            //         $('#conformpassword').val("");
            //         document.forms["msform"]["password"].style.border = "1px solid red";
            //         document.forms["msform"]["password"].placeholder = "password must be greater then 5 digit!";
            //     }
            // }
            function checkusername() {
                var Uname = document.forms["msform"]["username"].value;
                var alphaExp = /^\b[a-z][a-z0-9_-]{3,16}$/i;
                // if (document.forms["msform"]["username"].value.length > 2) {
                        var t=Uname.match(alphaExp);
                        console.log(t);
                    if (t != null) {
                        
                        // document.forms["msform"]["username"].style.border = "1px solid green";
                        // $('#usernamespan').text("");

                        $.ajax({
                            url:'<?php echo base_url() ?>web/Registration/check_username_availbility',
                            method:'post',
                            data:{Uname:Uname},
                            success:function(data){
                                $('#usernamespan').html(data);
                            }
                        });


                    } else {
                        $('#username').val("");
                        document.forms["msform"]["username"].placeholder = "Invalid! :Only alphabets and numbers allow";
                        document.forms["msform"]["username"].style.border = "1px solid red";
                    }
                // } else {
                //     $('#username').val("");
                //     document.forms["msform"]["username"].style.border = "1px solid red";
                //     document.forms["msform"]["username"].placeholder = "Invalid!";

                // }
            }
            function checkaddress() {
                if (document.forms["msform"]["address"].value.length > 5) {
                    document.forms["msform"]["address"].style.border = "1px solid green";
                    $('#addressspan').text("");
                } else {
                    $('#address').val("");
                    document.forms["msform"]["address"].placeholder = "Invalid!";
                    document.forms["msform"]["address"].style.border = "1px solid red";
                }

            }
            function checkphone1() {
                var x=document.forms["msform"]["phone1"].value;
                var alphaExp = /^[0-9]+$/;
                if (x.match(alphaExp)) {
                if (document.forms["msform"]["phone1"].value.length < 11) {

                    document.forms["msform"]["phone1"].style.border = "1px solid red";
                    $('#phone1').val("");
                    document.forms["msform"]["phone1"].placeholder = "Invalid!";
                } else {
                    document.forms["msform"]["phone1"].style.border = "1px solid green";
                    $('#phone1span').text("");
                }
            }else{

                document.forms["msform"]["phone1"].style.border = "1px solid red";
                    $('#phone1').val("");
                    document.forms["msform"]["phone1"].placeholder = "Invalid!";
                     $('#phone1span').text("");
            }}
            function checkphone2() {
                if (document.forms["msform"]["phone2"].value.length < 14) {

                    $('#phone2').val("");
                    document.forms["msform"]["phone2"].placeholder = "Invalid!";
                }
            }
            ///$("#datetime-datepicker").datepicker({maxDate: new Date, minDate: new Date(2007, 6, 12)}); 
             function checkDate() {

                var today = new Date();
                var today_date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                var selectedDate = document.forms["msform"]["dob"].value;
                //var selectedDate = $('#dob').val();
                        const date1 = new Date(selectedDate);
                        const date2 = new Date(today_date);
                        const diffTime = Math.abs(date2 - date1);
                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                        //console.log(today_date);
                        if (selectedDate == "") {
                    document.forms["msform"]["dob"].style.border = "1px solid red";
                    document.forms["msform"]["dob"].placeholder = "must be required!";
                    $('#dobspan').text("Select Date of Birth!");
                } else {
                    if (diffDays < 5475) {
                        $('#dob').val("");
                        $('#dobspan').text("Too young! : You must be atleast 15 year old!");
                        document.forms["msform"]["dob"].style.border = "1px solid red";
                    } else {
                        document.forms["msform"]["dob"].style.border = "1px solid green";
                        $('#dobspan').text("");
                    }
                }
                               
                 }  //end of checkdate function      
                  
                    // //Information Extraction //

                    //     var Fullname=$('#fullname').val();
                    //      var City=$('#city').val();
                    //       var Fathername=$('#fathername').val();
                    //        var Cnic=$('#cnic').val();
                    //         var Dob=$('#dob').val();
                    //          var Gmail=$('#gmail').val();
                    //           var Password=$('#password').val();
                    //            var Username=$('#username').val();
                    //             var Phone1=$('#phone1').val();
                    //              var Phone2=$('#phone2').val();
                    //               var Address=$('#address').val();
                    //                var Bloodgroup=$('#bloodgroup').val();
                    //                 var Postalcode=$('#postalcode').val();
                    //                  var Bio=$('#bio').val();
















            // 




            

            
                  //...........Next button closing alert...........//
                           
                         //  $('#sa-close').click(function(){
                                // alert();

                            // setTimeout(function(){
                            //     Swal.fire('Moving to next step','Saving you Information'
                            //     'success');
                            // },2000);
                            
                          

                           // });


                  //..............                .....//

        </script>

 