<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="save.php" name="Form">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td>
                    <input type="text" id="name" name="name" value="">
                </td>
            </tr>
            <tr>
                <td><label for="matricnum">Matric Number</label></td>
                <td>
                    <input type="text" id="matricnum" name="matricnum" value="">
                </td>
            </tr>
            <tr>
                <td><label for="dept">Department</label></td>
                <td>
                    <input type="text" id="dept" name="dept" value="">
                </td>
            </tr>
            <tr>
                <td><label for="class">Class</label></td>
                <td>
                    <input type="text" id="class" name="class" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
        <tr>
            </tr>
        <?php
        $myfile = fopen("test.txt", "r") or die("Unable to open file!");
        echo nl2br(fread($myfile,filesize("test.txt")));
        fclose($myfile);
        ?>
    </form>
</body>

</html>