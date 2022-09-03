<?php

/** Method  2 to return list of items using define a constant global variable  */
// Declaring global variables of a todoList.
define('to_do_list',["shopping","cleaning","reading","praying","swimming"]);

//Returning list of items in the global varaible.
function todo(){
  foreach( to_do_list as $item){
   echo "$item \n";
   }
   
 }
 echo todo();
 
?>