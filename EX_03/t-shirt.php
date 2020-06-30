<?php
$nom_produit = "T-shirt simple"; 
$couleur = "Blanc";
$prix = "10.50";
$disponible = "true";
$quantite = "10";
?>
<h3> <?php
echo "Le nom du produit est " . $nom_produit 
?> 
<h3> <?php
echo "Il reste " . $quantite ." produit en stock. "
?> 
<h3> <?php
echo "Le produit " . $nom_produit ." est de couleur " . $couleur
?> 
<h4><?php 
echo "Acheter 3 produits couterait " . ($prix * 3)
?>
<h4><?php 
echo "Acheter la totalité des produits disponibles coûterait " . $prix * $quantite
?>
<h4><?php 
echo "Si 3 produits sont vendus il reste " . ($quantite - 3) . "en stock " 
?>
<p><?php
if ($disponible == true)
echo " Le produit " . $nom_produit ." est disponible en ligne ";
?> 
</p>
<p><?php
if ($quantite == 10)
echo " Il reste " . $quantite ." produits en magasin ";
