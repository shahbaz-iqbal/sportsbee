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
                            <li class="breadcrumb-item active">Events</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Events</h4>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" style="float: right;" data-target="#eventModal">
                            Add Events
                        </button>
                        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Ground</button>-->
                        <table id="example" class="table table-bordered">  
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <!--<th>Sponser List</th>-->
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($event)) { ?>
                                    <?php foreach ($event as $d) {
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $d->name; ?></td>
                                            <td><?php echo $d->phone; ?></td>
                                            <td><?php echo $d->email; ?></td>
                                            <td><?php echo $d->title; ?></td>
                                            <!--<td><?php echo $d->sponser_list; ?></td>-->
                                            <td><?php echo $d->youtube_link; ?></td>
                                            <td><?php echo $d->image; ?></td>
                                            <td>
                                                <a href="#" class="action-icon" id="event" onclick="editEvent(<?php echo $d->event_id; ?>)" data-toggle="modal" data-target="#eventModal"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="#" class="action-icon" id="sa-warning" onclick="deleteItem(<?php echo $d->event_id; ?>)"> <i class="mdi mdi-delete"></i></a>
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

        <!-- Modal -->
        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Events</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="" id="EventForm">
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
                                                <label>Sponser List</label><br>
                                                <select class="select2-multiple" data-toggle="select2" id="module_access" name="eventsponser[]" multiple="multiple" data-placeholder="Choose ..." style="width: 100%;">
                                                    <option value="H"> Ball</option>
                                                    <option value="ape"> Ball</option> 
                                                </select> 
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Youtube Link</label>
                                                <input type="text" class="form-control" id="link" name="link" placeholder="Location Link">
                                                <span id="linkspan" style="color: red;"></span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" class="form-control" name="img"  placeholder="Event Images">
                                            </div>

                                        </div>
                                    </div>
                                    <input type="hidden" id="eventid" name="idevent">
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<input type="button" onclick="submitForm()" class="btn btn-primary" placeholder="Saves">-->
                        <button type="button" onclick="formsubmit();" class="btn btn-primary">Save changes</button>
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
    });</script>
<!--<script>
    $("#save").click(function (e) {
    e.preventDefault();
    document.getElementById("edit_ground").submit(); // Form submission

    });</script>-->
<script>
    function editEvent(id){
//        console.log("EDIT ID:"+id);
            $.ajax({
            url: "<?php echo base_url('admin/Event/edit_event/') ?>" + id,
            success: function (data) {

                data = JSON.parse(data);
//                console.log(data['event_id']);
                $("#eventid").val(data['event_id']);
                $("#name").val(data['name']);
                $("#phone").val(data['phone']);
                $("#title").val(data['title']);
                $("#email").val(data['email']);
                $("#module_access").val(data['sponser_list']);
                $("#link").val(data['youtube_link']);
            }
        })
    }
    
//    $("#event").click(function () {
//    var id = $(this).attr("data-id");
//    console.log(id);
//    $.ajax({
//    url: "<?php //echo base_url('admin/Event/edit_event/') ?>" + id,
//            success: function (data) {
//
//            data = JSON.parse(data);
//            console.log(data['event_id']);
//            $("#eventid").val(data['event_id']);
//            $("#name").val(data['name']);
//            $("#phone").val(data['phone']);
//            $("#title").val(data['title']);
//            $("#email").val(data['email']);
//            $("#module_access").val(data['sponser_list']);
//            $("#link").val(data['youtube_link']);
//            }
//    })
//    });
        
</script> 

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
    window.location.href = "<?php echo base_url() ?>admin/event/delete/" + id;
    }
    })
    }
    })
    }
</script>
<script>
    function formsubmit() {
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
    if ($('#link').val() == '') {
    $('#linkspan').text("Please fill this field!");
    //                 check=0;
    }
    if (check == 1) {
    swal('missing fields', 'Please Fill the Required Fields', 'error');
    } else {
    Swal.fire({title:"Added!",
            text:"",
            type:"success",
            confirmButtonClass:"btn btn-confirm mt-2"}).then((result) => {
    if (result.value){
    $('#EventForm').attr('action', '<?php echo base_url(); ?>admin/event/add_event');
    $('#EventForm').submit();
    }
    })
    }}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
    $('#example-getting-started').multiselect();
    });</script>
<script>
    $('#module_access').select2();
</script>





