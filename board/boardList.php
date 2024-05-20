<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
<?php
    include "../include/head.php"
?>
</head>

<body>
<?php
    include "../include/header.php"
?>
<!-- //header -->
    <main id="main">
        <div class="page__title">
            <div class="container">
                <h3>자유게시판</h3>
            </div>
        </div>
        <!-- board__seach -->
        <div id="board__search">
            <div class="container">
                <div class="search__window">
                    <form action="">
                        <div class="search__wrap">
                            <label for="search" class="blind">공지사항 내용 검색</label>
                            <input id="search" type="search" name="" placeholder="검색어를 입력해주세요." value="">
                            <button type="submit" class="btn search__btn">검색</button>
                        </div>
                        <div class="write__wrap">
                            <a href="boardWrite.php">글쓰기</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- board__list -->
        <div id="board__list">
            <div class="container">
                <table>
                    <colgroup>
                            <col style="width:5%" />
                            <col style="width:63%" />
                            <col style="width:10%" />
                            <col style="width:15%" />
                            <col style="width:7%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>등록자</th>
                            <th>등록일</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(isset($_GET['page'])){
                            $page = (int) $_GET['page'];
                        } else {
                            $page = 1;
                        }   
                        $viewNum = 10;
                        $viewLimit = ($viewNum * $page) - $viewNum;

                        $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(b.memberID = m.memberID) ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
                        $result = $connect -> query($sql);

                        if($result){
                            $count = $result -> num_rows;

                            if($count > 0){
                                for($i = 0; $i<$count; $i++){
                                    $info = $result -> fetch_array(MYSQLI_ASSOC);

                                    echo "<tr>";
                                    echo "<td>".$info['boardID']."</td>";
                                    echo "<td><a href='boardView.php?boardID={$info['boardID']}'>".$info['boardTitle']."</a></td>";
                                    echo "<td>".$info['youName']."</td>";
                                    echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                                    echo "<td>".$info['boardView']."</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
                            }
                        } else {
                            echo "<script>alert('에러 발생! 관리자에게 문의하세요!')</script>";
                        }
                    ?>
                    </tbody>
                </table>
                </table>
            </div>
        </div>

    </main>
<!-- //main -->
<?php
    include "../include/footer.php"
?>
</body>

</html>