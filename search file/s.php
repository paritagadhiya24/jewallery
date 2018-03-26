<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	mysql_connect("localhost","root","");
    mysql_select_db("eshop");
	$nm=$_GET['name'];
	if($nm=="")
	{	
		
	}
	else
	{
		?>
				<div class="col-sm-12" style="background-color:#FFF;">
					<?php
						error_reporting(0);
						$q=mysql_query("select * from add_product where product_type like '%$nm%' OR product_name like '%$nm%'");
						if(mysql_num_rows($q)>0)
						{
							$r=mysql_fetch_array($q);
							$pt=$r['product_type'];
							$ci=$r['category_id'];
							?>
                            <a href="show_category.php?product_type=<?php echo $pt;?> & category_id=<?php echo $ci;?>" style="text-decoration:none;"><?php echo $pt;?>
                            <?php
                            	$q1=mysql_query("select * from add_category where category_id='$ci'");
            					while($row=mysql_fetch_array($q1))
								{
								$cn=$row['category_name'];
                            ?>
                           <!-- <a href="show_category.php?category_name=<?php // echo $cn;?>" style="text-decoration:none;"> --><?php echo $cn;}?></a><br />
                            <?php
							$q2=mysql_query("select * from add_product where product_name like '%$nm%' LIMIT 0 , 3");
							while($row1=mysql_fetch_array($q2))
							{
								$pt=$row1['product_name'];
								$ptn=$row1['product_type'];
								$pc=$row1['category_id'];
								?>
                                <a href="show_category.php?product_type=<?php echo $ptn;?> & category_id=<?php echo $pc;?>" style="text-decoration:none;"><?php echo $pt;?></a><br />
                                <?php
							}
						}
						
					?>		
				</div>
                <?php
			}
		
?>
</body>
</html>