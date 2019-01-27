@extends('layouts.frontend-sub')

@section('content')

<div class="container-contact100">
  <div class="wrap-contact100">
    <span class="focus-input100"></span>
    <form class="contact100-form validate-form" method="post">

      <!-- status flash here -->
      @if(Session::has('status'))
      <div class="alert alert-success fade in alert-dismissible wrap-input100">
          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
          <strong>Thank you!</strong> The message has been sent successfully.
      </div>
      @endif
     
      <span class="contact100-form-title">
        Send Us A Message
      </span>

      <label class="label-input100" for="first-name">Tell us your name *</label>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
        <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs2-wrap-input100">
        <input class="input100" type="text" name="last-name" placeholder="Last name">
        <span class="focus-input100"></span>
      </div>

      <label class="label-input100" for="email">Enter your email *</label>
      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@gmail.com">
        <span class="focus-input100"></span>
      </div>

      <label class="label-input100" for="phone">Enter phone number</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
        <span class="focus-input100"></span>
      </div>

      <label class="label-input100" for="subject">Subject</label>
      <div class="wrap-input100 validate-input" data-validate="Type for subject">
        <input id="subject" class="input100" type="text" name="subject" placeholder="Eg. General Info">
        <span class="focus-input100"></span>
      </div>

      <label class="label-input100" for="message">Message *</label>
      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
        <span class="focus-input100"></span>
      </div>

      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn">
          Send Message
        </button>
      </div>
    </form>

    <div class="contact100-more flex-col-c-m" style="background-image: url('{{ URL::to('src/frontend/img/bg-01.jpg') }}');">
      <div class="flex-w size1 p-b-47">
        <div class="txt1 p-r-25">
          <span class="lnr lnr-map-marker"></span>
        </div>

        <div class="flex-col size2">
          <span class="txt1 p-b-20">
            Address
          </span>

          <span class="txt2">
            Secretariat of Indonesia FP2020 Country Committee
          </span>
        </div>
      </div>

      <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
          <span class="lnr lnr-phone-handset"></span>
        </div>

        <div class="flex-col size2">
          <span class="txt1 p-b-20">
            Lets Talk
          </span>

          <span class="txt3">
            Twiiter   :   @fp2020indonesia
          </span>
        </div>
      </div>

      <div class="dis-flex size1 p-b-47">
        <div class="txt1 p-r-25">
          <span class="lnr lnr-envelope"></span>
        </div>

        <div class="flex-col size2">
          <span class="txt1 p-b-20">
            General Support
          </span>

          <span class="txt3">
            fp2020indonesiacc@gmail.com
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection