

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

                </div>
                <div class="card-body">
                    <form action="{{route('image')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Choose Image</label>
                            <input type="file" name="file" id="file" class="form-control">

                        </div>
                        <button type="submit" class="btn btn-info">OK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

