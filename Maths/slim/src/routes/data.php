<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App;

//Get all questions

$app->get('/api/questions', function(Request $request, Response $response){
	 $sql = "SELECT
				*
				from questions";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->query($sql);
		 $engagements = $stmt->fetchAll(PDO::FETCH_OBJ);
		 $db = null;
		 echo json_encode($engagements);
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});



//Get all question answers

$app->get('/api/question/answers/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');
	
	 $sql = "select * from table_answers where question = $id";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->query($sql);
		 $customer = $stmt->fetchAll(PDO::FETCH_OBJ);
		 $db = null;
		 echo json_encode($customer);
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});


//Get single question

$app->get('/api/question/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');
	
	 $sql = "select * from questions where id = $id";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->query($sql);
		 $customer = $stmt->fetchAll(PDO::FETCH_OBJ);
		 $db = null;
		 echo json_encode($customer);
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});


//Add user

$app->post('/api/register', function(Request $request, Response $response){
	 
	 $name = $request->getParam('name');
	 $contact = $request->getParam('contact');
	 $email = $request->getParam('email');
	 $country = $request->getParam('country');
	 $Upassword = $request->getParam('userPassword');
	 
	 $sql = "insert into users (name, contact, email, country, password) 
	 values(:name, :contact, :email, :country, :password)";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 
		 $stmt->bindParam(':name', $name);
		 $stmt->bindParam(':contact', $contact);
		 $stmt->bindParam(':email', $email);
		 $stmt->bindParam(':country', $country);
		 $stmt->bindParam(':password', $Upassword);
		 
		 $stmt->execute();
		 
		 echo json_encode('Registered Successfully');
	 }
	 catch(PDOException $e){
		 echo json_encode('{"error": {"text": '.$e->getMessage().'}}');
	 }
});


//Update engagement

$app->put('/api/engagements/update/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');
	 
	 
	 $date_resigned = $request->getParam('date_resigned');
	 
	 $sql = "update engagements set date_resigned = :date_resigned where id = '$id'";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 
		 $stmt->bindParam(':date_resigned', $date_resigned);
		 
		 $stmt->execute();
		 
		 echo '{"notice": {"Text": "Engagement Updated"}}';
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});


//Delete single customer

$app->delete('/api/engagements/delete/{id}', function(Request $request, Response $response){
	
	 $id = $request->getAttribute('id');
	
	 $sql = "delete from users where id = $id";
	 
	 try{
		 //Get database object
		 $db = new db();
		 //Connect
		 $db = $db->connect();
		 
		 $stmt = $db->prepare($sql);
		 $stmt->execute();
		 $db = null;
		 
		 echo '{"notice": {"Text": "Customer deleted"}}';
	 }
	 catch(PDOException $e){
		 echo '{"error": {"text": '.$e->getMessage().'}}';
	 }
});

?>
