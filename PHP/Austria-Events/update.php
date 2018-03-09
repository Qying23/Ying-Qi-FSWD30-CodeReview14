<?php
require_once 'actions/connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM allE WHERE id = {$id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();
?>

 
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Event</title>
        <style type="text/css">

            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 50%;
            }

            table tr th {
                padding-top: 20px;
            }

        </style>
    </head>

    <body>

     

    <fieldset>

        <legend>Update Event</legend>
        <form action="actions/a_update.php" method="post">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" placeholder="First Name" value="<?php echo $data['name'] ?>" /></td>
                </tr>     
                <tr>
                    <th>Image</th>
                    <td><input type="text" name="Image" placeholder="image" value="<?php echo $data['Image'] ?>" /></td>
                </tr>

                <tr>
                    <th>Categorie</th>
                    <td><input type="text" name="categorie" placeholder="categorie" value="<?php echo $data['categorie'] ?>" /></td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><input type="text" name="eTime" placeholder="date and time" value="<?php echo $data['eTime'] ?>" /></td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td><input type="text" name="cost" placeholder="ticket cost " value="<?php echo $data['cost'] ?>" /></td>
                </tr>

            
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                    <td><button type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button type="button">Back</button></a></td>
                </tr>
            </table>

        </form>

    </fieldset>

    </body>

</html>

 

<?php
}
?>