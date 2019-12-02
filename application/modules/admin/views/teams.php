<?php $this->load->view('admin/header'); ?>


<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Delete</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Associated Teams</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal 

                        <button type="button" class="btn btn-primary" id="btnaddRole" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            Add Role
                        </button> -->
                       
                            
                        <table id="example" class="table  table-bordered "   name="tourntable">
                           
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Role Types</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                  
                                    
                                </tr></thead><tbody>
                                <?php if (count($roles) > 0) { ?>
                                    <?php foreach ($roles as $data) { ?>
                                        <tr>
                                            <td></td>
                                            <td id="tblroleid"><?php echo $data->role_id; ?></td>
                                            <td id="tblrolename"><?php echo $data->role_name; ?></td>
                                            <td></td>
                                            <td></td>
                                           

                                           
                                        
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            
                            
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
      
 


<?php $this->load->view('admin/footer') ?>


   
<script>
  
   
    var table = $('#example').DataTable({
        "scrollX": true,
        dom: 'Blfrtip',

             
        buttons: [
            // {
            //     text: "View",
            //     enabled: false,
            //     action: function () {
            //         var ids = $.map(table.rows('.selected').data(), function (item) {
            //             return item[1]
            //         });
            //         window.location.href = "<?php echo base_url() ?>admin/Dashboard/view_players/" + ids;
            //     }
            // },
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
        // columns: [
        //     { width: "5%" },
        //     { width: "20%" },
        //     { width: "80%" },
        //     { width: "40%" }
            
           
        //   ],
        select: {
            style: 'multi',
            // selector: ':not(:first-child)'
            selector: 'td:first-child'
        },
        order: [[1, 'desc']],
        "lengthMenu": [10, 25, 50, 75, 100],
        responsive: true
    });
  
</script>
