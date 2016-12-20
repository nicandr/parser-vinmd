<?php
// set post fields
$post = [
    'vid' => 'WAUDG74F25N111998',
    'submit' => 'submit',
    
];

$ch = curl_init('http://www.stolencars24.eu/ru/index.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);
/*
$doc = new DOMDocument();
$doc->loadHTML($response);    
$selector = new DOMXPath($doc);

$result = $selector->query('div');

// loop through all found items
foreach($result as $node) {
    echo $node->getAttribute('div');
}
*/
$dom = new DOMDocument();
$dom->loadHTML($response);
//$dom->saveHTML();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
       /* $dom->getElementsByTagName('strong');
        echo $dom->textContent;*/
        
        foreach($dom->getElementsByTagName('strong') as $link) 
        {
            # Show the <a href>
            $link1 = $link->textContent;
            /*$arr = explode(' ',trim($link1));
            $arr[0]; // will print Test*/
            if($link->textContent)
            {
                echo $link->textContent;
                exit();
             }
        }
?>
    </body>
</html>
11