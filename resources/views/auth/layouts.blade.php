<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>@yield('title') || {{ config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<style>
@font-face {
  font-family: menu;
  src: url({{ asset('../fonts/bpg_extrasquare_2009.ttf') }});
}
@font-face {
  font-family: menu1;
  src: url({{ asset('../fonts/bpg_extrasquare_mtavruli_2009.ttf') }});
}
body,html {
    font-family: menu!important;
}
h1,h2,h3,h4 {
    font-family: menu1!important;
}
      body {
  background: #222;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://unsplash.it/1200/800/?random');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-fill-mode: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}


.container {
  background: white;
  padding: 20px 25px;
  border: 5px solid #26a69a;
  width: 550px;
  height: auto;
  box-sizing: border-box;
  position: relative;
}
.col.s6 > .btn {
   width: 100%;
}
.gender-male,.gender-female {
  display: inline-block;
}
.gender-female {
  margin-left: 35px;
}
radio:required {
  border-color: red;
}
.container {
  animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
}

@keyframes showUp {
  0% {
    transform: scale(0);
  }
  100% {
    transoform: scale(1);
  }
}
.row {margin-bottom: 10px;}

.ngl {
  position: absolute;
  top: -20px;
  right: -20px;
}
.m{
    font-size: 14px;
    color: red;
}
.alert{
  position: relative;
      padding: 10px 5px;
      margin-bottom: 1rem;
      border: 1px solid transparent;
      border-radius: .25rem;
}
.alert-success{
  color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


<style type="text/css" data-asas-style="">body, div, a, p, span{ user-select: text !important; }p, h1, h2, h3, h4, h5, h6{ cursor: auto; user-select: text !important; }::selection{ background-color: #338FFF !important; color: #fff !important; }</style></head>

<body translate="no">

  <div class="container">
<div class="row">
    @yield('content')
</div>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  

    <script>
      $(document).ready(function () {
  $('select').material_select();
});
      //# sourceURL=pen.js
    </script>



 <div class="hiddendiv common"></div></body></html>
