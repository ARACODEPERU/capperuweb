@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2 center">
                                <h2>Contactanos</h2>
                                <ul class="breadcrumb-list-2 black">
                                    <li><a href="{{ route('web_home') }}">Home</a></li>
                                    <li>Contactanos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us-area section-pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="contact-form-wrap section-pb-90">
                            <form id="contact-form" action="https://whizthemes.com/mail-php/tasnim/mail-4.php"
                                method="POST">
                                <div class="contact-page-form">
                                    <div class="row contact-input">
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="name" type="text" placeholder="First Name" id="first-name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="lastname" type="text" placeholder="Last Name" id="last-name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input type="text" placeholder="Enter Your E-mail" id="email"
                                                name="email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="subject" type="text" placeholder="Subject" id="subject">
                                        </div>
                                        <div class="col-lg-12 col-md-12 contact-inner black contact-message">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn text-center">
                                        <button class="submit-btn" type="submit">Send Message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 ms-auto">
                        <div class="contact-info-inner black">
                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-home"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> Home #02 Hangla pur <br> Dhaka , Bangladesh </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> <a href="#">+022222222</a> <a href="#">+01111109999</a> </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><a href="#">example@e-mail.com</a> <a href="#">example@e-mail.com</a>
                                    </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-globe-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> <a href="#">www.streamo.net</a></p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Area -->
        <x-footer />
        <!--// Footer Area -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="zmdi zmdi-close s-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your membership.
                        </h5>
                        <div class="create-membership-wrap modify">
                            <input placeholder="Email Address">
                            <button class="landing-btn-style" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Wrapper End -->
@endsection
