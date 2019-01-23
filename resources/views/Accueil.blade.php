@include('Head')
<main>
	<div id="accueil">

		<section  id="presentation">
			<div class="francais presentation">
				<h1 class="titreprensentation">Aleth Arrias, webdesigner   
				<a href="https://github.com/Neareeves/" target="_blank"><i class="fab fa-github"> </i></a></h1>
				<div class="portfolio">Bienvenue sur mon portfolio! <br>N'hésitez pas à me contacter à l'issue de votre visite.</div>
				<div class="containerGridAcc">
					<div class="GridAc1">
						<h3 class="GridAc1Titre">Qui suis-je?</h3>
						<div class="GridAc1Texte">Après huit ans passés dans les rédactions, la journaliste que je suis a décidé de prendre à bras-le-corps le virage du numérique. J'ai intégré une formation intensive de web developper : huit mois, dont deux mois de stage, pour me familiariser avec les principaux langages web, avec des projets aussi divers et variés que coder des jeux en JavaScript, des répertoires de films ou des explorateurs de fichiers. S'il me reste encore, évidemment, des choses à métriser, PHP, MySQL, les variables, les boucles, et les frameworks JavaScript font maintenant partie de mon quotidien. <br>
						Cette formation n'est qu'une adaptation aux évolutions de mon métier, le journalisme. Mon plan de bataille de départ était, à l'issue de ces huit mois, de retourner au journal pour donner une dimension plus interactive et visuelle à mes articles de presse. Alors que j'avance dans la formation, je reçois la confirmation que je pourrais aussi m'épanouir dans le métier de web développeuse, pour lequel mon appétance n'est pas nouvelle. Ce qui fera pencher la balance entre ces deux métiers sera les projets que me proposeront les entreprise au moment de trouver mon nouvel emploi.</div>
					</div>


					<div class="GridAc2">
						<div class="GridAc2Photo">
							<img class="boxshadow" src="{{asset('images/ERA-wetransfer.png')}}">
						</div>
					</div>
					<div class="GridAc3">
						<div class="GridAc3Photo"><img class="boxshadow" src="{{asset('images/jimini.png')}}">
						</div>
					</div>
					<div class="GridAc4">
						<h3 class="GridAc4Titre">Les projets avec l'Access Code School</h3>
						<div class="GridAc4Texte">Access Code School est un centre de formation labellisé "grande école du numérique". La formation de huit mois octroie un titre professionnel de designer web (bac +2) et s'organise sur un "mode projet". Pas de cours ni de contrôles, mais des projets à réalisés en groupe ou seul en des temps limités. Avant la date limite de rendu, à chaque projet, il faut délivrer un site internet fonctionnel respectant le cahier des charges.</div>
					</div>
				</div>
			</div>
	<div class="anglais presentation">
				<h1 class="titreprensentation">Aleth Arrias, webdesigner</h1> 
				<div class="portfolio">Welcome! Your are visiting my portfolio right now. Feel free to explore and contact me if you have questions. Seen you soon!</div>
				<div class="containerGridAcc">
					<div class="GridAc1">
						<h3 class="GridAc1Titre">Who am I?</h3>
						<div class="GridAc1Texte">After eight years working as a journalist, I decided to move forward into the numeric revolution. One little year later, here am I, journalist and web developper full stack.<br>
						During eight months, I worked hard to developp my coding skills at school (Access Code School). I burst into the world of PHP and JavaScript, fell deep down in the Bootstrap maze and hardly found my way in the Twig forest. But with the giant amount of things I learned, I am able now to travel by myself in the web jungle and hope I will find great project to keep increasing my knowledges.</div>
					</div>


					<div class="GridAc2">
						<div class="GridAc2Photo">
							<img src="{{asset('images/ERA-wetransfer.png')}}">
						</div>
					</div>
					<div class="GridAc3">
						<div class="GridAc3Photo"><img src="{{asset('images/jimini.png')}}">
						</div>
					</div>
					<div class="GridAc4">
						<h3 class="GridAc4Titre">Projects with Access Code School</h3>
						<div class="GridAc4Texte">ACS is the school I went to in 2018-2019. Located in Belfort (France), this school is organised around reversed pedagogy. It means that we don't have class. We just have projects with dead-lines and specifications. Alone or with a team, we must figure it out by ourselves and deliver, before it's running too late, a perfectly functinnal website. The kind of projects were really different, from coding games, wish cards, databases for movies, or dataviz.</div>
					</div>
				</div>
			</div>
		</section>
		</div>


		<section id="derniersprojets">
			<div class="derniersprojets">
				<h2 class="francais">Mes derniers projets</h2>
				<h3 class="francais">Cliquez sur les photos pour en voir plus</h3>
				
				<h2 class="anglais">My last projects</h2>
				<h3 class="anglais">Click on the pictures to see more of them</h3>

				<!-- Trigger/Open The Modal -->
				<div id="testscroll">
				<button id="myBtn"><img src="{{asset('images/spaceinvader.png')}}"/></button>
			</div>

				<!-- The Modal -->
				<div id="myModal" class="modal">

					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">&times;</span>
						<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="{{asset('images/logospace.gif')}}" style="width:100%; max-height: 750px">
    <div class="text">Aliens animés</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="{{asset('images/starlight.gif')}}" style="width:100%; max-height: 750px">
    <div class="text">Fond étoilé dynamique</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="{{asset('images/space2.png')}}" style="width:100%; max-height: 750px">
    <div class="text">Capture d'écran en cours de jeu</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

					</div>

				</div>
				<!-- fin modal -->

<!--modal 2-->

	
<button id="myBtn2"><img src="{{asset('images/cartevoeux.png')}}"/></button>


<!-- The Modal -->
				<div id="myModal2" class="modal">

					<div class="modal-content">
						<span class="close2">&times;</span>
						<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides2 fade">
    <div class="numbertext">1 / 3</div>
    <img src="{{asset('images/cartepremiereanim.png')}}" style="width:100%; max-height: 750px">
    <div class="text">Cature d'écran, hiver</div>
  </div>

  <div class="mySlides2 fade">
    <div class="numbertext">2 / 3</div>
    <img src="{{asset('images/perenowel.png')}}" style="width:100%; max-height: 750px">
    <div class="text">Père noël</div>
  </div>

  <div class="mySlides2 fade">
    <div class="numbertext">3 / 3</div>
    <img src="{{asset('images/index2.png')}}" style="width:100%; max-height: 750px">
    <div class="text">Loup</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plus2Slides(-1)">&#10094;</a>
  <a class="next" onclick="plus2Slides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot2" onclick="current2Slide(1)"></span>
  <span class="dot2" onclick="current2Slide(2)"></span>
  <span class="dot2" onclick="current2Slide(3)"></span>
</div>

					</div>

				</div> 
<!-- end modal -->

				<div class="flexboutons">
				<a href="?page=Projets"><button class="boutonprojets">Tous les projets</button></a>
				<a href="https://github.com/Neareeves/" target="_blank"><button class="boutongit">GitHub  <i class="fab fa-github"></i></button></a>
				</div>
		</section>
	</div>



	
	</main>
	<script src="{{ asset(mix('/js/scriptaccueil.js')) }}" type="text/javascript"></script>
	@include('Contact')
	@include('Footer')