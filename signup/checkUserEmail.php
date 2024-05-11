<?php
include "../connect/connect.php";  // 데이터베이스 연결 설정 파일 포함

// POST 방식으로 userId 값을 받아옴
$userEmail = mysqli_real_escape_string($connect, $_POST['register-email']);

// 사용자 ID 중복 검사 쿼리
$sql = "SELECT youEmail FROM members WHERE youEmail = '$userEmail'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo "이미 사용중인 이메일입니다.";
} else {
    echo "사용 가능한 이메일입니다.";
}

// 데이터베이스 연결 종료
mysqli_close($connect);
?>
