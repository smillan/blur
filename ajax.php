<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo $_GET['name'];

    echo '1';
    // Get the content that is in the buffer and put it in your file //
    $content = "some text here";
    $fp = fopen("myText.php","wb");
    fwrite($fp,$content);
        echo "The insert function is called.";
    exit;
}


  
   