<?php
// Declaring global variables of a todoList.
$GLOBALS['to_do_list'] = ["shopping","cleaning","reading","praying","swimming"];

//Returning list of items in todolist using function.
function todo(){
  foreach($GLOBALS['to_do_list'] as $item){
   echo "$item \n";
  }
   
 }
 todo();
?>
