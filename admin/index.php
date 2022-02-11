<?php 
include('partials/menu.php');
?>
        
        <div class="main-content">
        <div class="wrapper">
       <h1>Dashbord</h1>

    <br>   
<?php 

if(isset($_SESSION['login']))
{
        echo $_SESSION['login'];
unset($_SESSION['login']);
}
?>
<br>

       <div class="col-4 text-center">

       <?php 
      $sql="SELECT * FROM tbl_category";
      $res=mysqli_query($conn,$sql);
      
      $count=mysqli_num_rows($res);       
       ?>
           <h1><?php echo $count;?></h1><br>
           Category
       </div>
       <div class="col-4 text-center"> <?php 
      $sql="SELECT * FROM tbl_food";
      $res=mysqli_query($conn,$sql);
      
      $count=mysqli_num_rows($res);       
       ?>
           <h1><?php echo $count;?></h1><br>
           Foods
       </div>
       <div class="col-4 text-center"> <?php 
      $sql="SELECT * FROM tbl_order";
      $res=mysqli_query($conn,$sql);
      
      $count=mysqli_num_rows($res);       
       ?>
           <h1><?php echo $count;?></h1><br>
           Total orders
       </div>
       <div class="col-4 text-center">
       <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];
                        if($total_revenue<1){
                            $total_revenue=0;

                        }

                    ?>

                    <h1>₹<?php echo $total_revenue; ?></h1><br>
           Revenue Generated
       </div>
      <div class="clear-fix">

      </div>
        </div>  
        </div>

        <?php 
include('partials/footer.php');
?>