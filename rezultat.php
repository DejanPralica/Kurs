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

<iframe src="https://www.bing.com/search?q=<?php echo $_GET['x']?>&go=Submit&qs=n&form=QBLH&pq=<?php echo $_GET['x']?>&sc=8-5&sp=-1&sk=&cvid=B9FD42242E4141229C9A122AFD686F13" width=100% height=100%></iframe>

	</body>
</html>
