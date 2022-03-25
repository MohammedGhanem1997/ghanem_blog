$('#email_reset').click(function () {


    var email=$('#resetemailinput').val();
    var password=$('#passswordinput').val();

   var promise=  firebase.auth().createUserWithEmailAndPassword(email, password);



    firebase.auth().signInWithEmailAndPassword(currentemail, currentpassword)
        .then(function(firebaseUser) {
            // Success
            firebase.auth().sendPasswordResetEmail(currentemail)
                .then(() => alert(currentemail+ 'Your password resset mail has been sent'))
                .catch(error => alert('Error not valid email ', error.message));
            alert('Success')
            sendverification()
        })
        .catch(function(error) {
            // Error Handling
            alert('Error')

        });









});



$('#verify_account').click(function () {

    var email=$('#email_login').val();
    var password=$('#password_login').val();


    firebase.auth().signInWithEmailAndPassword(email,password)
        .then(function(firebaseUser) {


            firebase.auth().onAuthStateChanged(function(user) {
                if (user.isEmailVerified){

                    $('#login-Form').submit();
                }
                else {
                    $('.message-login').text('your email not verified');

                }
            });


        })
        .catch(function(error) {
            // Error Handling
            $('.message-login').text('your email not correct ');

        });









});


function sendverification(){

    user = firebase.auth().currentUser
    user.sendEmailVerification().then(()=>{



    }).catch((err)=>{

        alert(err)
    });

}
