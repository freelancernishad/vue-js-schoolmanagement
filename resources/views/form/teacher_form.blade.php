@extends('dashboard/layout.layout')
@section('page_title','Dashboard')

@section('container')
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Teacher</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Add New Teacher</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Teacher</h3>
                    </div>
                   <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>

<form id="form" enctype="multipart/form-data" method="POST" action="{{ url('school/staffs/form/submit') }}">

    @csrf
    <input class="form-control" type="hidden" value="{{ sitedetails()[0]->school_id }}" name="school_id" id="school_id" />

    <input class="form-control" type="hidden" value="<?php echo $rows[0]->id ?>" name="id" id="id" />



    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher ID:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherId ?>" placeholder="Enter Teacher ID" name="TeacherId" id="TeacherId" readonly required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Name:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherName ?>" placeholder="Enter Teacher Name" name="TeacherName" id="TeacherName" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Gender:</label>

                <select class="form-control select select2" style="width: 100%;" name="TeacherGender" id="TeacherGender" required>
                    <option value="">
                        SELECT
                    </option>
                    <option>
                        Male
                    </option>
                    <option>
                        Female
                    </option>
                    <option>
                        Other
                    </option>
                </select>

            </div>


<script>
document.getElementById('TeacherGender').value="{{ $rows[0]->TeacherGender }}";

</script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Email:</label>


                    <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherEmail ?>" name="TeacherEmail" required />


            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">

                <label>Teacher Phone Number:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherPhoneNumber ?>" name="TeacherPhoneNumber"  required />

            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Address:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherAddress ?>" placeholder="Enter Teacher Address" name="TeacherAddress" id="TeacherAddress" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Position:</label>

<select name="TeacherPosition" id="TeacherPosition" class="form-control select2">

<option>Assistent</option>
<option>Head Teacher</option>

</select>

            </div>

            <script>
                document.getElementById('TeacherPosition').value="{{ $rows[0]->TeacherPosition }}";

                </script>

        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Qualification:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherQualification ?>" placeholder="Enter Teacher Qualification" name="TeacherQualification" id="TeacherQualification" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Incharge Class:</label>
                <select class="form-control select select2" style="width: 100%;" name="InchargeClass" id="InchargeClass" required>
                        <option value="">
                            SELECT
                        </option>
                        <option>
                            Play
                        </option>
                        <option>
                            One
                        </option>
                        <option>
                            Two
                        </option>
                        <option>
                            Three
                        </option>
                        <option>
                            Four
                        </option>
                        <option>
                            Five
                        </option>
                        <option>
                            Six
                        </option>
                        <option>
                            Seven
                        </option>
                        <option>
                            Eight
                        </option>
                        <option>
                            Nine
                        </option>
                        <option>
                            Ten
                        </option>
                    </select>
            </div>

            <script>
                document.getElementById('InchargeClass').value="{{ $rows[0]->InchargeClass }}";

                </script>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Date Of Birth:</label>
                <input class="form-control air-datepicker" type="text" value="<?php echo $rows[0]->TeacherDateOfBirth ?>" placeholder="Enter Teacher Date Of Birth" name="TeacherDateOfBirth" id="TeacherDateOfBirth" required />
            </div>
        </div>
        <div class="col-md-4 d-none">
            <div class="form-group">
                <label>Teacher Joining Date:</label>
                <input class="form-control air-datepicker" type="text" value="<?php echo $rows[0]->TeacherJoiningDate ?>" placeholder="Enter Teacher Joining Date" name="TeacherJoiningDate" id="TeacherJoiningDate"  />
            </div>
        </div>
        <div class="col-md-4 d-none">
            <div class="form-group">
                <label>Teacher Leaving Date:</label>
                <input class="form-control air-datepicker" type="text" value="<?php echo $rows[0]->TeacherLeavingDate ?>" placeholder="Enter Teacher Leaving Date" name="TeacherLeavingDate" id="TeacherLeavingDate"  />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Working Hours:</label>
                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherWorkingHours ?>" placeholder="Enter Teacher Working Hours" name="TeacherWorkingHours" id="TeacherWorkingHours" required />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Subject Handling:</label>

                <input class="form-control" type="text" value="<?php echo $rows[0]->TeacherSubjectHandling ?>" placeholder="Enter Teacher Subject Handling" name="TeacherSubjectHandling" id="TeacherSubjectHandling" required />

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Teacher Status:</label>

                <select class="form-control select select2" style="width: 100%;" name="TeacherStatus" id="TeacherStatus" required>
                    <option>
                        Active
                    </option>
                    <option>
                        Pending
                    </option>

                    <option>
                        Reject
                    </option>
                    <option>
                        Leave
                    </option>
                </select>

            </div>

            <script>
                document.getElementById('TeacherStatus').value="{{ $rows[0]->TeacherStatus }}";

                </script>

        </div>

<input type="hidden" name="ProfilePicture" value="1638958388.jpg">
<input type="hidden" name="created_at">
<input type="hidden" name="updated_at">


        <div class="col-md-12">
            <div class="form-group">

    {{-- <input class="btn btn-info" type="submit" value="SAVE DATA" name="TeacherSubmit" id="submit" /> --}}
    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
            </div>
        </div>



</form>

</div>
</div>

@endsection
