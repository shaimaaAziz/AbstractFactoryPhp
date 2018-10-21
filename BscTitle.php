<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BscTitle
 *
 * @author hp
 */
class BscTitle implements Title{

    
    public function view($title) {
        echo"Bachelor degree course with "
                . "Title: ". $title ."<br>";
    }

   

}
