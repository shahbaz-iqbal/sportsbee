<?php $this->load->view('admin/header');?>
<div class="wrapper"id="printMe">
    <div class="container-fluid">
        <!-- start page title -->
        <?php if (count($users) > 0) { ?>
            <?php foreach ($users as $user) { ?>
                <div class="container emp-profile">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/dummy.jpg" alt="profile_image" height="200" width="200">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-head">
                                <h5>
                                    Name:<?php echo $user->name; ?>
                                </h5>
                                <h6>
                                    <?php echo $user->description; ?>
                                </h6>
                                <p class="proile-rating">Address :<?php echo $user->address; ?> <span></span></p>
                                <p class="proile-rating">City :<?php echo $user->city; ?> <span></span></p>
                                <p class="proile-rating">City Code :<?php echo $user->city_code; ?> <span></span></p>
                                <p class="proile-rating">Postal Code : <?php echo $user->postalcode; ?><span></span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>Team Info:</p>
                                <a href="">Team Category:
                                    <?php if ($user->teamcategory == 1) { ?>
                                        <?php echo 'Local Team' ?>  <?php } elseif ($user->teamcategory == 2) { ?>
                                        <?php echo 'School Team' ?> <?php } elseif ($user->teamcategory == 3) { ?>
                                        <?php echo 'College Team' ?> <?php } elseif ($user->teamcategory == 4) { ?>
                                        <?php echo 'University Team' ?> <?php } elseif ($user->teamcategory == 5) { ?>
                                        <?php echo 'Custom Team (Organization)' ?>
                                    <?php } ?>
                                </a><br/>
                                <a href="">Matches Type:
                                    <?php if ($user->matchtype == 1) { ?>
                                        <?php echo 'Hard Ball' ?>  <?php } elseif ($user->matchtype == 2) { ?>
                                        <?php echo 'Tape Ball' ?> <?php } elseif ($user->matchtype == 3) { ?>
                                        <?php echo 'Tennis Ball' ?> 
                                    <?php } ?>
                                </a><br/>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
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


