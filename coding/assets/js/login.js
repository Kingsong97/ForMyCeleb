// 로그인 버튼 클릭 시 이벤트 처리
document.querySelector('#loginButton').addEventListener('click', function () {
    // 모달 창을 표시하고, 본문을 흐릿하게 만듭니다.
    document.getElementById('login_modal').style.display = 'flex';
    document.body.classList.add('blur');
});

// 모달 창의 닫기 버튼 클릭 시 이벤트 처리
document.querySelector('.close').addEventListener('click', function () {
    // 모달 창을 숨기고, 본문의 흐림 효과를 제거합니다.
    document.getElementById('login_modal').style.display = 'none';
    document.body.classList.remove('blur');
});