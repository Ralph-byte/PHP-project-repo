<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Integration | Automated Online Registration System</title>

    <link rel="stylesheet" href="style.css">
    <script src="user.js"></script>

</head>
<body>
<style>
        /* Payment Gateway Integration */

html, body {
  height: 100%;
  font-family: 'Monsterrat', sans-serif;
  font-weight:400;
  background: #ebebeb;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
}        
.container{
	max-width: 800px;
	margin: 0 auto;
    background: #fff;
	padding: 20px;
	border: 1px solid #f0f0f0;
	border-radius: 5px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
}
h3{
	text-align: center;
}
.logo{
    width: 100%;
}
label{
	display: block;
	margin-top: 10px;
    text-align: left;
    width: 120px;
    font-size: 14px;
}
input[type="text"],input[type="email"]{
	width: 90%;
    height: 35px;
	padding: 0px 35px 0px 10px;
	margin: 10px 0px;
    border: 1px solid #ccc;
}
input[type="text"],
input[type="email"]:focus{
    border: 1px solid #039af4;

}
.btn-form{
	padding: 10px 20px;
	background-color: #03a9f4;
	color: #fff;
	border: none;
	cursor: pointer;
    transition: all .4s ease 0s;
}
.btn-form:hover{
	background-color: #303030;
}

hr{
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}

    </style>
   


<div class="container">
<h2 style="font-weight: 500; color: #303030;">Automated Online Birth & Death Registration System</h2>
<hr>
    
        <h3 style="font-weight: 600; color: #039af4;" >Birth & Death Payment</h3>
        
            <form id="paymentForm" action="pay-process.php" method="POST">

            <label for="amount">Amount (GHS):</label>
            <input type="text" id="amount" name="amount" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <button onclick=" return payWithPaystack()" class="btn-form" type="submit" id="payButton">PAY</button>
            
        </form>

    </div>

    

    <script src="https://js.paystack.co/v1/inline.js"></script>
    
</body>
</html>