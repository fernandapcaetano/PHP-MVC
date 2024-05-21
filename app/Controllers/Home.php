<?php

class Home extends Controller{

    public function index(){
        $model = new Model;

        $array['name'] = "Carla Regina";
        $array['age'] = "47";

        //$array_not['name'] = "Sarah Pereira";

        $result = $model->insert($array);
        show($result);


        $this->view("home");
    }
}