@extends('layout')
@section('title', 'home')
@section('content')

    <!--home section start-->
    <div class="home-section" id="home">
        <div class="home-content">
            <div class="text-1">
                Hi, I'm
            </div>
            <div class="text-2">
                Abdur R Rahman
            </div>
            <div class="text-3">
                Software Engineer & Web Developer
            </div>
            <!--<div class="hire-me">
                <a href="#">Hire me</a>
            </div>-->
        </div>
    </div>
    <!--home section end-->

    <!--skill section start-->
    <div class="skill-section container">
        <div class="title text-center mb-2 pb-2">
            <h3 class="font-weight-bolder">Skill</h3>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card shadow text-center">
                    <img class="card-image-top" src="images/laravellogo.png">
                    <div class="card-body">
                        <h4 class="card-title">Laravel</h4>
                        <p class="card-text">Web Development Application</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card shadow text-center">
                    <img class="card-image-top" src="images/php.svg">
                    <div class="card-body text-center">
                        <h4 class="card-title">PHP</h4>
                        <p class="card-text">Web Development Application</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card shadow text-center">
                    <img class="card-image-top" src="images/mysql.svg">
                    <div class="card-body">
                        <h4 class="card-title">MySQL</h4>
                        <p class="card-text">Web Development Application</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card text-center">
                    <img class="card-image-top" src="images/js.svg">
                    <div class="card-body">
                        <h4 class="card-title">JavaScript</h4>
                        <p class="card-text">Web Development Application</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--skill section end-->

    <!--recent projects section start-->
    <div class="recent-projects-section container">
        <div class="title text-center">
            <h3 class="font-weight-bolder">Recent Projects</h3>
        </div>
        <div id="myslideshow" class="carousel slide carousel-slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myslideshow" data-slide-to="0" class="active"></li>
                <li data-target="#myslideshow" data-slide-to="1"></li>
                <li data-target="#myslideshow" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1500">
                    <img src="images/pms.jpg" class="d-block w-100">
                    <div class="carousel-caption caption">
                        <p>Pharmacy Management System</p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1500">
                    <img src="images/obe.jpg" class="d-block w-100">
                    <div class="carousel-caption">
                        <p>Outcome Based Question Generator</p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1500">
                    <img src="images/tourisam.png" class="d-block w-100">
                    <div class="carousel-caption">
                        <p>Tourism Management System </p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myslideshow" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myslideshow" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--recent projects section end-->


    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="container carousel slide carousel-multi-item" data-ride="carousel">


        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="float:left">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <div class="controls-top text-center">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev">
                <i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next">
                <i class="fas fa-chevron-right"></i></a>
            <a class="btn btn-success" href="{{url('project/view')}}">Show All</a>
        </div>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->




    <!--all projects section start-->
    <div class="all-project-section container">
        <div class="title text-center mb-3 pb-2">
            <h3 class="font-weight-bolder">All Projects</h3>
        </div>
        <div id="myslideshow" class="carousel slide carousel-slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1500">
                    <div class="row justify-content-center">
                        {{--@foreach($data as $item)--}}
                        <div class="col-md-3">
                            <div class="card shadow">
                                <div class="inner">
                                    <img class="card-img-top" src="{{--{{ asset('images/'.$item->image) }}--}}">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{--{{$item->name}}--}}</h5>
                                    <button id="{{--{{$item->id}}--}}" class=" view_data btn btn-success">Details</button>
                                </div>
                            </div>
                        </div>
                            {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--all projects section end-->

    <!--contact us page start-->
        <div class="contact-section mb-4">
            <h2 class="title h1-responsive font-weight-bold text-center pt-3 my-4">Contact me</h2>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly. I will come back to you within
                a matter of hours to help you.</p>

            <div class="row">
                <div class="col-md-4 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Mirpur, Dhaka-1216</p>
                        </li>
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+8801620206771</p>
                        </li>
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>r.rakib18se@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 mb-md-0 pb-2mb-5" form-section>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="contactNameId" class="form-control" placeholder="name">
                                    <label for="name" class=""></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" id="contactEmailId"  class="form-control" placeholder="email">
                                    <label for="email" class=""></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="contactSubjectId"  class="form-control" placeholder="subject">
                                    <label for="subject" class=""></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="contactMessageId"  class="form-control" placeholder="message"></textarea>
                                    <label for="message"></label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left form-group">
                            <button id="contactConfirmationBtnId" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                        </div>

                </div>
            </div>
        </div>
    <!--contact us page end-->

    <!--about me section start-->
    <div class="about-section">
        <div class="jumbotron pt-4 mt-5">
            <div class="title text-center mb-3">
                <h3 class="font-weight-bolder">About Me</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img class="rounded-circle" src="images/photo.jpg">
                </div>
                <div class="col-lg-8">
                    <p>A Computer Science and Engineering student willing to learn new technologies and skills in a short period of time. I want to demonstrate and build my career as a web developer by seeking the knowledge and skill sets in the areas of new technology, effective and efficient communication and best practice processes. To prove myself as a quick learner and highly energetic person I’m ready to face any challenge and also eager to build myself as successful teammate. </p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </div>
    <!--about me section end-->



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
                {{--<div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>--}}
            </div>
        </div>
    </div>

    @endsection



@section('script')

    <script type="text/javascript">


        contactSend();




    </script>


@endsection

