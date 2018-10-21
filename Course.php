<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Course
 *
 * @author hp
 */
class Course {
    private $aTitle;
    private $aContent;
    private $aTeacher;
    private $aDegree;
    private static $aCourse;
    
    private function __construct() {}
    
    public static function getCourse(){
        
        if(Course::$aCourse == null)
        $aCourse = new Course();
        return $aCourse;
    }
    public function setDegree($aDegree){
        $this->aDegree = $aDegree;
    }
    public function view($aTitle, $aContent,$aTeacher){
        $this->aTitle = $this->aDegree->getTitle();
        $this->aContent= $this->aDegree->getContent();
        $this->aTeacher = $this->aDegree->getTeacher();
        echo"================== <br>";
        echo"Processing course info: ";
        $this->aTitle->view($aTitle);
       $this->aContent->view($aContent);
        $this->aTeacher->view($aTeacher);

    }}
