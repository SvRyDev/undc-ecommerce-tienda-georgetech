<?php 

	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Login";
			$data['page_title'] = "Iniciar Sesion";
			$data['page_name'] = "login";
			$data['page_content'] = "";
			$this->views->getView($this,"login",$data);
		}

	}
 ?>