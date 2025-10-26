<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Hisob-kitob dasturi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calc-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }
        input, select, button {
            margin: 10px;
            padding: 10px;
            width: 80%;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            width: 50%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="calc-box">
    <h2>🧮 Hisob-kitob dasturi</h2>

    <form method="post">
        <input type="number" step="any" name="son1" placeholder="Birinchi son" required><br>
        <input type="number" step="any" name="son2" placeholder="Ikkinchi son" required><br>

        <select name="amal">
            <option value="plus">Qo‘shish (+)</option>
            <option value="minus">Ayirish (-)</option>
            <option value="kopaytir">Ko‘paytirish (×)</option>
            <option value="bol">Bo‘lish (÷)</option>
        </select><br>

        <button type="submit" name="hisobla">Hisobla</button>
    </form>

    <?php
    if (isset($_POST['hisobla'])) {
        $a = $_POST['son1'];
        $b = $_POST['son2'];
        $amal = $_POST['amal'];

        switch ($amal) {
            case "plus":
                $natija = $a + $b;
                break;
            case "minus":
                $natija = $a - $b;
                break;
            case "kopaytir":
                $natija = $a * $b;
                break;
            case "bol":
                if ($b != 0) {
                    $natija = $a / $b;
                } else {
                    $natija = "Xato: 0 ga bo‘lish mumkin emas!";
                }
                break;
            default:
                $natija = "Noto‘g‘ri amal tanlandi!";
        }

        echo "<h3>Natija: <span style='color:green;'>$natija</span></h3>";
    }
    ?>
</div>

</body>
</html>