@extends('layouts.body_vue')

@section('content')
    <section>
        <div class="row">
            <div class="col-md-12">Infinite Scroll Pagination</div>
            <div class="col-md-12" id="post-data">
                @include('ajax.data')

            </div>
        </div>
    </section>
    <div class="ajax-load text-center" style="display: none">
        <p><img src="{{asset('images/loader.gif')}}" alt="">Loading More Scroll</p>
    </div>



    <script>
        function loadMoreData(page) {
            $.ajax({
                url: "?page="+page,
                type: 'get',
                beforeSend: function () {
                    $('.ajax-load').show();
                }
            }).done(function (data) {
                if (data.html == " ") {
                    $('.ajax-load').html('No more records found');
                    return
                }
                $(".ajax-load").hide(10000000);
                $("#post-data").append(data.html);

            }).fail(function (jqXHR, ajaxOptions, txrownError) {
                alert('Alert not responding');
            })
        }

        var page = 1;
        $(window).scroll(function (){
            if ($(window).scrollTop()+$(window).height()>=$(document).height()){
                page++;
                loadMoreData(page);
            }
        })
    </script>
@endsection
