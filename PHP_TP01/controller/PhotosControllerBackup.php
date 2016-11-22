<!--TO DO :
data[previmg nextimg] etc... repasser à la vue etc. -->

<?php
  require_once("./model/imageDAO.php");
  require_once "BaseController.php";

  class PhotosController extends BaseController {

    private $images = [];
    private $imageDAO;

    function __construct(){
      $this->imageDAO = new ImageDAO();
    }

    function index(){
      global $data, $imgId, $img, $size, $from, $to;
      $this->getParams();
      $this->setMenu();
      $data->content = "photos/index.php";
      $this->include_main_layout();
    }

    function getFirstPictureId(){
      return $first_image_id = $this->imageDAO->getFirstImage()->getId();
    }

    private function getParams(){
      global $data, $img, $imgId, $size, $from, $to, $zoom;
      if(isset($_GET["imgId"])){
        $imgId = $_GET["imgId"];
      } else {
        $imgId = 1;
      }

      if(isset($_GET["size"])){
        $size = $_GET["size"];
      } else {
        $size = 480;
      }

      if(isset($_GET["zoom"])){
        $zoom = $_GET["zoom"];
      } else {
        $zoom = 1.0;
      }

      if(isset($_GET["from"])){
        $from = $_GET["from"];
      }

      if(isset($_GET["to"])){
        $to = $_GET["to"];
      }

      $img = $this->imageDAO->getImage($imgId);
      $data->prevURL = $this->imageDAO->getPrevImage($img)->getId();
      $data->nextURL  = $this->imageDAO->getNextImage($img)->getId();
    }

    private function setMenu(){
      global $data, $imgId, $size, $from, $to;
      $data->menu["Home"] = "index.php?controller=StaticPagesController&action=home";
      $data->menu["A propos"] = "index.php?controller=StaticPagesController&action=aPropos";
      $data->menu['First']="viewPhoto.php?imgId=".$this->getFirstPictureId()."&size=".$size;
//      $data->menu['Random']="zoom.php?zoom=1.25&imgId=$randomImgId&size=$size";
//      # Pour afficher plus d'image passe à une autre page
//      $data->menu['More']="viewPhotoMatrix.php?imgId=$imgId";
//      // Demande à calculer un zoom sur l'image
//      $data->menu['Zoom +']="zoom.php?zoom=1.25&imgId=$imgId&size=$size";
//      // Demande à calculer un zoom sur l'image
//      $data->menu['Zoom -']="zoom.php?zoom=0.8&imgId=$imgId&size=$size";
    }
  }