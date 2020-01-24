<?php
    include './templates/head.php';
?>

<div id="main">
    <div id= "header1">
        <div id="hed_text">
            <h2>PROGRAMMING SNIPPETS</h2>
        </div>
    </div>

    <div id="tabs">
        <ul>
            <li><a href="#java">Java</a></li>
            <li><a href="#js">Javascript</a></li>
            <li><a href="#jquery">JQuery</a></li>
            <li><a href="#jqueryui">jQueryUI</a></li>
            <li><a href="#jqueryuimobile">jQueryUI Mobile</a></li>
            <li><a href="#html">HTML</a></li>
            <li><a href="#sql">SQL</a></li>
            <li><a href="#css">CSS</a></li>

        </ul>
        <div id="js">
            <?php include 'javascript.php';?>
        </div>
        <div id="java"><?php include 'java.php'; ?></div>

        <div id="jquery"><p>This is the home for jQuery</p></div>
        <div id="jqueryui"><p>This is the home for jQueryUI</p></div>
        <div id="jqueryuimobile"><p>This is the home for jQueryUIMobile</p></div>
        <div id="sql"><p>This is the home for SQL</p></div>
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
    include './templates/footer.php';
?>