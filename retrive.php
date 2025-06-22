<?php 
// Include the database configuration file  
require_once 'config.php'; 

// Create a connection to the database
// Check the connection

// Get image data from database 
$result = mysql_query("SELECT image FROM image ORDER BY id DESC"); 

?>

<!-- Display images with BLOB data from database -->
<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php } else { ?> 
    <p class="status error">Image(s) not found...</p>
<?php } 
?>


