<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rugby à 7</title>
 <meta charset="UTF-8"> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

</head>
<body>
  <a href="{{ url('/login') }}">Login</a>
<a href="{{ url('/logout') }}">Logout</a>
<div id="container">
  <!-- Début de la page Header -->
  <div id="page_header">
    <h1><span>Rugby à 7</span></h1>
    <h3><span>Le blog du rugby !</span></h3>
  </div>
  <!-- Fin de la page Header -->
  <!-- Début de la page Menu -->
  <div id="page_menu">
    <ul>
      <li class="black" id="home"><a href="#"><strong><span>Home</span></strong></a></li>
      <li id="matchs"><a href="/games"><strong><span>Matchs</span></strong></a></li>
      <li id="equipes"><a href="/teams"><strong><span>Equipes</span></strong></a></li>
      <li id="classement"><a href="/table"><strong><span>Classement</span></strong></a></li>
      
      
    </ul>
  </div>
  <!-- Fin de la page Menu -->
  <!-- Début de la page "chercher" -->
  <div id="page_search">
    <form action="#">
      <div>
        <h3>Chercher : </h3>
        <input name="search" type="text" size="20" />
        <input type="image" src="images/search_button.gif" alt="Go" class="button" />
        <div class="clearthis">&nbsp;</div>
      </div>
    </form>
  </div>
  <!-- Fin de la page "chercher" -->
  <!-- Début de la page contenu -->
  <div id="page_content">
    <div id="welcome_text">
      <div class="content_box">
        <h2><span>...</span></h2>
        <p><h2>Toute l'actualité du rugby à 7 en temps réel ! </h2><br/><br>
          <br/>
          Bla bla bla bla bla <br/>
          <br/>
          <h2>Les matchs à venir : </h2></a></p>
      </div>
    </div>
    
    <div id="matchs_column">
      <!-- Début des matchs à venir -->
      <div id="match1">
        <div class="matchs_textbox">
          <h2><span>match 1</span></h2>
         <p> <h3>MONTPELLIER/STADE FRANCAIS</h3> </p>
          <div class="link-more"> <a href="games">plus</a> </div>
          <div class="clearthis">&nbsp;</div>
        </div>
      </div>
      <!--  -->
      <!--  -->
      <div id="match2">
        <div class="matchs_textbox">
          <h2><span>match 2</span></h2>
          <p> <h3>TOULOUSE/ALBI</h3> </p>
          <div class="link-more"> <a href="games">plus</a> </div>
          <div class="clearthis">&nbsp;</div>
        </div>
      </div>
      
      <div id="match3">
        <div class="matchs_textbox">
          <h2><span>match 3</span></h2>
          <p> <h3>CLERMONT/LIMOGES</h3> </p>
          <div class="link-more"> <a href="games"">plus</a> </div>
          <div class="clearthis">&nbsp;</div>
        </div>
      </div>
      
    </div>
    <!-- Inscription -->
    <div id="mailing_list">
      <h2>Inscrivez-vous à la newsletter. Inscrivez votre mail</h2>
      <form action="#">
        <div>
          <input type="text" />
          <input type="image" src="images/mailinglist_button.gif" alt="Go" class="button" />
        </div>
      </form>
    </div>
    
    <div class="clearthis">&nbsp;</div>
  </div>
 
  <div id="footer_links">
    <ul>
      <li><a href="#">Home</a></li>
      
      
      <li><a href="#">Histoire du rugby à 7</a></li>
      <li><a href="#">Qui sommes-nous ?</a></li>
      <li><a href="#">Mentions légales</a></li>
      <li class="last"><a href="#">Nous contacter</a></li>
    </ul>
    <div class="clearthis">&nbsp;</div>
  </div>
  <!-- -->
  <!-- Début duFooter -->
  <div id="page_footer"> Site réalisé par Yon, Raphael et Clément  </div>
  <!-- Fin du Footer -->
</div>
</body>
</html>
