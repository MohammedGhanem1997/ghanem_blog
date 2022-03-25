

window.onload=function () {
    render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
$('#phone_reset').click(function () {
    // firebase.auth().settings.appVerificationDisabledForTesting = true;


var number = $("#resetemobileinput").val();

    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function (error) {
        alert(error.message);
    });

});




$('#code_send').click(function () {
    // firebase.auth().settings.appVerificationDisabledForTesting = true;


    var code = $("#codeinput").val();

    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
    }).catch(function (error) {
        alert(error.message);
    });

});






