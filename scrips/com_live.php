<?php
require 'database.php';
?>

<?php
$sql = "SELECT * FROM live_chat";
$result = mysqli_query($conn, $sql);

echo('<div style="width:100%; padding: 5px;">');

while ($mostrar = mysqli_fetch_array($result)) { ?>
<ul class="cards">
	<li class="cards__item">
    	<div class="card">
      		<div class="card__content">
			    <p class="card__title" style="font-size: 15px; color: #1C62C4;"><?php echo $mostrar['nombre']; ?></p>
			    <p class="card__text" style="font-size: 15px; color: #848484;"><?php echo $mostrar['mensaje']; ?></p>
  			</div>
		</div>
	</li>
</ul>
<?php
}
echo('</div>');
?>

<style type="text/css">
	.cards__item {
  display: flex;
  padding: 1rem;
}
@media (min-width: 40rem) {
  .cards__item {
    width: 50%;
  }
}
@media (min-width: 56rem) {
  .cards__item {
    width: 33.3333%;
  }
}

	.card__title {
  color: #696969;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}
  	.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
}
.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}
.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}
</style>