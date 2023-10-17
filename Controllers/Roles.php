<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles usuario";
			$data['page_title'] = "Roles Usuario <small> Tienda Virtual </small>";
			$data['page_name'] = "Roles";
			$this->views->getView($this,"Roles",$data);
		}


		public function getRoles(){
			$arrData = $this->model->selectRoles();

			for ($i=0; $i < count($arrData); $i++) {
				if ($arrData[$i]['estado']==1) {
					$arrData[$i]['estado'] = '<span class="me-1 badge bg-success">Activo</span>';
				} else {
					$arrData[$i]['estado'] = '<span class="me-1 badge bg-danger">Inactivo</span>';
				}
				
				$arrData[$i]['options'] = '<div class="text-center">
				
				<button type="button" class="btn btn-secondary" btn-sm btnPermisosRol rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="bi bi-check2-square"></i></button> 
				<button type="button" class="btn btn-primary" btn-sm btnEditRol rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="bi bi-pencil-square"></i></button> 
				<button type="button" class="btn btn-danger" btn-sm btnDelRol rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="bi bi-trash3"></i></button>
				
				</div>';
				
			}



			echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
			die();
		}
	}
 ?>