@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" > {{translate('edit')}}   {{translate('passsword')}} </li>
                </ol>
            </div>




            <div class="container mt-5" style="max-width: 550px">
                <div class="alert alert-danger" id="error" style="display: none;"></div>
                <h3> {{translate('mobile')}}</h3>
                <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                <form>
                    <label>{{translate('mobile')}}:</label>
                    <input type="text" id="number" class="form-control" placeholder="+91 ********">
                    <br>
                    <br>
                    <div id="recaptcha-container"></div>
                    <br>
                    <br>
                    <div class="row ">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <button type="button" class="btn btn-primary pl-6 mt-3" onclick="sendOTP();">ارسال</button>
                    </div>

                    </div>
                </form>
                <br>
                <br>
                <br>

                <div class="mb-5 mt-5">
                    <h3>ادخل رقم التحقيق المرسل </h3>
                    <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                    <form>

                        <input type="text" id="verification" class="form-control" placeholder="Verification code">
                       <div class="row ">
                           <div class="col-md-4"></div>
                           <div class="col-md-4"> <button type="button" class="btn btn-danger mt-3 " onclick="verify()">تحقق</button>
                           </div>
                               <div class="col-md-4"></div>
                       </div>

                    </form>
                </div>
            </div>
            <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>





            <script>



                var firebaseConfig = {
                    apiKey: "AIzaSyCY6Hna9WZcO42CUtAVn5u2TIZhX4SUw-U",

                    authDomain: "var-sms.firebaseapp.com",
                    databaseURL: "https://fir-web-b823f.firebaseio.com",

                    projectId: "var-sms",

                    storageBucket: "var-sms.appspot.com",

                    messagingSenderId: "738563272049",

                    appId: "1:738563272049:web:46aea07ec0815d4907dad0",

                    measurementId: "G-VQBSQ4QN3E"
                };
                // Initialize Firebase
                firebase.initializeApp(firebaseConfig);




            </script>



            <script type="text/javascript">







                function sendOTP() {



                    var number = $("#number").val();



                    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {



                        window.confirmationResult=confirmationResult;

                        coderesult=confirmationResult;

                        console.log(coderesult);



                        $("#sentSuccess").text("Message Sent Successfully.");

                        $("#sentSuccess").show();





                    }).catch(function (error) {

                        $("#error").text(error.message);

                        $("#error").show();

                    });



                }



                function codeverify() {



                    var code = $("#verificationCode").val();



                    coderesult.confirm(code).then(function (result) {

                        var user=result.user;

                        console.log(user);



                        $("#successRegsiter").text("you are register Successfully.");

                        $("#successRegsiter").show();







                    }).catch(function (error) {

                        $("#error").text(error.message);

                        $("#error").show();

                    });

                }



            </script>


    {{--var formData = {--}}
    {{--    email:{{Auth::guard('employee')->user()->email}},--}}
    {{--};--}}

    {{--$.ajax({--}}
    {{--    headers: {--}}
    {{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--    },--}}
    {{--    type: "POST",--}}
    {{--    url: "{{ url('admin/admin/resetpassword') }}" ,--}}
    {{--    data: formData,--}}
    {{--    dataType: "json",--}}
    {{--    encode: true,--}}
    {{--}).done(function (data) {--}}

    {{--    document.location.replace('admin/admin/change/password')--}}
    {{--});--}}

@endsection
















