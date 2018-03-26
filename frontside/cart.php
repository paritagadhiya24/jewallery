<?php include('./header.php'); ?>
<?php
include('../config.php');
?>
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
        <span class="page-title">Your Shopping Cart</span>
        
      </div>
    </div>
  </div>
</div>
                
        <section class="content">
          
          
          <div class="container">
            <div class="row">                                          
              <div id="page-header" class="col-md-24">
                  </br></br></br>
  <h1 id="page-title">Shopping Cart</h1>
</div>

<div id="col-main" class="col-md-24 cart-page content">

  
  <form action="/cart" method="post" id="cartform" class="clearfix">
    <div class="row table-cart">
      <div class="wrap-table">
        <table class="cart-items haft-border">
          <colgroup>
            <col class="checkout-image" />
            <col class="checkout-info" />
            <col class="checkout-price" />
            <col class="checkout-quantity" />
            <col class="checkout-totals" />
          </colgroup>
            
          <thead>
             <tr>
                  <td>Image</td>
                  <td>product Name</td>
                  <td>Quantity</td>
                  <td>Price</td>
                  <td>Amount</td>
                 <td>Action</td>
               
               
                 
              </tr>
          </thead>

          <tbody>
        
            <?php
                                //database connection
                                //data listing 
//                                $data = "select * from cart ORDER BY (cart_id) DESC ";
                               // $customer_id = $_SESSION['data']['customer_id'];
                                $customer_id = isset($_SESSION['data']['customer_id'])? $_SESSION['data']['customer_id']:'';
                                if ($customer_id == '') {
                                echo '<script>window.location = "loginform.php";</script>';
                                 }
                                $data = "SELECT product.product_name, product.price,product.image,(product.price*cart.quantity)as amount,cart.quantity,cart.cart_id from cart join product on cart.product_id = product.product_id WHERE customer_id=$customer_id";
                                $result = $conn->query($data); 
                                
                                while ($row = mysqli_fetch_array($result)) {
                                      if (file_exists($row["image"])) {

                                        $path = '../product/' . $row["image"];
                                    } else {

                                        $path = '../product/picture/noimage.jpg';
                                    }
                             
                                    echo"<tr >		
	    
            <td><img src='$path' height='70px' width='70px'</td>            
            <td>$row[product_name]</td>            
            <td>$row[quantity]</td>
            <td>$row[price]</td>
            <td>$row[amount]</td>                        
	    <td>
            <a href='deletecart.php?cart_id=$row[cart_id]' onclick=\"return confirm('Are you sure you want to delete this customer?')\" class='btn btn-danger'><span class='fa fa-times' title=Delete>Remove</span></a></td> 
            </tr>";
                                   
                                }
    ?>                           
                 
          </tbody>

          <tfoot>

          </tfoot>
        </table>
      </div>
    </div>
      
	</div>
                  
      <div id="checkout-proceed" class="last1 text-right">
        <?php
	$data1 ="SELECT SUM(product.price*cart.quantity)as totalamount from cart join product on cart.product_id = product.product_id WHERE customer_id=$customer_id";   
        $result = $conn->query($data1);   
       // echo "<pre>"; print_r($result);die();        
	while ($rows = mysqli_fetch_array($result)) {	?>
                 <div class="pull-right">
		<div class="span">
	    <div class="alert alert-info"><i class="icon-credit-card icon-large"></i>&nbsp;totalamount:&nbsp;<?php echo $rows['totalamount'];?>
</div>
</div>
</div>     
                <?php
        
        }
            
        ?>
         
            
      </div>  
    </div>   
 </form>

<div class="clearfix">
      <div id="checkout-proceed" class="last1 text-right">
          <a href="checkout.php" button class="btn" type="submit" id="update-cart" name="checkout">Proceed to Checkout</button></a>
                               
      </div>
    </div>	  

<script type="text/javascript" charset="utf-8">
  //<![CDATA[
  
  // Including jQuery conditionnally.
  if (typeof jQuery === 'undefined') {
    document.write("\u003cscript src=\"\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.7\/jquery.min.js\" type=\"text\/javascript\"\u003e\u003c\/script\u003e");
    document.write('<script type="text/javascript">jQuery.noConflict();<\/script>');
  }
  
  //]]>
</script>

<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="/services/javascripts/countries.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/json3.min.js?15051162468902546095" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/assets/themes_support/shopify_common-040322ee69221c50a47032355f2f7e6cbae505567e2157d53dfb0a2e7701839c.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0908/7252/t/2/assets/jquery.cart.min.js?15051162468902546095" type="text/javascript"></script> 

<script>
  
  Shopify.Cart.ShippingCalculator.show( {
    submitButton: 'Calculate shipping', 
    submitButtonDisabled: 'Calculating...',
                                       customerIsLoggedIn: true,
                                       moneyFormat: "\u003cspan class='money'\u003e${{amount}} USD\u003c\/span\u003e"
                                       } );
  
</script>



  

</div>
              
              
              
            </div>
          </div>
          
          

        </section>        
      </div>
    </div>
  </div>
<?php include('./footer.php'); ?>