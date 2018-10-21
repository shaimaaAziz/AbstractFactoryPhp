<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BscContent
 *
 * @author hp
 */
class BscContent implements Content{

    public function view($content) {
        echo"Bachelor degree course with Content:"
                . "Content: ". $content."<br>";
    }
}
