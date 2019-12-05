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
                            <li class="breadcrumb-item active">Grounds</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Grounds</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                                <?php } else if ($this->session->flashdata('error')) { ?>
                                    <p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;">Add Ground</button>
                        <table id="example" class="table table-bordered">  
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>City</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($ground) > 0) { ?>
                                    <?php foreach ($ground as $grounds) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $grounds->name; ?></td>
                                            <td><?php echo $grounds->ground_title; ?></td>
                                            <td><?php echo $grounds->ground_city; ?></td>
                                            <td><?php echo $grounds->ground_price; ?></td>
                                            <td><a href="<?php echo $grounds->ground_location; ?>"><?php echo $grounds->ground_location; ?></a></td>
                                            <td>
                                                <a id="" data_id="<?php echo $grounds->ground_id; ?>" href="<?php echo base_url(); ?>admin/ground/update" class="action-icon editUser" data-toggle="modal" data-target="#editModal"><i class="mdi mdi-square-edit-outline"></i></a> 
                                                <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $grounds->ground_id; ?>)"> <i class="mdi mdi-delete"></i></a>

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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Ground</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-body">
                            <form  id="add_ground" method="POST" name="add_ground">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name" name="name"  placeholder="Ground Owner Name">
                                            <span id="namespan" style="color: red;"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                            <span id="phonespan" style="color: red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Id">
                                            <span id="emailspan" style="color: red;"></span>

                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="title" name="title"  placeholder="Title">
                                            <span id="titlespan" style="color: red;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="custom-select"  name="teamcity">
                                                <?php
                                                if (!empty($city)) {
                                                    foreach ($city as $city) {
                                                        ?>
                                                        <option class="bloodgrouplist" value="<?php echo $city->name; ?>"> <?php echo $city->name; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <span id="teamcityspan"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Capacity</label>
                                            <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity">
                                            <span id="capacityspan" style="color: red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Area</label>
                                            <input type="text" class="form-control" id="area" name="area" placeholder="Area(square feet)">
                                        </div>

                                        <div class="form-group">
                                            <label>Pitch Type</label><br>
                                            <select class="select2-multiple" data-toggle="select2" name="pitch[]" id="pitchtypes" multiple="multiple" data-placeholder="Choose ..." style="width: 100%;">
                                                <option value="Hard Ball">Hard Ball</option>
                                                <option value="Tape Ball">Tape Ball</option> 
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Per Match Charges</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Per Match Charges">
                                            <span id="pricespan" style="color: red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Location Link</label>
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Location Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Teams Type</label>
                                            <select class="custom-select"  name="teamtype">
                                                <?php
                                                if (!empty($team)) {
                                                    foreach ($team as $teams) {
                                                        ?>
                                                        <option class="bloodgrouplist" value="<?php echo $teams->type_name; ?>">
                                                            <?php echo $teams->type_name; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Matches Type</label>
                                            <select class="custom-select"  name="MatchType">
                                                <?php
                                                if (!empty($matches)) {
                                                    foreach ($matches as $match) {
                                                        ?>
                                                        <option class="bloodgrouplist" value="<?php echo $match->match_name; ?>"> <?php echo $match->match_name; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>                            
                            </form>
                        </div> <!-- end card-body-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="submitForm()" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Model -->
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Ground</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url(); ?>admin/ground/update_ground" id="edit_ground">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="edit_name" name="name"  placeholder="Ground Owner Name">

                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="edit_phone" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="edit_email" name="email" placeholder="Email Id">
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" id="edit_title" name="title"  placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="custom-select"  name="teamcity" id="edit_city">
                                                    <?php
                                                    if (!empty($Ecity)) {
                                                        foreach ($Ecity as $cites) {
                                                            ?>
                                                            <option class="bloodgrouplist" value="<?php echo $cites->name; ?>"> <?php echo $cites->name; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Capacity</label>
                                                <input type="text" class="form-control" id="edit_capacity" name="capacity" placeholder="Capacity">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Area</label>
                                                <input type="text" class="form-control" id="edit_area" name="area" placeholder="Area(square feet)">
                                            </div>
                                            <div class="form-group">
                                                <label>Pitch Type</label><br>
                                                <div class="edit_pitch">
                                                    <select class="select2-multiple" data-toggle="select2" name="pitch[]" id="edit_pitchh" multiple="multiple" data-placeholder="Choose ..." style="width: 100%;">
                                                        <option value="Hard Ball">Hard Ball</option>
                                                        <option value="Tape Ball">Tape Ball</option> 
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Per Match Charges</label>
                                                <input type="text" class="form-control" id="edit_price" name="price" placeholder="Per Match Charges">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Location Link</label>
                                                <input type="text" class="form-control" id="edit_location" name="location" placeholder="Location Link">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Teams Type</label>
                                                <div class="edit_team">
                                                    <select class="custom-select"  name="teamtype" id="">
                                                        <?php
                                                        if (!empty($Eteam)) {
                                                            foreach ($Eteam as $teams) {
                                                                ?>
                                                                <option class="bloodgrouplist" value="<?php echo $teams->type_name; ?>">
                                                                    <?php echo $teams->type_name; ?>
                                                                </option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Matches Type</label>
                                                <select class="custom-select"  name="MatchType" id="edit_match">
                                                    <?php
                                                    if (!empty($Ematches)) {
                                                        foreach ($Ematches as $match) {
                                                            ?>
                                                            <option class="bloodgrouplist" value="<?php echo $match->match_name; ?>"> <?php echo $match->match_name; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>  
                                    <input type="hidden" id="save_id" name="ground_id">
                                </form>

                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="save" dataid="<?php echo $grounds->ground_id; ?>" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<?php $this->load->view('admin/footer') ?>

<script>
    var table = $('#example').DataTable({
    dom: 'Blfrtip',
            buttons: [
//            {
//                text: "View",
//                enabled: false,
//                action: function () {
//                    var ids = $.map(table.rows('.selected').data(), function (item) {
//                        return item[1]
//                    });
//                    window.location.href = "<?php echo base_url() ?>admin/Dashboard/view_players/" + ids;
//                }
//            },
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
//    table.on('select deselect', function () {
//    var selectedRows = table.rows({selected: true}).count();
//    table.button(0).enable(selectedRows > 0);
//    });</script>
<script>
    $("#save").click(function (e) {
    e.preventDefault();
    document.getElementById("edit_ground").submit(); // Form submission

    });</script>
<script>
    $(".editUser").click(function (e) {
    e.preventDefault();
    var id = $(this).attr("data_id");
    $.ajax({
    url: "<?php echo base_url('admin/Ground/edit/') ?>" + id,
            success: function (data) {
            var res = jQuery.parseJSON(data);
           var myStr = res['ground_pitch'];
        var strArray = myStr.split(',');
       
        // Display array values on page
//        for(var i = 0; i < strArray.length; i++){
//            $("#edit_pitchh").val(strArray[i]);
                var abc= strArray[0];
                $("#edit_pitchh").val(abc);
//                $('#edit_pitchh').trigger('change').val(['Hard ball', 'Tape ball']);
              //  .find("option[value=" + strArray +"]").attr('selected', true);
//                $("select option[value=abc]").attr("selected","selected");
//                $("select option[abc]").attr("selected","selected");
          //  $('#edit_pitchh').attr("value",abc);
          
            console.log(abc);
//        }
            $("#save_id").val(res['ground_id']);
            $("#edit_name").val(res['name']);
            $("#edit_phone").val(res['phone']);
            $("#edit_email").val(res['email']);
            $("#edit_title").val(res['ground_title']);
            $("#edit_capacity").val(res['ground_capacity']);
            $("#edit_area").val(res['ground_area']);
            $("#edit_price").val(res['ground_price']);
            $("#edit_location").val(res['ground_location']);
            // $("#edit_pitch").val(res['ground_pitch']);
            $("#edit_city").val(res['ground_city']);
            $("#edit_match").val(res['ground_type']);
           
            //$("div.edit_pitch select").val(strArray[0]);
            $("div.edit_team select").val(res['ground_category']);
            }
    });
    });</script> 
<script>
    function deleteItem(id){
    console.log("Clicked ID:" + id);
    Swal.fire({
    title: 'Are you sure?',
            html: 'Record will delete permanently',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#FDA81A',
            cancelButtonColor: '#B22E06',
            confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
    if (result.value) {
    Swal.fire({title:"Data Deleted!",
            text:"",
            type:"success",
            confirmButtonClass:"btn btn-confirm mt-2"}).then((result) => {
    if (result.value){
    window.location.href = "<?php echo base_url() ?>admin/Ground/delete/" + id;
    }
    })
            //...//
    }
    })
    }
</script>
<script>

    function submitForm() {
    console.log('i am submit butn');
    var check = 0;
    if ($('#name').val() == '') {
    $('#namespan').text("Please fill this field!");
    $('#name').css("border", "1px solid red");
//                    document.forms["msform"]["fullname"].style.border = "1px solid red";
    check = 1;
    }
    if ($('#phone').val() == '') {
    $('#phonespan').text("Please fill this field!");
//                    document.forms["msform"]["city"].style.border = "1px solid red";
    $('#phone').css("border", "1px solid red");
    check = 1;
    }
    if ($('#email').val() == '') {
    $('#emailspan').text("Please fill this field!");
//                    document.forms["msform"]["fathername"].style.border = "1px solid red";
    $('#email').css("border", "1px solid red");
    check = 1;
    }
    if ($('#title').val() == '') {
    $('#titlespan').text("Please fill this field!");
//                    document.forms["msform"]["cnic"].style.border = "1px solid red";
    $('#title').css("border", "1px solid red");
    check = 1;
    }
////               
//             

//
//                
    if ($('#teamcity').val() == '') {
    $('#teamcityspan').text("Please fill this field!");
//                    document.forms["msform"]["email"].style.border = "1px solid red";
    $('#teamcity').css("border", "1px solid red");
    check = 1;
    }
    if ($('#capacity').val() == '') {
    $('#capacityspan').text("Please fill this field!");
//                    document.forms["msform"]["password"].style.border = "1px solid red";
    $('#capacity').css("border", "1px solid red");
    check = 1;
    }
    if ($('#price').val() == '') {
    $('#pricespan').text("Please fill this field!");
//                    document.forms["msform"]["username"].style.border = "1px solid red";
    $('#price').css("border", "1px solid red");
    check = 1;
    }
//                 check=0;
    if (check == 1) {
    swal('missing fields', 'Please Fill the Required Fields', 'error');
    } else {
    // alert();




    Swal.fire({title:"Added!",
            text:"",
            type:"success",
            confirmButtonClass:"btn btn-confirm mt-2"}).then((result) => {
    if (result.value){
    $('#add_ground').attr('action', '<?php echo base_url(); ?>admin/ground/add_ground');
    $('#add_ground').submit();
    }
    })

            //...//


    }


    }
    //end of function moveto2level

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $('#example-getting-started').multiselect();
    });</script>
<script>
    $('#edit_pitchh').select2();</script>
<script>
    $('#pitchtypes').select2();
</script>



