<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>
<div class="container-fluid">

    <!--navbar section start-->
    <div class="navbar-section">
        <nav class="navbar navbar-expand-sm fixed-top bg-dark">
            <div class="logo " >
                <a href="{{route('home')}}" class="navbar-brand">Portfo<span>lio.</span></a>
            </div>

            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('project/view')}}">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('portfolio')}}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('contact/create')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--navbar section end-->

    @yield('content')

</div> <!--container ending-->

{{--footer section start--}}
<div class="footer">
    <div class="row">
        <div class="col-md-3">
            <div class="footer-title">
                <h2>Follow me</h2>
            </div>
            <div class="footer-hr">
                <hr/>
            </div>
            <div class="footer-content">
                <ul>
                    <li><a href="https://github.com/r-rakib18" target="_blank"><i class="fab fa-github"></i>GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/r-rakib18/" target="_blank"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/r_rakib18/" target="_blank"><i class="fab fa-instagram"></i>Instagram</a></li>
                    <li><a href="https://www.facebook.com/abr.rakib/" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                    <li><a href="https://twitter.com/r_rakib18" target="_blank"><i class="fab fa-twitter"></i>Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footer-title">
                <h2>Address</h2>
            </div>
            <div class="footer-hr">
                <hr/>
            </div>
            <div class="footer-content">
                <ul>
                    <li class=""><i class="fas fa-map-marker-alt"></i><p>Mirpur, Dhaka-1216</p></li>
                    <li class=""><i class="fas fa-phone"></i><p>+8801620206771</p></li>
                    <li class=""><i class="fas fa-envelope "></i><p>r.rakib18se@gmail.com</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footer-title">
                <h2>Information</h2>
            </div>
            <div class="footer-hr">
                <hr/>
            </div>
            <div class="footer-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                    <li><a href="#">Contract</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="footer-title">
                <h2>Support</h2>
            </div>
            <div class="footer-hr">
                <hr/>
            </div>
            <div class="footer-content">
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-end text-center">
        <p>Created By <a href="#">Ab R Rakib</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</p>
    </div>
</div>
{{--footer section end--}}


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="{{asset('/js/axios.min.js')}}"></script>
<script src="{{asset('/js/sweetalert.min.js')}}"></script>
<script src="{{asset('/js/custom.js')}}"></script>
<script src="{{asset('/js/notify.js')}}"></script>


@yield('script')

</body>

</html>
