<?php $this->load->view('admin/header'); ?>


<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Team</a></li>
                            <li class="breadcrumb-item active">Outdoor Team</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Outdoor Team</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" id="btnaddRole" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            Add Outdoor Team
                        </button>
                       
                            
                        <table id="example" class="table  table-bordered "   name="tourntable">
                           
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    
                                  
                                    <th>Action</th>
                                </tr></thead><tbody>
                                <?php if (count($ind_team) > 0) { ?>
                                    <?php foreach ($ind_team as $data) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $data->indoor_id; ?></td>
                                            <td><?php echo $data->ind_team_name; ?></td>
                                            <td><?php echo $data->ind_email; ?></td>
                                           
                                            <td ><?php echo $data->role_name; ?></td>
                                            <td><?php echo $data->ind_phone1; ?></td>
                                            <td><?php echo $data->ind_address; ?></td>
                                           
                                           

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                            <td>

                                             

                                                <!--  -->
                                                <!-- <input type="button" class="btn btn-primary" value="Edit"  onclick="editt();"> -->
                                                <a id="<?php echo $data->indoor_id; ?>" class="action-icon editUser ac btn-outline-warning" data-toggle="modal"  data-target="#exampleModal" onclick="edit_role_action()" ><i class="mdi mdi-square-edit-outline"></i></a>
                                                <!-- <button type="button" id="<?php echo $d->tournid; ?>"  class="btn btn-primary" data-toggle="modal" data-target="#EditModal" style="float:right;" >
                                                      
                                                       Edit
                                                    </button> -->
                                               <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $data->indoor_id; ?>)"> <i class="mdi mdi-delete"></i></a>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" style="width:auto">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #fda81a">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Add Roles</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post"  id="add_indoor"  name="add_indoor">

                                    <div class="row">
                                        <div class="col-6">
                                           <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control checkname" id="name" name="name" placeholder="Enter Name"  onchange="checkname()">
                                                <span id="titlespan" style="color: red;"></span>
                                            </div>
                                          
                                        </div>

                                        <div class="col-6">
                                           <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" onchange="checkemail()" id="email" name="email" placeholder="Enter Email" maxlength="150" >
                                                <span id="emailspan" style="color: red;"></span>
                                            </div>
                                          
                                        </div>

                                        </div>  


                                     


                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                            <label>Select Role</label> 
                                            <select class="custom-select tour_type form-control"  name="rolename" id="rolename">
                                              <option value="">Select Role </option>
                                                   <?php if (count($add_ind_team) > 0) { ?>
                                                     <?php  foreach ($add_ind_team as $data) { ?>
                                                   
                                 <option class="bloodgrouplist" value="<?php echo $data->role_id; ?>"> <?php echo  $data->role_name; ?>
                                            
                                                </option>
                                                       <?php } ?>
                                                       <?php } ?>


                                             </select>
                                             <span id="rolespan" style="color: red;"></span> 
                                            </div>
                                            
                                        </div>


                                        <div class="col-6">
                                           <div class="form-group">
                                                <label>Mobile #</label>
                                                <input type="text" class="form-control" onchange="checkphone1()" id="phone1" name="phone1" placeholder="Enter Mobile Number" maxlength="11" size="11" >
                                                <span id="phone1span" style="color: red;"></span>
                                            </div>
                                        </div>             
                                       

                                        
                                                       

                                     </div> 


                                     <div class="row">          
                                        <div class="col-10">
                                            

                                              <div class="form-group">
                                                    <label for="city">Address</label>
                                                    <textarea class="form-control" id="address" name="address" style="resize: none" 
                                                     rows="3"  placeholder="Address..." maxlength="250"></textarea>
                                                    <span id="addressspan" style="color: red;"></span>
                                                </div>
                                        </div>
                                        </div>
                                     
                                     <!-- HIDDEN FIELDS  -->
                                    <div class="row">          
                                        <div class="col-4">
                                            <input type="hidden" name="role_action" id="role_action">
                                        </div>
                                    
                                   
                                        <div class="col-4">
                                            <input type="hidden" name="edit_hidden_id" id="edit_hidden_id">
                                        </div>
                                    </div>
                                        
                                    <!--  -->
                                 
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="btnsubmit()" class="btn btn-primary">Save </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEre -->

 


<?php $this->load->view('admin/footer') ?>

<script type="text/javascript">

    $('#module_access').select2();


    <!-- VALIDATIONS -->

          function checkname() {
                var x = $('#name').val();
                var alphaExp = /^([a-zA-Z])[a-zA-Z\s]{2,20}$/;
                

                    if (x.match(alphaExp)) {

                        $('#name').css('border','1px solid green');
                        $('#titlespan').text("");
                    } else {
                        $('#name').val("");
                         $('#titlespan').text('Invalid!');
                        
                    }
                } 





                //Mobile # 


                 function checkphone1() {
                var x=$('#phone1').val();
                var alphaExp = /^[0-9]+$/;
                if (x.match(alphaExp)) {
                if ($('#phone1').val().length < 11) {

                   $('#phone1').css('border','1px solid red');
                    $('#phone1').val("");
                    $('#phone1span').text('Invalid!');
                } else {
                    $('#phone1').css('border','1px solid green');
                    $('#phone1span').text("");
                }
            }else{

                 $('#phone1').css('border','1px solid red');
                    $('#phone1').val("");
                     $('#phone1span').text("");
            }}




                     $(function () {
                $('#phone1').keyup(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    $text = $(this);
                     var alphaExp = /^[0-9]+$/;
                     var x=$text.val();
           // function check_phone_availbility(){
                console.log('i am check of phn 1');
               // phn1_val=$('#phone1').val();
               if (x.match(alphaExp)) {
                if( $text.val().length ===11){

                    console.log('i am runing for ajax phn numbers');
                             var phn1 = $text.val();
                             console.log(phn1);
                             $.ajax({
                            url:'<?php echo base_url() ?>admin/Indoorteam/check_phone1_availbility',
                                 method:'post',
                                 data:{phone1:phn1},
                                 success:function(data){
                                    console.log(data);
                                     $('#phone1span').html(data);
                                     if(data =='<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Mobile# Already registered</label>'){
                                       $('#phone1').css('border','1px solid red');
                                        $('#phone1').val("");
                                     }else{
                                         $('#phone1').css('border','1px solid green');
                                     }

                                 }
                             });
                }}else{
                    $('#phone1span').html('Inavlid!');
                    $('#phone1').css('border','1px solid red');
                    $('#phone1').val("");
                }

            })
                })


                     //EMAIL


                       function checkemail(){
                    
                    var email=$('#email').val();
                if(email !=''){
                      
                       $.ajax({
                        url:"<?php echo base_url() ?>/admin/Indoorteam/check_email_avalibility",
                        method:"post",
                        data:{email:email},
                        success:function(data){
                            $('#emailspan').html(data);
                            var str=data;
                            if(str =='<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already registered</label>'){
                               $('#email').css('border','1px solid red');
                                $('#email').val('');
                             //console.log('i am already regiterded');
                               }else if(str =='<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>'){
                                  $('#email').css('border','1px solid green');
                               }else{

                                   $('#email').css('border','1px solid red');
                                   $('#email').val('');
                               }
                          }
                       });
                   }
            }
      <!-- VALIDATIONS END-->

    
    // When click on edit btn get indoor id to get single information//
  
    $(document).ready(function(){


        $('.table tbody').on('click','.ac',function(){
            console.log('i am  edit ,working');

            var user_id=$(this).attr("id");
           
            $.ajax({
                url:"<?php echo base_url('admin/Indoorteam/fetch_single_user/'); ?>"+user_id,
                
                // data:{userid:user_id},
                // dataType:"json",
                success:function(data){
                   
                     data = JSON.parse(data);
                  

                    console.log(data.ind_modules.toString());

                           $('#name').val(data.ind_name);
                           $('#email').val(data.ind_email);
                          // $('#password').val(data.ind_password);
                           $('#phone1').val(data.ind_phone1);
                           $('#address').val(data.ind_address);
                          // $('#module_access').val(data.ind_modules);
                    
                           $('#rolename').val(data.role_id); 
                           $('#edit_hidden_id').val(data.indoor_id);
            


                }

            })
     


        })
        
 

    });
</script>
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
        columns: [
            { width: "5%" },
            { width: "5%" },
            { width: "40%" },
            { width: "40%" },
            { width: "40%" },
            { width: "40%" },
            { width: "10%" },
            { width: "40%" }
            
           
          ],
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
<script>
     // role_Action 1 is Add role ........ role_Action 2 is edit role  

             $('#btnaddRole').click(function(){
                 $('#role_action').val(1);
                
                console.log($('#role_action').val());

             });

             
             function edit_role_action(){

                 $('#role_action').val(2);
                
                console.log($('#role_action').val());


             }

    // ADD and Update

    function btnsubmit() {
       // document.getElementById("add_tournament").submit();// Form submission

        console.log('i am submit butn');
       // console.log($('#teamlimit').val());
                var check = 0;
                var rolecheck=$('#rolename').val();
                console.log(rolecheck);

                if (rolecheck=='') {
                    
                    $('#rolespan').text("Please Select Role!");
                    $('#rolecheck').css("border","1px solid red");
                   // console.log('i need to show show span msg');
                
                    check = 1;
                    console.log(check);
                }
                if(rolecheck !='') {
                    $('#rolespan').text("");
                    $('#rolecheck').css("border","1px solid green");
                     
                    console.log(check);
                }
                var titlecheck=$('#name').val();
                console.log(titlecheck);

                if (titlecheck=='') {
                    
                    $('#titlespan').text("Please Enter Name!");
                    $('#name').css("border","1px solid red");
                    
                    check = 1;
                    console.log(check);
                }
                if(titlecheck !='') {
                    $('#titlespan').text("");
                    $('#name').css("border","1px solid green");
                     console.log('i need to empty span msg');
                
                //    check = 0;
                    console.log(check);
                }
                if($('#email').val() == ''){

                    $('#emailspan').text("Please Enter Email!");
                    $('#email').css("border","1px solid red");
                    
                    check = 1;
                    console.log(check);

                }
                  if($('#email').val() != ''){

                    $('#emailspan').text("");
                    $('#email').css("border","1px solid green");
                    
                    
                    console.log(check);

                }
                
               
                if($('#phone1').val() == ''){

                    $('#phone1span').text("Please Enter Mobile Number!");
                    $('#phone1').css("border","1px solid red");
                    
                    check = 1;
                    console.log(check);

                }
                 if($('#phone1').val() != ''){

                    $('#phone1span').text("");
                    $('#phone1').css("border","1px solid green");
                    
                   
                    console.log(check);

                }
               
                   if($('#address').val() == ''){

                    $('#addressspan').text("Please Enter Address!");
                    $('#address').css("border","1px solid red");
                    
                    check = 1;
                    console.log(check);

                }
                 if($('#address').val() != ''){

                    $('#addressspan').text("");
                    $('#address').css("border","1px solid green");
                    
                   
                    console.log(check);

                }

                  console.log(check);
                  //check=0;
                if(check == 1) {
                    swal('missing fields', 'Please Fill the Required Fields', 'error');
                    console.log(check);
                } else {
                    // alert();

                    var temp=$('#role_action').val();
                    if(temp == "1"){
                        var txt="Outdoor Team Added!"
                    }else{
                        var txt="Outdoor Team Updated!"
                    }
                          
                            Swal.fire({title:txt,
                            text:"Successfully",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    $('#add_indoor').attr('action',' <?php echo base_url() ?>admin/Indoorteam/add_outdoor');
                                   $('#add_indoor').submit();
                                }
                            })
                           
                           }
                }
    





              // DELETE

     function deleteItem(id){
        console.log("Clicked ID:"+id);
       
              Swal.fire({
                         title: 'Are you sure?',
                         html: 'Record will delete permanently!',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Delete it!'
                       }).then((result) => {
                         if (result.value) {
                            
                           
                             Swal.fire({title:"Record Deleted!",
                            text:"",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    window.location.href="<?php echo base_url() ?>admin/Indoorteam/delete_out/"+id;

                                }
                            })

                           
                            
                          
                           }
                       })
                   }




    
    
</script>
