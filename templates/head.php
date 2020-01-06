<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="./codemirror/lib/codemirror.css">
    <script src="./codemirror/mode/xml/xml.js"></script>
    <script src="./codemirror/mode/sql/sql.js"></script>
    <script src="./codemirror/mode/javascript/javascript.js"></script>
    <script src="./codemirror/mode/css/css.js"></script>
    <script src="./codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="./codemirror/mode/clike/clike.js"></script>
    <script type="text/javascript">


        $(document).ready(function(){
           $("#tabs").tabs();
        });
    </script>
</head>
<body id="abstop">