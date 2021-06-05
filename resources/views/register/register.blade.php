@extends('layouts.body_vue')
@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
            integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .parsley-errors-list li{
            list-style: none;
            color: red;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h2>Register</h2>

                </div>
                <div class="card-body">
                    <form action="{{route('parsley')}}" method="post" id="registerForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" autocomplete="off"  required data-parsley-type="email" data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required data-parsley-length="[6,12]" data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="c_password">Confirm Password</label>
                            <input type="password" name="c_password" id="c_password" class="form-control" required  data-parsley-equalto="#password" data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required data-parsley-pattern="[0-9]+$" data-parsley-length="[10,13]" data-parsley-trigger="keyup">
                        </div>
                        <div class="text-right">
                        <button type="submit" class="btn btn-info">OK</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $("#registerForm").parsley();
        })
    </script>

@endsection
