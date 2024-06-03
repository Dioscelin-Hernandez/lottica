<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <title>
    Inicio Sesión
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body background="assets/img/fondos.png" class="">
  <!-- Navbar -->
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
      style="background-image: url('https://www.lentiamo.es/images/upload/womens-mens-glasses-trends-1600x500.jpg">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">!Bienvenido!</h1>
            <h4 class="text-lead text-white" style=" margin-bottom: -20px;">Inicio Sesión</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <center>
                <img src="assets/img/logo.png" alt="main_logo" width="140" height="80">
              </center>
            </div>
            <div class="card-body" style=" margin-top: -20px;">
              <form>
                <div class="text-center" id="spinner-container" style="display: none;">
                  <div class="spinner-border" role="status">
                    <span class="visually-hidden">Cargando...</span>
                  </div>
                </div>
                <div class="mb-3">
                  <input id="user" type="text" class="form-control" placeholder="Email/Nombre/Telefono" aria-label="Usuario" 
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                </div>
                <div class="mb-3">
                  <input type="password" id="pass" class="form-control" placeholder="Password" aria-label="Password" minlength="5"
                    maxlength="16">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Recordarme
                  </label>
                </div>
                <div class="text-center">
                  <button class="btn bg-gradient-dark w-100 my-4 mb-2" type="button"  onclick="login()" >Iniciar Sesión</button>
                </div>
                <p class="text-sm mt-3 mb-0">Olvidaste tu contraseña? <a href="contraseña.php"
                    class="text-dark font-weight-bolder">Recuperala</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Cree en ti
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Tu puedes
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Sonrie
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Vive
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Vuela
          </a>
          <a href="#" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Sueña
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="https://www.facebook.com/Lotticaa/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_review_changes=0&show_community_rollback=0&show_follower_visibility_disclosure=0"
            target="_blank" class="text-secondary me-xl-4 me-4">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/lott.ica?igsh=MWc1M3NsNnIyNTB0ZA==" target="_blank"
            class="text-secondary me-xl-4 me-4">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="https://www.tiktok.com/@lottica123?_t=8jgl554p50f&_r=1" target="_blank"
            class="text-secondary me-xl-4 me-4">
            <i class="fab fa-tiktok"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> <a href="#" class="font-weight-bold" target="_blank">D.H.W.J</a>
            para L'ottica
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script>

    function mostrarSpinner() {
      // Muestra el spinner
      document.getElementById('spinner-container').style.display = 'block';
      // Deshabilita los elementos interactivos
      document.querySelectorAll('button, input, a').forEach(function(elemento) {
        elemento.disabled = true;
      });
    }

    function ocultarSpinner() {
      // Oculta el spinner
      document.getElementById('spinner-container').style.display = 'none';
      // Habilita los elementos interactivos
      document.querySelectorAll('button, input, a').forEach(function(elemento) {
        elemento.disabled = false;
      });
    }
      function login(){
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        if(user === ""){
          Swal.fire("Pon tu usuario");
        }else if(pass === ""){
          Swal.fire("Pon tu contraseña");
        }else{
          mostrarSpinner()

          // URL de la API que deseas consultar
          const apiUrl = 'http://127.0.0.1:8000/api/login';
                  const postData = {
                    nombre: user,
                    contrasena: pass
                  };

                  // Realizar la solicitud fetch
                  fetch(apiUrl,{
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json',
                          // Otros encabezados si es necesario
                        },
                        body: JSON.stringify(postData)
                      })
                    .then(response => {
                      // Verificar si la respuesta está en el rango 200-299 (éxito)

                      if(response.status === 222){
                        ocultarSpinner()
                        Swal.fire("Contraseña incorrecta");
                        return
                      }else if(response.status === 208){
                        ocultarSpinner()
                        Swal.fire("Usuario incorrecto");
                        return
                      }
                      if (!response.ok) {
                        throw new Error(`Error de red: ${response.status}`);
                      }
                      // Convertir la respuesta a formato JSON
                      return response.json();
                    })
                    .then(data => {
                      // Hacer algo con los datos obtenidos
                      let idUser = data[0].id 

                      localStorage.setItem('session', idUser)
                      

                      // Realizar una solicitud AJAX para enviar la variable a PHP
                      $.ajax({
                        type: "POST",
                        url: "class/session.php",
                        data: { variableJS: idUser },
                        success: function(response) {
                          console.log("Variable enviada exitosamente a PHP.");
                          window.location.href = 'empresa/dashboard'
                          ocultarSpinner()

                        },
                        error: function(error) {
                          console.error("Error al enviar la variable a PHP:", error);
                        }
                      });
                      

                    })
                    .catch(error => {
                      // Manejar errores de red u otros errores
                      console.error('Error en la solicitud fetch:', error);
                      
                    });
                  }
      }
  </script>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>