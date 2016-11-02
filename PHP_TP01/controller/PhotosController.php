<?php
  require_once("./model/imageDAO.php");
  require_once "BaseController.php";

  class PhotosController extends BaseController {
    function __construct(){
    }

    function index(){
      global $data;
      $this->setMenu();
      $data->content = "photos/index.php";
      $this->include_main_layout();
    }

    private function setMenu(){
      global $data;
      $data->menu["Home"] = "index.php?controller=StaticPagesController&action=home";
      $data->menu["A propos"] = "index.php?controller=StaticPagesController&action=aPropos";
      $data->menu["Images"] = "index.php?controller=PhotosController&action=index";

    }
  }