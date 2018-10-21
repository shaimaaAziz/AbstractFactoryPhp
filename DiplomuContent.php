<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiplomuContent
 *
 * @author hp
 */
class DiplomuContent implements Content{

    public function view($content) {
       echo"Diplomu degree course with "
                . "Content: ". $content;
    }
}
