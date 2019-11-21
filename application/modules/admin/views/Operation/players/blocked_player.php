<?php $this->load->view('admin/header') ?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Accounts</a></li>                  
                            <li class="breadcrumb-item active">Blocked Players</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Blocked Players</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Blocked Players</h4>
                    <p class="sub-header text-warning">
                        <?php $a = count($users); ?>
                        Total Blocked Players: <?php echo $a; ?>                   
                    </p>
                    <label class="form-inline mb-3">
                        Show
                        <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        entries
                    </label>
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                                <?php } else if ($this->session->flashdata('error')) { ?>
                                    <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <table id="demo-foo-pagination" class="table mb-0 table-bordered toggle-arrow-tiny footable" data-page-size="5" >
                            <thead>
                                <tr>
                                    <th data-toggle="true">Sr</th>
                                    <th> Username</th>
                                    <th> Name</th>
                                    <th> Gmail </th>
                                    <th> Address</th>
                                    <th> City</th>
                                    <th data-hide="all" > Other Details</th>
                                    <th data-hide="all" > Sports Details</th>
                                    <th data-hide="all" > Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users)) { ?>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td><?php echo $user->id; ?></td>
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><a href='mailto: <?php echo $user->username; ?>'><i class='mdi mdi-email'></i><?php echo $user->username; ?></a></td>
                                            <td><?php echo $user->address; ?></td>
                                            <td><?php echo $user->city; ?></td>
                                            <td>
                                                <img width="100" height="100" src="<?php echo base_url(); ?>assets/uploads/<?php echo $user->profile_image; ?>">
                                                <br><b class='text-primary'>CNIC: </b>,<br><b class='text-primary'>DOB: </b>,<br><b class='text-primary'>FATHERNAME: </b><br><b class='text-primary'> Gender: </b>  <br><b class='text-primary'>Blood Group: </b>,<br><b class='text-primary'>Bio: </b>""<br><b class='text-primary'> <i class='mdi  mdi-phone'></i> </b> <a href=''></a>, <b class='text-primary'><i class='mdi  mdi-phone'></i></b> <a href=''></a><br><b class='text-primary'> Social Accounts: </b> 
                                                <ul class="social-list mt-2 mb-0">
                                                    <li class="list-inline-item"> 
                                                        <a href="sabahatsaeed.30" class="social-list-item border-primary text-primary"><i
                                                                class="mdi mdi-facebook" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"> 
                                                        <a href="sabahat71" class="social-list-item border-secondary text-secondary"><i
                                                                class="mdi mdi-instagram" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="sabahatsaeed30" class="social-list-item border-info text-info"><i
                                                                class="mdi mdi-twitter" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="sabahatsaeed30" class="social-list-item border-danger text-danger"><i
                                                                class="mdi mdi-youtube" style="padding: 5px;"></i></a>
                                                    </li>
                                                </ul> 

                                            </td> 
                                            <td>
                                                <br><b class='text-primary'> Playing Style: </b> Cricket, <br><b class='text-primary'> Sport: </b> Right Side,                                     <br><b>History/Interested in: </b><br>                                            <b class='text-primary'>Play in:</b>
                                                University Team,<br> <b class='text-primary'> Matches: </b> Tape Ball,                                        </td>
                                            <td>
                                                <form method="post" action="<?php echo base_url(); ?>admin/update_block_player/<?php echo $user->id; ?>">
                                                    <input type="submit" value="UnBlock" class="btn btn-danger ">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr class="active">
                                    <td colspan="6">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>

        <!-- end row-->
        <!-- end row -->
    </div>
</div>
<?php $this->load->view('admin/footer') ?>
