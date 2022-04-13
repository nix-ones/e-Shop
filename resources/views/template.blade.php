<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('titre')</title>
</head>
<body>
    <header class="site-header">
        <div class="site-identity">
         <h1><a href="/">E-Commerce</a></h1>
        </div>
        <nav class="site-navigation">
         <ul class="nav">
          <li><a href="{{URL('register')}}">Connexion</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">ChatNews</a></li>
          <li><a href="#">eCommerce</a></li>
         </ul>
        </nav>
       </header>
    @yield('contenu')
</body>
</html>
