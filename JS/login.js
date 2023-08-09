

const firebaseConfig = {
    apiKey: "",
    authDomain: "",
    databaseURL: "",
    projectId: "",
    storageBucket: "",
    messagingSenderId: "",
    appId: ""
  };
  firebase.initializeApp(firebaseConfig);
  var db = firebase.database().ref("webform");    //webform is my firebase project name 
  var auth = firebase.auth();
  
  
  function register() {
    var user = document.getElementById("uname").value;
    var mob = document.getElementById("mob").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    // console.log(user, mob, email, pass, cpass);
  
    const form = document.querySelector("form");
    (uField = form.querySelector(".username")),
      (mField = form.querySelector(".mobile")),
      (eField = form.querySelector(".email")),
      (pField = form.querySelector(".password")),
      (cpField = form.querySelector(".cpassword"))
    validate_user(user);
    validate_mobile(mob);
    validate_email(email);
    validate_password(pass, cpass);
    if (
      validate_user(user) == true && validate_email(email) == true && validate_mobile(mob) == true && validate_password(pass, cpass) == true) {
  
      //move to auth
      auth.createUserWithEmailAndPassword(email, pass).then(function () {
        var newuser = auth.currentUser;
  
        // add to firebase database
        var user_data = {
          UserName: user,
          Mobile_Number: mob,
          Email: email,
          Password: pass,
          Confirm_Password: cpass
        };
        db.child("users/" + newuser.uid).set(user_data);
        alert("User created!!");
      })
        .catch(function (error) {
          var error_code = error.code;
          var error_message = error.message;
          alert(error_message);
        })
    }
  }
  function login() {
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    const form = document.querySelector("form");
    (eField = form.querySelector(".email"));
  
    (pField = form.querySelector(".password"));
  
    validate_email(email);
    validate_key(pass);
  
    if (
      validate_email(email) == true && validate_key(pass) == true) {
  
      //move to auth
      auth.signInWithEmailAndPassword(email, pass).then(function () {
        var newuser = auth.currentUser;
  
        // add to firebase database
        // var user_data = {
        //   UserName: user,
        //   Mobile_Number: mob,
        //   Email: email,
        //   Password: pass,
        //   Confirm_Password: cpass
        // };
        // db.child("users/" + newuser.uid).set(user_data);   //write update in place of set if u want to update database on login
        alert("User logged in!!");
      })
        .catch(function (error) {
          var error_code = error.code;
          var error_message = error.message;
          alert(error_message);
        })
    }
  
  
  }
  function validate_key(pass) {
    if (pass.length > 6) {
      pField.classList.remove("error");
      pField.classList.add("valid");
      return true;
    } else {
  
      pField.classList.add("error");
      pField.classList.remove("valid");
      if (pass != "") {
        pField.classList.remove("error");
        pField.classList.add("valid");
      }
  
      return false;
    }
  }
  function validate_user(user) {
    const usernameRegex = /^[a-zA-Z0-9]+$/;
    if (usernameRegex.test(user)) {
      uField.classList.remove("error");
      uField.classList.add("valid");
      return true;
    } else {
  
      uField.classList.add("error");
      uField.classList.remove("valid");
      let errorTxt5 = uField.querySelector(".error-txt");
      user != "" ? (errorTxt5.innerText = "Enter a valid User Name") : "";
      return false;
    }
  }
  function validate_email(email) {
    expression = /^[^@]+@\w+(\.\w+)+\w$/;
    if (expression.test(email) == true) {
  
      eField.classList.remove("error");
      eField.classList.add("valid");
      return true;
    } else {
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      email != "" ? (errorTxt.innerText = "Enter a valid email address") : "";
      return false;
    }
  }
  function validate_password(pass, cpass) {
    if (pass.length > 6 && cpass.length > 6 && pass === cpass) {
      // console.log("yes");
      pField.classList.remove("error");
      pField.classList.add("valid");
      cpField.classList.remove("error");
      cpField.classList.add("valid");
      return true;
    } else {
      // console.log("no");
  
      pField.classList.add("error");
      pField.classList.remove("valid");
      cpField.classList.add("error");
      cpField.classList.remove("valid");
      let errorTxt1 = pField.querySelector(".error-txt");
      let errorTxt2 = cpField.querySelector(".error-txt");
      if (pass != "") {
        pField.classList.remove("error");
        pField.classList.add("valid");
      }
      cpass != ""
        ? (errorTxt2.innerText =
          "Confirm password must be same as above password")
        : "";
      return false;
    }
  }
  function validate_mobile(mob) {
    let c = 0;
    var i;
    for (i = 0; i < mob.length; i++) {
      if (mob.charAt(i) > 0 || mob.charAt(i) < 9) c = c + 1;
    }
    if (c != 10) {
      mField.classList.add("error");
      mField.classList.remove("valid");
      let errorTxt4 = mField.querySelector(".error-txt");
      mob != "" ? (errorTxt4.innerText = "Enter a valid Mobile Number") : "";
      return false;
    } else {
      mField.classList.remove("error");
      mField.classList.add("valid");
  
      return true;
    }
  }
  