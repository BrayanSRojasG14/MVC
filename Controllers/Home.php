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
    }
?>