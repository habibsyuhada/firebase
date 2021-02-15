<!--

=========================================================
* Notus JS - v1.0.0 based on Tailwind Starter Kit by Creative Tim
=========================================================

* Product Page: https://www.creative-tim.com/product/notus-js
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md)

* Tailwind Starter Kit Page: https://www.creative-tim.com/learning-lab/tailwind-starter-kit/presentation

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/assets/img/apple-icon.png" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/styles/tailwind.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <title>Login | Car-E Sucofindo Batam</title>
</head>

<style>
  .loader {
  display: inline-block;
  width: 80px;
  height: 80px;
  }

  .loader:after {
  content: " ";
  display: block;
  width: 64px;
  height: 64px;
  margin: 8px;
  border-radius: 50%;
  border: 6px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: loader 1.2s linear infinite;
  }

  @keyframes loader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
  }
</style>

<body class="text-gray-800 antialiased">
  <div wire:loading id="loading_id" class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gray-700 opacity-75 flex flex-col items-center justify-center hidden">
  <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
  <h2 class="text-center text-white text-xl font-semibold">Loading...</h2>
  <p class="w-1/3 text-center text-white">This may take a few seconds, please don't close this page.</p>
  </div>
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
    <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-black" href="<?= base_url() ?>"></a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
      <i class="text-white fas fa-bars"></i>
    </button>
    </div>
  </div>
  </nav>
  <main>
  <section class="relative w-full h-full py-40 min-h-screen">
    <div class="absolute top-0 w-full h-full bg-gray-900 bg-cover bg-no-repeat" style="background-image: url(<?= base_url() ?>assets/assets/img/bg.jpg);"></div>
    <div class="container mx-auto px-4 h-full">
    <div class="flex content-center items-center justify-center h-full">
      <div class="w-full lg:w-4/12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
        <div class="rounded-t mb-0 px-6 py-6">
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        <div class="flex flex-wrap justify-center mb-3">
          <div class="w-6/12 sm:w-4/12 px-4">
          <img src="<?= base_url() ?>assets/assets/img/logo-sucofindo.png" alt="..." class="shadow rounded max-w-full h-auto align-middle border-none" />
          </div>
        </div>
        <div class="text-gray-500 text-center my-3 font-bold">
          <small>Sign in with credentials</small>
        </div>
        <form method="POST" action="<?php base_url() ?>login/login_process">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
          <input type="email" name="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" placeholder="Email" required />
          </div>
          <div class="relative w-full mb-3">
          <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
          <input type="password" name="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" placeholder="Password" required />
          </div>
          <div>
          <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox" class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150" /><span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span></label>
          </div>
          <div class="text-center mt-6">
          <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
            Sign In
          </button>
          </div>
        </form>
        </div>
      </div>
      <div class="flex flex-wrap mt-6">
        <div class="w-1/2">
        <a href="#pablo" class="text-gray-300"><small>Forgot password?</small></a>
        </div>
        <div class="w-1/2 text-right">
        <a href="./register.html" class="text-gray-300"><small>Create new account</small></a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<!-- <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-app.js"></script> -->

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<!-- <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-analytics.js"></script> -->

<!-- Add Firebase products that you want to use -->
<!-- <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-auth.js"></script> -->
<!-- <script src="https://www.gstatic.com/firebasejs/8.2.3/firebase-firestore.js"></script> -->
<script type="text/javascript">
  // firebase.initializeApp({
  //   apiKey: 'AIzaSyBwC5sLWQrEjziZnMaHx6inXs2iK0tvaiI',
  //   authDomain: 'car-e-c6518.firebaseapp.com',
  //   projectId: 'car-e-c6518'
  // });

  // var db = firebase.firestore();
</script>
<script>
  /* Make dynamic date appear */
  (function() {
  if (document.getElementById("get-current-year")) {
    document.getElementById(
    "get-current-year"
    ).innerHTML = new Date().getFullYear();
  }
  })();
  /* Function for opning navbar on mobile */
  function toggleNavbar(collapseID) {
  document.getElementById(collapseID).classList.toggle("hidden");
  document.getElementById(collapseID).classList.toggle("block");
  }
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
  let element = event.target;
  while (element.nodeName !== "A") {
    element = element.parentNode;
  }
  Popper.createPopper(element, document.getElementById(dropdownID), {
    placement: "bottom-start",
  });
  document.getElementById(dropdownID).classList.toggle("hidden");
  document.getElementById(dropdownID).classList.toggle("block");
  }

  toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
  }
  // $("form").submit(function(e) {
  //   e.preventDefault();
  //   var email = $("input[name=email]").val();
  //   var password = $("input[name=password]").val();
  //   $("#loading_id").removeClass("hidden");
  //   firebase.auth().signInWithEmailAndPassword(email, password)
  //   .then(function(user) {
  //     db.collection("Users").where("Email", "==", email).where("Password", "==", password)
  //     .get()
  //     .then(function(querySnapshot) {
  //       var jumlah = querySnapshot.size;
  //       console.log(jumlah);
  //       if (jumlah > 0) {
  //       // sweetalert('success', 'Success Login!');
  //       var id, nama, email, departemen, role;

  //       querySnapshot.forEach(function(doc) {
  //         console.log(doc.id, " => ", doc.data());
  //         var data = doc.data();
  //         id = doc.id;
  //         nama = data.Nama;
  //         email = data.Email;
  //         role = data.Role;
  //         departemen = data.Departemen;
  //       });
  //       if (role == 'Cost Manager') {
  //         $.ajax({
  //         url: "<?php echo base_url(); ?>login/login_process",
  //         type: "post",
  //         data: {
  //           'id': id,
  //           'nama': nama,
  //           'email': email,
  //           'role': role,
  //           'departemen': departemen,
  //         },
  //         success: function(data) {
  //           // alert(data);
  //           window.location = "<?php echo base_url() ?>dashboard"
  //         }
  //         });
  //       } else {
  //         $("#loading_id").addClass("hidden");
  //         toastr["error"]("Only Cost Manager can login to this Apps!");
  //       }
  //       } else {
  //       $("#loading_id").addClass("hidden");
  //       toastr["error"]("Wrong User or Password!");
  //       }

  //     })
  //     .catch(function(error) {
  //       $("#loading_id").addClass("hidden");
  //       toastr["error"](error);
  //     });
  //   }).catch(function(error) {
  //     if (error.code == 'auth/user-not-found') {
  //     $("#loading_id").addClass("hidden");
  //     toastr["error"]("Wrong User or Password!");
  //     } else {
  //     console.log(error);
  //     $("#loading_id").addClass("hidden");
  //     toastr["error"](error.message);
  //     }
  //   });

  // });
  <?php if($this->session->flashdata('error') == TRUE): ?>
  toastr["error"]('<?php echo $this->session->flashdata('error'); ?>');
  <?php endif; ?>
</script>

</html>