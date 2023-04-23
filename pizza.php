<!DOCTYPE html>
<html>
<head>
	<title>피자 토핑</title>
</head>
<body>
	<h1>피자 토핑</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>토핑1:</label>
		<input type="text" name="topping1" required><br><br>
        <label>수량1:</label>
		<input type="text" name="num1" required><br><br>
		<label>토핑2:</label>
		<input type="text" name="topping2" required><br><br>
        <label>수량2:</label>
		<input type="text" name="num2" required><br><br>
        <label>토핑3:</label>
		<input type="text" name="topping3" required><br><br>
        <label>수량3:</label>
		<input type="text" name="num3" required><br><br>
        <label>토핑4:</label>
		<input type="text" name="topping4" required><br><br>
        <label>수량4:</label>
		<input type="text" name="num4" required><br><br>
        <label>토핑5:</label>
		<input type="text" name="topping5" required><br><br>
        <label>수량5:</label>
		<input type="text" name="num5" required><br><br>
		<input type="submit" value="기입">
	</form>
	<?php
	// 폼이 제출되면 회원 정보를 처리하는 코드
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// 데이터베이스 연결
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pizza";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// 이름과 이메일 데이터 가져오기
		$topping1 = $_POST["topping1"];
		$topping2 = $_POST["topping2"];
        $topping3 = $_POST["topping3"];
        $topping4 = $_POST["topping4"];
        $topping5 = $_POST["topping5"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];

		// SQL 쿼리 실행
		$sql = "INSERT INTO users (topping1,topping2,topping3,topping4,topping5,num1,num2,num3,num4,num5) VALUES ('$topping1', '$topping2','$topping3','$topping4','$topping5','$num1','$num2','$num3','$num4','$num5')";
		if ($conn->query($sql) === TRUE) {
			echo "기입이 완료되었습니다.";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
	?>
</body>
</html>