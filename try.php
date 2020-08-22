<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
      
</head>

<body>
    <p><b>Spell checker</b> <p>

    <form action="" method="POST">
        <div class="form-group">
            <div class="label">
            <label for="exampleFormControlTextarea1">Leave your proofreading to us!  Simply copy and paste your text into the box below for a free online spelling check.</label>
            <div class="img">
                <img src="https://www.online-spellcheck.com/uploads/slider/21ae7630102fdce4db6abaa56967020f4119e1d4.png" alt="">
            </div>
        </div>
     
        <div class="mid">
            <div id="inside" class="">
                <textarea id="startText" rows="4" cols="90" name='word'></textarea>
            </div>
            <div class="btn">
            <button type="submit" id='submit' name="Check"><bold>check</bold></button>
            </div>
        </div>
    </form>

<div class="php"> 
    

<?php

error_reporting(0);
$word = $_POST['word'];
$length = strlen($word);
if ($length > 1)
{
$word = strtolower($word);
$word = preg_replace('/\s\s+/', ' ', $word);
$filename = 'dict.txt';
$arr = (explode(" ",$word));
$stack = array();
$word_len = str_word_count($word);
$count = 0;
for ($i=0; $i <$word_len ; $i++) {
    $find = $arr[$i];
    $fh = fopen($filename, 'r');
    $data = fread($fh, filesize($filename));
    if(strpos($data, $find)) {
        array_push($stack,$arr[$i]);
        $count++;
    }
    else {
        array_push($stack,"<b>$arr[$i]</b>");
    }
}
?>
<?php
if ($count == $word_len){
    // echo
    
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    alert(" congrats your all spelings are correct");
    


}
else{
    echo '<a> check-: </a>'. implode($stack,' ');
}
}
$sim = $filename;
$arry = (explode(" ",$sim));
$len = str_word_count($sim);
// echo $len,"<br>";
for ($j=0; $i <$len ; $j++) { 
  $similar = similar_text("Hello",$arry[$j],$percent);
        if ($percent>=90)
        {
            echo $arry[$j];   
        }

?>


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>