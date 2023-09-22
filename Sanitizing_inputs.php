<?php
// $_GET --> You can get data through URL and forms
// $_POST --> You can get data only from forms
echo $_SERVER['PHP_SELF'];     //Indicates the path of the same file
?>

<?php
if(isset($_POST['submit'])){
    $name1 = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name1;
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