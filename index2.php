<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator 2</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    
    <div class="calculator">
            <h2>Kalkulator Sederhana</h2>
        <input type="text" id="result">
        <button onclick="clearResult()">Clear</button>
        <button onclick="calculate('/')">/</button>
        <button onclick="calculate('*')">*</button>
        <button onclick="calculate('-')">-</button>
        <button onclick="calculate('+')">+</button>
        <button onclick="calculate('7')">7</button>
        <button onclick="calculate('8')">8</button>
        <button onclick="calculate('9')">9</button>
        <button onclick="calculate('4')">4</button>
        <button onclick="calculate('5')">5</button>
        <button onclick="calculate('6')">6</button>
        <button onclick="calculate('1')">1</button>
        <button onclick="calculate('2')">2</button>
        <button onclick="calculate('3')">3</button>
        <button onclick="calculate('0')">0</button>
        <button onclick="calculate('.')">.</button>
        <button onclick="calculate('=')">=</button>
    </div>
    <script src="kalkulator.js"></script>
</body>
</html>