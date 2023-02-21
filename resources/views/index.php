<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
</head>
<body>

    <h1>Welcome <?php echo $name ?></h1>
    <h1>Collage <?php echo $collage ?></h1>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $row): ?>
            <tr>
                <!-- <td><?php //echo $row['name'] ?></td>
                <td><?php //echo $row['email'] ?></td>
                <td><?php //echo $row['phone'] ?></td> -->
                <?php foreach($row as $data): ?>
                    <td><?= $data ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
