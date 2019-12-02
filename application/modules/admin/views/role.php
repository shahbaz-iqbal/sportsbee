<?php $this->load->view('admin/header'); ?>


<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="">Settings</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Role Types</h4>
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
                            Add Role
                        </button>
                       
                            
                        <table id="example" class="table  table-bordered "   name="tourntable">
                           
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Role Types</th>
                                  
                                    <th>Action</th>
                                </tr></thead><tbody>
                                <?php if (count($roles) > 0) { ?>
                                    <?php foreach ($roles as $data) { ?>
                                        <tr>
                                            <td></td>
                                            <td id="tblroleid"><?php echo $data->role_id; ?></td>
                                            <td id="tblrolename"><?php echo $data->role_name; ?></td>
                                           

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                            <td>

                                             

                                                <!--  -->
                                                <!-- <input type="button" class="btn btn-primary" value="Edit"  onclick="editt();"> -->
                                                <a id="<?php echo $data->role_id; ?>" class="action-icon editUser ac btn-outline-warning" data-toggle="modal"  data-target="#exampleModal" onclick="edit_role_action()" ><i class="mdi mdi-square-edit-outline"></i></a>
                                                <!-- <button type="button" id="<?php echo $d->tournid; ?>"  class="btn btn-primary" data-toggle="modal" data-target="#EditModal" style="float:right;" >
                                                      
                                                       Edit
                                                    </button> -->
                                               <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $data->role_id; ?>)"> <i class="mdi mdi-delete"></i></a>
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
                                <form method="post"  id="add_role"  name="add_role">

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Enter Role Type </label>
                                                <div class="form-group"> 
                                                    
                                                    <input type="text" name="rolename" id="rolename" class="form-control" placeholder="Enter Role Type">
                                                </div>
                                                  
                                            
                                                    <span id="rolespan" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="hidden" name="role_action" id="role_action">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="edit_hidden_id" id="edit_hidden_id">
                                        </div>
                                    </div>
                                        
                                    
                                 
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
    
    // When click on edit btn get role id to get single role information//
    $(document).ready(function(){


        $('.table tbody').on('click','.ac',function(){
            console.log('i am  edit ,working');

            var user_id=$(this).attr("id");
           
            $.ajax({
                url:"<?php echo base_url('admin/roletype/fetch_single_user/'); ?>"+user_id,
                
                // data:{userid:user_id},
                // dataType:"json",
                success:function(data){
                   
                     data = JSON.parse(data);

                    console.log(data);

                    
                    
                           $('#rolename').val(data.rolename); 
                           $('#edit_hidden_id').val(data.role_id);
            


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
            { width: "20%" },
            { width: "80%" },
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

    // ADD

    function btnsubmit() {
       // document.getElementById("add_tournament").submit();// Form submission

        console.log('i am submit butn');
       // console.log($('#teamlimit').val());
                var check = 0;
                var rolecheck=$('#rolename').val();
                console.log(rolecheck);

                if (rolecheck=='') {
                    
                    $('#rolespan').text("Please Enter Role Type!");
                    $('#rolecheck').css("border","1px solid red");
                   // console.log('i need to show show span msg');
                
                    check = 1;
                    console.log(check);
                }
                if(rolecheck !='') {
                    $('#rolespan').text("");
                    $('#rolecheck').css("border","1px solid green");
                     //console.log('i need to empty span msg');
                
                //    check = 0;
                    console.log(check);
                }
               

                if(check == 1) {
                    swal('missing fields', 'Please Fill the Required Fields', 'error');
                    console.log(check);
                } else {
                    // alert();

                    var temp=$('#role_action').val();
                    if(temp == "1"){
                        var txt="Role Added!"
                    }else{
                        var txt="Role Updated!"
                    }
                          
                            Swal.fire({title:txt,
                            text:"Successfully",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    $('#add_role').attr('action',' <?php echo base_url() ?>admin/Roletype/add_role');
                                   $('#add_role').submit();
                                }
                            })
                           
                           }
                }
    





              // DELETE

     function deleteItem(id){
        console.log("Clicked ID:"+id);
        var text;

             $.ajax({
                url:"<?php echo base_url('admin/roletype/count_reserved_roles/'); ?>"+id,
                success:function(data){
                   // data=JSON.parse(data);
                    console.log(data);
                   text=data;
                     Swal.fire({
                         title: 'Are you sure?',
                         html: text,
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
                                    window.location.href="<?php echo base_url() ?>admin/roletype/delete/"+id;

                                }
                            })

                           
                            
                          
                           }
                       })
                   
                }
             });

             
       
            
                   }




    
    
</script>
