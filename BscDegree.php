<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BccDegree
 *
 * @author hp
 */
class BscDegree implements Degree{
  

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
