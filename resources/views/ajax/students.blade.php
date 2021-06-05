<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Barcha Studentlar</h2>
                    <a href="#" class="btn btn-primary" data-target="#studentModal"
                       data-toggle="modal" {{--href="/add"--}}>Yangi Student qo'shish</a>

                </div>
                <div class="card-body">
                    <table id="student_table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>LastName</th>
                            <th>FirstName</th>
                            <th>Email</th>
                            <th>Phone</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $item)
                            <tr id="sid{{$item->id}}">
                                <td>
                                    {{$item->lastname}}

                                </td>
                                <td>
                                    {{$item->firstname}}
                                </td>
                                <td>
                                    {{$item->email}}
                                </td>
                                <td>
                                    {{$item->phone}}
                                </td>
                                <td>
                                    <a class="btn btn-info" href="javascript:void(0)" onclick="editStudent({{$item}})">
                                        Edit</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{--          Add model      --}}
                    <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="studentForm">
                                        @csrf
                                        <div class="form-group">
                                            <label for="firstname">FirstName</label>
                                            <input type="text" id="firstname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">lastname</label>
                                            <input type="text" id="lastname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">email</label>
                                            <input type="text" id="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">phone</label>
                                            <input type="text" id="phone" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{--       Edit student Model             --}}
                    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="studentEditForm">
                                        @csrf
                                        <input type="hidden" id="id" name="id">
                                        <div class="form-group">
                                            <label for="firstname_for_edit">FirstName</label>
                                            <input type="text" id="firstname_for_edit" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname_for_edit">lastname</label>
                                            <input type="text" id="lastname_for_edit" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="email_for_edit">email</label>
                                            <input type="text" id="email_for_edit" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_for_edit">phone</label>
                                            <input type="text" id="phone_for_edit" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#studentForm').submit(function (e) {
        e.preventDefault();
        let firstname = $('#firstname').val();
        let lastname = $('#lastname').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let _token = $("input[name=_token]").val();
        /*$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });*/
        $.ajax({
            url: "{{route('add_student')}}",
            type: "POST",
            data: {
                firstname: firstname,
                lastname: lastname,
                email: email,
                phone: phone,
                _token: _token
            },
            success: function (response) {
                if (response) {
                    let tr = "<tr>" +
                        "<td>" + response.firstname + "</td>" +
                        "<td>" + response.lastname + "</td>" +
                        "<td>" + response.email + "</td>" +
                        "<td>" + response.phone + "</td>" +
                        "</tr>";
                    $('#student_table tbody').prepend(tr);
                }
                $('#studentForm')[0].reset();
                $('#studentModal').modal('hide');
            }
        })
    })
</script>

<script>
    function editStudent(student) {
        $.get('/students/' + student.id, function () {
            $('#id').val(student.id);
            $('#firstname_for_edit').val(student.firstname);
            $('#lastname_for_edit').val(student.lastname);
            $('#email_for_edit').val(student.email);
            $('#phone_for_edit').val(student.phone);
            $('#studentEditModal').modal('toggle')

        })
    }

    $('#studentEditForm').submit(function (e) {
        e.preventDefault();
        let id = $('#id').val();
        let firstname = $('#firstname_for_edit').val();
        let lastname = $('#lastname_for_edit').val();
        let email = $('#email_for_edit').val();
        let phone = $('#phone_for_edit').val();
        let _token = $("input[name=_token]").val();
        /*$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });*/
        $.ajax({
            url: "{{route('student.update')}}",
            type: "PUT",
            data: {
                id:id,
                firstname: firstname,
                lastname: lastname,
                email: email,
                phone: phone,
                _token: _token
            },
            success: function (response) {
                if (response) {
                    $('#sid'+response.id+"td:nth-child(1)").text(response.firstname);
                    $('#sid'+response.id+"td:nth-child(2)").text(response.lastname);
                    $('#sid'+response.id+"td:nth-child(3)").text(response.email);
                    $('#sid'+response.id+"td:nth-child(4)").text(response.phone);
                    $('#studentEditForm')[0].reset();
                    $('#studentEditModal').modal('toggle');
                }

            }
        })
    })
</script>

</body>
</html>


