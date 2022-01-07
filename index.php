<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
echo "CONDITIONS SIMPLES <br><br>";

$animal = "Chat";
// La condition doit répondre à la question:
echo "1.Est-ce un chat : ";

if($animal == "Chat") {
    //condition vraie
    echo "Oui";
}
else {
    //condition fausse
    echo "Non";
}
echo "<br><br>";


/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/
// Écrire la condition qui affiche "Non" quand $chat vaut "Chien" et affiche "Oui" quand $chat vaut "Chat" ###//
$animal = "Chien";
echo "2.Est-ce un chat : ";

// TODO mettre votre code ici
if($animal == "Chat") {
    //condition vraie
    echo "Oui";
}
else {
    //condition fausse
    echo "Non";
}
echo "<br><br>";

echo "<br><br>";

//----------------------------------------
// Écrire la condition qui affiche "Oui" quand $chat vaut true et affiche "Non" dans le cas contraire ###//
$chat = true;
echo "3.Est-ce un chat : ";

// TODO mettre votre code ici
if($animal == true) {
    //condition vraie
    echo "Oui";
}
else {
    //condition fausse
    echo "Non";
}
echo "<br><br>";

echo "<br><br>";


echo "CONDITIONS COMPOSEES <br><br><br>";
echo "Le 'ET' logique (&&)  <br><br>";
echo "Avec le 'ET' toutes les conditions DOIVENT etre vraies pour entrer dans le premier bloc.  <br><br> ";


$animal = "Chat";
$vivant = true;
echo "1.Est-ce un chat vivant : ";
if($animal === "Chat" && $vivant === true) {
    //si toutes les conditions sont vraies
    echo "Oui";
}
else {
    //si une ou toutes les conditions sont fausses
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = true;
echo "2.Est-ce un Chat vivant : ";
if($animal === "Chat" && $vivant === true) {
    //si toutes les conditions sont vraies
    echo "Oui";
}
else {
    //si une ou toutes les conditions sont fausses
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = true;
echo "3.Est-ce un Chat vivant : ";
if($animal === "Chat" && $vivant === true) {
    //si toutes les conditions sont vraies
    echo "Oui";
}
else {
    //si une ou toutes les conditions sont fausses
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = false;
echo "4.Est-ce un Chat vivant : ";
if($animal === "Chat" && $vivant === true) {
    //si toutes les conditions sont vraies
    echo "Oui";
}
else {
    //si une ou toutes les conditions sont fausses
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = false;
echo "5.Est-ce un Chat vivant : ";
if($animal === "Chat" && $vivant === true) {
    //si toutes les conditions sont vraies
    echo "Oui";
}
else {
    //si une ou toutes les conditions sont fausses
    echo "Non";
}
echo "<br><br>";

//----------------------------------------
//----------------------------------------

echo "Le 'OU' logique (||)  <br><br>";
echo "Avec le 'OU' une ou toutes conditions doivent etre vraie. <br><br>";

$animal = "Chat";
$vivant = true;
echo "6.Est-ce un Chat vivant ou un etre vivant : ";
if($animal === "Chat" || $vivant === true) {
    //si au moins une des conditions est vraie
    echo "Oui";
}
else {
    //si aucune des conditions est vraie
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chat";
$vivant = false;
echo "7.Est-ce un Chat vivant ou un etre vivant : ";
if($animal === "Chat" || $vivant === true) {
    //si au moins une des conditions est vraie
    echo "Oui";
}
else {
    //si aucune des conditions est vraie
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = false;
echo "8.Est-ce un Chat vivant ou un etre vivant : ";
if($animal === "Chat" || $vivant === true) {
    //si au moins une des conditions est vraie
    echo "Oui";
}
else {
    //si aucune des conditions est vraie
    echo "Non";
}
echo "<br><br>";

//----------------------------------------

$animal = "Chien";
$vivant = true;
echo "9.Est-ce un Chat vivant ou un etre vivant : ";
if($animal === "Chat" || $vivant === true) {
    //si au moins une des conditions est vraie
    echo "Oui";
}
else {
    //si aucune des conditions est vraie
    echo "Non";
}
echo "<br><br>";


echo "CONDITIONS COMPOSEES AVANCEES <br><br><br>";

$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

echo "1.Est ce que c'est mon chat ? ";
echo "<br>";
echo "Mon chat est vivant, de couleur blanc et a les yeux Vert";
echo "<br>";

if($animal === "Chat" && ($vivant === true || $couleur === "Blanc" || $yeux === "Vert")) {
    echo "Oui";
}
else {
    echo "Non";
}
echo "<br><br>";

//----------------------------------------
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "1.Est-ce que c'est un animal qui fait l'affaire ? ";
echo "<br>";
echo "Je veux un chien ou un chat de couleur marron avec des yeux verts ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";


if(($animal === "Chat" || $animal === "Chien") && ($couleur === "Marron" && $yeux === "Vert") ) {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";


// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "2.Est ce que c'est un de mes chats ? ";
echo "<br>";
echo "Un de mes chats est vivant, a des yeux verts et est de couleur marron. 
Et l'autre est aussi vivant, de couleur blanche et a des yeux verts  ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

if(($animal === "Chat") && ($animal === "Chat " && $couleur === "Vert" && $yeux === "Marron") && ($animal === "Chat" && $vivant === true) && ($couleur = "Blanc" && $yeux ==="Vert")) {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";

//----------------------------------------
// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "3.Est ce que c'est un de mes animaux ? ";
echo "<br>";
echo "J'avais un chien de couleur noire avec des yeux bleus. 
J'ai un chat de couleur orange et avec des yeux bleus et un chien de couleur marron et des yeux bleus ";
echo "<br>";

$animal = "Chien";
$vivant = false;
$couleur = "Noir";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if(($animal == "Chat" || $animal == "Chien") && ($animal == "Chien" && $couleur == "Noir" && $yeux == "Bleu") || (($animal == "Chat" && $couleur == "Orange" && $yeux == "Bleu"))
    && ($animal == "Chien" && $couleur == "Marron" && $yeux == "Bleu")) {
    echo 'Oui';
}
else {
    echo 'Non';
}
echo "<br><br>";

?>

</body>
</html>