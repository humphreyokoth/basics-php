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
$name ="humphrey";
$name_length = strlen($name);
for ($i=0; $i <$name_length ; $i++) { 
  echo $i;
}
$employees = array("john","micheal","Mari","Luke","Nellie");
foreach($employees as $employee){
echo $employee;
}

$newarr[$newkey] = $oldarr[$oldkey];
$oldarr=$newarr;
unset($newarr);
$array = [
  'old1' => 1,
  'old2' => 2
];

$renameMap = [
  'old1' => 'new1',   
  'old2' => 'new2'
];

$array = array_combine(array_map(function($el) use ($renameMap) {
  return $renameMap[$el];
}, array_keys($array)), array_values($array));

/*
$array = [
  'new1' => 1
  'new2' => 2
];
*/
?>