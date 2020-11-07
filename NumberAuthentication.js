
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');

function phoneAuth() {
    var phoneNumber = document.getElementById('number').value;
    var appVerifier = window.recaptchaVerifier;
    firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
        .then(function (confirmationResult) {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
        }).catch(function (error) {
            // Error; SMS not sent
            // ...
            alert(error.message);
        });
}
