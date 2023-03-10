<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title }}</title>

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="{{ asset('assets/css/dashboard/sb-admin-2.min.css') }}" rel="stylesheet">

   <link href="{{ asset('assets/css/dashboard/style.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

   <div class="container">
      @yield('content')
   </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
   integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/dashboard/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/sb-admin-2.min.js') }}"></script>
</body>

</html>
