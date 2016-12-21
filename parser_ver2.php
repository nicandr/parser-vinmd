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
$xpath =new DOMXpath($dom);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
       $result= $xpath->query("//div[@role='alert']/strong")->item(0)->nodeValue;
        echo $result;
        /*

		function currency($from_Currency, $to_Currency, $amount) {
			$content = file_get_contents('https://www.google.com/finance/converter?a='.$amount.'&from='.$from_Currency.'&to='.$to_Currency);

			$doc = new DOMDocument;
			@$doc->loadHTML($content);
			$xpath = new DOMXpath($doc);

			$result = $xpath->query('//*[@id="currency_converter_result"]/span')->item(0)->nodeValue;

			return str_replace(' '.$to_Currency, '', $result);
}Pp

        */
?>
    </body>
</html>

editem from laptop sublime