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
    <h2>Employee</h2>

    @foreach(range(1,100) as $sds)
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Department</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employeees as $emp)
                <tr>
                    <td>{{$emp->id}}</td>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->phone}}</td>
                    <td>{{$emp->salary}}</td>
                    <td>{{$emp->department}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endforeach
</div>

</body>
</html>

