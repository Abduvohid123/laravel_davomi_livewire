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
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-buttons-bs4/1.7.0/buttons.bootstrap4.js"
            integrity="sha512-a7nxEi23qoZ3Jd5emu13u4u9tS8V6+f56wWfImjwPwQxUN8Zp5n82s7O7PFVjBPKgW/SS0A4JGIot8HvNkIuMw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--    <script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>--}}


</head>
<body>

<div class="container">
    <div class="table-responsive">
        <table id="user_table" class="table table-bordered table-hover table-stried">
            <thead>
            <tr>
                <th width="35%">Firstname</th>
                <th width="35%">Lastname</th>
                <th width="30%">Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<script>

    $(document).ready(function () {
        $.fn.dataTable.ext.errMode = 'throw';
        $('#user_table').DataTable(
            {
                processing: true,
                serverSide:true,
                ajax:{
                    url:"{{route('yajra.index')}}"
                },
                columns:[
                    {
                        data:"firstname",
                        name:"firstname",
                    },
                    {
                        data:"lastname",
                        name:"lastname",
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable:false
                    }
                ]
            });
    })
</script>

</body>
</html>


