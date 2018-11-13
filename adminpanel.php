<html>
  <head>
    <font face="Arial, Helvetica, sans-serif">
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <body>
    <nav class="navbar">
       <div class="nav-wrapper">
         <img src="broverlogo.png"></img>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="adminpanel.php">Home</a></li>
           <li><a href="profiel.php">Profiel</a></li>
         </ul>
       </div>
     </nav>
     <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img class="brvlogo" src="broverlogo.png">
      </div>
      <a href="#user"><img class="circle" src="broverlogo.png"></a>
      <a href="#name"><span class="white-text name"></span></a>
      <a href="#email"><span class="white-text email">admin@brover.nl</span></a>
    </div></li>
    <li><a href="#!">Klanten</a></li>
    <li><a href="#!">Gebruikers</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Auto management</a></li>
    <li><a class="waves-effect" href="#!">Bestellingen</a></li>
    <li><a class="waves-effect" href="#!">Artikelen</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="waves-effect orange btn">menu</i></a>
  </body>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems);
 });

 // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
 // var collapsibleElem = document.querySelector('.collapsible');
 // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

 // Or with jQuery

 $(document).ready(function(){
   $('.sidenav').sidenav();
 });
 </script>
</html>
