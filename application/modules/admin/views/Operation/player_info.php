<?php $this->load->view('admin/header');
?>
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Accounts</a></li>                  
                            <li class="breadcrumb-item active">Active Players</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Active Players</h4>
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
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($users) > 0) { ?>
                                    <?php foreach ($users as $user) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $user->id; ?></td>
                                            <td>
                                              
                                                <?php  $filename = $user->profile_image;   ?>
                                           
                                               <?php if (file_exists('http:localhost/sportsbee_portal/assets/images/'.$filename)) {?>
                                                <img src=" <?php echo base_url(); ?>assets/images/<?php echo $user->profile_image; ?>"height="20" width="20"/>
                                              <?php  } else {?>
                                                <img src=" <?php echo base_url(); ?>assets/images/dummy.jpg" height="20" width="20"/>
                                               
                                             <?php   }
                                                ?>
                                                
                                            </td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><?php echo $user->phone1; ?></td>
                                            <td><?php echo $user->gmail; ?></td>
                                            <td><?php echo $user->address; ?></td>                 
                                            <td><?php echo $user->city; ?></td>                 
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
                action: function () {
                    //                    var data = table.row({selected: true}).data();
                    var ids = $.map(table.rows('.selected').data(), function (item) {
                        return item[1]

                    });
                    //console.log(ids)
                    window.location.href = "<?php echo base_url() ?>admin/Dashboard/view_players/" + ids;
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
            }],
        select: {
            style: 'multi',
            // selector: ':not(:first-child)'
            // selector: 'td:first-child'

        },
        order: [[1, 'desc']],
        "lengthMenu": [10, 25, 50, 75, 100]

    });
</script>
<script>
</script>



