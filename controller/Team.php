<?php 
class Team{
    protected $model = '';

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $music = $this->model->getAllTeam();
        require 'view/team/list.php';
    }

    // public function detail($id)
    // {
    //     $music = $this->model->getTeamById($id);
    //     require 'view/music/detail.php';
    // }

    // public function create()
    // {
    //     if ($_POST) {
    //         $this->model->insert();
    //         header("Location: http://localhost/pdomvc/index.php/music");
    //     } else {
    //         require 'view/music/form.php';
    //     }
    // }

    // public function edit($id)
    // {
    //     if ($_POST) {
    //         $this->model->update($id);
    //         header("Location: http://localhost/pdomvc/index.php/music");
    //     } else {
    //         $music = $this->model->getTeamById($id);
    //         require 'view/music/form.php';
    //     }
    // }

    // public function delete($id)
    // {
    //     if ($id) {
    //         $this->model->delete($id);
    //         header("Location: http://localhost/pdomvc/index.php/music");
    //     }
    // }
}