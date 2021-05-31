<!DOCTYPE html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('includes.header')
             <!-- ========== Left Sidebar Start ========== -->
             @include('includes.menu')
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        @yield('body')
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('/') }}assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{ asset('/') }}assets/js/pages/dashboard.init.js"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('/') }}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('/') }}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('/') }}assets/js/pages/datatables.init.js"></script>

        <script src="{{ asset('/') }}assets/libs/select2/js/select2.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{ asset('/') }}assets/libs/%40chenfengyuan/datepicker/datepicker.min.js"></script>
        <!-- Summernote js -->
        <script src="{{ asset('/') }}assets/libs/summernote/summernote-bs4.min.js"></script>
        <!-- form advanced init -->
        <script src="{{ asset('/') }}assets/js/pages/form-advanced.init.js"></script>


        <!-- init js -->
        <script src="{{ asset('/') }}assets/js/pages/ecommerce-select2.init.js"></script>
        <!-- init js -->
        <script src="{{ asset('/') }}assets/js/pages/form-editor.init.js"></script>
        <!-- dropzone plugin -->
        <script src="{{ asset('/') }}assets/libs/dropzone/min/dropzone.min.js"></script>
        <!-- App js -->
        <script src="{{ asset('/') }}assets/js/app.js"></script>
        
        <script>
            $(document).ready(function() {

                $(document).on('click', '.category-status', function(){
                    event.preventDefault();
                    var id = $(this).attr('id');
                    //alert(id);
                    $.ajax({
                        method : "GET",
                        url : 'change-category-status/'+id,
                        dataType : 'JSON',
                        success : function (response) {
                            console.log(response);
                            $('#resultMessage').text(response.message);
                            if(response.status == 1)
                            {
                                $('#status'+response.id).text('Published');
                                $('#'+response.id).attr('class', 'btn btn-sm btn-info category-status');
                                $('#'+response.id).attr('title', 'Published Category');
                                $('#icon'+response.id).attr('class', 'fas fa-arrow-alt-circle-up');
                            }
                            else
                            {
                                $('#status'+response.id).text('Unpublished');
                                $('#'+response.id).attr('class', 'btn btn-sm btn-warning category-status');
                                $('#'+response.id).attr('title', 'Uupblished Category');
                                $('#icon'+response.id).attr('class', 'fas fa-arrow-alt-circle-down');
                            }
                        }
                    });
                    
                });
                $(document).on('click', '.edit-category', function(){
                    event.preventDefault();
                    //$('#editModel').modal('show');
                    $('#updateCategoryImageError').text("");
                    var id = $(this).attr('id');
                    $.ajax({
                        method  : "GET",
                        url     : 'get-category-info-by-id/'+id,
                        dataType: 'JSON',
                        success : function (response) {
                            $('#inputId').val(response.id);
                            $('#inputName').val(response.name);
                            $('#imageInput').val("");
                            $('#inputImage').attr('src', 'http://localhost/online-document-digitization-service/public/'+response.image);
                            $('#editModel').modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                            $('#editModel').modal('show');
                        }
                    });
                });
                $(document).on('submit', '#updateCategoryForm', function() {
                    event.preventDefault();
                    if($('#inputName').val().trim())
                    {
                        var regex = /^[a-zA-Z ]{2,30}$/;
                        if(regex.test($('#inputName').val()))
                        {
                            $.ajax({
                                method      :   "POST",
                                url         :   'update-category-info',
                                dataType    :   'JSON',
                                data        :   new FormData(this),
                                contentType :   false,
                                cache       :   false,
                                processData :   false,
                                success     :   function (response) {
                                    if(response.success)
                                    {
                                        $('#categoryName'+response.id).text(response.name);
                                        $('#categoryImage'+response.id).attr('src', 'http://localhost/admin/public/'+response.image);
                                        $('#resultMessage').text(response.message);
                                        $('#updateCategoryImageError').text("");
                                        $('#editModel').modal('hide');
                                    }
                                    else
                                    {
                                        $('#updateCategoryImageError').text(response.message);
                                        $('#imageInput').val("");
                                        $('#inputImage').attr('src', 'http://localhost/admin/public/no_preview.png');
                                    }
                                }
                            });
                        }
                        else
                        {
                            $('#nameUpdateError').text('Please use character for category name.');
                        }
                    }
                    else
                    {
                        $('#nameUpdateError').text('Category name field is required.');
                    }
                });
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e)
                        {
                            //console.log(input.files[0].name);
                            var arr = input.files[0].name.split(".");
                            if(arr.pop() == 'jpg' || arr.pop() == 'png' || arr.pop() == 'gif' || arr.pop() == 'jpeg')
                            {
                                $('#inputImage').attr('src', e.target.result);
                            }
                            else
                            {
                                $('#updateCategoryImageError').text("image extension is not valid");
                                $('#imageInput').val("");
                                $('#inputImage').attr('src', 'http://localhost/admin/public/no_preview.png');
                            }
                        }
                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                $("#imageInput").change(function() {

                    readURL(this);
                });
                $(document).on('click', '.delete-category', function() {
                    event.preventDefault();
                    var id      = $(this).attr('id');
                    var check   = confirm('Are you sure to delete this!!!');
                    if(check) {
                        $.ajax({
                            method  : "POST",
                            url     : 'delete-category-info',
                            dataType: 'JSON',
                            data : {
                                _token  : $('input[name="_token"]').val(),
                                id      : id,
                            },
                            success : function (response) {
                                console.log(response.categories);
                                var tr = '';
                                $.each(response.categories, function(key, value) {
                                    tr += '<tr>';
                                        tr += '<td>'+ (key+1) +'</td>';
                                        tr += '<td id="categoryName'+value.id+'">'+value.name+'</td>';
                                        tr += '<td><img src="'+value.image+'" id="categoryImage'+value.id+'" alt="'+value.name+'" height="50" width="80"/></td>';
                                        tr += '<td id="status'+value.id+'">'+(value.status == 1 ? "Published" : "Unpublished") +'</td>';
                                        tr += '<td>';
                                            if(value.status == 1) {
                                                tr += '<a href="" class="btn btn-sm btn-info category-status" id="'+value.id+'" title="Published Category">';
                                                    tr += '<i id="icon'+value.id+'" class="fas fa-arrow-alt-circle-up"></i>';
                                                tr += '</a> ';
                                            } else {
                                                tr += '<a href="" class="btn btn-sm btn-warning category-status" id="'+value.id+'" title="Unpublished Category">';
                                                    tr += '<i id="icon'+value.id+'" class="fas fa-arrow-alt-circle-down"></i>';
                                                tr += '</a> ';
                                            }
                                            tr += '<a href="" class="btn btn-sm btn-success edit-category" id="'+value.id+'" title="Edit Category">';
                                                tr += '<i class="fas fa-edit"></i>';
                                            tr += '</a> ';
                                            tr += '<a href="" class="btn btn-sm btn-danger delete-category" id="'+value.id+'" title="Delete Category">';
                                                tr += '<i class="fas fa-trash"></i>';
                                            tr += '</a>';7
                                        tr += '</td>';
                                    tr += '</tr>';
                                });
                                $('#category-datatable').DataTable().destroy();
                                $('#category-datatable tbody').empty().append(tr);
                                $('#category-datatable').DataTable().draw();
                            }
                        });
                    } else {
                        return false;
                    }
                });
                

                
               
                

                
            });

        </script>

    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->
</html>