<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>students</title>
</head>
<body>
@include('navbar')
<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Managment System</h1>
    </div>
</div>
@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col-md-7">
            @include('studentslists')
        </section>
        <section class="col-md-5"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container- mt-4">
        <div class="row">
            <section class="col">
                @include('studentslists')
            </section>
            <section class="col">

                <div class="card mb-3">
                    <img src="https://kwiksurveys.com/wp-content/uploads/2019/04/education-surveys.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>

                    </div>
                </div>

                <form action="{{ url('/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label >CNE</label>
                        <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label >First Name</label>
                        <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                    </div>
                    <div class="form-group">
                        <label >second Name</label>
                        <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
                    </div>
                    <div class="form-group">
                        <label >Age</label>
                        <input name="age" type="text" class="form-control" placeholder="Enter the age">
                    </div>
                    <div class="form-group">
                        <label >Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include('studentslists')
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout = 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslists')
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://kwiksurveys.com/wp-content/uploads/2019/04/education-surveys.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of students</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label >CNE</label>
                                <input value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label >First Name</label>
                                <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label >second Name</label>
                                <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label >Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter the age">
                            </div>
                            <div class="form-group">
                                <label >Speciality</label>
                                <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
