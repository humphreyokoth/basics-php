<?php
// Declaring global variables of a todoList.

//$GLOBALS['to_do_list'] = ["shopping","cleaning","reading","praying","swimming"]; 
define('to_do_list',["shopping", "cleaning", "reading", "praying", "swimming"]);


//Returning list of items in the global varaible.
function todo($item){
  foreach(to_do_list as $item){
   echo "$item \t";
   }
   
 }
 echo todo('to_do_list');
?>






