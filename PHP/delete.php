<!-- NO HTML NEEDED. JUST PHP. -->

<!-- Delete is the simplest query that we can ever deal with. -->
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername="localhost";
    $username="id19643036_root";
    $password="l1Sx[MAu}L)DMvb5";
    $database="id19643036_todoapp";
// Database connection string & Testing.
    $connection = new mysqli($servername,$username,$password,$database);
//Checking/ Verifying Connection.
    if($connection->connect_error){
        die("Connection failed: " . $connection->error);
    }
$sql = "DELETE FROM clients WHERE ID = $id";
$connection->query($sql);

// Having no further agenda , we redirect to the homepage.
 header("location: /todoApp/HTML/index.php");
 exit;
}
?>