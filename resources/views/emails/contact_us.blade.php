<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #f7f9fa;padding: 30px; font-family: arial">

    <div style="width: 600px;border: 2px solid #dddddd; padding:20px;background: #fff;margin: 0 auto">
        <h3>Dear Admin,</h3>
        <p>Hope this email finds you will</p>

        <br>
        <p>There is new contact us message with the follwing data:</p>
        <p><b>Name:</b> {{ $data['name'] }}</p>
        <p><b>Email:</b> {{ $data['email'] }}</p>
        <p><b>Subject:</b> {{ $data['subject'] }}</p>
        <p><b>Message:</b> {{ $data['message'] }}</p>

        <br>
        <br>

        <p>Best Regards</p>
        <p>Mohammed Naji</p>
    </div>

</body>
</html>
