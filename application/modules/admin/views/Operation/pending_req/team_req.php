<?php $this->load->view('admin/header'); ?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Pending Request</a></li>                  
                            <li class="breadcrumb-item active">Team Request</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Pending Request</h4>
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
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>teamcategory</th>
                                    <th>matchtype</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users) > 0) { ?>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $user->team_id; ?></td>
                                            <td><?php echo $user->name; ?></td>
                                            <td>
                                                <?php if ($user->teamcategory == 1) { ?>
                                                    <?php echo 'Local Team' ?>  <?php } elseif ($user->teamcategory == 2) { ?>
                                                    <?php echo 'School Team' ?> <?php } elseif ($user->teamcategory == 3) { ?>
                                                    <?php echo 'College Team' ?> <?php } elseif ($user->teamcategory == 4) { ?>
                                                    <?php echo 'University Team' ?> <?php } elseif ($user->teamcategory == 5) { ?>
                                                    <?php echo 'Custom Team (Organization)' ?>
                                                <?php } ?>
                                            </td>                                          
                                            <td>
                                                <?php if ($user->matchtype == 1) { ?>
                                                    <?php echo 'Hard Ball' ?>  <?php } elseif ($user->matchtype == 2) { ?>
                                                    <?php echo 'Tape Ball' ?> <?php } elseif ($user->matchtype == 3) { ?>
                                                    <?php echo 'Tennis Ball' ?> 
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $user->address; ?></td>                 
                                            <td><?php echo $user->city; ?></td>                 
                                            <td><?php echo $user->description; ?></td>                                                              
                                            <td>
                                                <input type="button"  onclick="window.location.href = '<?php echo base_url(); ?>admin/Dashboard/team_req_accept/<?php echo $user->team_id; ?>'" class="btn btn-primary"  value="Accept">
                                                <input type="button"  onclick="window.location.href = '<?php echo base_url(); ?>admin/Dashboard/team_req_reject/<?php echo $user->team_id; ?>'" class="btn btn-primary" value="Reject">
                                                <!--<input type="button"  onclick="window.location.href = '<?php echo base_url(); ?>admin/Dashboard/view_teams/<?php echo $user->team_id; ?>'" class="btn btn-primary" value="View">-->
                                            </td>        
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>
<script>
    var table = $('#example').DataTable({
        dom: 'Blfrtip',
        buttons: [
            {
                text: "View",
                enabled: false,
                action: function () {
                    //                   var data = table.row({selected: true}).data();
                    var ids = $.map(table.rows('.selected').data(), function (item) {
                        return item[1]
                    });
                    window.location.href = "<?php echo base_url() ?>admin/Dashboard/pending_teams/" + ids;
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                },
                customize: function (win) {
                    $(win.document.body).find('table').find('td:first-child, th:first-child').remove();
                    $(win.document.body).find('table').find('td:last-child, th:last-child').remove();
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis',
        ],
        columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            },
            {
                "targets": 1,
                "visible": false
            }
        ],
        select: {
            style: 'multi',
            // selector: ':not(:first-child)'
            selector: 'td:first-child'

        },
        order: [[1, 'desc']],
        "lengthMenu": [10, 25, 50, 75, 100]

    });
    table.on('select deselect', function () {
        var selectedRows = table.rows({selected: true}).count();

        //table.button( 0 ).enable( selectedRows === 1 );
        table.button(0).enable(selectedRows > 0);
    });
</script>






