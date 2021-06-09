

@foreach($scrollPagination as $scroll)

    <div class="card mt-5">
        <div class="card-header">
            <h3><a href="#">{{$scroll->name}}</a></h3>
        </div>
        <div class="card-body">
            <p>{{$scroll->description}}</p>
            <div class="text-center">
                <button type="button" class="btn btn-success" >Read More</button>
            </div>
        </div>
    </div>
@endforeach
