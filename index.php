<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h2>Utilisation des Getters et les Setters en POO/ PHP</h2>
    <p>
      En POO, il est généralement préférable de ne pas accéder direcytement aux attributs d'un objet, mais de passer par des méthodes pour y accéder.
      Les méthodes qui permettent de lire les valaeurs des attributs sont appellées "accesseurs"ou "getters"
      Tandis que celles qui permettent de modifier ces valeurs sont appellées "mutateurs" ou "setters".
      Ces méthode spermettent de garantir l'encapsulation, en éviatnt l'accès direct aux proprités de la classe.
      Il est courant de suivre une conventionde nommage qui consiste à nommer les méthodes en utilisant le nom de l'attribut correspondant, en ajoutant "get" pour les accésseurs et "set" pour les mutateurs.
      Cela permet une meilleure organisation du code et facilite la conpréhension de celui-ci. L'utilisation d'accesseurs et de mutateurs peut également renforcer l'encapsulation, en permettant de controler l'accés aux attributs et en les limitant les erreurs de la manipulation des données.
    </p>
    <?php 
// Supposons que nous avons une classe Personne avec une propriété privée Nom. Nous pouvons utiliser un accésseur pour récupérer la valeur de la propriété nom, de cette façon:

class Personne {
  private String $nom;
  public function getNom() :String{
    return $this->nom;
  }
}

?> 

</html>