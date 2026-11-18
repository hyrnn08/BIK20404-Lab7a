<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q1</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        $name = "HAYRIN INSYIRAH BINTI MOHD SABRI";
        $matric = "AI250086";
        $course = "BIK - Kejuruteraan Perisian";
        $year = "Tahun 2";
        $address = "Parit Raja, Batu Pahat, Johor";
    ?>

    <table>
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>