

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col offset-3">
            <div class="card">
                <div class="card-header">
                    <h2>Image</h2>

                </div>
                <div class="card-body">
                    <form action="{{route('dropzone')}}" class="dropzone clickable" method="post" enctype="multipart/form-data" id="image-upload">
                        @csrf
                        <div>
                            <h1 class="text-center">
                                Upload Image by click on box
                            </h1>
                        </div>
                        <div class="dz-default dz-message">
                            <span>Drop files here to uploads </span>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="file">Choose Image</label>--}}
{{--                            <input type="file" name="file" id="file" class="form-control">--}}

{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-info">OK</button>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

