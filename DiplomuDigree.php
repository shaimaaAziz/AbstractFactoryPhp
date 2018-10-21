<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiplomuDigree
 *
 * @author hp
 */
class DiplomuDigree implements Degree{
  

    public function getContent() {
            return new BscContent();

    }

    public function getTeacher() {
               return new BscTeacher();
    }

    public function getTitle() {
             return new BscTitle();

    }

}
