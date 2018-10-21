<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MscContent
 *
 * @author hp
 */
class MscContent implements Content{

    public function view($content) {
        echo"Master degree course with "
               . "Content:". $content;
    }
}
