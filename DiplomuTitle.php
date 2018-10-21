<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiplomuTitle
 *
 * @author hp
 */
class DiplomuTitle implements Title{

    
    public function view($title) {
        echo"Diplomu degree course with "
                . "Title: ".$title;
    }
}
