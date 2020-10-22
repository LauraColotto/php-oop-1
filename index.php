<?php

class User {
  public $name;
  public $lastname;
  public $email;
  public $username;
  public $password;

  public function __construct($_name, $_lastname, $_email, $username, $_password)
  {

    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;
    $this->username = $_username;
    $this->password = $_password;

  }
};

  $user1 = new User("John", "Petrucci", "superguitar@gmail.com", "DreamTheatre", "bgforever");
  $user2 = new User("Eric", "Cartman", "superfatbaby@gmail.it", "KingCart", "casaBonita99");
  $user3 = new User("Jhonny", "Sins", "brazzers@gmail.com", "DoctorX", "love696969");

  $users = [$user1, $user2,$user3];


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Utenti</title>
   </head>
   <body>

     <table>
       <thead>
         <tr>
           <th>Nome</th>
           <th>Cognome</th>
           <th>Indirizzo email</th>
           <th>Username</th>
           <th>Password</th>
         </tr>
       </thead>

       <?php foreach ($users as $utente): ?>
         <tr>
           <td><?php echo $utente->name ?></td>
           <td><?php echo $utente->lastname ?></td>
           <td><?php echo $utente->email ?></td>
           <td><?php echo $utente->username ?></td>
           <td><?php echo $utente->password ?></td>
         </tr>

       <?php endforeach; ?>

     </table>


   </body>
 </html>
