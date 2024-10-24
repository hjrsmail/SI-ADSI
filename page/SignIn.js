function Login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    if (username === "" || password === "") {
        alert("Username atau password tidak boleh kosong!.");
        window.location="";
    } else if (username == "hijir" && password == "1234") {
      alert("Selamat anda berhasil login");
      window.location.href = "Beranda.html";
    } else {
      alert("Username dan password anda salah!");
      window.location.href = "SignIn.html";
    }
  }


  function togglePassword() {
    var password = document.getElementById("password");
    var togglePassword = document.querySelector(".toggle-password");
    if (password.type === "password") {
      password.type = "text";
      togglePassword.innerHTML = "Hide Password";
    } else {
      password.type = "password";
      togglePassword.innerHTML = "Show Password";
    }
  }