@extends('layout')
@section('title', 'contact')
@section('content')

    <section class="contact container">
        <div class="title ">
            <h2 class="text-center pt-5">Contact me</h2>
            <p class="text-center">Do you have any questions? Please do not hesitate to contact me directly. I will come back to you within
                a matter of hours to help you.</p>
        </div>
        <div class="row">
            {{--left column--}}
            <div class="col-md-6">
                <div class="map">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mirpur%2010%2C%20Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://2piratebay.org">weitere informationen</a>
                        </div>
                        <style>.mapouter {position:relative;text-align:right;height:500px;width:600px;}
                            .gmap_canvas {overflow:hidden;background:none!important;height:400px;width:570px;}
                        </style>
                    </div>
                </div>
            </div>

            {{--right column--}}
            <div class="col-md-6">
                <div class="col-md-12" form-section>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="md-form">
                                <input type="text" id="contactNameId" class="form-control" placeholder="name">
                                <label for="name" class=""></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="email" id="contactEmailId"  class="form-control" placeholder="email">
                                <label for="email" class=""></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
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

    </section>

    @endsection
