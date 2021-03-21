<?php
    class Productos extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function Productos()
        {
            $data['page_id'] = 2;
            $data['page_tag'] = "Productos";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "Productos";
            $this->views->getView($this,"Productos",$data);
        }
    }
?>