<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>presentation</title>
        <meta charset="UTF-8"/>
  <!--[if lt IE 9]>
    <script src="./node_modules/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap-social/bootstrap-social.css"/>
  <link rel="stylesheet" type="text/css" href="./node_modules/font-awesome/css/font-awesome.css"/>
  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/main.css"/>
  </head>
    <body>
        <nav>
            <a href="./" class="logo"><img src="./assets/images/img_cv.png" alt="bulle affichee"/></a>    
            <a href="#about">about</a>
            <a href="#skills">skills</a>
            <a href="#contact">contact</a>            
        </nav>
        <header>
            <h1>Laurent Fonquerne</h1>
            <p>Concepteur Developpeur Informatique</p>
            <div>                
               <img src="./assets/images/php.png" alt="pic php" class="php language">                                       
            </div>
            <div>                
               <img src="./assets/images/java.png" alt="pic java" class="java language">                        
            </div>
            <div>                
               <img src="./assets/images/android.png" alt="pic android" class="android language">
            </div>
            <div>                
               <img src="./assets/images/js.png" alt="pic js" class="js language">                        
            </div>
            <div>                
               <img src="./assets/images/html.png" alt="pic html" class="html language">
            </div>
        </header>
        <section id="about" class="container-fluid">
            <h2>about</h2>
			<div class="row">
				<ul>
					<li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a><span class="reseauxsociaux">twitter</span></li>
					<li><a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a><span class="reseauxsociaux">facebook</span></li>
					<li><a class="btn btn-social-icon btn-github"><span class="fa fa-github"></span></a><span class="reseauxsociaux">github</span></li>
					<li><a class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a><span class="reseauxsociaux">instagram</span></li>
					<li><a class="btn btn-social-icon btn-linkedin"><span class="fa fa-linkedin"></span></a><span class="reseauxsociaux">linkedin</span></li>
					<li><a class="btn btn-social-icon btn-soundcloud"><span class="fa fa-soundcloud"></span></a><span class="reseauxsociaux">soundcloud</span></li>
				</ul>
			</div>	
        </section>
        <section id="skills" class="container-fluid">
            <h2>skills</h2>
			<div class="row">
				<a class="audit" href="#" title="">
					<div></div>
					<strong></strong>
					<span>aaa</span>
				</a>
				<a class="formations" href="#" title="">
					<div></div>
					<strong></strong>
					<span>bbb</span>
				</a>
				<a class="back-end" href="#" title="">
					<div></div>
					<strong></strong>
					<span>ccc</span>
				</a>
				<a class="front-end" href="#" title="">
					<div></div>
					<strong></strong>
					<span>ddd</span>
				</a>
				<a class="logiciel" href="#" title="">
					<div></div>
					<strong></strong>
					<span>eee</span>
				</a>
				<br/>
			</div>	
		</section>
			
        <footer id="contact" class="container-fluid">
            <h2>contact</h2>
            <div class="row">
                <form action="traitement.php" 
                      method="POST"
                      class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input class="form-control" placeholder="Nom">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input class="form-control" placeholder="Prenom">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-envelope "></span>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-phone "></span>
                        <input type="text" class="form-control" placeholder="Téléphone">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-pencil"></span>
                        <textarea name="message" id="message" class="form-control">on peut écrire ici ...</textarea>                                             
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <br>
        </footer>
    </body>
</html>