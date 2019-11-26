<?php $this->load->view('admin/header'); ?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Operation</a></li>                  
                            <li class="breadcrumb-item active">Players</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Teams</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-bordered">  
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Profile</th>
                                    <th>name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users) > 0) { ?>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $user->team_id; ?></td>
        <!--                                            <td>
                                            <?php $filename = $user->profile_image; ?>
                                            <?php $fil = base_url(); ?>
                                            <?php if (file_exists($fil . 'assets/images/' . $filename)) { ?>
                                                        <img src="<?php echo base_url(); ?>/assets/images/<?php echo $user->profile_image; ?>" class="thumbnail-image"/>
                                            <?php } else { ?>
                                                        <img src="<?php echo base_url(); ?>/assets/images/dummy.jpg" height="30" width="45" style="margin-left: 10px"/>
                                            <?php } ?>


                                            </td>-->

                                            <td>
                                                <img src="<?php echo base_url(); ?>/assets/images/dummy.jpg" height="30" width="45" style="margin-left: 10px; border-radius: 20px;"/>
                                            </td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><?php echo $user->address; ?></td>                 
                                            <td><?php echo $user->city; ?></td>                 
                                            <td>
                                                <?php $status = $user->status; ?>
                                                <?php if ($status == 1) { ?>
                                                <label class="badge badge-success">Active</label>
                                                <?php } else { ?>
                                                <label class="badge badge-danger">Blocked</label>
                                                 <?php } ?>
                                            </td>  
                                            <td>
                                                <?php $status = $user->status; ?>
                                                <?php if ($status == 1) { ?>
                                               <input type="button"  onclick="window.location.href='<?php echo base_url(); ?>admin/Dashboard/update_active_team/<?php echo $user->team_id; ?>'" class="btn btn-primary" style="background-color: #b22e06;"  value="Block">
                                                <?php } else { ?>
                                                 <input type="button"  onclick="window.location.href='<?php echo base_url(); ?>admin/Dashboard/update_block_team/<?php echo $user->team_id; ?>'" class="btn btn-primary" value="Active">
                                                <?php } ?>
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

                    window.location.href = "<?php echo base_url() ?>admin/Dashboard/view_teams/" + ids;


                    //console.log(ids)

//                    console.log(data);
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





