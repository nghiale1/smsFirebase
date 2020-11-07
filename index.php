<html>
<head>
    <title>SMS Firebase</title>
</head>
<body>
<h1>Nhập số điện thoại</h1>
<form>
    <input type="text" id="number" placeholder="+923********" value="+84826903960">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">Gửi mã</button>
</form><br>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.0.1/firebase.js"></script>

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyD626sBiZytXTYOZU-k8nm6x6UvIelbjn0",
    authDomain: "sms-firebase-ccac2.firebaseapp.com",
    databaseURL: "https://sms-firebase-ccac2.firebaseio.com",
    projectId: "sms-firebase-ccac2",
    storageBucket: "sms-firebase-ccac2.appspot.com",
    messagingSenderId: "411252391650",
    appId: "1:411252391650:web:c9296a3c006f95420d28bb",
    measurementId: "G-XTYEX29MVW"
  };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>