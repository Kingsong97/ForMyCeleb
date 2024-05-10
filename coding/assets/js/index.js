// 선택자
const columnWrap = document.querySelector(".column-wrap");
const columnG = document.querySelector(".column");
const column1 = document.querySelector(".idol1");
const column2 = document.querySelector(".idol2");
const column3 = document.querySelector(".idol3");

let photoInfo = [];
let currentIndex = 0;

const fetchPhoto = async () => {
    await fetch("https://gnlgk.github.io/class2024/json/imgzip.json")
        .then(res => res.json())
        .then(items => {
            photoInfo = items.map(item => {
                return {
                    imgurl: item.image_url,
                };
            });
            updatePhoto1();
            updatePhoto2();
            updatePhoto3();
        });
};

const updatePhoto1 = () => {
    column1.innerHTML = "";
    photoInfo.forEach((photo, index) => {
        let photoWrapTag = `
            <figure class="column__item">
                <div class="column__item-imgwrap" data-pos="${(index * 3) + 2}">
                    <div class="column__item-img" style="background-image:url(${photo.imgurl})">
                    </div>
                </div>
                <figcaption class="column__item-caption">
                    <span>${index + 1}</span>
                    <span>${index + 1}</span>
                </figcaption>
            </figure>
        `;
        column1.innerHTML += photoWrapTag;
    });
    initImageInteractions();  // 이미지 업데이트 후 애니메이션 초기화
};

const updatePhoto2 = () => {
    column2.innerHTML = "";
    photoInfo.forEach((photo, index) => {
        let photoWrapTag = `
            <figure class="column__item">
                <div class="column__item-imgwrap" data-pos="${(index * 3) + 1}">
                    <div class="column__item-img" style="background-image:url(${photo.imgurl})">
                    </div>
                </div>
                <figcaption class="column__item-caption">
                    <span>${index + 1}</span>
                    <span>${index + 1}</span>
                </figcaption>
            </figure>
        `;
        column2.innerHTML += photoWrapTag;
    });
    initImageInteractions();  // 이미지 업데이트 후 애니메이션 초기화
};

const updatePhoto3 = () => {
    column3.innerHTML = "";
    photoInfo.forEach((photo, index) => {
        let photoWrapTag = `
            <figure class="column__item">
                <div class="column__item-imgwrap" data-pos="${(index * 3) + 3}">
                    <div class="column__item-img" style="background-image:url(${photo.imgurl})">
                    </div>
                </div>
                <figcaption class="column__item-caption">
                    <span>${index + 1}</span>
                    <span>${index + 1}</span>
                </figcaption>
            </figure>
        `;
        column3.innerHTML += photoWrapTag;
    });
    initImageInteractions();  // 이미지 업데이트 후 애니메이션 초기화
};

document.addEventListener("DOMContentLoaded", async () => {
    await fetchPhoto();  // 이미지 로드를 기다립니다.
    initScroll();    // 모든 이미지 업데이트 후 스크롤 초기화
});


function initScroll() {
    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        lerp: 0.1,
        smartphone: {
            smooth: true
        },
        tablet: {
            smooth: true
        }
    });

    scroll.on('scroll', (obj) => {
        const oddColumns = document.querySelectorAll('.column-wrap--height .column');
        oddColumns.forEach(column => {
            column.style.transform = `translateY(${obj.scroll.y}px)`;
        });
    });
}

function initImageInteractions() {
    const items = document.querySelectorAll('.column__item');
    items.forEach(item => {
        const imgWrap = item.querySelector('.column__item-imgwrap');

        // 마우스 진입 시 확대 애니메이션
        item.addEventListener('mouseenter', function () {
            gsap.to(imgWrap, {
                scale: 1.2,
                duration: 0.5,
                ease: 'power1.out'
            });
        });

        // 마우스 이탈 시 축소 애니메이션
        item.addEventListener('mouseleave', function () {
            gsap.to(imgWrap, {
                scale: 1,
                duration: 0.5,
                ease: 'power1.out'
            });
        });
    });
};

// 로그인 버튼 클릭 시 이벤트 처리
document.querySelector('#loginButton').addEventListener('click', function () {
    // 모달 창을 표시하고, 본문을 흐릿하게 만듭니다.
    document.getElementById('modal').style.display = 'block';
    document.body.classList.add('blur');
});

// 모달 창의 닫기 버튼 클릭 시 이벤트 처리
document.querySelector('.close').addEventListener('click', function () {
    // 모달 창을 숨기고, 본문의 흐림 효과를 제거합니다.
    document.getElementById('modal').style.display = 'none';
    document.body.classList.remove('blur');
});