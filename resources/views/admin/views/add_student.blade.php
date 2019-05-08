@extends("admin.layout.layout")
@section('title',"Deshboard")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add Student</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">add student</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="container">
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Student</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" _lpchecked="1" id="frm-add-student" method="">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="reg_no">Registration No</label>
                                            <input type="text" class="form-control" id="reg_no" name='reg_no' placeholder="Enter Registration no">
                                        </div>
                                        <div class="form-group">
                                            <label for="dd_gender">Gender</label>
                                            <select class="form-control" name="dd_gender" id="dd_gender">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="student_name">Name</label>
                                            <input type="text" class="form-control" id="student_name" name='student_name' placeholder="Enter student name">
                                        </div>
                                        <div class="form-group">
                                            <label for="student_email">Email</label>
                                            <input type="email" class="form-control" id="student_email" name='student_email' placeholder="Enter student email">
                                        </div>
                                        <div class="form-group">
                                            <label for="roll_no">Roll no</label>
                                            <input type="number" class="form-control" id="roll_no" name='roll_no' placeholder="Enter roll no">
                                        </div>

                                        <div class="form-group">
                                            <label for="student_phone">Phone no</label>
                                            <input type="number" class="form-control" id="student_phone" name='student_phone' placeholder="Enter student phone no">
                                        </div>
                                        <div class="form-group">
                                            <label for="student_address">Address</label>
                                            <textarea class="form-control" name="student_address" id="student_address" placeholder="Enter Address"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="student_photo">Profile Photo</label>
                                            <input type="file" class="form-control" id="student_photo" name='student_photo'>
                                        </div>

                                        <div class="form-group">
                                            <label for="father_name">Father's Name</label>
                                            <input type="text" class="form-control" id="father_name" name='father_name' placeholder="Enter father's name">
                                        </div>

                                        <div class="form-group">
                                            <label for="mother_name">Mother's Name</label>
                                            <input type="text" class="form-control" id="mother_name" name='mother_name' placeholder="Enter mother's name">
                                        </div>
                                        <div class="form-group">
                                            <label for="student_age">Student Age</label>
                                            <input type="number" min="3" class="form-control" id="student_age" name='student_age' placeholder="Enter age">
                                        </div>

                                        <div class="form-group">
                                            <label for="dd_status">Status</label>
                                            <select class='form-control' id='dd_status' name='dd_status'>
                                                <option value='1'>Active</option>
                                                <option value='0'>Inactive</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
