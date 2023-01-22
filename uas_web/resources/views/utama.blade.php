<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg bg-danger-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">BERANDA</a>
    <a class="navbar-brand" aria-current="page" href="{{url('code')}}">CODE</a>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        <a class="nav-link active" aria-current="page" href="{{url('home')}}">TABEL KOMPONEN</a>
          
        </li>
    
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
    <mb-9><center><h1>PROJECT UAS WEB PROGRAMING</h></center></mb-9>
    <h3><center>SISTEM PALANG PINTU PERLINTASAN KERETA API DENGAN BALL TILT SWITCH DAN JOYSTICK BERBASIS ARDUINO </center></h3>
    <div class="container text-center"></div>
    <tr>
            <center><img src="img/PalangPintu.jpg" width="1080px" ></center>

            </tr> 
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });

</body>

</html>