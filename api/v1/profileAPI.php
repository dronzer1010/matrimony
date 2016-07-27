<?php


	$app->get('/allprofiles', function() use ($app)  {
    $db = new DbHandler();
   	$user = $db->getAllRecords("select * from profile");
    $response["status"] = "info";
    $response["data"]=$user;
    $response["message"] = "All profiles fetched";
    echoResponse(200, $response);
	});

	$app->get('/profile/:pid', function($id) {
    $db = new DbHandler();
   	$user = $db->getOneRecord("select * from profile where pid='$id'");
    $response["status"] = "info";
    $response["data"]=$user;
    $response["message"] = " profile fetched";
    echoResponse(200, $response);
	});


	
?>