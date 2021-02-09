<?php 


print("Entrez un nombre :");

// PHP code to check whether the number  
// is Even or Odd in Normal way 
function check($number){ 
    if($number % 2 == 0){ 
        echo "Le nombre $number est pair.";  
    } 
    else{ 
        echo "Le nombre $number est impair."; 
    } 
} 
  
// Driver Code 
$number = 39; 

check($number) 
?> 