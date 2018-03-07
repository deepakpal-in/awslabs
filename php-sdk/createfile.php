<?php
//Copyright 2015 A Cloud Guru

//Connection string
include 'connecttoaws.php';

/*
Files in Amazon S3 are called "objects" and are stored in buckets. A specific
object is referred to by its key (or name) and holds data. In this file
we create an object called acloudfolks.txt that contains the data 
'Hello Cloud Folkss!'
and we upload/put it into our newly created bucket.
*/

//get the bucket name
$bucket = $_GET["bucket"];

//create the file name
$key = 'cloudfolks.txt';

//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hello Cloud Folks!"
));

//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><img src=\"https://s3.ap-south-1.amazonaws.com/mphasis-hpsbu/CloudFolks/cloudFolks.JPG\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>
