<?php
require_once 'Employ.php';

$client= new Employ;
$client->name="noraan";
$client->email="nour@gmail.com";
$client->salary=7000;
$client->is_manager=true;
$client->address="Cairo-15.ELstaad-EGYPT";

$client2=new Employ;
$client2->name="Laila";
$client2->email="laila@gmail.com";
$client2->salary=10000;
$client2->is_manager=false;
$client2->address="Alex-ELM7TA-EGYPT";
$client3=new Employ;

$client3->name="Mariam";
$client3->email="Mariam@gmail.com";
$client3->salary=6000;
$client3->is_manager=true;
$client3->address="ELMONFIA-Elkobry-EGYPT";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">salary</th>
      <th scope="col">Is-manager</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $client->name ;?></td>
      <td><?php echo $client->email ;?></td>
      <td class= "<?php echo $client->checkSalary() ;?>"><?php echo $client->salary ;?></td>
    <td class= "<?php echo $client->mangerTextColor() ;?>"><?php $client->checkMsnger();   ?>  </td>
    <td><?php echo $client->address;?></td>
</tr>
<tr>
      <th scope="row">2</th>
      <td><?php echo $client2->name ;?></td>
      <td><?php echo $client2->email ;?></td>
      <td class= "<?php echo $client2->checkSalary() ;?>"><?php echo $client2->salary ;?></td>
    <td class= "<?php echo $client2->mangerTextColor() ;?>"><?php $client2->checkMsnger();   ?>  </td>
    <td><?php echo $client2->address;?></td>
</tr>
<tr>
      <th scope="row">3</th>
      <td><?php echo $client3->name ;?></td>
      <td><?php echo $client3->email ;?></td>
      <td class= "<?php echo $client3->checkSalary() ;?>"><?php echo $client3->salary ;?></td>
    <td class= "<?php echo $client3->mangerTextColor() ;?>"><?php $client3->checkMsnger();   ?>  </td>
    <td><?php echo $client3->address;?></td>
</tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
