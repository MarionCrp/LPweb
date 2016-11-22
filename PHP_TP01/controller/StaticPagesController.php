<?php
  require_once "BaseController.php";

  class StaticPagesController extends BaseController {

    function __construct() {
    }

    function home(){
      global $data;
      $this->setMenu();
      $data-> content = "static_pages/home.php";
      include("view/application_layout.php");
    }

    function aPropos(){
      global $data;
      $this->setMenu();
      $data-> content = "static_pages/aPropos.php";
      $this->include_main_layout();
    }

    private function setMenu(){
      global $data;
      $data->menu["Home"] = "index.php?controller=StaticPagesController&action=home";
      $data->menu["A propos"] = "index.php?controller=StaticPagesController&action=aPropos";
      $data->menu["Voir les photos"] = "index.php?controller=PhotosController&action=index";

    }
  }