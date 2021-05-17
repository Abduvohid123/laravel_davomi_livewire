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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col offset-3">
            <div class="card">
                <div class="card-header">
                    <h2>Contact</h2>

                </div>
                <div class="card-body">
                    @if(\Illuminate\Support\Facades\Session::has('email'))
                        <div class="alert alert-success">
                            {{\Illuminate\Support\Facades\Session::get('email')}}
                        </div>
                    @endif
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Search</label>
                            <input type="text" name="name" class="form-control typeahead" placeholder="Search...">

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let path="{{route('autocomplete')}}";
    $('input.typeahead').typeahead({
        source: function(terms,process){
            return $.get(path,{terms:terms},function (data){
                return process(data);
            })
        }
    })
</script>
</body>
</html>

