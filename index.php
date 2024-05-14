<?php
    include "connect/connect.php";
    include "connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko" class="no-js">
<!-- php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>For My Celeb</title>
    <meta name="description" content="A layout with an alternate scroll on image columns and a content preview.">
    <meta name="keywords" content="layout, scroll, locomotive scroll, column, javascript, web design">
    <meta name="author" content="Codrops">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/njz5ajv.css">
    <link rel="stylesheet" href="../coding/assets/outcss/index.css">
    <link rel="stylesheet" href="../coding/assets/css/style.css">
</head>

<body class="loading">
    <main>
        <div class="frame">
        <h1 class="frame__title"><span id="categoryTitle">category</span></h1>
        <div class="menu">
            <div class="menuContent">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
            <nav class="frame__links">
                <a href="#">notice</a>
                <a href="#">community</a>
                <a href="#">category</a>
            </nav>
            <?php if (isset($_SESSION['memberID'])) { ?>
    <button class="unbutton button-menu" aria-label="Logout">
        <span><a href="signup/signOut.php" id="logoutButton">Logout</a></span>
    </button>
<?php } else { ?>
    <button class="unbutton button-menu" aria-label="Open the menu">
        <span><a href="#" id="loginButton">Login</a></span>
    </button>
<?php } ?>

            <!-- <button class="unbutton button-menu" aria-label="Open the menu"><span><a href="#"
                        id="loginButton">login</a></span></button> -->
        </div>
        <h2 class="heading heading--up">formyceleb</h2>
        <h2 class="heading heading--down">formyceleb</h2>
        <div class="columns" data-scroll-container="">
            <div class="column-wrap column-wrap--height">
                <div class="column idol1">

                </div>
                <!-- /column -->
            </div>
            <!-- /column-wrap -->
            <div class="column-wrap">
                <div class="column idol2" data-scroll-section="">

                </div>
                <!-- /column -->
            </div>
            <div class="column-wrap column-wrap--height">
                <div class="column idol3">

                </div><!-- /column -->
            </div><!-- /column-wrap -->
        </div><!-- columns -->
        <div class="content">
            <div class="content__item">
                <h2 class="content__item-title">Lucky Wood</h2>
                <div class="content__item-text">
                    <span>Faith, you're driving me away
                        You do it every day
                        You don't mean it
                        But it hurts like hell</span>
                    <span>2019</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Cyber Blue</h2>
                <div class="content__item-text">
                    <span>My brain says I'm receiving pain
                        A lack of oxygen
                        From my life support
                        My iron lung
                    </span>
                    <span>2011</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Bold Human</h2>
                <div class="content__item-text">
                    <span>We're too young to fall asleep
                        Too cynical to speak
                        We are losing it
                        Can't you tell?</span>
                    <span>2014</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Good Earth</h2>
                <div class="content__item-text">
                    <span>We scratch our eternal itch
                        A twentieth century bitch
                        And we are grateful for
                        Our iron lung</span>
                    <span>2020</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Gnostic Will</h2>
                <div class="content__item-text">
                    <span>The head shrinkers
                        They want everything
                        My Uncle Bill
                        My Belisha beacon</span>
                    <span>2012</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Loyal Royal</h2>
                <div class="content__item-text">
                    <span>The head shrinkers
                        They want everything
                        My Uncle Bill
                        My Belisha beacon</span>
                    <span>2015</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Empty Words</h2>
                <div class="content__item-text">
                    <span>Suck, suck your teenage thumb
                        Toilet trained and dumb
                        When the power runs out
                        We'll just hum</span>
                    <span>2021</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">French Kiss</h2>
                <div class="content__item-text">
                    <span>This, this is our new song
                        Just like the last one
                        A total waste of time
                        My iron lung</span>
                    <span>2013</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Lone Cone</h2>
                <div class="content__item-text">
                    <span>And if you're frightened
                        You can be frightened
                        You can be, it's OK</span>
                    <span>2016</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Nonage Line</h2>
                <div class="content__item-text">
                    <span>Lost in the mountain
                        Rust in my brain
                        The air is sacred here
                        In spite of your claim</span>
                    <span>2009</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Half Life</h2>
                <div class="content__item-text">
                    <span>Up on the rooftops
                        Out of reach
                        Trickster is meaningless
                        Trickster is weak</span>
                    <span>2014</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Dutch Green</h2>
                <div class="content__item-text">
                    <span>He's talking out the world
                        Talking out the world</span>
                    <span>2017</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Blue Hell</h2>
                <div class="content__item-text">
                    <span>Hey, hey, hey
                        This is only halfway
                        Hey, hey, hey
                        This is only halfway</span>
                    <span>2010</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Love Boat</h2>
                <div class="content__item-text">
                    <span>I wanted you so bad
                        That I couldn't say
                        All these things fall apart</span>
                    <span>2015</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Valley Hill</h2>
                <div class="content__item-text">
                    <span>We wanted out so bad
                        We couldn't say
                        These things fall apart</span>
                    <span>2018</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Cold Blood</h2>
                <div class="content__item-text">
                    <span>Truant kids
                        A can of brick dust worms
                        Who do not want to climb down from
                        Their chestnut tree</span>
                    <span>2011</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Golden Ray</h2>
                <div class="content__item-text">
                    <span>Long white gloves
                        Police tread carefully
                        Escaped from the zoo
                        The perfect child facsimile is</span>
                    <span>2016</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Kale Hale</h2>
                <div class="content__item-text">
                    <span>Please could you stop the noise?
                        I'm trying to get some rest
                        From all the unborn chicken
                        voices in my head</span>
                    <span>2019</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Tulip Heat</h2>
                <div class="content__item-text">
                    <span>What's that?
                        I may be paranoid, but not an android</span>
                    <span>2012</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Blame Game</h2>
                <div class="content__item-text">
                    <span>When I am king you will be first against the wall
                        With your opinion which is of no consequence at all</span>
                    <span>2017</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Fake Cake</h2>
                <div class="content__item-text">
                    <span>Ambition makes you look pretty ugly
                        Kicking and squealing, Gucci little piggy</span>
                    <span>2017</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Red Wrath</h2>
                <div class="content__item-text">
                    <span>You don't remember, you don't remember
                        Why don't you remember my name?</span>
                    <span>2013</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Lone Dust</h2>
                <div class="content__item-text">
                    <span>Off with his head, man, off with his head, man
                        Why don't you remember my name? I guess he does</span>
                    <span>2018</span>
                </div>
            </div>
            <div class="content__item">
                <h2 class="content__item-title">Book Belly</h2>
                <div class="content__item-text">
                    <span>Rain down, rain down
                        Come on, rain down on me
                        From a great height
                        From a great height, height</span>
                    <span>2021</span>
                </div>
            </div>
            <nav class="content__nav">
                <div class="content__nav-wrap">
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0843-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                    <div class="content__nav-item" style="background-image:url(../PJ/assets/img/0043-min.jpg)"></div>
                </div>
            </nav>
            <button class="unbutton button-back"><svg viewbox="0 0 50 9" width="100%">
                    <path d="M0 4.5l5-3M0 4.5l5 3M50 4.5h-77"></path>
                </svg></button>
        </div>

        <div id="modal" class="modal show-modal">
            <div class="modal-content">
                <!DOCTYPE html>
                <html lang="ko">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>For My Celebrity</title>
                    <link rel="stylesheet" href="../coding/assets/outcss/login.css">
                </head>

                <body>
                    <div class="login-wrap">
                        <div class="login-html">
                            <button class="close">X</button>

                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                                class="tab">Sign In</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                                class="tab">Sign Up</label>
                            <div class="login-form">
                                <!-- 로그인 폼 -->
                                <form action="../signup/signinSave.php" method="post" class="sign-in-htm">
                                    <div class="group">
                                        <label for="login-user" class="label">아이디</label>
                                        <input id="login-user" name="youID" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="login-pass" class="label">비밀번호</label>
                                        <input id="login-pass" name="youPass" type="password" class="input"
                                            data-type="password">
                                    </div>
                                    <div class="group">
                                        <input id="login-check" type="checkbox" class="check" checked>
                                        <label for="login-check"><span class="icon"></span>아이디 저장하기</label>
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="로그인">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">비밀번호 찾기</a>
                                    </div>
                                </form>
                                <!-- 회원가입 폼 -->
                                <form action="../signup/signupResult.php" method="post" class="sign-up-htm">
                                    <div class="group">
                                        <label for="register-user" class="label">아이디</label>
                                        <input id="register-user" name="youID" type="text" class="input">
                                        <div id="userIdResult"></div>
                                    </div>
                                    <div class="group">
                                        <label for="register-pass" class="label">비밀번호</label>
                                        <input id="register-pass" name="youPass" type="password" class="input"
                                            data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="confirm-pass" class="label">비밀번호 확인</label>
                                        <input id="confirm-pass" name="password_confirm" type="password" class="input"
                                            data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="register-email" class="label">이메일</label>
                                        <input id="register-email" name="youEmail" type="text" class="input">
                                        <div id="userEmailResult"></div>  <!-- 중복 검사 결과를 표시할 요소 -->
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="가입하기">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label for="tab-1">이미 회원이신가요?</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </body>

                </html>

            </div>
        </div>
        <!-- modal -->
    </main>

    <!-- GSAP 라이브러리 로드 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <!-- ScrollTrigger 라이브러리 로드 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <!-- Locomotive Scroll 라이브러리 로드 -->
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.3/dist/locomotive-scroll.min.js"></script>
    <!-- 사용자 정의 JS 로드 -->

    <script src="../coding/assets/js/index.js"></script>
    <script src="coding/assets/js/regCheck.js"></script>
</body>

</html>