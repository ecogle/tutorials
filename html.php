<?php

?>
<p class="section_title">Datalist Example</p>
<input list="mylist" id="listId">
<datalist id="mylist">
    <option value="One" data-value="1"></option>
    <option value="Two" data-value="2"></option>
</datalist>
<p></p>
<textarea id="data_list">
    <input list="mylist" id="listId">
    <datalist id="mylist">
        <option value="One" data-value="1"></option>
        <option value="Two" data-value="2"></option>
    </datalist>
</textarea>
<script type="text/javascript">
    var javaEditor = CodeMirror.fromTextArea(document.getElementById("data_list"), {
        mode: "text/html",
        lineNumbers:true,
        readOnly:true
    });
    javaEditor.save();
</script>
