<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MscTeacher
 *
 * @author hp
 */
class MscTeacher implements Teacher{

    public function view($teacher) {
        echo"Master degree course with Content: "
                .$teacher;
}
}