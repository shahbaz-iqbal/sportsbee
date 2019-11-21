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
                            <li class="breadcrumb-item active">Block Teams</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Block Teams</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Block Teams</h4>
                    <p class="sub-header text-warning">
                       <?php $a = count($users); ?>
                        Total Block Teams: <?php echo $a; ?>                      
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
                        <table id="demo-foo-pagination" class="table mb-0 table-bordered toggle-arrow-tiny footable" data-page-size="5">
                            <thead>
                                <tr>
                                    <th data-toggle="true">Sr</th>
                                    <th> Team Name </th>
                                    <th> Team Tokan </th>
                                    <th> Team Address </th>
                                    <th> Team City</th>
                                    <th> Team Postal code</th>
                                    <th data-hide="all" >History/Intrested</th>
                                    <th data-hide="all" > Captain Detail </th>
                                    <th data-hide="all" > Captain Sports Detail </th>
                                    <th data-hide="all" > Action </th>
                                </tr>
                            </thead>
                            <?php if (count($users)) { ?>
                                <?php foreach ($users as $user) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $user->id; ?></td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><?php echo $user->tokan; ?></td>
                                            <td><?php echo $user->address; ?></td>
                                            <td><?php echo $user->city; ?></td>
                                            <td><?php echo $user->postalcode; ?></td>
                                            <td>
                                                <br><b class='text-primary'>team Categories:</b><?php echo $user->teamcategory; ?>
                                                <br><b class='text-primary'> Matches: </b> <?php echo $user->matchtype; ?>                                       
                                            </td> 
                                            <td>
                                                <img width="70" height="70" src=""> <br>
                                                <b class='text-primary'>USERNAME:</b> <?php echo $user->username; ?> <br>
                                                <b class='text-primary'>NAME:</b> <?php echo $user->name; ?> <br>
                                                <b class='text-primary'>FATHERNAME: </b><?php echo $user->fathername; ?> <br>
                                                <b class='text-primary'>CNIC: </b><?php echo $user->cnic; ?> <br>
                                                <b class='text-primary'>DOB: </b><?php echo $user->dob; ?><br>
                                                <b class='text-primary'> Gender: </b> <?php echo $user->gender; ?><br>
                                                <b class='text-primary'>Blood Group: </b><?php echo $user->bloodgroup; ?> <br>
                                                <b class='text-primary'>Bio: </b><?php echo $user->bio; ?><br>
                                                <b class='text-primary'><i class='mdi mdi-email'></i></b> <a href='mailto: <?php echo $user->gmail; ?>'><?php echo $user->gmail; ?></a><br>
                                                <b class='text-primary'><i class='mdi mdi-phone'></i></b> <a href='<?php echo $user->phone1; ?>'><?php echo $user->phone1; ?></a>, <b class='text-primary'> <i class='mdi mdi-phone'></i></b><a href='<?php echo $user->phone2; ?>'><?php echo $user->phone2; ?></a><br>
                                                <b class='text-primary'> City: </b><?php echo $user->city; ?>, <br>
                                                <b class='text-primary'> PostalCode: </b><?php echo $user->postalcode; ?><br>
                                                <b class='text-primary'> Address: </b><?php echo $user->address; ?><br>
                                                <b class='text-primary'> Social Links: </b> 
                                                <ul class="social-list mt-2 mb-0">
                                                    <li class="list-inline-item"> 
                                                        <a href="<?php echo $user->facebook; ?>" class="social-list-item border-primary text-primary"><i
                                                                class="mdi mdi-facebook" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"> 
                                                        <a href="<?php echo $user->instagram; ?>" class="social-list-item border-secondary text-secondary"><i
                                                                class="mdi mdi-instagram" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="<?php echo $user->twitter; ?>" class="social-list-item border-info text-info"><i
                                                                class="mdi mdi-twitter" style="padding: 5px;"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="<?php echo $user->youtube; ?>" class="social-list-item border-danger text-danger"><i
                                                                class="mdi mdi-youtube" style="padding: 5px;"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <b class='text-primary'> Playing Style: </b> <?php echo $user->sports_style; ?>, <br>
                                                <b class='text-primary'> Sport: </b> <?php echo $user->player_type; ?>,  <br>
                                                <b class='text-primary'>Play in:</b> <?php echo $user->team_type; ?>, <br>
                                                <b class='text-primary'> Matches: </b> <?php echo $user->match_type; ?>,                   
                                            </td>
                                            <td>
                                                <form method="post" action="<?php echo base_url(); ?>admin/update_block_team/<?php echo $user->id; ?>">
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
