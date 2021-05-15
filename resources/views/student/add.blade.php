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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col offset-3">
            <div class="card">
                <div class="card-header">
                    <h2>Image</h2>
                    @if(\Illuminate\Support\Facades\Session::has('ok'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('ok')}}
                    </div>
                    @endif

                </div>
                <div class="card-body">
                    <form action="add" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="file">Choose Image</label>
                            <input type="file" name="file" id="file" class="form-control" onchange="preview(this )">
                            <img    id="image" style="max-width: 130px; margin-top: 20px;">
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
@if (\Illuminate\Support\Facades\Session::has('ok'))
    <script>
        toastr.success(" {!! \Illuminate\Support\Facades\Session::get('ok') !!} ");
    </script>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@if (\Illuminate\Support\Facades\Session::has('ok'))
    <script>
        swal('Greet job'," {!! \Illuminate\Support\Facades\Session::get('ok') !!} ",'success',{
            button:'OK',
        })
    </script>
@endif
</body>
</html>


