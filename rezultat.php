<html>
	<head>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<style>
div{

}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
	
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
.top{
	margin-top: 20px;
}}
</style>
	
	<body>
	<form action='rezultat.php' method='get'>
<div class="container">
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" name="x" class="form-control"  placeholder="Pretrazi" >
                    <span class="input-group-addon"> 
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
						</form>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>
<div class="top">
	<div class="shake-vertical shake-constant shake-constant--hover">
		<?php 
			$vap=trim($_GET['x']);
			if((!empty($vap))){
			echo "<iframe width=520% height=100% src='https://www.bing.com/search?q=$vap'></iframe>";
		}?>
	</div>
</div> 
	</body>
	<link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake.min.css">
</html>