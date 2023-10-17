<?php 

	class rolesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

        public function selectRoles(){
            //Extrae roles

            $sql = "select * from rol";
            $request = $this->select_all($sql);
            return $request;
        }
	}
 ?>