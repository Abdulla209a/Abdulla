<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Upload</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .upload-box{
            background: #fff;
            padding: 30px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .upload-box h2{
            margin-bottom: 20px;
            color: #333;
        }

        input[type="file"]{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        button{
            width: 100%;
            padding: 10px;
            background: #667eea;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover{
            background: #5563c1;
        }
    </style>
</head>
<body>

<div class="upload-box">
    <h2>📷 Rasm yuklash</h2>

    <form action="new.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="submit">Upload image</button>
    </form>
</div>

</body>
</html>
