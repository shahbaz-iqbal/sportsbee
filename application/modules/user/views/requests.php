  <?php $this->load->view('web/header'); ?>

<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Notifications</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Requests</h4>
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
                                    <th>Captain Name</th>
                                    <th>City</th>
                                    <th>Sport</th>
                                    <th>Match Type</th>
                                    <th>Level</th>
                                    <th>description</th>
                                  
                                    <th>Action</th>
                             </tr>
                            </thead><tbody>
                                
                                        
                                	  <?php foreach ($captaindata as $data) { ?>
                                	   <tr>
                                        
                                            <td id="tblroleid"><?php echo $data->team_id; ?></td>
                                            <td id="tblrolename"><?php echo $data->name; ?></td>
                                            <td id="tblrolename"><?php echo $data->city; ?></td>
                                            <td id="tblrolename"><?php echo $data->sport_id; ?></td>
                                            <td id="tblrolename"><?php echo $data->matchtype; ?></td>
                                            
                                            <td id="tblrolename"><?php echo $data->teamcategory; ?></td>
                                            <td id="tblrolename"><?php echo $data->status; ?></td>
                                 
                                  <?php if($data -> req_status == 0){ ?>
                                            <td>    
                                         <input type="button" class="btn btn-primary ac" value="Accept Request" id="<?php echo $data->team_id ?>" onclick="acceptRequ(<?php echo $data->team_id ?>,<?php echo $id ?>)" >

                                         <!-- <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $data->role_id; ?>)"> <i class="mdi mdi-delete"></i></a> -->
    <input class="btn btn-danger cancelBtn" type="button"  name="hidenbtn" id="hiddenbtn" onclick="cancleReq(<?php echo $data->team_id ?>,<?php echo $id ?>)" value="Cancle">

                                            </td>

                                        <?php } ?>

                                        <!-- If request already rejected! -->

                                          <?php if($data -> req_status == 2){ ?>
                                            <td>    
                                         

                                        
    <input class="btn btn-danger cancelBtn" type="button"  name="hidenbtn" id="hiddenbtn" value="Rejected" disabled>

                                            </td>

                                        <?php } ?>

                                        <!--  -->

                                          <!-- If request already accepted! -->

                                          <?php if($data -> req_status == 1){ ?>
                                            <td>    
                                         

                                        
    <input class="btn btn-danger cancelBtn" type="button"  name="hidenbtn" id="hiddenbtn" onclick="cancleReq(<?php echo $data->team_id ?>,<?php echo $id ?>)" value="Cancle">

                                            </td>

                                        <?php } ?>

                                        <!--  -->
                                        </tr>
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


function acceptRequ($tid,$uid){

            console.log('send req btn');

             var user_id=$uid;
             var row_id=$tid;
             var check='a';
        
           
           


                                     $.ajax({
                                        url:"<?php echo base_url('user/Request/accept_Request/'); ?>"+row_id+'/'+user_id+'/'+check,
                                        success:function(data){
                                            console.log('i am added request to player');
                                            console.log(data);
                                            var test='$'+'(\'#'+row_id+'\')';
                                             // $('#'+row_id).attr("value","Pending");
                                              // $('#'+row_id).prop("disabled","true");
                                              $('#'+row_id).hide();
                                             console.log('id is'+test);
                                            $('#'+row_id).siblings(".cancelBtn").show();
                                            console.log('i need to show');
                                        }
                                     })

                           
                                }



                            
                     
            


                

           
     


        




        // CancleReq

           function cancleReq($tid,$uid){
        console.log("Cancle ID:"+$uid);
       var row_id=$tid;
       var user_id=$uid;
       var check='c';
          
        // var abc=  $(this).val();
        // console.log(abc);            
               
                   
                     Swal.fire({
                         title: 'Are you sure?',
                         html: 'Request will be cancle',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Cancle!'
                       }).then((result) => {
                         if (result.value) {

                            $.ajax({
                                url:"<?php echo base_url('user/Request/accept_Request/'); ?>"+row_id+'/'+user_id+'/'+check,
                                success:function(data){
                                       console.log('i am cancle');
                                       console.log(data);
                                    Swal.fire({title:"Request Cancled",
                                    text:"Successfully!",
                                    type:"success",
                                    confirmButtonClass:"btn btn-confirm mt-2"});
                                      // $('#hiddenbtn').attr("value","Rejected");
                                       $('#'+row_id).hide();
                                       location.reload(true);
                                       // $('#hiddenbtn').attr("disabled","false");
                                   // $('#'+row_id).prop("disabled","false");

                                }
                            });
                    
                          
                           }
                       })
                   
                }

             
       
            
                   
</script>