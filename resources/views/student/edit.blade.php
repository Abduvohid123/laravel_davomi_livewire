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
        <div class="col offset-3">
            <div class="card">
                <div class="card-header">
                    <h2>Image</h2>
                    @if(\Illuminate\Support\Facades\Session::has('update'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('update')}}
                    </div>
                    @endif

                </div>
                <div class="card-body">
                    <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="hidden" value="{{$student->id}}" name="id">
                            <input type="text" name="name" id="name" value="{{$student->name}}">
                        </div>
                        <div class="form-group">
                            <label for="file">Choose Image</label>
                            <input type="file" name="file" id="file" class="form-control" onchange="preview(this )">
                            <img   src="{{asset('images')}}/{{$student->image}}"  id="image" style="max-width: 130px; margin-top: 20px;">
                        </div>
                        <button type="submit" class="btn btn-info">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function preview(input) {
        $(document).ready(function (){
            var file=$("input[type=file]").get(0).files[0];
            if (file){
                var reader =new FileReader();
                reader.onload=function () {
                    $('#image').attr('src',reader.result)
                }
                reader.readAsDataURL(file);
            }
        })

    }
</script>
</body>
</html>


