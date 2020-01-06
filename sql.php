<?php

?>

<textarea id="o_sql1">
    SELECT * from customers WHERE id = 1;
</textarea>

<script type="text/javascript">
    var osql1 = CodeMirror.fromTextArea(document.getElementById("o_sql1"), {
        mode: "text/x-sql",
        indentWithTabs: true,
        smartIndent: true,
        lineNumbers: true,
        hintOptions: {
            tables: {
                customers:["name"]
            }
        }
    });
</script>
