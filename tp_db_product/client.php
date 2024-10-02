<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   nom :<input type="text">
    prenom :<input type="text">
    tel :<input type="text">
    <?php if (count($idville) > 0) {
                                    echo '<select name="idville" class="form-control" required>';
                                    echo '<option value="">-- Select ville --</option>';
                                    foreach($idville as $row) {
                                        echo '<option  value="' . $row['idville'] . '">' . $row['idville'] . '</option>';
                                    }
                                    echo '</select>';
                                }  ?> 
    <input type="sublit">

</body>
</html>