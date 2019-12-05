<?php $this->load->view('web/header'); ?>

<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Events</a></li>
                            <li class="breadcrumb-item active">Tournaments</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tournaments</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->

                       <!--  <button type="button" class="btn btn-primary" id="btnaddRole" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            Add Role
                        </button> -->
                       
                                  <table id="example" class="table  table-bordered "   name="tourntable">
                           
                            <thead>
                                <tr>
                                	
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Entry Fee</th>
                                     <th># of teams</th>
                                    <th>Winning Prize</th>
                                    <!-- <th>Datesss</th> -->
                                    <th>Date</th>
                                    <th>Level</th>
                                    <th>City</th>
                                  
                                    <th>Apply</th>
                             </tr>
                             </thead><tbody>
                             
                                	  <?php foreach ($tour as $data) { ?>
                                	  	<?php  $d1=date('Y-m-d'); $d2 = $data->dated;  ?>
                                	 
							    <?php if(date('Y-m-d', strtotime($d1)) < date('Y-m-d', strtotime($d2))) { ?>
                                        <tr>
                                            
                                            <td id="tblroleid"><?php echo $data->tournid; ?></td>
                                            <td id="tblrolename"><?php echo $data->title; ?></td>
                                            <td id="tblrolename"><?php echo $data->entry_fee; ?></td>
                                            <td id="tblrolename"><?php echo $data->team_limit; ?></td>
                                            <td id="tblrolename"><?php echo $data->prize; ?></td>
                                            <!-- <td><?php echo $d1.'>'.$d2 ?></td> -->
                                            <td id="tblrolename"><?php echo $data->dated; ?></td>
                                            <td id="tblrolename"><?php echo $data->type_name; ?></td>
                                            <td id="tblrolename"><?php echo $data->name; ?></td>

                                            
                                           

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                            <td>

                                             

                                                <!--  -->
                                                 <input type="button" class="btn btn-primary" value="Send Request"  >
                                              
                                                    
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
  <!-- Model -->
    </div>
</div>

 <?php $this->load->view('web/footer'); ?>
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
            // {
            //     extend: 'print',
            //     exportOptions: {
            //         columns: ':visible'
            //     },
            //     customize: function (win) {
            //         $(win.document.body).find('table').find('td:first-child, th:first-child').remove();
            //         $(win.document.body).find('table').find('td:last-child, th:last-child').remove();
            //     }
            // },
            // {
            //     extend: 'pdf',
            //     exportOptions: {
            //         columns: ':visible'
            //     }
            // },
            // {
            //     extend: 'csv',
            //     exportOptions: {
            //         columns: ':visible'
            //     }
            // },
            'colvis',
        ],
        // columnDefs: [{
        //         orderable: false,
        //         className: 'select-checkbox',
        //         targets: 0
        //     },
        //     {
        //         "targets": 1,
        //         "visible": false
        //     }
        // ],
        // select: {
        //     style: 'multi',
        //     // selector: ':not(:first-child)'
        //     selector: 'td:first-child'
        // },
         order: [[1, 'desc']],
        "lengthMenu": [10, 25, 50, 75, 100],
        responsive: true
    });
    // table.on('select deselect', function () {
    //     var selectedRows = table.rows({selected: true}).count();
    //     //table.button( 0 ).enable( selectedRows === 1 );
    //     table.button(0).enable(selectedRows > 0);
    // });
</script>