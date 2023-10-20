<?php
$xmlFile = "one.xml";
if (file_exists($xmlFile)) {
    $xmlData = file_get_contents($xmlFile);
    $xml = simplexml_load_string($xmlData);
    for($i = 1 ; $i<= 11; $i++){
        echo "book:" . "\n";
      echo "author: " . $xml->book[$i]->author . "\n";  
      echo "title: " . $xml->book[$i]->title . "\n"; 
      echo "genre: " . $xml->book[$i]->genre . "\n"; 
      echo "price: " . $xml->book[$i]->price . "\n"; 
      echo "description: " . $xml->book[$i]->description . "\n"; 
      echo "publish_date: " . $xml->book[$i]->publish_date . "\n" . "\n"; 
      
    }
} else {
    echo "XML notfound";
}
?>
