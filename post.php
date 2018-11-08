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
<?php 
	$first_id;
	$second_id;
?>

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
				<h3> Recent Posts</h3>
				<?php
				      $related_query = "select * from tbl_post ORDER BY post_id DESC limit 10";
				      $related_post = $db_post->select($related_query);

				      if ($post) {
				          while ($related_result = $related_post->fetch_assoc()) {
				       //fetch all data from table
				        if ($related_result['post_id']!=$post_id) {
				        	# code...
				          	
   				?>
   				<hr>
				<a style=" color:#3c873c; text-align: justify; text-justify:inter-word;" href="post.php?id=<?php echo $related_result['post_id'];?>"><?php echo $related_result['post_title'];?></a> <br> 
				<?php }}}else{
					header("Location:construction_page.php");
					}?>
			</div>
		</div>
  </div>
</div>

<div class="row padding">
	<div class="col-sm-8">
		<h2>Comment</h2>

		<!-- if login -->
		<!-- show comment -->
			<div class="panel panel-default" style="border-radius:5px;">
			  	<div class="panel-body">
			  		<h3> Name</h3>
			  		<span> This is comment</span>
			  	</div>
		<!-- input comment -->
			  	<form style="width:100%;">
	    			<div class="form-group" style="width:100%;">
	      				<textarea class="form-control" placeholder="Write your comment" rows="5" id="comment"></textarea>
	   				</div>
  				</form>
			</div>
			
		<!-- else  please login-->

	</div>
</div>


<!-- Footer start -->
  </body>
    <?php include 'layouts/footer.php' ?>

  
</html>