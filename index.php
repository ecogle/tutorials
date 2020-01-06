<?php
    echo file_get_contents('./templates/head.php')
?>

<div id="main">
    <div id= "header1">
        <div id="hed_text">
            <h2>PROGRAMMING SNIPPETS</h2>
        </div>
    </div>

    <div id="tabs">

        <?php include "getTabs.php"?>

        <div id="javascript"><p>This is the home for Javascript</p></div>
        <div id="java"><?php include 'java.php'; ?></div>
        <div id="jquery"><p>This is the home for jQuery</p></div>
        <div id="jqueryui"><p>This is the home for jQueryUI</p></div>
        <div id="jqueryuimobile"><p>This is the home for jQueryUIMobile</p></div>
        <div id="sql"><?php include 'sql.php'?></div>
        <div id="html"><p></p><?php include 'html.php'; ?></div>
        <div id="css">Home of the CSS</div>
    </div>
</div>

<script type="text/javascript">
    $("#opts").on("change",function(){
       window.location.href= "#"+ $("#opts option:selected").val();
    });


</script>
<?php
    echo file_get_contents('./templates/footer.php');
?>