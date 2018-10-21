<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MscTitle
 *
 * @author hp
 */
class MscTitle implements Title{

    
    public function view($title) {
        echo "Master degree course with Title: ".
                        $title;
    }
}
