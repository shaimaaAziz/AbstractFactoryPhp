<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PhdTitle
 *
 * @author hp
 */
class PhdTitle implements Title{

    
    public function view($title) {
        echo"prophessor degree course with "
               . "Title: ". $title;
    }
}
