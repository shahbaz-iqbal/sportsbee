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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            Add
                        </button>
                        <!-- le class="fixed  dt-responsive">  
    <col width="20px" />
    <col width="30px" />
    <col width="40px" /> -->
                        <table id="example" class="table  table-bordered display nowrap "   name="tourntable">
                           
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>City</th>
                                    <th>Entry Fee</th>
                                    <th>Dated</th>
                                    <th>Team Limit</th>
                                    <th>Sports Name</th>
                                    <th>Match Type</th>
                                    <th>Team Type</th>
                                    <th>Prize</th>
                                    <th>Sponsers</th>
                                    <th>Event Type</th>
                                   <!--  <th>Status</th> -->
                                    <th>Action</th>
                                </tr></thead><tbody>
                                <?php if (count($tour) > 0) { ?>
                                    <?php foreach ($tour as $d) { ?>
                                        <tr>
                                            <td></td>
                                            <td id="tbltournid"><?php echo $d->tournid; ?></td>
                                            <td id="tblname"><?php echo $d->title; ?></td>
                                            <td id="tblcityid"><?php echo $d->name; ?></td>
                                            <td id="tblentryfee"><?php echo $d->entry_fee; ?></td>
                                            <td id="tbldated"><?php echo $d->dated; ?></td>
                                         <td id="tblteamlimit"><?php echo $d->team_limit; ?></td>
                                          <td><?php echo $d->sport_name; ?></td>
                                           <td><?php echo $d->match_name; ?></td>
                                            <td><?php echo $d->type_name; ?></td>
                                             <td><?php echo $d->prize; ?></td>
                                              <td style="font-weight: bold;"><?php echo $d->sp_name; ?></td>
                                              <td><?php echo $d->tournType; ?></td>

                                            <!-- <td><?php echo $d->prize; ?></td> -->
                                            <td>
                                                <!-- <input type="button" class="btn btn-primary" value="Edit"  onclick="editt();"> -->
                                                <a id="<?php echo $d->tournid; ?>" class="action-icon editUser ac btn-outline-warning" data-toggle="modal"  data-target="#EditModal" ><i class="mdi mdi-square-edit-outline"></i></a>
                                                <!-- <button type="button" id="<?php echo $d->tournid; ?>"  class="btn btn-primary" data-toggle="modal" data-target="#EditModal" style="float:right;" >
                                                      
                                                       Edit
                                                    </button> -->
                                               <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $d->tournid; ?>)"> <i class="mdi mdi-delete"></i></a>
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
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Add Tournament/Challenge</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post"  id="add_tournament" 
                                    name="addEvent">

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Select Tournament/Challenge </label>
                                             
                                                 <select class="custom-select tour_type form-control"  name="type" id="type">
                                                          
                                                   
                                        <option class="bloodgrouplist" value="1">Tournament Series  </option>
                                         <option class="bloodgrouplist" value="2">Instent Challenge  </option>
                                                       

                                                       
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control checkname" id="name" name="name" placeholder="Title" >
                                                <span id="titlespan" style="color: red;"></span>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="custom-select"  name="city" id="city">
                                                    <option value="">Select City</option>
                                                           <?php if (count($cities) > 0) { ?>
                                                         <?php  foreach ($cities as $cities) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $cities->city_id; ?>"> <?php echo  $cities->name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                                    <span id="cityspan" style="color: red;"></span>
                                               
                                            </div>
                                        </div>
                                        
                                    </div>



                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Sport</label>
                                                <select class="custom-select"  name="sportid" id="sportid">
                                                    <option value="">Select Sport</option>
                                                           <?php if (count($sport) > 0) { ?>
                                                         <?php  foreach ($sport as $sport) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $sport->sport_id; ?>"> <?php echo  $sport->sport_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                                    <span id="sportidspan" style="color: red;"></span>
                                                <!-- <input type="text" class="form-control" id="sportid" name="sportid"> -->
                                            </div>
                                        </div>
                                        <div class="col-4">
                                           <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="text" class="form-control flatpickr-input active" id="dated" name="dated" 
                                                readonly="readonly" onchange="checkDate()">
                                                <span id="datedspan" style="color: red;"></span>
                                               
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Match</label>
                                                <!-- <input type="text" class="form-control" id="matchtype" name="matchtype" > -->
                                                <select class="custom-select"  name="matchtype" id="matchtype">
                                                    <option value="">Select Type</option>
                                                           <?php if (count($matchtype) > 0) { ?>
                                                         <?php  foreach ($matchtype as $matchtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $matchtype->matches_type_id; ?>"> <?php echo  $matchtype->match_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                                    <span id="matchtypespan" style="color: red;"></span>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>





                                        <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Entry Fee</label>
                                                <input type="text" class="form-control" id="entry_fee" name="entry_fee"  placeholder="eg:PKR 500">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                           <div class="form-group">
                                                <label>Prize</label>
                                                <input type="text" class="form-control" id="prize" name="prize" placeholder="Prize is">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Team </label>
                                                <select class="select2-multiple" data-toggle="select2" style="width: 100%;" multiple="multiple" name="teamtype[]" id="teamtype">
                                                   <!--  <option value>Select Sponser</option> -->
                                                    <?php if (count($teamtype) > 0) { ?>
                                                         <?php  foreach ($teamtype as $teamtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $teamtype->team_type_id; ?>"> <?php echo  $teamtype->type_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>
                                                </select>
                                                <!-- <select class="custom-select"  name="teamtype" id="teamtype">
                                                    <option value="">Select Type</option>
                                                           <?php //if (count($teamtype) > 0) { ?>
                                                         <?php  //foreach ($teamtype as $teamtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $teamtype->team_type_id; ?>"> <?php echo  $teamtype->type_name; ?>
                                            
                                        </option>
                                                       <?php //} ?>
                                                       <?php //} ?>

                                                       
                                                    </select> -->
                                                    <span id="teamtypespan" style="color: red;"></span>
                                                <!-- <input type="text" class="form-control" id="teamtype" name="teamtype" > -->
                                            </div>
                                        
                                    </div>
                                </div>




                                        <div class="row">
                                        <div class="col-4">




                                            <div class="form-group">
                                                <label>Sponsers</label>
                                                <!-- <input type="text" class="form-control" id="sponsers" name="sponsers"> -->
                                                <select class="select2-multiple1" data-toggle="select2" style="width: 100%;" multiple="multiple" name="sponsers[]" id="sponsers">
                                                   <!--  <option value>Select Sponser</option> -->
                                                    <?php 
                                                    if (!empty($sponsers)) {
                                                        foreach ($sponsers as $sponser) {
                                                            echo '<option value="'.$sponser->sp_id.'">'.$sponser->name.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <span id="sponsersspan" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                           <div class="form-group" id="tourop">
                                                <label>Team Limit</label>
                                                <input type="text" class="form-control checkteamlimit" id="teamlimit" name="teamlimit" placeholder="Team Limit" >
                                                <span id="teamlimitspan" style="color: red;"></span>
                                            </div>
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

 <!-- Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header"  style="background-color: #fda81a">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Edit Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post"  id="edit_tournament">
                                      <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <!-- <input type="hidden" id="save_id" name="ground_id"> -->
                                                <input type="hidden" name="hiden_userid" id="hiden_userid" >
                                             </div>
                                         </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-4">

                                            <div class="form-group">
                                                <label>Event Title</label>
                                                <input type="text" class="form-control" id="editname" name="name" placeholder="Title">
                                            </div>
                                           
                                        </div>
                                         <div class="col-4">
                                             <div class="form-group">
                                                <label>City</label>
                                                <select class="custom-select"  name="city" id="editcity">
                                                    <option value="">Select City</option>
                                                           <?php if (count($editcities) > 0) { ?>
                                                         <?php  foreach ($editcities as $cities) { ?>
                                                   
                                            <option class="bloodgrouplist" value="<?php echo $cities->city_id; ?>"> <?php echo  $cities->name; ?>
                                                        
                                                    </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                               
                                            </div>
                                            
                                    </div>
                                     <div class="col-4">
                                             <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="text" class="form-control flatpickr-input active" id="editdated" name="dated" 
                                                readonly="readonly">
                                            </div>
                                           
                                        </div>
                                    </div>


                                   
                                    <div class="row">
                                        <div class="col-4">

                                                <div class="form-group">
                                                <label>Sport</label>
                                                <select class="custom-select"  name="sportid" id="editsportid">
                                                    <option value="">Select Sport</option>
                                                           <?php if (count($editsport) > 0) { ?>
                                                         <?php  foreach ($editsport as $sport) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $sport->sport_id; ?>"> <?php echo  $sport->sport_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                                <!-- <input type="text" class="form-control" id="sportid" name="sportid"> -->
                                            </div>
                    
                                        </div>
                                         <div class="col-4">
                                               <div class="form-group">
                                                <label>Match</label>
                                                <!-- <input type="text" class="form-control" id="matchtype" name="matchtype" > -->
                                                
                                                <select class="custom-select"  name="matchtype" id="editmatchtype">
                                                           <?php if (count($editmatchtype) > 0) { ?>
                                                         <?php  foreach ($editmatchtype as $matchtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $matchtype->matches_type_id; ?>"> <?php echo  $matchtype->match_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>

                                                       
                                                    </select>
                                            </div>
                                           
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Entry Fee</label>
                                                <input type="text" class="form-control" id="editentry_fee" name="entry_fee"  placeholder="eg:PKR 500">
                                            </div>
                                          
                                            
                                           
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-4">

                                            <div class="form-group">
                                                <label>Prize</label>
                                                <input type="text" class="form-control" id="editprize" name="prize" placeholder="Prize is">
                                            </div>
                                         
                                          
                                        </div>
                                        <div class="col-4">

                                              <div class="form-group">
                                                <label>Team</label>
                                                <select class="select2-multiple" data-toggle="select2" style="width: 100%;" multiple="multiple" name="teamtype[]" id="editteamtype">
                                                   <!--  <option value>Select Sponser</option> -->
                                                    <?php if (count($editteamtype) > 0) { ?>
                                                         <?php  foreach ($editteamtype as $teamtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $teamtype->team_type_id; ?>"> <?php echo  $teamtype->type_name; ?>
                                            
                                        </option>
                                                       <?php } ?>
                                                       <?php } ?>
                                                </select>


                                                <!-- <select class="custom-select"  name="teamtype" id="editteamtype">
                                                    <option value="">Select Type</option>
                                                           <?php //if (count($editteamtype) > 0) { ?>
                                                         <?php  //foreach ($editteamtype as $teamtype) { ?>
                                                   
                                        <option class="bloodgrouplist" value="<?php echo $teamtype->team_type_id; ?>"> <?php echo  $teamtype->type_name; ?>
                                            
                                        </option>
                                                       <?php //} ?>
                                                       <?php //} ?>

                                                       
                                                    </select> -->
                                                <!-- <input type="text" class="form-control" id="teamtype" name="teamtype" > -->
                                            </div>
                                            
                                          
                                        </div>
                                        <div class="col-md-4">
                                              <div class="form-group">
                                               <label>Sponsers</label>
                                                <!-- <input type="text" class="form-control" id="sponsers" name="sponsers"> -->
                                                <select class="select2-multiple2" data-toggle="select2" data-placeholder="Choose ..." style="width: 100%;" multiple="multiple" name="sponsers[]" id="edit_sponsers">
                                                  
                                                    <?php 
                                                    if (!empty($editsponsers)) {
                                                        foreach ($editsponsers as $sponser) {
                                                            echo '<option value="'.$sponser->sp_id.'">'.$sponser->name.'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                         
                                        </div>
                                    </div>
                                   <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                            
                                            <div class="form-group" id="tourop">
                                                <label>Team Limit</label>
                                                <input type="text" class="form-control checkeditteamlimit" id="editteamlimit" name="teamlimit" placeholder="Team Limit">
                                                <span id="editteamlimitspan" style="color: red;"></span>
                                            </div>


                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                        
                                    
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="submitedit()"  class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- there -->

<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right;">
                            Add Tournament
                        </button>
<?php $this->load->view('admin/footer') ?>
<script type="text/javascript">
    $('#edit_sponsers').select2();
    $('.select2-multiple1').select2();
    $('#teamtype').select2();
    $('#editteamtype').select2();
    function deleteItem(id){
        console.log("Clicked ID:"+id);
        // Swal.fire({
        //     title:'Alert called',
        //     type:'warning'

        // });
              Swal.fire({
                         title: 'Are you sure?',
                         html: 'Record will delete permanently',
                         type: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#fda81a',
                         cancelButtonColor: '#B22E06',
                         confirmButtonText: 'Yes, Delete it!'
                       }).then((result) => {
                         if (result.value) {
                            
                           
                             Swal.fire({title:"Data Deleted!",
                            text:"",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    window.location.href="<?php echo base_url() ?>admin/tournament/delete/"+id;

                                }
                            })

                            //...//
                            
                          
                           }
                       })
    }


    // check title //
 



    // ....//
    $(document).ready(function(){

      
        $(".flatpickr-input").flatpickr({
            minDate:new Date()
        });


        // $('#sa-warning').click(function(){
        //     // var id = $(this).attr('data-id');
        //     console.log("Clicked ID:");
        // //      Swal.fire({
        // //                  title: 'Are you sure?',
        // //                  html: 'Record will delete permanently',
        // //                  type: 'warning',
        // //                  showCancelButton: true,
        // //                  confirmButtonColor: '#fda81a',
        // //                  cancelButtonColor: '#B22E06',
        // //                  confirmButtonText: 'Yes, Delete it!'
        // //                }).then((result) => {
        // //                  if (result.value) {
        // //                     //congrats_msg();
                           
        // //                     //  Swal.fire({title:"Data Deleted!",
        // //                     // text:"",
        // //                     // type:"success",
        // //                     // confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
        // //                     //     if(result.value){
        // //                     //        // window.location.href="<?php echo base_url() ?>admin/tournament/delete/"+id;

        // //                     //     }
        // //                     // })

        // //                     //...//
                            
                          
        // //                    }
        // //                })
        // })
    //  function type(){
    //     var typeval=$('#type').value();
    //     console.log(typeval);
    //     if(typeval=='1'){
    //         $('#teamlimit').show();
    //     }else{
    //          $('#teamlimit').hide();
    //     }
    // }

    $(".tour_type").change(function(e){
        var tour_type = $(this).val();
       // alert("SELECTED:"+tour_type);
         if(tour_type=='1'){
           // $('#tourop').show();
            $('#teamlimit').prop("disabled", false);
        }else{
             $('#teamlimit').prop("disabled", true);
            
             $('#teamlimit').val("2");
             var chk_team=$('#teamlimit').val();
             console.log(chk_team );

        }
    });

    $(".checkname").change(function(){
          var title=$('#name').val();
                
               console.log('i am title check of function');
             if(title==''){

                    $('#titlespan').text("Please Enter Title!");
                   // document.forms["addEvent"]["name"].style.border = "1px solid red";
                   $('#name').css("border","1px solid red");
                    
           }else{
              $('#titlespan').text("");
                   // document.forms["addEvent"]["name"].style.border = "1px solid red";
                   $('#name').css("border","1px solid green");
                   

           }

        });


        $('.table tbody').on('click','.ac',function(){
            console.log('i am working');

            var user_id=$(this).attr("id");
           // alert('this is user id'+user_id);
            $.ajax({
                url:"<?php echo base_url('admin/tournament/fetch_single_user/'); ?>"+user_id,
                
                // data:{userid:user_id},
                // dataType:"json",
                success:function(data){
                   
                     data = JSON.parse(data);

                    if(data.teamlimit=='2'){
                        // console.log('i am none');
                        // console.log(data.teamlimit);

                         $('#editteamlimit').val(data.teamlimit);
                         $('#editteamlimit').prop("readonly", true);

                    }else{
                       // console.log('i am not none');
                        ///console.log(data.teamlimit);

                        $('#editteamlimit').val(data.teamlimit);
                        $('#editteamlimit').prop("readonly", false);

                    }



                     
                  
                    //console.log(data.id);
              $('#editname').val(data.title);
              $('#editsponsers').val(data.sponser);
              $('#editprize').val(data.prize);
              $('#editteamtype').val(data.teamtypeid);
              $('#editsportid').val(data.sport_id);
              $('#editdated').val(data.dated);
              $('#editentry_fee').val(data.entryfee);
              $('#editcity').val(data.city_id);
              $('#editmatchtype').val(data.matchtypeid);
              
              $('#editsponsers').val(data.sp_id);
              $('#hiden_userid').val(data.id);
            // var z=$('#hiden_userid').val();
            // var z= $('#edit_tournament').val(data.tournid);
            // console.log(z)
// 


                }

            })
       // var currow=$(this).closest('tr');
       // var id=currow.find('td:eq(1)').text();
       // var title=currow.find('td:eq(2)').text();
       // var city=currow.find('td:eq(3)').text();
       // var entryfee=currow.find('td:eq(4)').text();
       // var dated=currow.find('td:eq(5)').text();
       // var teamlimit=currow.find('td:eq(6)').text();
       // var sportname=currow.find('td:eq(7)').text();
       // var matchtype=currow.find('td:eq(8)').text();
       // var teamtype=currow.find('td:eq(9)').text();
       // var prize=currow.find('td:eq(10)').text();
       // var sponser=currow.find('td:eq(11)').text();
       //      alert('x is :'+id);
       //        $('#editname').val(title);
       //        $('#editsponsers').val(sponser);
       //        $('#editprize').val(prize);
       //        $('#editteamtype').val(teamtype);
       //        $('#editsportid').val(sportname);
       //        $('#edi').val();
       //        $('#editentry_fee').val(entryfee);
       //        $('#editcity').val(city);
       //        $('#editmatchtype').val(matchtype);
       //        $('#editteamlimit').val(teamlimit);


        })
        
      //   $('#editbtn').click(function(){
      //  // var x=document.getElementById("myTable").rows[10].cells.item(1).innerHTML;
      // // var x=$('#tblname').val();
      // console.log('i am working');
      //  var currow=$(this).closest('tr');
      //  var id=currow.find('td:eq(2)').text();
      //       alert('x is :'+id);
      //       // var abc=$('#editbtn').val();
      //       // alert(abc);
      //       // var oldtitle=$('#name').val();
      //        $('#editname').val(id);
      //       // alert("oldTitle is:"+oldtitle);
      //   })

//         function tabledata(){
//             $('tbledit').Tabledit({
//     url: 'example.php',
//     columns: {
//         identifier: [0, 'id'],
//         editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
//     }
// });
//         }

    });
</script>
<script>
  
    $(".checkteamlimit").change(function(e){
        var teamlim = $(this).val();
       // alert("SELECTED:"+tour_type);
         teamlim=parseInt(teamlim);
         console.log(teamlim);
         if(teamlim % 2 == 0){
            console.log('i am devisible by 2 number');
            $('#teamlimit').prop("disabled", false);
             $('#teamlimitspan').text("");
        }else{
             $('#teamlimit').val("");
             $('#teamlimitspan').text("Only Even Number of Teams Allowed!");

        }
    });
      $(".checkeditteamlimit").change(function(e){
        var teamlim = $(this).val();
       // alert("SELECTED:"+tour_type);
         teamlim=parseInt(teamlim);
         console.log(teamlim);
         if(teamlim % 2 == 0){
            console.log('i am devisible by 2 number');
            $('#editteamlimit').prop("disabled", false);
             $('#teamlimitspan').text("");
        }else{
             $('#editteamlimit').val("");
             $('#editteamlimitspan').text("Only Even Number of Teams Allowed!");

        }
    });
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
        select: {
            style: 'multi',
            // selector: ':not(:first-child)'
            selector: 'td:first-child'
        },
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
<script>
    
    function btnsubmit() {
       // document.getElementById("add_tournament").submit();// Form submission

        console.log('i am submit butn');
       // console.log($('#teamlimit').val());
                var check = 0;
                var titlecheck=$('#name').val();
                console.log(titlecheck);

                if (titlecheck=='') {
                    
                    $('#titlespan').text("Please Enter Title!");
                    $('#name').css("border","1px solid red");
                    console.log('i need to show show span msg');
                
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
                if($('#city').val() ==''){
                    console.log('i am empty city');
                    $('#cityspan').text("Please Select City!");
                    $('#city').css("border","1px solid red");
                   
                     check = 1;
                }
                if($('#city').val() !=''){
                    console.log('i am fill city');
                    $('#cityspan').text("");
                    $('#city').css("border","1px solid green");
                   
                    // check = 0;
                }
                 if($('#sportid').val() ==''){
                    console.log('i am empty city');
                    $('#sportidspan').text("Please Select Sport!");
                    $('#sportid').css("border","1px solid red");
                   
                     check = 1;
                }
                if($('#sportid').val() !=''){
                    console.log('i am fill city');
                    $('#sportidspan').text("");
                    $('#sportid').css("border","1px solid green");
                   
                    // check = 0;
                }
                 if($('#dated').val() ==''){
                    console.log('i am empty city');
                    $('#datedspan').text("Please Select Date!");
                    $('#dated').css("border","1px solid red");
                   
                     check = 1;
                }
                if($('#dated').val() !=''){
                    console.log('i am fill city');
                    $('#datedspan').text("");
                    $('#dated').css("border","1px solid green");
                   
                     //check = 0;
                }
                if($('#matchtype').val() ==''){
                    console.log('i am empty city');
                    $('#matchtypespan').text("Please Select Match Type!");
                    $('#matchtype').css("border","1px solid red");
                   
                     check = 1;
                }
                if($('#matchtype').val() !=''){
                    console.log('i am fill city');
                    $('#matchtypespan').text("");
                    $('#matchtype').css("border","1px solid green");
                   
                     check = 0;
                }
                 if($('#teamtype').val() ==''){
                    console.log('i am empty city');
                    $('#teamtypespan').text("Please Select Team Type!");
                    $('#teamtype').css("border","1px solid red");
                   
                     check = 1;
                }
                if($('#teamtype').val() !=''){
                    console.log('i am fill city');
                    $('#teamtypespan').text("");
                    $('#teamtype').css("border","1px solid green");
                   
                     //check = 0;
                }

                 if($('#sponsers').val() ==''){
                    console.log('i am empty city');
                    $('#sponsersspan').text("Please Select Sponser!");
                    $('#sponsers').css("border","1px solid red");
                    console.log('i am sponsers eroor');
                   
                     check = 1;
                }
                if($('#sponsers').val() !=''){
                    console.log('i am fill city');
                    $('#sponsersspan').text("");
                    $('#sponsers').css("border","1px solid green");
                    console.log('i am sponsers positive case');
                    console.log($('#sponser').val());
                   
                     //check = 0;
                }
                if($('#teamlimit').val() ==''){
                    //console.log('i am empty city');
                    $('#teamlimitspan').text("Please Enter Team Limit!");
                    $('#teamlimit').css("border","1px solid red");
                    //console.log('i am sponsers eroor');
                   
                     check = 1;
                }
                if($('#teamlimit').val() !=''){
                    //console.log('i am fill city');
                    $('#teamlimitspan').text("");
                    $('#teamlimit').css("border","1px solid green");
                  //  console.log('i am sponsers positive case');
                    //console.log($('#sponser').val());
                    console.log($('#teamlimit').val());
                   
                     //check = 0;
                }




                if(check == 1) {
                    swal('missing fields', 'Please Fill the Required Fields', 'error');
                    console.log(check);
                } else {
                    // alert();
                            Swal.fire({title:"Event Added!",
                            text:"Successfully",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    $('#add_tournament').attr('action',' <?php echo base_url() ?>admin/Tournament/add_tournament');
                                   $('#add_tournament').submit();
                                }
                            })
                           
                           }
                }
    



//  function submitForm() {
           
               
// //                 check=0;
                
//             //end of function moveto2level
    // $('#submitedit').click(function(){
        
    //      document.getElementById("edit_tournament").submit();// Form submission
    // })



        function submitedit() {
            var editcheck=0;
           if($('#editteamlimit').val() == ""){
                
                editcheck=1;
                $('#editteamlimitspan').text("Enter Team Limit!");
           }


        if(editcheck == 1) {
                    swal('missing fields', 'Please Fill the Required Fields', 'error');
                    console.log(editcheck);
                } else {
                    // alert();
                            Swal.fire({title:"Data Updated!",
                            text:"Successfully",
                            type:"success",
                            confirmButtonClass:"btn btn-confirm mt-2"}).then((result)=>{
                                if(result.value){
                                    $('#edit_tournament').attr('action',' <?php echo base_url() ?>admin/Tournament/edit_tournament');
                                   $('#edit_tournament').submit();
                                }
                            })
                           
                           }

              }
    
    
</script>
<script src="<?php echo base_url(''); ?>application/assets/libs/flatpickr/flatpickr.min.js"></script>