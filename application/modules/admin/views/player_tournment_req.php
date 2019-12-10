<?php $this->load->view('admin/header'); ?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->     
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Tournment</a></li>                  
                            <li class="breadcrumb-item active">Request</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Player Tournment Request</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                                <?php } else if ($this->session->flashdata('error')) { ?>
                                    <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                <?php } ?>
                            </div>
                        </div>                     
                        <table id="example" class="table table-bordered">  
                            <thead>
                                <tr>
                                    <th>Tournment Name</th>
                                    <th>Team Name</th>
                                    <th>Request Date</th>
                                    <th>Approve Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users) > 0) { ?>
                                    <?php foreach ($users as $user) {
                                        ?>
                                        <tr>
                                            <td><?php echo $user->tournmentName; ?></td>

                                            <td>
                                                <?php echo $user->teamName; ?>
                                            </td>
                                            <td>
                                                <?php echo $user->request_date; ?>
                                            </td>
                                            <td>
                                                <?php echo $user->request_aprove_date; ?>
                                            </td>

                                            <td>
                                                <?php $status = $user->status; ?>
                                                <?php if ($status == 0) { ?>
                                                    <label class="badge badge-primary">Pending</label>

                                                <?php } else if ($status == 2) { ?>
                                                    <label class="badge badge-danger">Rejected</label>
                                                <?php } else { ?>
                                                    <label class="badge badge-success">Accepted</label>
                                                <?php } ?>
                                            </td>  
                                            <td>
                                                <!--<input type="button" data_id="<?php echo $user->tournament_team_id; ?>" data-toggle="modal" data-target="#exampleModal"  class="btn btn-primary editUser"   value="Active">-->
                                                <input type="button" onclick="window.location.href = '<?php echo base_url(); ?>admin/tournament/tournment_req_accept/<?php echo $user->tournament_team_id; ?>'" class="btn btn-primary"   value="Active">
                                                <input type="button"   onclick="window.location.href = '<?php echo base_url(); ?>admin/tournament/tournment_req_reject/<?php echo $user->tournament_team_id; ?>'"  class="btn btn-primary" value="Block">
                                            </td>  
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Notify Team</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="" id="discrip" enctype='multipart/form-data'>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Discription...</label>

                                                        <textarea class="form-control" name="discription" style="height: 137px;" placeholder="something">Write Some discription....</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" id="save" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>
<script>
    var table = $('#example').DataTable({
    });
</script>
<!--<script>
    $(".editUser").click(function (e) {
        e.preventDefault();
        var id = $(this).attr("data_id");
       $("#save").click(function (e) {
             console.log('i am submit btn');
              e.preventDefault();
                // window.location.href = "<?php echo base_url() ?>admin/tournament/tournment_req_accept/" + id;
                document.getElementById("discrip").submit();
       });
    });
</script> -->



