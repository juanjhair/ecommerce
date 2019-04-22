
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAFIuepCEOftNgeMV8MdX4VIusx9TSycLs",
    authDomain: "publico-7e74c.firebaseapp.com",
    databaseURL: "https://publico-7e74c.firebaseio.com",
    projectId: "publico-7e74c",
    storageBucket: "",
    messagingSenderId: "71532903091"
  };
  firebase.initializeApp(config);


  function IngresoGoogle(){
    if(!firebase.auth().currentUser){
      var provider = new firebase.auth.GoogleAuthProvider();

      provider.addScope('https://www.googleapis.com/auth/plus.login');
      firebase.auth().signInWithPopup(provider).then(function(result){
        var token = result.credential.accessToken;
        var user=result.user;
        var name=result.user.displayName;
        var correo=result.user.email;
        var foto=result.user.photoURL;
        var red= 'Google';
        var json= JSON.stringify(result);
        location.href='login/index.php?name='+name+'&correo='+correo+'&foto='+foto+'&red='+red;
       
      }).catch(function(error){
          var errorCode=error.code;
          if(errorCode==='auth/account-exist-with-diferent-credential'){
            alert('El usuario ya existe');
          }
      });
    }else{
      firebase.auth().signOut();
    }
  }
  document.getElementById('btn-Google').addEventListener('click',IngresoGoogle,false);


  function IngresoFacebook() {
  	if (!firebase.auth().currentUser) {
  		var provider = new firebase.auth.FacebookAuthProvider();

  		provider.addScope('public_profile');
  		firebase.auth().signInWithPopup(provider).then(function(result){
  			var token = result.credential.accessToken;
  			var user = result.user;
  			var name = result.user.displayName;
  			var correo = result.user.email;
        //var foto = result.user.photoURL; Comentado para agregar una url usando la url graph y el id de facebook 
        var facebookId=result.user.providerData[0].uid;
        var foto= "https://graph.facebook.com/"+facebookId+"/picture?height=500";
      
      
        var red = 'Facebook';
        location.href='login/index.php?name='+name+'&correo='+correo+'&foto='+foto+'&red='+red;
       
      }).catch(function(error){
  			var errorCode = error.code;
  			if (errorCode === 'auth/account-exist-with-diferent-credential') {
  				alert('El usuario ya existe');
  			}
  		});
  	}else{
  		firebase.auth().signOut();
  	}
  }

  document.getElementById('btn-Facebook').addEventListener('click',IngresoFacebook,false);

