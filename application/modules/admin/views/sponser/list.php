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
                            <li class="breadcrumb-item active">Sponsors</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sponsors</h4>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" style="float: right;">Add Sponser</button>
                        <table id="example" class="table table-bordered">  
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Company Title</th>
                                    <th>City</th>
                                    <th>Interested Sport</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($sponser) > 0) { ?>
                                    <?php foreach ($sponser as $sponsers) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $sponsers->name; ?></td>
                                            <td><?php echo $sponsers->company_title; ?></td>
                                            <td><?php echo $sponsers->city; ?></td>
                                            <td><?php echo $sponsers->intrested_sport; ?></td>
                                            <td>

                                                <?php $image = $sponsers->logo_img; ?>
                                                <?php if (!empty($image)) { ?>
                                                    <img src=" <?php echo base_url('assets/uploads/' . $image); ?>" height="30" width="30">
                                                <?php } else { ?>
                                                    Image Not Avail
                                                <?php } ?>

                                            </td>
                                            <td>
                                                <a data_id="<?php echo $sponsers->sp_id; ?>" href="<?php echo base_url(); ?>admin/ground/update" class="action-icon editUser" data-toggle="modal" data-target="#editModal"><i class="mdi mdi-square-edit-outline"></i></a> 
                                                <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $sponsers->sp_id; ?>)"> <i class="mdi mdi-delete"></i></a>
                                                <!--<a href="<?php echo base_url(); ?>admin/sponser/delete/<?php echo $sponsers->sp_id; ?>" onclick="swal()" class="action-icon"> <i class="mdi mdi-delete"></i></a>-->
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
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Sponser</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="" id="add_ground" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name"  placeholder="Sponser Owner Name" require/>
                                                <span id="namespan" style="color: red;"></span>

                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="required">
                                                <span id="phonespan" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Id" required="required">
                                                <span id="emailspan" style="color: red;"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Company Title</label>
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
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" class="form-control" name="logo" value="2000"  placeholder="Logo">
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <label>Intersted Sport</label>
                                        <select class="custom-select" name="sport">
                                            <option class="bloodgrouplist" value="">Select Sport</option>
                                            <option class="bloodgrouplist" value="Cricket">Cricket</option>
                                            <option class="bloodgrouplist" value="Football">Football</option>
                                            <option class="bloodgrouplist" value="Hockey">Hockey</option>
                                        </select>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Sponser</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url(); ?>admin/sponser/upadte_sponser" id="edit_sponser" enctype='multipart/form-data'>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="editname" name="name"  placeholder="Sponser Owner Name">

                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" id="editphone" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="editemail" name="email" placeholder="Email Id">
                                    </div>
                                    <div class="form-group">
                                        <label>Company Title</label>
                                        <input type="text" class="form-control" id="edittitle" name="title"  placeholder="Title">
                                    </div>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" id="editcity" name="city"  placeholder="City">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" name="updateimg" value="2000" placeholder="Logo">
                                    </div>
                                </div>
                                <input type="hidden" id="img"  name="logo">
                            </div>   
                            <div class="form-group">
                                <label>Intersted Sport</label>
                                <select class="custom-select" id="editsport" name="sport">
                                    <option class="bloodgrouplist" value="">Select Sport</option>
                                    <option class="bloodgrouplist" value="Cricket">Cricket</option>
                                    <option class="bloodgrouplist" value="Football">Football</option>
                                    <option class="bloodgrouplist" value="Hockey">Hockey</option>
                                </select>
                            </div>
                            <input type="hidden" id="sp_id"  name="id">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary delete" data-dismiss="modal">Close</button>
                        <button type="button" id="save" class="btn btn-primary">Save changes</button>
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
//        var selectedRows = table.rows({selected: true}).count();
////table.button( 0 ).enable( selectedRows === 1 );
//        table.button(0).enable(selectedRows > 0);
//    });
</script>
<!--<script>
    function submit() {
        document.getElementById("add_ground").submit(); // Form submission
    }
</script>-->
<script>
    $("#save").click(function (e) {
    e.preventDefault();
    document.getElementById("edit_sponser").submit(); // Form submission
    })
</script>
<script>
            $(".editUser").click(function (e) {
    e.preventDefault();
    var id = $(this).attr("data_id");
    $.ajax({
    url: "<?php echo base_url('admin/sponser/edit/') ?>" + id,
            success: function (data) {
            var res = jQuery.parseJSON(data);
            console.log(res['logo_img']);
            $("#sp_id").val(res['sp_id']);
            $("#editname").val(res['name']);
            $("#editphone").val(res['phone']);
            $("#editcity").val(res['city']);
            $("#editemail").val(res['email']);
            $("#edittitle").val(res['company_title']);
            $("#editsport").val(res['intrested_sport']);
            $('#img').val(res['logo_img']);
            }
    });
    });</script> 

<script>
    function deleteItem(id){
    console.log("Clicked ID:" + id);
    // Swal.fire({
    //     title:'Alert called',
    //     type:'warning'
    // });
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
    window.location.href = "<?php echo base_url() ?>admin/sponser/delete/" + id;
    }
    })
            //...//
    }
    })
    }
//    function deleteItem() {
//        Swal.fire({
//            title: 'Are you sure?',
//            html: 'Record will delete permanently',
//            type: 'warning',
//            showCancelButton: true,
//            confirmButtonColor: '#FDA81A',
//            cancelButtonColor: '#B22E06',
//            confirmButtonText: 'Yes, Delete it!'
//        }).then((result) = > {
//            window.location.href = "<?php echo base_url() ?>admin/sponser/delete/" + id;
//        })
//
//    }
</script>

<!-- Sweet alert init js-->
<script src="<?php echo base_url('') ?>application/assets/js/pages/sweet-alerts.init.js"></script>
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
    $('#add_ground').attr('action', '<?php echo base_url(); ?>admin/sponser/add_sponser');
    $('#add_ground').submit();
    }
    })

            //...//


    }
    }
</script>



