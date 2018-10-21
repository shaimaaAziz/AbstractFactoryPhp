<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BscTeacher
 *
 * @author hp
 */
class BscTeacher implements Teacher{

    public function view($teacher) {
        echo"Bachelor degree course with Content: "
                . $teacher . "<br>";
}
}