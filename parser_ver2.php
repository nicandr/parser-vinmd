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
$dom = new DOMDocument();
$dom->loadHTML($response);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
        foreach($dom->getElementsByTagName('strong') as $link) 
        {
            # Show the content
            $link1 = $link->textContent;
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
