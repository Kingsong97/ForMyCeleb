<?php
include "../connect/connect.php";  // 데이터베이스 연결 설정 파일 포함

// POST 방식으로 userId 값을 받아옴
$userId = mysqli_real_escape_string($connect, $_POST['register-user']);

// 사용자 ID 중복 검사 쿼리
$sql = "SELECT youID FROM members WHERE youID = '$userId'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "이미 사용중인 아이디입니다.";
} else {
    echo "사용 가능한 아이디입니다.";
}

// 데이터베이스 연결 종료
mysqli_close($connect);
?>
