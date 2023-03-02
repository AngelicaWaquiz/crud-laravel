<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>CRUD LAVAREL</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Laravel Crud Application <span
                            class="sr-only">(current)</span></a>
                </li>

                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4 bg-light"></div>
        <div class="col-md-4 bg-light"></div>
        <div class="col-md-4 bg-light ">
            <div class="input-group mb-3">

                <form method="GET" action="{{ route('index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Search">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <br><br>


    <div class="modal fade" class="md" id="examplemodal"tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="loginModal" class="modal fade" role="document">
            <div class="modal-content">
                <div class="headmodal" class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>

                </div>
                <div class="modal-body">
                    <div class="container" id="one">
                        <form action="" method="POST">
                            @csrf
                            <input type="text" name="Name" placeholder="Enter Name">
                            <br><br>
                            <input type="text" name="password" placeholder="Enter Password">
                            <br><br>
                            <input type="text" name="Date" placeholder="Enter Date">
                            <br><br>
                            <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" class="md" id="updatemodal"tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="loginModal" class="modal fade" role="document">
            <div class="modal-content">
                <div class="headmodal" class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE RECORDS</h5>

                </div>
                <div class="modal-body">
                    <div class="container" id="one">

                        <form>
                            @csrf
                            <input type="text" disabled hidden name="id" id="student_id"
                                placeholder="Enter ID">
                            <br><br>
                            <input type="text" name="Name" id="name" placeholder="Enter Name">
                            <br><br>
                            <input type="text" name="password" id="password" placeholder="Enter Password">
                            <br><br>
                            <input type="text" name="Date" id="date" placeholder="Enter Date">
                            <br><br>

                            <button class="btn btn-primary" type="submit" id="updatesave">Update</a> </button>
                            <button class="btn btn-black"><a href="/crud">Back</a> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Password</th>
                <th scope="col">Date</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($members as $member)
                <tr>

                    <td>{{ $member['id'] }}</td>
                    <td>{{ $member['Name'] }}</td>
                    <td>{{ $member['password'] }}</td>
                    <td>{{ $member['Date'] }}</td>
                    <td>
                        <a href="javascript:void(0)" data-id={{ $member['id'] }}
                            class="text-white btn btn-success ml-2 pt-2" id="update" item="{{ $member['id'] }}"
                            type="Button" data-toggle="modal" data-target="#updatemodal">
                            <i class="fa-sharp fa-solid fa-pen-to-square"></i>

                            <a href={{ 'delete/' . $member['id'] }} class="text-white btn btn-danger ml-2 pt-2">
                                <i class="fa fa-trash"></i>

                                <a href={{ 'view/' . $member['id'] }} class="text-white btn btn-warning ml-2 pt-2">
                                    <i class="fa fa-eye"></i>
                                </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button data-loading-text="loading....." class=" btn btn-warning" type="Button" data-toggle="modal"
        data-target="#examplemodal">Add Student</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type='text/javascript'>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function() {
            $('body').on("click", "#update", function() {
                // const element = document.getElementById("update"); 
                // let text = element.getAttribute("item");
                var edit_id = $(this).data('id');
                console.log(edit_id)
                var Name = $('#Name_' + edit_id).val();
                var password = $('#password_' + edit_id).val();
                var Date = $('#Date' + edit_id).val();

                // if(name != '' && password != '' && date != ''){
                $.ajax({
                    url: 'getstudent/?student=' + edit_id,
                    type: 'get',
                    dataType: 'json',
                    //  data: {editid: edit_id,Name: Name,Password: password,Date: Date},
                    success: function(response) {
                        console.log(response);
                        document.getElementById("student_id").value = response.id
                        document.getElementById("name").value = response.Name
                        document.getElementById("password").value = response.password
                        document.getElementById("date").value = response.Date
                    }
                });
                // }
                // else{
                // alert('Fill all fields');
                // }
            });

            $('body').on("click", "#updatesave", function() {
                var id = document.getElementById("student_id").value
                console.log(id);
                // if(name != '' && password != '' && date != ''){
                $.ajax({
                    url: 'update/' + 3,
                    type: 'post',
                    dataType: 'json',

                    data: {
                        _token: CSRF_TOKEN,
                        editid: id,
                        Name: $('#name').val(),
                        Password: $('#password').val(),
                        Date: $('#date').val()
                    },
                    success: function(response) {
                        console.log(response);
                        alert(response);
                        // document.getElementById("student_id").value =response.id
                        // document.getElementById("name").value =response.Name
                        // document.getElementById("password").value =response.password
                        // document.getElementById("date").value =response.Date
                    }
                });
                // }
                // else{
                // alert('Fill all fields');
                // }
            });
        });
        $(document).ready(function() {
            $('body').on("click", "#update", function() {
                // const element = document.getElementById("update"); 
                // let text = element.getAttribute("item");
                var edit_id = $(this).data('id');
                console.log(edit_id)
                var Name = $('#Name_' + edit_id).val();
                var password = $('#password_' + edit_id).val();
                var Date = $('#Date' + edit_id).val();

                // if(name != '' && password != '' && date != ''){
                $.ajax({
                    url: 'getstudent/?student=' + edit_id,
                    type: 'get',
                    dataType: 'json',
                    //  data: {editid: edit_id,Name: Name,Password: password,Date: Date},
                    success: function(response) {
                        console.log(response);
                        document.getElementById("student_id").value = response.id
                        document.getElementById("name").value = response.Name
                        document.getElementById("password").value = response.password
                        document.getElementById("date").value = response.Date
                    }
                });
            });
        })
    </script>
</body>

</html>
