<html>
  <head>
    <title>Hello World!</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="#home">osamu</a>
    </div>
    <hr class="rounded"></hr>
<?php
  <?php
    require_once "bdconnect.php";
    while ($row = mysqli_fetch_assoc($result)){ 
        $ID = $row['id'];
        $Name = $row['name'];
    $Desc = $row['description'];
    $Prod = $row['producer'];
    $Year = $row['year'];
    $Link = $row['link']; 
        echo '  <div class="wrapper">
        <div class="box"><img src=$Link></div>
        <div class="box"><img src=$Link></div>
        <div class="box"><img src=$Link></div>
      </div>';
    echo ' <table>
      <tr>
        <th>Movie ID</th>
        <th>Movie name</th>
        <th>Annotation</th>
        <th>Producer</th>
        <th>Release date</th>
      </tr>
      <tr>
        <td>$ID</td>
        <td>$Name</td>
        <td>$Desc</td>
        <td>$Prod</td>
        <td>$Year</td>
      </tr>'
    }
?>
    
