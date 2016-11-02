<?php
  class BaseController {

    protected function include_main_layout(){
      global $data;
      include("view/application_layout.php");
    }
  }