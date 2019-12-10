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
                                    <th>Players Required</th>
                                  
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
                                            <td><?php echo $data->player_limit ?></td>

                                            
                                           

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                          <?php if($totalmembers >= 5){ ?>

                                             <td>

                                                <!--  -->
                                                <!-- <p class="btn-success">Eligible</p> -->

                                                 <input type="button" class="btn btn-primary" value="Apply" id="<?php echo $data->tournid ?>" onclick="Apply(<?php echo $data->tournid ?> , <?php echo $teamid ?> )">
                                                 <input type="button" style="display:none;" class="btn btn-danger" value="Cancle" id="<?php echo $data->tournid.'2' ?>" onclick="Cancle(<?php echo $data->tournid ?> , <?php echo $teamid ?> )" >
                            
                                              
                                                    
                                            </td>

                                        <?php } ?>
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


    function Cancle($tourn,$team){
       // alert($(this).attr('id'));
        var t=$tourn;
        var team=$team;
        // $('#'+t+'2').attr("value","Pending");
       

        // $('#'+t+'2').attr("value","Pending");
        // console.log(t);
        // console.log(team);


           Swal.fire({
                         title: 'Are you sure?',
                         html: 'You Wanted To Cancle Request!',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Cancle!'
                       }).then((result) => {
                         if (result.value) {

                            $.ajax({
                                url:"<?php echo base_url('user/Dashboard/cancle_req/'); ?>"+t+'/'+team,
                                success:function(data){

                                    Swal.fire({title:"Cancled! ",
                                    text:"Your request has been cancle for Upcoming Tournament.",
                                    type:"success",
                                    confirmButtonClass:"btn btn-confirm mt-2"});
                                     
                                      $('#'+t).attr("value","Send Request");
                                   $('#'+t).prop("disabled","false");

                                   $('#'+t+'2').hide();

                                }
                            });
                    
                          
                           }
                       })
       
    }

    function Apply($tourn,$team)
    {
        var t=$tourn;
         var team=$team;
        


             Swal.fire({
                         title: 'Are you sure?',
                         html: 'You Wanted To Apply',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Apply!'
                       }).then((result) => {
                         if (result.value) {

                            $.ajax({
                                url:"<?php echo base_url('user/Dashboard/apply_req/'); ?>"+t+'/'+team,
                                success:function(data){

                                    Swal.fire({title:"Congratulation! ",
                                    text:"Your request has been sent for Upcoming Tournament.",
                                    type:"success",
                                    confirmButtonClass:"btn btn-confirm mt-2"});
                                     
                                      $('#'+t).attr("value","Pending");
                                   $('#'+t).prop("disabled","true");

                                   $('#'+t+'2').show();

                                }
                            });
                    
                          
                           }
                       })

    }
</script>