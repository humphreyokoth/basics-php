<?php

/** Method  1 to return list of items using Global Variable  */
// Declaring global variables of a todoList.
$GLOBALS['to_do_list'] = ["shopping","cleaning","reading","praying","swimming"]; 



//Returning list of items in the global varaible.
function todo(){
  foreach( $GLOBALS['to_do_list'] as $item){
   echo "$item \n";
   }
   
 }
 echo todo();




 
?>
