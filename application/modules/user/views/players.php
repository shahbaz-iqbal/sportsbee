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
                            <li class="breadcrumb-item active">Players</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Players</h4>
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
                                    <th>Name</th>
                                    <th>DOB</th>
                                     <th>City</th>
                                    <th>Intrestes Sport</th>
                                   
                                    <th>Play As</th>
                                    <th>Play Level</th>
                                    <th>Match Type</th>
                                    <th>Mobile #</th>
                                  
                                    <th>Apply</th>
                             </tr>
                            </thead><tbody>
                                
                                        
                                	  <?php foreach ($playerdata as $data) { ?>
                                	   <tr>
                                        
                                            <td id="tblroleid"><?php echo $data->player_id; ?></td>
                                            <td id="tblrolename"><?php echo $data->name; ?></td>
                                            <td id="tblrolename"><?php echo $data->dob; ?></td>
                                            <td id="tblrolename"><?php echo $data->city_name; ?></td>
                                            <td id="tblrolename"><?php echo $data->sport_name; ?></td>
                                            
                                            <td id="tblrolename"><?php echo $data->playtype; ?></td>
                                            <td id="tblrolename"><?php echo $data->playLevel; ?></td>
                                            <td id="tblrolename"><?php echo $data->match_name; ?></td>
                                            <td id="tblrolename"><?php echo $data->phone1; ?></td>

                                            
                                           

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                            <td>

                                          
                                        <?php if($data->team_id == '' && $data->status == '' ) {  ?>
                                              
                                         <input type="button" class="btn btn-primary ac" value="Send Request" id="<?php echo $data->player_id ?>" onclick="sendRequ(<?php echo $data->player_id ?>,<?php echo $id ?>)" >

                                         <!-- <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $data->role_id; ?>)"> <i class="mdi mdi-delete"></i></a> -->
    <input class="btn btn-danger cancelBtn" type="button"  name="hidenbtn" id="hiddenbtn" onclick="cancleReq(<?php echo $data->player_id ?>)" value="Cancle">


                      <?php } if($data->team_id ==$team_id && $data->status == 0){ ?>

                       <input type="button" class="btn btn-primary ac" value="Pending" id="<?php echo $data->player_id ?>" onclick="sendRequ(<?php echo $data->player_id ?>,<?php echo $id ?>)" >

                                        
    <input type="button"  name="hidenbtn" id="hiddenbtn" onclick="cancleReq(<?php echo $data->player_id ?>)" value="Cancle">
                                              
                    

     <?php } if($data->team_id ==$team_id && $data->status == 2) { ?>

          <input type="button" class="btn btn-danger" value="Rejected" disabled>


                    <?php } ?>                         

                                            </td>
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


function sendRequ($rid,$uid){

            console.log('send req btn');

             var user_id=$uid;
             var row_id=$rid;
            // console.log(user_id);
           
            $.ajax({
                url:"<?php echo base_url('user/Dashboard/check_req_limit/'); ?>"+user_id,
                
                // data:{userid:user_id},
                // dataType:"json",
                success:function(data){
                   
                     // data = JSON.parse(data);
                    console.log('i am some response from check req limit');
                    console.log(data);
                    var d=data.split(',');
                    var limit=d[0];
                    var teamid=d[1];

                    //console.log(abc[0]);
                      // var lim=data;
                       if(limit<15){
                         // $('.table tbody').on('click','.ac',function(){
                        
                                // $("input").click(function(){
                                //     var id=$(this).attr("id");
                                //     console.log('id is'+id);
                                //     $(this).prop("value","Response Pending");


                                     $.ajax({
                                        url:"<?php echo base_url('user/Dashboard/add_Request/'); ?>"+row_id+'/'+teamid,
                                        success:function(data){
                                            console.log('i am added request to player');
                                            console.log(data);
                                            var test='$'+'(\'#'+row_id+'\')';
                                             $('#'+row_id).attr("value","Pending");
                                              $('#'+row_id).prop("disabled","true");
                                             console.log('id is'+test);
                                            $('#'+row_id).siblings(".cancelBtn").show();
                                            console.log('i need to show');
                                        }
                                     })

                                // })
                                



                             // });
                      }else{
                        swal('Request Limit Full', 'You can not send more requests', 'error');
                      }
            


                }

            })
     


        }




        // CancleReq

           function cancleReq(id){
        console.log("Cancle ID:"+id);
       var row_id=id;

            
               
                   
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
                                url:"<?php echo base_url('user/Dashboard/cancle_request/'); ?>"+id,
                                success:function(data){

                                    Swal.fire({title:"Request Cancled",
                                    text:"Successfully!",
                                    type:"success",
                                    confirmButtonClass:"btn btn-confirm mt-2"});
                                     // $('#hiddenbtn').hide();
                                      $('#'+row_id).attr("value","Send Request");
                                   $('#'+row_id).prop("disabled","false");

                                }
                            });
                    
                          
                           }
                       })
                   
                }

             
       
            
                   
</script>