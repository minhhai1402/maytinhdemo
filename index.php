<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Máy tính</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">

		
	</head>
	<body>
		<h1 class="text-center">Máy tính đơn giản</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
					<form action="" method="POST" name="maytinh">
						<table>
							<thead>
								<tr>
									<th colspan="4"><input type="text" name="result" disabled id="result" ></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									
									<td><input type="button" value="AC" onclick="maytinh.result.value = '' " class="clear"></td>
								</tr>
								<tr>
									<td><input type="button"value="7" onclick="maytinh.result.value += '7'" class="number"></td>
									<td><input type="button" value="8" onclick="maytinh.result.value += '8'" class="number"></td>
									<td><input type="button" value="9" onclick="maytinh.result.value += '9'" class="number"></td>
									<td><input type="button" value="/" onclick="maytinh.result.value += '/'" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="4" onclick="maytinh.result.value += '4'" class="number"></td>
									<td><input type="button" value="5" onclick="maytinh.result.value += '5'" class="number"></td>
									<td><input type="button" value="6" onclick="maytinh.result.value += '6'" class="number"></td>
									<td><input type="button" value="x" onclick="maytinh.result.value += '*'" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="1" onclick="maytinh.result.value += '1'" class="number"></td>
									<td><input type="button" value="2" onclick="maytinh.result.value += '2'" class="number"></td>
									<td><input type="button" value="3" onclick="maytinh.result.value += '3'" class="number"></td>
									<td><input type="button" value="-" onclick="maytinh.result.value += '-'" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="DEL" onclick="del()" class="clear"></td>
									<td><input type="button" value="0" onclick="maytinh.result.value += '0'"></td>
									<td><input type="button" value="=" onclick="maytinh.result.value = eval(maytinh.result.value) " class="tinhtoan"></td>
									<td><input type="button" value="+" onclick="maytinh.result.value += '+'" class="tinhtoan"></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function del() {
				var result = maytinh.result.value;
				maytinh.result.value = result.substring(0, result.length-1);
			}
		</script>
	</body>
</html>