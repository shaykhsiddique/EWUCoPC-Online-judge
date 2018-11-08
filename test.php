<!DOCTYPE html>
<html>
<?php include 'layouts/header.php' ?>

<?php
	if (!isset($_GET['id']) or $_GET['id']==NULL) {
		header("Location: construction_page.php");
	}else{
		$post_id = $_GET["id"];
	}
?>


<style>
	body{
		background-color: #eaeaea;
	}
</style>


<div class="row padding">
  <div class="col-sm-8">
  		<div class="panel panel-default" style="border-radius:10px;">
			<?php 
				$query = "select * from tbl_post where post_id=$post_id";
				$post = $db_post->select($query);
				if ($post) {
					while ($result = $post->fetch_assoc()){
						# code...
					
			?>
			<div class="panel-heading">
			    	<h2><?php echo $result['post_title'];?></h2>
			    	<p style="font-size:15px; color:#3c873c;"><i><?php echo $fm->formatDate($result['post_date']);?></i>, By <a href="#"><b><?php echo $result['post_author'];?></b></a> </p>
			</div>
			<div class="panel-body" style="text-align: justify; text-justify:inter-word;">
			    		 <?php echo $result['post_body'];?>
			</div>
			<?php }  //end of while loop 
			}else{
				header("Location: construction_page.php");
			}
	?>
		</div>
  </div>
  <div class="col-sm-4" style="padding-right:20px; padding-left:10px;">
  		<div class="panel panel-default" style="border-radius:5px;">
			<div class="panel-body">
				<h3> Recent Posts</h3><hr>
				<a href="#"> This is recent post 1</a> <br> <br>
				<a href="#"> This is recent post 2</a> <br><br>
				<a href="#"> This is recent post 3</a> <br><br>
				<a href="#"> This is recent post 4</a> <br><br>
				<a href="#"> This is recent post 4</a> <br><br>
				<a href="#"> This is recent post 4</a> <br><br>
				<a href="#"> This is recent post 4</a> <br><br>
				<a href="#"> This is recent post 4</a> <br><br>

			</div>
		</div>
  </div>
</div>

</html>