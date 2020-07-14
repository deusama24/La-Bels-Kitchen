<?php

	$con = mysqli_connect('localhost', 'root', '');
	
	if(!$con){
		echo 'Failed to connect to Server';
	}
	
	if(!mysqli_select_db($con,'orders')){
		echo 'Database Not Selected';
	}
	
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$CNum = $_POST['CNum'];
	$Address = $_POST['Address'];
	$Order_No = $_POST['Order_No'];
	
	#$Choice1_Name = "Baked Macaroni";
	#$Choice2_Name = "Carbonara";
	#$Choice3_Name = "Cheese Burger";
	
	$Choice1 = $_POST['Item-1-Quantity'];
	$Choice2 = $_POST['Item-2-Quantity'];
	$Choice3 = $_POST['Item-3-Quantity'];
	
	$Baked_Macaroni_Price = 350;
	$Carbonara_Price = 300;
	$Cheese_Burger_Price = 59;
	
	$Baked_Macaroni_Total = $Baked_Macaroni_Price * $Choice1;
	$Carbonara_Total = $Carbonara_Price * $Choice2;
	$Cheese_Burger_Total = $Cheese_Burger_Price * $Choice3;
	
	$Total_Price = $Baked_Macaroni_Total + $Carbonara_Total + $Cheese_Burger_Total;
	
	

	/*
	if ($Choice == "1"){
		$COrders = "Baked Macaroni";
	}
	else if ($Choice == "2"){
		$COrders = "Carbonara";
	}
	else {
		$COrders = "Cheese Burger";
	}
	*/
	
	if ($Order_No > 0){
		
	$sql="update orders
		set First_Name='$FName', Last_Name='$LName', Contact_Number='$CNum', Address='$Address', Baked_Macaroni='$Choice1', Baked_Macaroni_Total='$Baked_Macaroni_Total',
			Carbonara='$Choice2', Carbonara_Total = '$Carbonara_Total', Cheese_Burger = '$Choice3', Cheese_Burger_Total = '$Cheese_Burger_Total', Total_Price='$Total_Price'
		where Order_No ='$Order_No'";
		
	/*
	$sql="update orders
		set First_Name='$FName'
		where Order_No = '$Order_No'";
	*/
	}
	
	
	else{
	
	$sql="insert into orders(First_Name, Last_Name, Contact_Number, Address, Baked_Macaroni, Baked_Macaroni_Total, Carbonara, Carbonara_Total, Cheese_Burger, Cheese_Burger_Total, Total_Price) 
	VALUES ('$FName', '$LName', '$CNum', '$Address', '$Choice1', '$Baked_Macaroni_Total', '$Choice2','$Carbonara_Total', '$Choice3', '$Cheese_Burger_Total', 'Total_Price')"
	;
	}
	
	if(!mysqli_query($con, $sql)){
		echo 'Order Submission Failed';
	}
	
	else{
		echo 'Order Submission Successful!';
	}
	

?>





