<?php include('./header.php'); ?>

  <div id="content-wrapper-parent">
    <div id="content-wrapper">                      
      <!-- Content -->
      <div id="content" class="clearfix">        
        
        <div id="breadcrumb" class="breadcrumb">
  <div itemprop="breadcrumb" class="container">
    <div class="row">
      <div class="col-md-24">
        <a href="/" class="homepage-link" title="Back to the frontpage">Home</a>
        
        <span>/</span>
        <span class="page-title">Wish list</span>
        
      </div>
    </div>
  </div>
</div>
                
        <section class="content">
          
          
          <div class="container">
            <div class="row">
              
              
              
              <div id="page-header" class="col-md-24">
  <h1 id="page-title">Wish list</h1>
</div>

<div id="col-main" class="col-md-24 clearfix">

  <div class="page page-wishlist">
    <div class="table-cart">    
      
      
      <div class="wrap-table">
        <table class="cart-items haft-border">
          <thead>
            <tr class="top-labels">
              <th class="text-left">Items</th>
              <th>Price</th>
              <th>Remove</th>
              <th>Add to Cart</th>
            </tr>
          </thead>
          <tbody>            
            <?php
                                //database connection
                                include('../config.php');
                                //data listing 
//                                $data = "select * from cart ORDER BY (cart_id) DESC ";
                                $customer_id = isset($_SESSION['data']['customer_id'])?$_SESSION['data']['customer_id']:'';
//                                $product_id = $_GET['product_id'];
                                $product_id = isset($_REQUEST['pro_id'])?$_REQUEST['pro_id']:'';
                                if($product_id != '')
                                {
                                        if ($customer_id == '') {
                                          echo '<script>window.location = "loginform.php";</script>';
                                      }else{
                                          $data= "INSERT INTO `wishlist` (`product_id`,`customer_id`) VALUES ('" . $product_id . "','" . $customer_id . "')";
        //                                  echo "<pre>";print_r($data);die();
                                                if ($conn->query($data)) {
        //                                                echo "New record created successfully";
                                                    } else {

        //                                                echo "Error: " . $data . "<br>" . $conn->error;

                                                    }
                                              echo '<script>window.location = "wishlist.php";</script>';
                                      }
                                }
                                
                                $data = "SELECT product.price,product.image,wishlist.wishlist_id from wishlist join product on wishlist.product_id = product.product_id WHERE customer_id=$customer_id";
                                $result = $conn->query($data);  
//                                echo "<pre>";print_r($result);die();
                                while ($row = mysqli_fetch_array($result)) {                                    
                                      if (file_exists($row["image"])) {

                                        $path = '../product/' . $row["image"];
                                    } else {

                                        $path = '../product/picture/noimage.jpg';
                                    }
                             
                                    echo"<tr >		
	    
            <td><img src='$path' height='70px' width='70px'</td>                                               
            <td>$row[price]</td>                                  
	    <td>
            <a href='deletewishlist.php?wishlist_id=$row[wishlist_id]' onclick=\"return confirm('Are you sure you want to delete this Wishlist Product?')\" class='btn btn-danger'><span class='fa fa-times' title=Delete></span></a></td> 
            <td><a href='wishtocart.php?wishlist_id=$row[wishlist_id]' onclick=\"return confirm('Are you sure you want to Add To Cart?')\" class='btn btn-danger'><span class='fa fa-button' title=Add To Cart>Add To Cart</span></a></td>
</tr>";
                                   
                                }
    ?>                               
          </tbody>
        </table>
      </div>
      
      <a class="control-label" href="mailto:?subject=My%20Jewelry%20-%20Shopify%20theme%20Wish%20List&amp;body=I've%20added%20the%20following%20items%20to%20my%20wish%20list%20at%20Jewelry%20-%20Shopify%20theme %0A%0ACurabitur%20cursus%20dignis%3A%20%20https://cs-utc-jewelry.myshopify.com"></a>    
  </div>
</div><!-- /#col-main -->                                          
            </div>
          </div>          
        </section>        
      </div>
    </div>
  </div>
<?php include('./footer.php'); ?>