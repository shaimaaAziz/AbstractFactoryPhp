<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiplomuTeacher
 *
 * @author hp
 */
class DiplomuTeacher implements Teacher{

    public function view($teacher) {
        echo"Diplomu degree course with "
                . $teacher;
}
}