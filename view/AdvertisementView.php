<html>
<head>
<link rel="stylesheet" href="/view/cs.css" >
</head>
<body>
<div><p>Advertisements site</p></div>
<?php
$controller = new AdvertisementController();
$list = $controller -> getAll() ;
?>

<table align="center">
    <tr>
        <th>id</th>
        <th>userid</th>
        <th>username</th>
        <th>title</th>
    </tr>
    <?php
    foreach ($list as $item){
        ?>
        
        <tr>
            <td><?php echo $item->getId(); ?></td>
            <td><?php echo $item->getUser()->getId(); ?></td>
            <td><?php echo $item->getUser()->getName(); ?></td>
            <td><?php echo $item->getTitle(); ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<div class='buttonwrapper'><a class='leftbutton' href='./'><button> Back to the main page </button></a></div>
<div class='buttonwrapper'><a class='rightbutton' href='user'><button> users </button></a></div>

</body>
</html>