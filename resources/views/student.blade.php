<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student Management System</title>
</head>
<body>

@include('navbar')

@if($layout =='index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include('studentList')
                </section>
            </div>

        </div>
    </div>


@elseif($layout =='create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentList")
            </section>
            <section class="col-md-5">
                        <h3>Add New Student</h3>
                        <form action="/store" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input type="text" name="cne" class="form-control" placeholder="Enter the CNE">
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter the First Name">
                            </div>

                            <div class="form-group">
                                <label>Second Name</label>
                                <input type="text" name="secondName" class="form-control" placeholder="Enter the Second Name">
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter the Age">
                            </div>

                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter the Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                        </form>




            </section>
        </div>
    </div>


@elseif($layout =='show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentList")
            </section>
            <section class="col-md-5">

            </section>
        </div>
    </div>


@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentList")
            </section>
            <section class="col-md-5">
                <form action="/update/{{$student->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>CNE</label>
                        <input type="text" value="{{$student->cne}}" name="cne" class="form-control" placeholder="Enter the CNE">
                    </div>

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" value="{{$student->firstName}}"  name="firstName" class="form-control" placeholder="Enter the First Name">
                    </div>

                    <div class="form-group">
                        <label>Second Name</label>
                        <input type="text" value="{{$student->secondName}}"  name="secondName" class="form-control" placeholder="Enter the Second Name">
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" value="{{$student->age}}"  name="age" class="form-control" placeholder="Enter the Age">
                    </div>

                    <div class="form-group">
                        <label>Speciality</label>
                        <input type="text" value="{{$student->speciality}}"  name="speciality" class="form-control" placeholder="Enter the Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">

                </form>

            </section>
        </div>
    </div>


@endif
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
