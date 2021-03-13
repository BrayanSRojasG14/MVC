<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home()
        {
            $data['page_id'] = 1;
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro pariatur nobis beatae eveniet obcaecati neque, nemo temporibus aliquam incidunt, commodi hic cum veniam sunt aspernatur tenetur officia quibusdam? Ipsa, pariatur.";
            $this->views->getView($this,"home",$data);
        }

        public function insertar()
        {
        $data =$this->model->setUser("carlos",15);
        $data =$this->model->setUser("a",1);
        print_r($data);
        }
        public function verusuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }
        public function actualizar()
        {
            $data = $this->model->updateuser(1,"juan",63);
            print_r($data);
        }
        public function verusuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }
        public function eliminarUsuario($id)
        {
            $data = $this->model->delUser($id);
            print_r($data);
        }
    }
?>