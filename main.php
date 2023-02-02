<?php
  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ins = (int) $_POST['in'];
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WATER MANAGEMENT SYSTEM</title>

	<!-- Head file -->
	<?php include 'head.php'; ?>
</head>
<body>
<div class="win_text">
    <div class="win_text1">
      INSERT INPUT TIME 
    </div>
</div>


<div class="win_image1">
    <img src="photos/WATER.jpg" alt="" width="500px">
</div>

<div class="win_form">
<form action="body1.php" method="post" target="_self">


    <div class="input-group mb-3">
        <input type="text" name="cal" class="form-control" placeholder="Balanced Water Limit" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo isset($ins) ? $ins : ''; ".00"?>" readonly>
        <input type="text" name="in" class="form-control" placeholder="Input Water Time Minitues" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Next</button>
    </div>
    </form>
    </div>

<div style="height:200px;"></div>
	<!-- Footer file -->
	<?php include 'footer.php'; ?>
</body>
</html>