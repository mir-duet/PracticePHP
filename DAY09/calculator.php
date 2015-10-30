<!DOCTYPE HTML>
<html>
    <head>
        <title>My First PHP Project</title>
    </head>
    <body>
        <h1>Heading Here</h1>
        <form action="" method="post">
            <table border="1" align="center" bgcolor="gray">
                <tr>
                    <td>Second Number:</td>
                    <td><input type="text" name="firstNumber" id="firstNun" value="<?php if (isset($_POST['firstNumber'])) echo $_POST['firstNumber']; ?>" placeholder="Enter First Number" /></td>
                </tr>
                <tr>
                    <td>First Number:</td>
                    <td><input type="text" name="secondNumber" id="secondNun" value="<?php if (isset($_POST['secondNumber'])) echo $_POST['secondNumber']; ?>" placeholder="Enter Second Number" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" value="+"  /> &nbsp;
                        <input type="submit" name="btn" value="-"/>&nbsp;
                        <input type="submit" name="btn" value="*"/>&nbsp;
                        <input type="submit" name="btn" value="/"/>&nbsp;
                        <input type="submit" name="btn" value="%"/>
                    </td>
                </tr>
//echo '<pre>';
                <?php
                //echo '<pre>';
                //print_r($_POST);
                if (isset($_POST[btn])) {
                    if ($_POST['btn'] == '+') {
                        $result = $_POST['firstNumber'] + $_POST['secondNumber'];
                        $lbl = 'Addition Result';
                    }
                    if ($_POST['btn'] == '-') {
                        $result = $_POST['firstNumber'] - $_POST['secondNumber'];
                        $lbl = 'Substraction Result';
                    }
                    if ($_POST['btn'] == '*') {
                        $result = $_POST['firstNumber'] * $_POST['secondNumber'];
                        $lbl = 'Multiplication Result';
                    }
                    if ($_POST['btn'] == '/') {
                        if ($_POST['secondNumber'] == 0) {
                            $result = "Undefiend";
                            $lbl = 'Divition Result';
                        } else {
                            $result = $_POST['firstNumber'] / $_POST['secondNumber'];
                            $lbl = 'Divition Result';
                        }
                    }
                    if ($_POST['btn'] == '%') {
                        if ($_POST['secondNumber'] == 0) {
                            $result = "Undefiend";
                            $lbl = 'Reminder Result';
                        } else {
                            $result = $_POST['firstNumber'] % $_POST['secondNumber'];
                            $lbl = 'Reminder Result';
                        }
                    }
                }
                ?>

                <tr>
                    <td>&nbsp;<?php echo $lbl; ?> &nbsp;</td>
                    <td>&nbsp;<?php echo $result; ?> &nbsp;</td>
                </tr>
            </table>
        </form>
    </body>
</html>
