<html>
<head>
    <title>File input</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>
            Rasmni ko'rsating*:
            <input required type="file" name="picture">
        </label>
        <button type="submit" style="border-radius:20px 20px 20px 20px">Yuklash</button>
    </form>
</body>
</html>