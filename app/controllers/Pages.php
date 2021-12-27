<?php 
	class Pages extends Controller {
		public function __construct(){
			
		}


		public function index() {
			//if(isLoggedIn()){
			//	redirect('posts');}

			$data = [
				'title' => "Hong-Kong en grand!",
				'description' => 'Partez avec moi à l\'aventure de Hong Kong ! ',
			];

			$this->view('pages/index', $data);
		}


		public function about(){
			$data = [
				'title' => 'Bienvenue sur mon site !',
				'description' => "La photographie permet de figer éternellement un moment et de mettre une image sur un souvenir ou évènement et c'est pour cette raison que je me suis lancé dans la photographie à Hong-Kong, afin de garder mettre une image sur tous ces souvenirs qui finiront effacer avec le temps.
				<br>Je m'appelle Sofiane et je vais vous présenter mon site sur Hong-Kong de nuit comme de jour. C'est une destination bien peu connu des français bien qu'il y en ait énormement ici. Mais l'Asie reste méconnu d'énormement de français.
				<br>Le site est accessible seulement après vous être inscrit et connecté, ainsi vous pourrez partager avec moi votre ressenti et pourquoi pas votre envie de voyager. ",
			
			];
			$this->view('pages/about', $data);
		}

		public function meteo(){
			$this->view('pages/meteo');
		}
	}