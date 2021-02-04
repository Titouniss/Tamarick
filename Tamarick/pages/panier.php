<?php
include ('../components/scriptpanier.php');
$a= "";
for ($i=0; $i<count($_SESSION['produit']); $i++){
    if($i != count($_SESSION['produit'])-1) {
        $a .=$_SESSION['produit'].',' ;
    }
    else {
        $a .=$_SESSION['produit'];
    }
}

foreach ($pdo->query('SELECT NUM_PRODUIT FROM produit WHERE NUM_BLAGUE IN ' . $a ) as $id){
 
}

?>
