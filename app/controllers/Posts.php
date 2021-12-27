<?php 
class Posts extends Controller {
		public function __construct(){
			if(!isLoggedIn()){
				redirect('users/login');
			}

			$this->postModel = $this->model('Post');
			$this->userModel = $this->model('User');
			$this->commentModel = $this->model('Commentary');
		}


		public function index(){
			// Get posts
			$posts = $this->postModel->getPosts();
			$data = [
				'posts' => $posts,
			];

			$this->view('posts/index', $data);
		}

		public function add(){
			if(isLoggedInAdmin()){
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
				

				$data = [
				'title' => trim($_POST['title']),
				'body' => trim($_POST['body']),
				'imgbg' => trim($_POST['imgbg']),
				'imgalt' => trim($_POST['imgalt']),
				'user_id' => $_SESSION['user_id'],
				'title_err' => '',
				'body_err' => '',
				'imgbg_err' => '',
				'imgalt_err' => '',
			  ];

			  //validate title
			  if(empty($data['title'])){
			  	$data['title_err'] = 'Entrer un titre';
			  }			
			  if(empty($data['body'])){
			  	$data['body_err'] = 'Entrer un texte';
			  }
			  if(empty($data['imgbg'])){
				$data['imgbg_err'] = "Lien de l'image";
				}
			  if(empty($data['imgalt'])){
				  $data['imgalt_err'] = "Entrer une description de l'image";
			  }

			  //Make sure no errors
			  if(empty($data['title_err']) && empty($data['body_err']) && empty($data['imgbg_err']) && empty($data['imgalt_err'])){
			  	//validated
			  	if($this->postModel->addPost($data)){
			  		flash('post_message', 'Poste ajouté');
			  		redirect('posts');
			  	} else {
			  		die("Quelque chose n'est pas bon");
			  	}
			  }	else {
			  	//load view with errors
			  	$this->view('posts/add', $data);
			  }
			} else {
			  $data = [
				'title' => '',
				'body' => '',
				'imgbg' => '',
				'imgalt' => '',
			  ];

			$this->view('posts/add', $data);
			}
			} else {
				redirect('posts');
			}
		}


	public function edit($id){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$data = [
				'id' => $id,
				'title' => trim($_POST['title']),
				'body' => trim($_POST['body']),
				'imgbg' => trim($_POST['imgbg']),
				'imgalt' => trim($_POST['imgalt']),
				'user_id' => $_SESSION['user_id'],
				'title_err' => '',
				'body_err' => '',
				'imgbg_err' => '',
				'imgalt_err' => '',
			  ];

			  //validate informations
			  if(empty($data['title'])){
			  	$data['title_err'] = 'Entrez un titre';
			  }			
			  if(empty($data['body'])){
			  	$data['body_err'] = 'Entrez un texte';
			  }
			  if(empty($data['imgbg'])){
				$data['imgbg_err'] = "Lien de l'image";
				}
			  if(empty($data['imgalt'])){
				  $data['imgalt_err'] = "Entrer une description de l'image";
			  }	

			  //Make sure no errors
			  if(empty($data['title_err']) && empty($data['body_err']) && empty($data['imgbg_err']) && empty($data['imgalt_err'])){
			  	//validated
			  	if($this->postModel->updatePost($data)){
			  		flash('post_message', 'Poste modifié avec succès');
			  		redirect('posts');
			  	} else {
			  		die("Quelque chose n'est pas bon");
			  	}
			  }	else {
			  	//load view with errors
			  	$this->view('posts/edit', $data);
			  }
			} else {
				// Get existing post form model
				$post = $this->postModel->getPostById($id);
			  //Check for owner
				if($post->user_id != $_SESSION['user_id']){
					redirect('posts');
				}
			  $data = [
			  	'id' => $id,
				'title' => $post->title,
				'body' => $post->body,
				'imgbg' => $post->imgbg,
				'imgalt' => $post->imgalt,
			  ];

			$this->view('posts/edit', $data);
			}		
	}	


    public function show($id){
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);
      $comment = $this->commentModel->getCommByPost($id);


      $data = [
        'post' => $post,
        'user' => $user,
        'comments' => $comment
      ];

      $this->view('posts/show', $data);
    }

    public function delete($id){
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		// Get existing post form model
				$post = $this->postModel->getPostById($id);
			  //Check for owner
				if($post->user_id != $_SESSION['user_id']){
					redirect('posts');
				}
    		if($this->postModel->deletePost($id)){
    			flash('post_message', 'Poste supprimé');
    			redirect('posts');
    		} else {
    			die('Cela ne se passe pas comme prévu');
    		}
    	} else {
    		redirect('posts');
    	}

    }

    //Commentaries

   	public function comment($id){
   		if($_SERVER['REQUEST_METHOD'] == 'POST'){
	

				$post = $this->postModel->getPostById($id);

				$data = [
				'commentbody' => trim($_POST['commentbody']),
            	'user_id' => $_SESSION['user_id'],
            	'commentbody_err' => '',
            	'post_id' => $post->id,
			  ];

			  //validate title
			  if(empty($data['commentbody'])){
			  	$data['commentbody_err'] = 'Svp entrer un commentaire';
			  }			
			  
			  //Make sure no errors
			  if(empty($data['commentbody_err'])){
			  	//validated
			  	if($this->commentModel->addComm($data)){
			  		flash('post_message', 'Commentaire ajouté');
			  		redirect('posts');
			  	} else {
			  		die("Quelque chose n'est pas bon");
			  	}
			  }	else {
			  	//load view with errors
			  	$this->view('posts/comment', $data);
			  }
			} else {
			  $post = $this->postModel->getPostById($id);
			  $data = [
			  	'id' => $post->id,
				'title' => '',
				'commentbody' => '',
			  ];

			$this->view('posts/comment', $data);
			}
	}

}