<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Pill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: black;
            color: white;
            margin: 0;
            padding: 50px;
        }
        h1 {
            font-size: 2.5em;
        }
        .pill-container {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 30px;
        }
        .pill {
            padding: 15px 40px;
            font-size: 1.5em;
            border: none;
            cursor: pointer;
            border-radius: 50px;
            color: white;
            transition: transform 0.2s;
        }
        .red-pill {
            background-color: red;
        }
        .blue-pill {
            background-color: blue;
        }
        .pill:hover {
            transform: scale(1.1);
        }
        .message {
            font-size: 1.5em;
            margin-top: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>💊 Choose Your Destiny 💊</h1>
    <p>If you take the <strong>Red Pill</strong>, you see the truth.  
       If you take the <strong>Blue Pill</strong>, you stay in the illusion.</p>

    <form method="POST">
        <div class="pill-container">
            <button class="pill red-pill" name="choice" value="red">Red Pill</button>
            <button class="pill blue-pill" name="choice" value="blue">Blue Pill</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['choice'])) {
            if ($_POST['choice'] == "red") {
                echo "<p class='message'>🔥 You chose the Red Pill! Welcome to the real world. 🔥</p>";
            } elseif ($_POST['choice'] == "blue") {
                echo "<p class='message'>🌌 You chose the Blue Pill! Enjoy the illusion. 🌌</p>";
            }
        }
    }
    ?>

</body>
</html>
