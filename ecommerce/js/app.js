
  var config = {
    apiKey: "AIzaSyAHkSiRnalhNW2gV0r8dUtfq6Xz2Lxu1xg",
    authDomain: "ecommerce-4ff5b.firebaseapp.com",
    databaseURL: "https://ecommerce-4ff5b.firebaseio.com",
    projectId: "ecommerce-4ff5b",
    storageBucket: "ecommerce-4ff5b.appspot.com",
    messagingSenderId: "778533511533"
  };
  firebase.initializeApp(config);

const txtEmail = document.getElementById('correo');
const txtPassword = document.getElementById('pass');
const btnLogin = document.getElementById('login');
btnLogin.addEventListener('click', e => {
	const email = txtEmail.value;
	const pass = txtPassword.value;
	const auth = firebase.auth();

	const promesa = auth.signInWithEmailAndPassword(email,pass);
	promesa.catch(e => location.href = "admin/error.php");

});


firebase.auth().onAuthStateChanged(firebaseUser => {
	if (firebaseUser) {
			location.href="admin";
		}
});