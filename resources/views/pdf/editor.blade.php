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
    <script src="https://cdn.tiny.cloud/1/sivp8l9ezbrr2asx5ytftatjwn25or2zt9o70rlz4y5vkoiz/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h2>Image</h2>

                </div>
                <div class="card-body">

                    <h1>TinyMCE Quick Start Guide</h1>
                    <form method="post">
                    <textarea id="mytextarea" name="mytextarea">
                      Hello, World!
                    </textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
</body>
</html>

