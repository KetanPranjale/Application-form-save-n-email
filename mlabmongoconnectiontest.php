<?php
 $uri= "mongodb://ketan:kspran@ds137801.mlab.com:37801/appforms";

 $client = new MongoClient($uri);
 echo "Connection to database successfully";
 $coll=$client->appforms->partdata;
 $coll->insert(array("email"=>"mumbo@jumbo.com"));
 echo "<br>Inserted mumbo jumbo in appforms database";
?>