<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
$paragraph= 'A cat is a domestic animal but there are wild cats too. Cats are found in various colours. The eyes of the cat which are of gray colour shine at night. A cat has sharp claws. The food of the cat is rats, pigeons and birds. She is fond of milk. It can climb up a tree and can jump from one roof to the other. When she mews the rats run away, and she also kills them. In this way she keeps rats away from our house. She has soft fur. She gives birth to kittens once in a year. She is very afraid of dogs.Cat is a wonderful domestic animal. She is playful also. But whenever she is put in trouble she becomes very dangerous. It attacks even a man and kills him. But on the whole we can say that a cat is a loving animal.';
echo "<h1>Starting paragraph </h1>$paragraph";
echo "<h2>Let's splice the paragraph</h2>";
$spliceparagraph = explode( '.', $paragraph, -1);

foreach($spliceparagraph as $parCol){
  echo "<ul><li>{$parCol}</li></ul>";
}
?>