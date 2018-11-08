<!DOCTYPE html>
<html lang="en">
  <?php include 'layouts/header.php' ?>
  <!-- Main navigation bar end -->
<link rel="stylesheet" type="text/css" href="layouts/css/post.css">

  <div class="padding"> </div>
  <!-- Body start -->
<div class="row">
<!-- left panel -->
  <div class="col-sm-3">
  
  

  <nav id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="1">
      <div class="panel panel-default">
        <div class="panel-heading"> <strong>→ Announcements</strong></div>
        <div class="panel-body" style="height: 250px;">
            <li><a href="#section1">Section 1</a></li>
            
        </div>
      </div>
      </ul>
    </nav>
</div>
  <!-- left panel end-->
  <!-- main body start -->
  <div class="col-sm-6">
    <!-- Add Slider start -->
      <img src="images/img.jpg" class="img-rounded" alt="Cinque Terre" width=100% height="320">
    <!-- END Slide Show -->
   <!-- Add Slider end -->





  

<!--Pagination-->
    <?php 
      $per_page = 3;
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
      }else{
        $page =1;
      }
      $start_from = ($page-1)*$per_page;
    ?>
<!--Pagination-->
    <div class="panel panel-default">
      <div class="panel-heading" style="font-size: 18px;"> <strong>→ News Feed</strong></div>
      
	 <?php
      $query = "select * from tbl_post ORDER BY post_id DESC limit $start_from, $per_page";
      $post = $db_post->select($query);

      if ($post) {
          while ($result = $post->fetch_assoc()) {
       //fetch all data from table
   ?>

	  <div class="bg"><a href="post.php?id=<?php echo $result['post_id'];?>"><text style="font-size:23px;"><b><?php echo $result['post_title'];?></b></text></a>

    <hr style="border:solid #7c7777 1px; border-radius:50px;"/>

    <p style="font-size:13px; color:#3c873c;"><i><?php echo $fm->formatDate($result['post_date']);?></i>, By <a href="#"><b><?php echo $result['post_author'];?></b></a> </p><p>
  
    <div style="text-align: justify; text-justify:inter-word;"> <?php echo $fm->textshrt($result['post_body']);?></div> 

    <a href="post.php?id=<?php echo $result['post_id'];?>"><div class="read">Read More</div></a></div>

    <?php }?>
    <!--end while-->
    <link rel="stylesheet" type="text/css" href="layouts/css/pagination_style.css">
    <!--Pagination start -->
    <?php 
      $query = "select * from tbl_post";
      $result = $db_post->select($query);
      /*$total_post = mysqli_num_rows($result);*/
      $rowcount=mysqli_num_rows($result);
      $total_pages = ceil($rowcount/$per_page);
      $i=1;
    ?>

        <div class="center">
          <div class="pagination">
            <?php 
            $i-=2;
            if($i<1)
              $i=1;
            echo "<a href='index.php?page=".$i."'>&laquo;</a>";

              for ($i=1; $i <=$total_pages; $i++) { 
              echo "<a href='index.php?page=".$i."'>".$i."</a>";
            }
            ?>
            <?php 
              $i--;
              echo "<a href='index.php?page=".$i."'>&raquo;</a>";
            ?>
        </div>
      </div>

    <!--Pagination end-->
	  <?php }else{ header("Location:construction_page.php");}?>

    </div>
    
   <!-- Post blog end -->

  </div>
  <!-- main body end -->
  

  <div class="col-sm-3">
  <!-- Panal right -->
  <div class="panel panel-default">
  <div class="panel-heading"> <strong>→ Top rated</strong></div>
  <div class="panel-body" style="height: 426px">
    <table class="table">
    <thead>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Ratings</th>
      </tr>
    </thead>
      <tr>
        <td>01</td>
        <td>Mash</td>
        <td>445</td>
      </tr>      
      <tr>
        <td>02</td>
        <td>Doe</td>
        <td>355</td>
      </tr>
      <tr>
        <td>03</td>
        <td>Moe</td>
        <td>266</td>
      </tr>
      <tr>
        <td>04</td>
        <td>Dooley</td>
        <td>177</td>
      </tr>
      <tr>
        <td>05</td>
        <td>Refs</td>
        <td>86</td>
      </tr>
      <tr>
        <td>06</td>
        <td>Activeson</td>
        <td>77</td>
      </tr>
     <tr>
        <td>07</td>
        <td>Activeson</td>
        <td>77</td>
      </tr>
     <tr>
        <td>08</td>
        <td>Activeson</td>
        <td>77</td>
      </tr>
     <tr>
        <td>09</td>
        <td>Activeson</td>
        <td>77</td>
      </tr>
     <tr>
        <td>10</td>
        <td>Activeson</td>
        <td>77</td>
      </tr>
      </table>
     </div>
    </div>
</div>
<!-- Panal right end-->

</div>
<!-- Body end -->
<!-- Footer start -->
  

   <?php include 'layouts/footer.php' ?>
 <!-- Footer end -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</html>