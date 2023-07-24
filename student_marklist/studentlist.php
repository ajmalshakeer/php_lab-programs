<?php
$students = array(
    array(
        "name" => "Neymar santos Junior",
        "marks" => array(90, 90, 85, 92, 88)
    ),
    array(
        "name" => "Lionel messi",
        "marks" => array(75, 88, 92, 79, 83)
    ),
    array(
        "name" => "cristiano ronaldo",
        "marks" => array(92, 87, 90, 94, 91)
    )
);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: lightgrey;
        } 
    </style>
</head>
<body>
<h1>Student Marksheet</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Subject 1</th>
            <th>Subject 2</th>
            <th>Subject 3</th>
            <th>Subject 4</th>
            <th>Subject 5</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student["name"]; ?></td>
                <?php foreach ($student["marks"] as $mark) { ?>
                    <td><?php echo $mark; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>