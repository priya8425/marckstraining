<!DOCTYPE html>
<html>
<head>
<title>MTIS | Message Us Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <!-- angularjs 
    ============================================ -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    width: 25%;
    margin-top: -3%;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

/*for small screen*/
@media only screen and (max-width: 600px) {	
.contact-image img{
    width: 40%;
}	
.contact-form{
  width: 80%;
}
}
/*ng-class*/
.errorMsg{
color:red;
font-weight:bold;
}
.successMsg{
color:green;
font-weight:bold;
}
</style>
</head>
<body>

<div class="container contact-form" ng-app="ContactMsgApp" ng-controller="ContactMsgController" ng-cloak>
            <div class="contact-image">
                <img src="http://marckstraining.in/images/logo2.jpg" alt="mtis_logo"/>
            </div>
            <form id="ContactForm" name="ContactForm" novalidate>
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Your Name *" value="" ng-model="contactDataObj.fullName" ng-pattern ="/^[a-zA-Z\s]*$/" required/>
                        	<span ng-show="ContactForm.fullName.$error.pattern" style="color:red;">Invalid Name!!!</span>
						</div>
                        <div class="form-group">
                            <input type="text" id="emailId" name="emailId" ng-model="contactDataObj.emailId" ng-pattern="/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]*\.([a-z]{2,4})$/"  class="form-control" placeholder="Your Email *" value="" required />
                            <span style="color:red;" ng-if="ContactForm.emailId.$error.pattern">Invalid Email Id!!!</span>
            	      	</div>
                        <div class="form-group">
                        <input type="text" name="mobileNos"id="mobileNos" ng-model="contactDataObj.mobileNos" ng-pattern="/^[6789][0-9]{9}$/" class="form-control" placeholder="Your Mobile Number" value="" />
                        <span ng-show="ContactForm.mobileNos.$error.pattern" style="color:red;">Please enter valid mobile number</span>
						</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message"id="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" maxlength="200" ng-model="contactDataObj.message" required></textarea>
                            <span style="color:red;" ng-if="ContactForm.message.$error.maxlength">Maximum 200 Characters Allowed!!!</span>
            	       </div>
                    </div>
					 <div class="col-md-6">
					 <div class="form-group">
                     <button type="button" class="btn btn-danger" ng-click="saveMsgDetail()" ng-disabled="ContactForm.$invalid || operationPending">Send Message</button>
                     <span style="color:blue;font-size:25px;text-align:center;" ng-if="operationPending"><i class="fa fa-spinner fa-spin"></i></span>
                     <div ng-if="serverResponse.status!=''" ng-class="{'successMsg':serverResponse.status=='success','errorMsg':serverResponse.status=='error'}">{{serverResponse.message}}</div>
                      </div>
                    </div>
                </div>
            </form>
</div>
<script>
(function(){
'use strict';
	
angular.module("ContactMsgApp",[])
.controller("ContactMsgController",controllerFunc);

function controllerFunc($scope,$http,$filter,$window,$timeout){
	const commonHeaders = {
	        'Content-Type': 'application/x-www-form-urlencoded;',
	        'Cache-Control': 'no-cache, no-store, must-revalidate',
	        'Pragma': 'no-cache',
	        'Expires': '0'
	    };
	
	//required scope variable
	$scope.contactDataObj={};
	$scope.operationPending=false;
	$scope.serverResponse = {message:'',status:''};	

	//initializing function
	function initController(){
	}
	
	//function to upload cv
	$scope.saveMsgDetail=function(){
				
		//clearing previous msg
		$scope.serverResponse = {message:'',status:''};	

		$scope.operationPending=true;
		$http({
			   url: "process_message.php",
			    method: "POST",
			    data:$.param({option: 'saveMsgDetail'})+"&"+$("#ContactForm").serialize(),
			    headers: commonHeaders
		}).then
		(function (response) {
		 var serverResponse=response.data;
		 $scope.serverResponse.message=serverResponse.message;
		 $scope.serverResponse.status=serverResponse.actionStatus;
		 if(serverResponse.actionStatus=="success"){
				
				//resetting data 
			 $scope.contactDataObj={};
			 
			 $scope.ContactForm.$setUntouched();
		
			 $timeout(function(){
			 $scope.serverResponse = {message:'',status:''};	
		 	},3000)
				 
		 }
		 
		 $scope.operationPending=false;
		 },function (response) {
		 $scope.operationPending=false;
						
			//calling the error handler code
			 $scope.errorHandler(response);
		 });	
	
	};
	
	
	//common code related to handing http response error
	$scope.errorHandler=function(response){
		switch(response.status)
		{
		case 400:
		$scope.serverResponse.status="error";
		$scope.serverResponse.message="Error "+response.status+" ,The Request Send To Server Is Malformed!!!"
		break;
		case 401:
		$scope.serverResponse.status="error";
		$scope.serverResponse.message="Error "+response.status+" ,Unauthorize Access Please Login!!!"
		break;
	    case 404:
	    $scope.serverResponse.status="error";
		$scope.serverResponse.message="Error "+response.status+" ,The Page Can't Access The Location Of The Server.!!!"
		break;
	    case 500:
	    $scope.serverResponse.status="error";
	    $scope.serverResponse.message="Error "+response.status+" ,Server Side Issue Occurred While Handling The Request!!!"
		break;
		default:
		$scope.serverResponse.status="error";
		$scope.serverResponse.message="Error "+response.status+" ,Unknown Server Side Issue Occurred!!!"
		}
	};

	
	
	//calling function to load necessary data on loading of controller
	initController();


}
})();
</script>
</body>
</html>
