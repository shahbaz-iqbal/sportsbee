<?php $this->load->view('header') ?>
      <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center" style="margin-top: 5px !important;">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">        
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <span><img src="<?php echo base_url() ?>/assets/uploads/male-login.icon.png" alt="" width="auto" height="auto"></span>
                                    <p style="color: #FFAC1B !important;" class="text-muted mb-4 mt-3">Enter your Username and password for login.</p>
                                </div>
                                <div class="col-sm-12">
                                    <?php if ($this->session->flashdata('success')) { ?>
                                        <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                                    <?php } else if ($this->session->flashdata('error')) { ?>
                                        <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                    <?php } ?>
                                </div>
                                <form id="msform" name="msform" action="<?php echo base_url('web/login'); ?>" method="POST">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="user" name="user" required="" placeholder="Enter your email or username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button style="background: #B22E06;" class="btn btn-warning btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a style="color: #B22E06 !important; font-size: 14px !important;" href="pages-recoverpw.html" class="text-danger ml-1">Forgot your password?</a></p>
                                <p style="color: #FFAC1B !important; font-size: 16px !important;" class="text-50">Don't have an account? <a href="<?php echo base_url() ?>registration" style="font-size: 16px !important; color: #B22E06 !important;" class="text-danger ml-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
<?php $this->load->view('footer') ?>

        <script>
            $('#email').change(function () {
                var email = $('#email').val();
                if (email != '')
                {
                    $.ajax({
                        url: "<?php echo base_url() ?>/Web_UserController/check_email_avalibility",
                        method: "POST",
                        data: {email: email},
                        success: function (data) {
                            $('#email_result').html(data);
                        }
                    });
                }
            });
        </script>  