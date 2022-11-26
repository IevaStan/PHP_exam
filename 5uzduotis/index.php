<?php
echo PHP_EOL . '5 užduotis' . PHP_EOL;
// 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų
// serveryje su formoje nurodytu failo pavadinimu (name).
// File forma:
// Name: [laboras.txt]
// File: [browse]
?>
<html>

<head>
    <style>
        body {
            margin: 1em;
        }

        form input,
        form button {
            text-align: center;
            margin-bottom: 0.2em;
        }
    </style>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Add your filename here"><br>
        <input type="file" name="file" placeholder="Upload file"><br>
        <button type="submit">Upload</button>
    </form>
</body>

</html>