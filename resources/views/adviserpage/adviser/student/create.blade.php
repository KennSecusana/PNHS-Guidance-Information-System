@extends('adviserpage.app')

@section('content')
    <div class="card-header col-md-10 mx-auto mb-5 elevation-1" style="position: relative; top: 30px;">
        <h1
            style="position: absolute; left:35%; color:whitesmoke; margin:auto; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px; color:dimgray;">
            Add New {{ Auth::user()->advisory }} Student</h1>
        <img src="/images/image17.png" class="user-image img-circle elevation-2 " alt="User Image"
            style="width: 40px; height:40px; border-radius: 50%; background-color: #5bc0de; padding-left: 2px; padding-right:2px; padding-bottom:2px; padding-top: 2px;">
    </div>
    <div class="row d-flex justify-content-center text-dark">
        <div class="col-md-11 elevation-1 p-3 rounded bg-light">
            @if (session('status'))
                <h6 class="alert alert-success">
                    {{ session('status') }}
                </h6>
            @endif
            <div class="container mb-0">
                <form action="{{ url('/students') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray;">School ID</label>
                                <input type="text" name="school_id" class="form-control" placeholder="XXXXXX"
                                    required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Lastname</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Firstname</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Middlename</label>
                                <input type="text" name="middlename" class="form-control" placeholder="Enter Middle Name"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Year/Section</label>
                                <input type="text" name="year_section" class="form-control"
                                    value="{{ Auth::user()->advisory }}" readonly>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter Age" required>

                            </div>

                            </div>
                            <div class="form-group text-dark">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="Female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Student Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Student Email"
                                    required>

                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent/Guardian Name</label>
                                <input type="text" name="parent_name" class="form-control"
                                    placeholder="Enter Parent/Guardian Full Name" required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent Email</label>
                                <input type="email" name="parent_email" class="form-control"
                                    placeholder="Enter Parent/Guardian Email ">

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">Parent Phone No.</label>
                                <input type="text" id="parent_num" name="parent_num" class="form-control @error('parent_num') is-invalid @enderror" name="parent_num" value="{{ old('parent_num') }}"
                                    placeholder="Enter Parent/Guardian phone number " required>

                                    @error('parent_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="" style="color:dimgray;">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                    required>

                            </div>

                            <div class="form-group">
                                <label for="" style="color:dimgray;">School Year</label>
                                <input type="text" name="school_year" class="form-control" placeholder="Enter School Year"
                                    required>

                            </div>
                            <div class="form-group mb-3 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success"><span class="fas fa-save"></span>
                                    Save</button>

                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
