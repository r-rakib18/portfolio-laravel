@extends('layout')
@section('title', 'project')
@section('content')

    <div class="page-all-project container">
        <div class="title text-center">
            <h3 class="font-weight-bolder">All Project</h3>
        </div>
        <div id="" class="carousel slide carousel-slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1500">
                    <div class="row justify-content-center">
                        @foreach($projects as $item)
                        <div class="col-md-3">
                            <div class="card shadow">
                                <div class="inner">
                                    <img class="card-img-top" src="{{ asset('images/'.$item->image) }}">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$item->name}}</h5>
                                    <button id="{{$item->id}}" class=" view_data btn btn-success">Details</button>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle"><i style="color: red" class='fas fa-info-circle'></i>Project details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cardDetailsId">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    @endsection

@section('script')

    <script type="text/javascript">


        CardDetails();






    </script>



    @endsection
