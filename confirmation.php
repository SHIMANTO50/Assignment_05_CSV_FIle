<!DOCTYPE html>
<html>

<head>
    <title>Registration Confirmation</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid;
    }
</style>

<body>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = fopen('users.csv', 'r');
            while (($data = fgetcsv($file)) !== false) {
                echo '<tr>';
                foreach ($data as $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            fclose($file);
            ?>
        </tbody>
    </table>
</body>

</html>