<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM live_chat";
$result = mysqli_query($conn, $sql);


echo('<div class="container pagepadding" style="padding-top:8.5%;">
                <div class="welcome-page">
                    <div class="news-box">
                        <div class="news-text">');
while ($mostrar = mysqli_fetch_array($result)) { ?>
			
			    <p style="font-size: 15px; color: #1C62C4;"><?php echo $mostrar['nombre']; ?></p>
			    <p style="font-size: 15px; color: #848484;"><?php echo $mostrar['mensaje']; ?></p>

<?php
}
echo('</div>
                    </div>
                </div>
            </div>');
?>

