 <?php
$servername = "localhost";
$username = "root";
$password = "";


$dbname = $_POST['dbname'];
$tablename = $_POST['tablename'];

$ROLL = $_POST['ROLL_NO'];
$REGISTRATION = $_POST['REG_NO'];
$ACADEMIC_YEAR  = $_POST['Academic_Year'];
$SEMESTER   = $_POST['Semester'];
$NAME_= $_POST['name_'];
$FATHER = $_POST['Father'];
$SESSION_ = $_POST['Session_'];
$PRESENT_ADDRESS = $_POST['Present_address'];
$ACCOUNT_NO = $_POST['Account_no'];
$ACCOUNT_TITLE = $_POST['AC_Title'];
$AMOUNT = $_POST['Amount'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $tablename(ROLL,REGISTRATION,ACADEMIC_YEAR,SEMESTER,NAME_,FATHER,SESSION_,PRESENT_ADDRESS,ACCOUNT_NO,ACCOUNT_TITLE,AMOUNT)
VALUES ($ROLL,$REGISTRATION,$ACADEMIC_YEAR,$SEMESTER,$NAME_,$FATHER,$SESSION_,$PRESENT_ADDRESS,$ACCOUNT_NO,$ACCOUNT_TITLE,$AMOUNT)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
