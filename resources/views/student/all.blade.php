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
                    <a class="btn btn-primary" href="/add">Yangi Student qo'shish</a>
                    @if(\Illuminate\Support\Facades\Session::has('delete'))
                        <div class="alert alert-success">
                            {{\Illuminate\Support\Facades\Session::get('delete')}}
                        </div>
                    @endif

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($students as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>
                                    <img style="max-width: 60px" src="{{asset('images')}}/{{$item->image}}" alt=""></td>
                                <td><a class="btn btn-info" href="/edit/{{$item->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete/{{$item->id}}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function preview(input) {
        $(document).ready(function () {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function () {
                    $('#image').attr('src', reader.result)
                }
                reader.readAsDataURL(file);
            }
        })

    }
</script>
</body>
</html>


