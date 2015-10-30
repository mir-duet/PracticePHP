<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Range Calculation</title>
    </head>
    <body>
        <br />
        <form action="range.php" method="post">
            <table border="1" align="center">
                <tr>
                    <td>Starting Number:</td>
                    <td><input type="text" name="startNumber" value="<?php if (isset($_POST['startNumber'])) echo $_POST['startNumber']; ?>" /></td>
                </tr>
                <tr>
                    <td>Ending Number:</td>
                    <td><input type="text" name="endNumber" value="<?php if (isset($_POST['endNumber'])) echo $_POST['endNumber']; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" value="range"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo 'Range'; ?> 
                    </td>
                    <td>              
                        <?php
                        $start = $_POST['startNumber'];
                        $end = $_POST['endNumber'];
                        if ($start < $end) {
                            for ($i = $start; $i <= $end; $i++) {
                                echo $i . "<br>";
                            }
                        } else {
                            for ($i = $start; $i >= $end; $i--) {
                                echo $i . "<br>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
