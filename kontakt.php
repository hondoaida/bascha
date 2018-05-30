<?php include 'header.php'; ?>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="slike/logo.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Početna</a></li>
        <li><a href="#">O nama</a></li>
        <li><a href="#">Naši radovi</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cjenovnik</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
<div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"><h3>Bašte</h3></a></p>
      <p><a href="#"><h3>Voćnjaci</h3></a></p>
      <p><a href="#"><h3>Cvijetnici</h3></a></p>
      <p><a href="#"><h3>Prilazi</h3></a></p>
      <p><a href="#"><h3>Ograde</h3></a></p>
    </div>
    
  <div class="col-sm-8 text-left"> 
    
     <div>
        Vase ime:<br>
        <input type="text" id="fname"><br>
        Vase prezime:<br>
        <input type="text" id="lname"><br>
        Poruka:<br>
        <input type="text" id="message"><br>
        <button type="button" onclick="mojKontakt()">Posalji</button>
      </div>

    <div class="col-sm-2 sidenav">
       <div class="well">
        <p>NAŠ CILJ</p>
        <p>Da što prije sjedite u opremljenom vrtu</p>
        <img src="slike/ad2.jpg" width="150">
      </div>
      <div class="well">
        <p>USLUGE</p>
        <p>Nudimo vam usluge prilagođene vašim potrebama</p>
        <img src="slike/ad3.jpg" width="150">
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>