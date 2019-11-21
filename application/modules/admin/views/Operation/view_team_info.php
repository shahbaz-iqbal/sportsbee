<?php
$this->load->view('admin/header');
?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->


        <?php if (count($users) > 0) { ?>
            <?php foreach ($users as $user) { ?>
                <div class="container emp-profile"id="printMe">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="" alt="profile_image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5>
                                    Name:
                                </h5>
                                <h6>
                                    Gmail:
                                </h6>
                                <p class="proile-rating">Address : <span></span></p>
                                <p class="proile-rating">City : <span></span></p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Other details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>Social Accounts</p>
                                <div class="row" style="margin-bottom: 10px;">
                                    <a href="#" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook" style="padding: 5px;"></i></a>
                                    <a href="#" class="social-list-item border-secondary text-secondary" style="margin-left: 45px;"><i class="mdi mdi-instagram" style="padding: 5px;"></i></a>
                                </div>
                                <div class="row">
                                    <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter" style="padding: 5px;"></i></a>
                                    <a href="#" class="social-list-item border-danger text-danger" style="margin-left: 45px;"><i class="mdi mdi-youtube" style="padding: 5px;"></i></a>
                                </div>
                                <p>Sports Details:</p>
                                <a href="">Playing Style:</a><br/>
                                <a href="">Sport: </a><br/>
                                <p>History/Interested in:</p>
                                <a href="">Play in:</a><br/>
                                <a href="">Matches:</a><br/>     
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cnic:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>DOB:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Father Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bload Group:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone2:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Bio:</label>
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="button" class="btn-primary hide" onclick="printDiv('printMe')" value="print">
                </div>
            <?php } ?>
        <?php } ?>

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


