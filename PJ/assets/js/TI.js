
//선택자
const columnWrap = document.querySelector(".column-wrap");
const columnG = document.querySelector(".column");
const column1 = document.querySelector(".idol1");
const column2 = document.querySelector(".idol2");
const column3 = document.querySelector(".idol3");

let photoInfo = [];
let currentIndex = 0;

//사진가져오기
const fetchPhoto = async () => {
    await fetch("https://gnlgk.github.io/class2024/json/girlgroup.json")
        .then(res => res.json())
        .then(items => {
            photoInfo = items.map(item => {
                return {
                    imgurl: item.image_url,
                };
            });
            updatePhoto1(currentIndex);
            updatePhoto2(currentIndex);
            updatePhoto3(currentIndex);
        });
};

// 사진 출력 1
const updatePhoto1 = () => {
    column1.innerHTML = ""; // 기존에 있던 내용을 모두 지웁니다.
    photoInfo.slice(0, 8).forEach((photo, index) => {
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
        column1.innerHTML += photoWrapTag; // 새로운 사진을 추가합니다.
    });
}

// 사진 출력 2
const updatePhoto2 = () => {
    column2.innerHTML = ""; // 기존에 있던 내용을 모두 지웁니다.
    photoInfo.slice(0, 8).forEach((photo, index) => {
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
        column2.innerHTML += photoWrapTag; // 새로운 사진을 추가합니다.
    });
}

// 사진 출력 3
const updatePhoto3 = () => {
    column3.innerHTML = ""; // 기존에 있던 내용을 모두 지웁니다.
    photoInfo.slice(0, 8).forEach((photo, index) => {
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
        column3.innerHTML += photoWrapTag; // 새로운 사진을 추가합니다.
    });
}

// 페이지가 로드된 후 실행
document.addEventListener("DOMContentLoaded", () => {
    fetchPhoto();
    const container = document.querySelector('.columns'); // 이미지를 삽입할 컨테이너 선택


    // 이미지 인터랙션 로직(확대 / 축소, 마우스 이벤트)
    function initImageInteractions() {
        const items = document.querySelectorAll('.column__item');

        items.forEach(item => {
            const imgWrap = item.querySelector('.column__item-imgwrap');

            // 마우스 진입 시 애니메이션
            item.addEventListener('mouseenter', function () {
                gsap.to(imgWrap, {
                    x: 0,
                    y: 0,
                    duration: 0.5, // 애니메이션 지속 시간
                    ease: 'power1.out' // 애니메이션 이징
                });
            });

            // 마우스 이탈 시 애니메이션
            item.addEventListener('mouseleave', function () {
                gsap.to(imgWrap, {
                    x: 0,
                    y: 0,
                    duration: 0.5, // 애니메이션 지속 시간
                    ease: 'power1.out' // 애니메이션 이징
                });
            });
        });
    }


    // Locomotive Scroll 인스턴스 생성 및 스크롤 이벤트 설정
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

    // Locomotive Scroll의 scroll 이벤트 핸들러 설정
    scroll.on('scroll', (obj) => {
        const oddColumns = document.querySelectorAll('.column-wrap--height .column');
        oddColumns.forEach(column => {
            column.style.transform = `translateY(${obj.scroll.y}px)`;
        });
    });
    // 이미지 인터랙션 초기화
    initImageInteractions();
});



