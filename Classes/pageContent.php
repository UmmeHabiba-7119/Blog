<?php

  class pageContent{

    public function getHeader(){
      require_once('inc/header.php');
    }

    public function getFooter(){
      require_once('inc/footer.php');
    }

    public function getContent($content){
      require_once 'inc/'.$content.'.php';
    }
  }
 ?>
