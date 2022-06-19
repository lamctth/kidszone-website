<form action="" class="calculator" name="calc">
    <input type="text" name="txt" class="inputArea">
    <span class="red" onclick="document.calc.txt.value +='1';">1</span>
    <span class="red" onclick="document.calc.txt.value +='2';">2</span>
    <span class="red" onclick="document.calc.txt.value +='1';">3</span>
    <span class="clear" onclick="document.calc.txt.value ='';">C</span>
    <span onclick="document.calc.txt.value +='4';">4</span>
    <span class="red" onclick="document.calc.txt.value +='5';">5</span>
    <span class="red" onclick="document.calc.txt.value +='6';">6</span>
    <span class="plus" onclick="document.calc.txt.value +='+';">+</span>
    <span class="red" onclick="document.calc.txt.value +='7';">7</span>
    <span class="red" onclick="document.calc.txt.value +='8';">8</span>
    <span class="red" onclick="document.calc.txt.value +='9';">9</span>
    <span class="red" onclick="document.calc.txt.value +='0';">0</span>
    <span class="red" onclick="document.calc.txt.value +='.';">.</span>
    <span class="clear" onclick="document.calc.txt.value = backspace(document.calc.txt.value);">B</span>

    <span class="plus" onclick="document.calc.txt.value ='-';">-</span>
    <span class="equal" onclick="document.calc.txt.value = calculator(document.calc.txt.value);">=</span>
</form>
<div id="history">
    <h3>history</h3>
</div>

<script type="text/javascript">
    let history = document.getElementById('history');

    function calculator(v) {
        para = document.createElement('p');
        data = v + "=" + eval('v');
        para.innerText = data;
        history.appendChild(para);
        return eval(v);
    }

    function backspace(b) {
        return b.slice(0, b.length - 1);
    }
</script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: content-box;
        font-family: 'poppins'sans-serif;
    }

    body {
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url(./image/ABC/1.jpg);
        background-size: cover;
    }

    .calculator {
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently supported by Chrome, Edge, Opera and Firefox */
        width: 380px;
        cursor: pointer;
        display: grid;
        background-color: rgba(30, 210, 63, 0.415);
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    .calculator span {
        height: 60px;
        line-height: 60px;
        text-align: center;
        background-color: rgba(240, 248, 255, 0);
        font-size: 1.2em;
        color: black;
        font-weight: 500;
    }

    .calculator span :host {
        cursor: pointer;
    }

    .calculator .operation {
        background: rosybrown;
        color: white;
    }

    .calculator .clear {
        background: rosybrown;
        color: wheat;
    }

    .calculator.inputArea {
        grid-template-columns: span 4;
        padding: 20px 10px;
        outline: none;
        border: none;
        font-size: 1.3em;
    }

    .calculator.red {
        background-color: brown;
    }

    .calculator .plus {
        grid-row: span 2;
        height: 120px;
        line-height: 120px;
        background-color: bisque;
    }

    .calculator .equal {
        width: 120px;
        grid-column: span 2;
        background-color: rgba(225, 65, 65, 0.233);
        font-size: 1.8em;
    }

    #history {
        width: 380px;
        height: 266.2px;
        overflow-y: scroll;
        font-size: 1.1em;
        background: rgba(0, 255, 26, 0.505);
        box-sizing: border-box;
        padding: 10px 10px;
    }

    #history::-webkit-scrollbar {
        width: 0;
    }

    #history h3 {
        padding: 10px 0px;
        font-size: 1.2em;
    }

    #history p:last-child {
        font-size: 1.3em;
        font-weight: 500;
        color: aliceblue;
    }
</style>