<?php

?>
<h3>This is a demo of the dataset operation</h3>
<label for="selectBox">Pick one:</label>

<select id="selectBox" onchange="showValue()">
    <option data-value="001" value="1">One</option>
    <option data-value="002" value="2">Two</option>
    <option data-value="003" value="3">Three</option>
    <option data-value="004" value="4">Four</option>
</select>
<p>The SELECT element is built and the data-value is set.  There can be any string after the dash (data-***)</p>
<textarea id="jseditor0">
    <h3>This is a demo of the dataset operation</h3>
    <label for="selectBox">Pick one:</label>

    <select id="selectBox" onchange="showValue()">
        <option data-value="001" value="1">One</option>
        <option data-value="002" value="2">Two</option>
        <option data-value="003" value="3">Three</option>
        <option data-value="004" value="4">Four</option>
    </select>
</textarea>
<p>In order to access the data-*** value, you can do a pattern match to get the specific element, then access the
    dataset object of the element, the property will be the *** after the dash.s</p>
<textarea id="jseditor1">

    function showValue()
    {
        var value = document.getElementById("selectBox").value;
        var dataValue = document.querySelector(" #selectBox option[value='" + value + "']").dataset.value;

        window.alert("The data-value is: " + dataValue);

    }
</textarea>

<script type="text/javascript">

    function showValue()
    {
        var value = document.getElementById("selectBox").value;
        var dataValue = document.querySelector(" #selectBox option[value='" + value + "']").dataset.value;

        window.alert("The data-value is: " + dataValue);

    }

    var javaScriptEditor = CodeMirror.fromTextArea(document.getElementById("jseditor1"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/javascript"
    });
    javaScriptEditor.setSize(null,'160px');

    var javaScriptEditor0 = CodeMirror.fromTextArea(document.getElementById("jseditor0"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/html"
    });
    javaScriptEditor0.setSize(null,'180px');
</script>
