<html>
<head>
<link rel="stylesheet" href="/view/cs.css" >
</head>
<body>
    
<div><p >Users site</p></div>

<?php
$controller = new UserController();
$list = $controller -> getAll() ;
?>

<table align="center">
    <tr>
        <th>id</th>
        <th>Felhasználónév</th>
    </tr>
    <?php
    foreach ($list as $item){
        echo "<tr>";
        echo "<td>". $item->getId(). "</td>";
        echo "<td>". $item->getName(). "</td>";
        echo "</tr>";
    }
    ?>
</table>
<div class='buttonwrapper'><a class='leftbutton' href='./'><button> Back to the main page </button></a></div>
<div class='buttonwrapper'><a class='rightbutton' href='advertisement'><button> Advertisement </button></a></div>

</body>
</html>