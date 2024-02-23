function calculate(value) {
    var result = document.getElementById('result');
    if(value == '=') {
        result.value = eval(result.value);
    } else {
        result.value += value;
    }
}

function clearResult() {
    var result = document.getElementById('result');
    result.value = '';
}