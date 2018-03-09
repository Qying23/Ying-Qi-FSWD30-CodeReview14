<!DOCTYPE html>

<html>
    <head>
        <title>PHP CRUD  |  Add User</title>

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

        <legend>Add User</legend>

        <form action="actions/a_create.php" method="post">

            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" placeholder="First Name"/></td>
                </tr>     
                <tr>
                    <th>Image</th>
                    <td><input type="text" name="Image" placeholder="image"/></td>
                </tr>

                <tr>
                    <th>Categorie</th>
                    <td><input type="text" name="categorie" placeholder="categorie"/></td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" placeholder="description" /></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><input type="text" name="eTime" placeholder="date and time"/></td>
                </tr>
                <tr>
                    <th>Cost</th>
                    <td><input type="text" name="cost" placeholder="ticket cost "/></td>
                </tr>

                <tr>
                    <td><button type="submit">Insert Event</button></td>
                    <td><a href="index.php"><button type="button">Back</button></a></td>
                </tr>

            </table>

        </form>

    </fieldset>

    </body>

</html>

