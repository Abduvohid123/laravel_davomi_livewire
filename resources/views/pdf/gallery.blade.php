

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
    <style>
        img{
            background-color: grey;
            width: 100%;
            height: 250px;
            border: 1px solid grey;
            box-shadow: #48ff15;
        }
    </style>

</head>
<body>

<div class="container">

    <div class="row">
        @for ($j = 0; $j < 11; $j++)

        @for ($i = 1; $i < 11; $i++)
            <div class="col-6">
                <img src="" data-original="http://localhost/images/uzmobile_l{{$i}}.jpg" alt="">
            </div>

        @endfor
        @endfor

    </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>

<script>
   $(document).ready(function (){
        $('img').lazyload(10000);
   })

</script>
</body>
</html>

