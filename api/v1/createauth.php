<?php 
$app->get('/session', function() {
    $db = new DbHandler();
    $session = $db->getSession();
    $response["pid"] = $session['pid'];
    $response["email"] = $session['email'];
    $response["firstname"] = $session['firstname'];
	$response["lastname"] = $session['lastname'];
    echoResponse(200, $session);
});


$app->post('/createP', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('gender', 'email', 'firstname', 'lastname', 'postedby', 'edob', 'religion', 'caste', 'mothertongue', 'residing', 'mobileno', 'phoneno', 'maritalstatus', 'complexion', 'phisicallychallenged', 'height', 'borncitizenship', 'educationcategory', 'specialization', 'employedin', 'professiongroup', 'profession', 'companyname', 'monthlysalary', 'state', 'district', 'city', 'fathername', 'mothername', 'fathereducation', 'mothereducation', 'fatherprofession', 'motherprofession', 'fathernative', 'mothernative', 'fathermobileno', 'mothermobileno', 'yielderbro', 'yieldersis', 'youngerbro', 'youngersis', 'relativedet'),$r->customer);
    $db = new DbHandler();
    $gender = $r->customer->gender;
    $email = $r->customer->email;
    $firstname = $r->customer->firstname;
	$lastname = $r->customer->lastname;
    $postedby = $r->customer->postedby;
    $edob = $r->customer->edob;
	$religion = $r->customer->religion;
    $caste = $r->customer->caste;
	$mothertongue = $r->customer->mothertongue;
    $residing = $r->customer->residing;
    $mobileno = $r->customer->mobileno;
	$phoneno = $r->customer->phoneno;
	$maritalstatus = $r->customer->maritalstatus;
	$complexion = $r->customer->complexion;
    $phisicallychallenged = $r->customer->phisicallychallenged;
    $height = $r->customer->height;
	$borncitizenship = $r->customer->borncitizenship;
    $educationcategory = $r->customer->educationcategory;
	$specialization = $r->customer->specialization;
    $employedin = $r->customer->employedin;
    $professiongroup = $r->customer->professiongroup;
	$profession = $r->customer->profession;
	$companyname = $r->customer->companyname;
	$monthlysalary = $r->customer->monthlysalary;
    $state = $r->customer->state;
    $district = $r->customer->district;
	$city = $r->customer->city;
    $fathername = $r->customer->fathername;
	$mothername = $r->customer->mothername;
    $fathereducation = $r->customer->fathereducation;
    $mothereducation = $r->customer->mothereducation;
	$fatherprofession = $r->customer->fatherprofession;
	$motherprofession = $r->customer->motherprofession;
	$fathernative = $r->customer->fathernative;
    $mothernative = $r->customer->mothernative;
    $fathermobileno = $r->customer->fathermobileno;
	$mothermobileno = $r->customer->mothermobileno;
    $yielderbro = $r->customer->yielderbro;
	$yieldersis = $r->customer->yieldersis;
    $youngerbro = $r->customer->youngerbro;
    $youngersis = $r->customer->youngersis;
	$relativedet = $r->customer->relativedet;
    
    $isUserExists = $db->getOneRecord("select 1 from profile where email='$email'");
    if(!$isUserExists){
        
        $tabble_name = "profile";
        $column_names = array('gender', 'email', 'firstname', 'lastname', 'postedby', 'edob', 'religion', 'caste', 'mothertongue', 'residing', 'mobileno', 'phoneno', 'maritalstatus', 'complexion', 'phisicallychallenged', 'height', 'borncitizenship', 'educationcategory', 'specialization', 'employedin', 'professiongroup', 'profession', 'companyname', 'monthlysalary', 'state', 'district', 'city', 'fathername', 'mothername', 'fathereducation', 'mothereducation', 'fatherprofession', 'motherprofession', 'fathernative', 'mothernative', 'fathermobileno', 'mothermobileno', 'yielderbro', 'yieldersis', 'youngerbro', 'youngersis', 'relativedet');
        $result = $db->insertIntoTable($r->customer, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "Profile account created successfully";
            $response["pid"] = $result;
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['pid'] = $response["pid"];
            $_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create customer. Please try again";
            echoResponse(201, $response);
        }            
    }else{
        $response["status"] = "error";
        $response["message"] = "An Profile with the provided phone or email exists!";
        echoResponse(201, $response);
    }
});
$app->get('/logout', function() {
    $db = new DbHandler();
    $session = $db->destroySession();
    $response["status"] = "info";
    $response["message"] = "Logged out successfully";
    echoResponse(200, $response);
});

?>