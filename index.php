<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> The abstract Factory</title>
    </head>
        <body>
        <?php
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });
 $aCourse = Course::getCourse();
        $aCourse->setDegree(new BscDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        . "prossional knowledge ... ","Ahmed");
        
        $aCourse->setDegree(new MscDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        . "prossional knowledge ...","aziz");
        
        
          $aCourse->setDegree(new PhdDegree());
        $aCourse->view("DataBase", 
                "This course provides students with "
                        . "prossional knowledge ...","Rawya");
        
          $aCourse->setDegree(new DiplomuDigree());
        $aCourse->view(" Algorithm", 
                "This course provides students with "
                        . "prossional knowledge ...","Omar");
                ?>
    </body>
</html>
