<?php $this->load->view('admin/header'); ?>
<div class="wrapper"id="printMe">
    <div class="container-fluid">
        <!-- start page title -->
        <?php if (count($users) > 0) { ?>
            <?php foreach ($users as $user) { ?>
                <div class="container emp-profile">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/dummy.jpg" alt="profile_image" height="200" width="200" style="border-radius: 110px;"  >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-head">
                                <h5>
                                    Team Name:<?php echo $user->team_name; ?>
                                </h5>
                                <h6>
                                    <?php echo $user->teamdiscription; ?>
                                </h6>
                                <p class="proile-rating">Address :<?php echo $user->teamaddress; ?> <span></span></p>
                                <p class="proile-rating">City :<?php echo $user->TeamCityName; ?> <span></span></p>
                                <!--<p class="proile-rating">City Code :<?php echo $user->teampostalcode; ?> <span></span></p>-->
                                <p class="proile-rating">Postal Code : <?php echo $user->teampostalcode; ?><span></span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>Team Info:</p>
                                <a href="">Team Category:
                                    <?php if ($user->teamCaategory == 1) { ?>
                                        <?php echo 'Local Team' ?>  <?php } elseif ($user->teamCaategory == 2) { ?>
                                        <?php echo 'School Team' ?> <?php } elseif ($user->teamCaategory == 3) { ?>
                                        <?php echo 'College Team' ?> <?php } elseif ($user->teamCaategory == 4) { ?>
                                        <?php echo 'University Team' ?> <?php } elseif ($user->teamCaategory == 5) { ?>
                                        <?php echo 'Custom Team (Organization)' ?>
                                    <?php } ?>
                                </a><br/>
                                <a href="">Matches Type:
                                    <?php if ($user->teammatchtype == 1) { ?>
                                        <?php echo 'Hard Ball' ?>  <?php } elseif ($user->teammatchtype == 2) { ?>
                                        <?php echo 'Tape Ball' ?> <?php } elseif ($user->teammatchtype == 3) { ?>
                                        <?php echo 'Tennis Ball' ?> 
                                    <?php } ?>
                                </a><br/>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-head">
                                <h5>
                                    Captian Name:<?php echo $user->player_name; ?>
                                </h5>
                                <h6>
                                    Gmail:<?php echo $user->gmail; ?>
                                </h6>
                                <p class="proile-rating">Address : <?php echo $user->address; ?><span></span></p>
                                <!--<p class="proile-rating">City : <?php echo $user->team_name; ?><span></span></p>-->

                            </div>
                            <p>Social Accounts</p>
                            <div class="row" style="margin-bottom: 10px;">
                                <a href="#" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook" style="padding: 5px;"></i></a>
                                <a href="#" class="social-list-item border-secondary text-secondary" style="margin-left: 45px;"><i class="mdi mdi-instagram" style="padding: 5px;"></i></a>
                            </div>
                            <div class="row">
                                <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter" style="padding: 5px;"></i></a>
                                <a href="#" class="social-list-item border-danger text-danger" style="margin-left: 45px;"><i class="mdi mdi-youtube" style="padding: 5px;"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8">


                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Captian details</a>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cnic:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->cnic; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>DOB:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->dob; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Father Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->playerFather; ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bload Group:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->bloodgroup; ?></p>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone 1:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->phone1; ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone 2:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->phone2; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bio:</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?php echo $user->bio; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="margin-top: -23px;"></div>
            <?php } ?>
        <?php } ?>
        <input type="button" class="btn-primary-a hide" onclick="printDiv('printMe')" value="print">
    </div>
</div>   
<?php $this->load->view('admin/footer'); ?>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


