<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $modello="samsung";
        $grado="a"; //a, b o c
        switch($grado){
            case "a":
                $str="<h2> $modello perfetto, pari al nuovo</h2>";
                break;
            case "b":
                $str="<h2> $modello in ottime condizioni</h2>";
                break;
            case "c":
                $str="<h2> $modello con graffi e/o segni di usura</h2>";
                break;
            default:
                $str="<h2 style='color:red'> errore: grado non riconosciuto</h2>";
                break;
        }
        echo $str;

    ?>
</body>
</html>