<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];
?>

<!doctype html>
<html lang="en">

<head>
  <title>Document</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  </header>
  <main>
    <div class="container text-white mt-4 mb-4 fs-2 text-center">
      <?php
      for ($i = 0; $i < count($db['teachers']); $i++) {
        $teacher = $db['teachers'][$i];
      ?>
        <div class="bg-secondary p-5 ">
          <?php
          echo "{$teacher['name']} {$teacher['lastname']}"
          ?>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="container text-white mt-4 mb-4 fs-2 text-center">
      <?php
      for ($i = 0; $i < count($db['pm']); $i++) {
        $pm = $db['pm'][$i];
      ?>
        <div class="bg-primary p-5">
          <?php
          echo "{$pm['name']} {$teacher['lastname']}"
          ?>
        </div>
      <?php
      }
      ?>
    </div>


  </main>
  <footer>
   
  </footer>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>