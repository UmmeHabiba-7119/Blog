<?php

      /**
       *
       */
      class Formate
      {
        public static function validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
      }
