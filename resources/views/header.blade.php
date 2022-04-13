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






<ul>
  <li>
    <div class="dropdown">
        <button class="dropbtn">Dropdown
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div> 
  </li>
  <li><a href="#news">NEWS</a></li>
  <li><a href="#contact">CHATTS/NEWS</a></li>
  <li><a href="#about">SERVICE</a></li>
</ul>
@yield('contenu')
</body>
</html>
