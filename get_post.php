<?php
// $_GET --> You can get data through URL and forms
// $_POST --> You can get data only from forms
echo $_SERVER['PHP_SELF'];     //Indicates the path of the same file
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Tarun&age=20">HELLO</a>
<?php
if(isset($_POST['submit'])){
echo $_POST["age"];
echo $_POST["name"];
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 <div>
    <label for="NAME">NAME:</label>
    <input type="text" id="NAME" name="name" placeholder="Enter Name" value="NESH">
 </div>  
 <div>
    <label for="AGE">Age:</label>
    <input type="text" id="AGE" name="age">
 </div> 
   <input type="submit" value="Sub" name="submit">
</form> 