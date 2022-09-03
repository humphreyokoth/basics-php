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
<?php 

function setHeight($minheight = 50) {

  echo "The height is : $minheight <br>";

}

setHeight(350);

setHeight(); // will use the default value of 50

setHeight(135);

setHeight(80);

?>