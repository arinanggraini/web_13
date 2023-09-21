<?php
function add(){
    static $x = 0;
    echo "$x <br>";
    $x++;
   }


   add();
   add();
   add();
   ?>