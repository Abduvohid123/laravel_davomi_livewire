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

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>Yajra table</div>
                @if(request()->has('view_deleted'))
                   <div> <a href="{{route('yajra.index')}}" class="btn btn-sm btn-info">View
                           all post
                       </a>
                       <a href="{{route('yajra.restore_all')}}" class="btn btn-sm btn-success">Restore
                           all post
                       </a></div>
                @else
                <a href="{{route('yajra.index',['view_deleted'=>'deleted_record'])}}" class="btn btn-sm btn-info">View
                    deleted post
                </a>
                @endif
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @if(count($yajra)>0)

                        @foreach($yajra as $y)
                            <tr>
                                <td>{{$y->id}}</td>
                                <td>{{$y->firstname}}</td>
                                <td>{{$y->lastname}}</td>
                                <td>
                                    @if(request()->has('view_deleted'))
                                        <a href="{{route('yajra.restore',$y->id)}}" class="btn btn-sm btn-info">Restore</a>
                                    @else
                                        <form method="post" action="{{route('yajra.delete',$y->id)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE"/>
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <td>
                                Malumot topilmadi
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>


