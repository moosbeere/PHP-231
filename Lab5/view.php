<?php
    if (isset($_GET['o'])){
        $sql = 'SELECT * FROM `friends` ORDER BY `'.$_GET['o'].'`';
    }else $sql = 'SELECT * FROM `friends`';
    $res = mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) print_r(mysqli_error($connect));
?>
<table class="table">
<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">FirstName</th>
    <th scope="col">Name</th>
    <th scope="col">LastName</th>
    <th scope="col">Gender</th>
    <th scope="col">Data</th>
    <th scope="col">Phone</th>
    <th scope="col">Email</th>
    <th scope="col">Adres</th>
    <th scope="col">Comment</th>
  </tr>
</thead>
<tbody>
    <?php while($row = mysqli_fetch_assoc($res)):?>
  <tr>
    <th scope="row"><?=$row['id'];?></th>
    <td><?=$row['firstname'];?></td>
    <td><?=$row['name'];?>
    <td><?=$row['lastname'];?></td>
    <td><?=$row['gender'];?></td>
    <td><?=$row['date'];?></td>
    <td><?=$row['phone'];?></td>
    <td><?=$row['email'];?></td>
    <td><?=$row['adres'];?></td>
    <td><?=$row['comment'];?></td>
  </tr>
    <?php endwhile;?>
</tbody>
</table>