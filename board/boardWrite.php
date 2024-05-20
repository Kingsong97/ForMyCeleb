<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>KINGSONG BLOG : 게시판 글쓰기</title>
    <?php
    include "../include/head.php"
    ?>
</head>

<body>
    <?php
    include "../include/header.php"
    ?>
    
    <!-- //header -->

    <!-- //header -->
    <main id="main" role="main">
        <div class="container">
            <div class="intro__inner line-bot">
                <div class="intro__img2"></div>
                <h2 class="intro__title">글쓰기</h2>
            </div>
            <!-- //intro_inner -->
            <div class="board__inner">
                <div class="board__write">
                    <form action="boardWriteSave.php" name="boardWriteSave" method="post">
                        <fieldset>
                            <legend class="blind">게시글 작성하기</legend>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" id="boardTitle" name="boardTitle" class="input-style">
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents" rows="40"
                                    class="input-style"></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn-style">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php
    include "../include/footer.php"
    ?>
    <!-- //footer -->
</body>

</html>