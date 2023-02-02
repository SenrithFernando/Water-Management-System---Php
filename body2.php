<?php
session_start();
include "conection.php";

// $in=(int)$_POST['in'];
// // header("Location: welcome.php");

// $in_cal=$in*(22/7)*(7*7*10*100*60);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ins = (int) $_POST['in_times'];
    $out = (int) $_POST['out'];
    $out_cal = $out * (22/7) * (14*14*5*100*60);
    $Cal=$ins-$out;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>WATER MANAGEMENT SYSTEM pg2</title>

	<!-- Head file -->
	<?php include 'head.php'; ?>
</head>
<body>
<div class="win_text">
    <div class="win_text1">
      Tank Capacity 
    </div>
</div>


<div class="win_image1">
    <img src="photos/WATER.jpg" alt="" width="500px">
</div>

<div class="win_form">
<form action="index.php" method="post" target="_self">


    <div class="input-group mb-3">
    <input width="50%" type="text" name="in_times" class="form-control" placeholder="Input Water Time Minitues" value="<?php echo isset($out_cal) ? $out_cal : ''; ".00"?>" aria-label="Recipient's username" aria-describedby="button-addon2" class="readonly" readonly>
        
    <input type="text" name="in" class="form-control" placeholder="Output Water Time Minitues" aria-label="Recipient's username" aria-describedby="button-addon2"  value="<?php echo isset($Cal) ? $Cal : ''; " .00"?>  " class="readonly" readonly>
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Another response</button>
    </div>
    </form>
    </div>

<div style="height:200px;"></div>
	<!-- Footer file -->
	<?php include 'footer.php'; ?>
</body>
</html>