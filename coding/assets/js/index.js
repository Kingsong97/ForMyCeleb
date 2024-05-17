// 선택자
const columnWrap = document.querySelector(".column-wrap");
const columnG = document.querySelector(".column");
const column1 = document.querySelector(".idol1");
const column2 = document.querySelector(".idol2");
const column3 = document.querySelector(".idol3");


document.addEventListener("DOMContentLoaded", async () => {
    const nmixxUrl = "https://gnlgk.github.io/formyceleb/coding/json/nmixx.json";
    await fetchPhoto(nmixxUrl);  // 이미지 로드를 기다립니다.

});

let photoInfo = [];

const button1 = document.getElementById("nmixx");
const button2 = document.getElementById("stayc");

button1.addEventListener("click", async () => {
    const nmixxUrl = "https://gnlgk.github.io/formyceleb/coding/json/nmixx.json"; // 첫 번째 버튼이 클릭되었을 때 가져올 JSON 파일의 URL
    await fetchPhoto(nmixxUrl);
    resetScroll(); // 스크롤 위치 초기화
});

button2.addEventListener("click", async () => {
    const staycUrl = "https://gnlgk.github.io/formyceleb/coding/json/stayc.json"; // 두 번째 버튼이 클릭되었을 때 가져올 JSON 파일의 URL
    await fetchPhoto(staycUrl);
    resetScroll(); // 스크롤 위치 초기화
});


const fetchPhoto = async (url) => {
    try {
        const res = await fetch(url);
        const items = await res.json();
        photoInfo = items.map(item => ({ imgurl: item.image_url }));
        updatePhotos();
        initScroll();

    } catch (error) {
        console.error('Error fetching JSON:', error);
    }
};

// 사진을 업데이트하는 함수
const updatePhotos = () => {
    // 각 컬럼의 사진 업데이트
    updatePhoto1();
    updatePhoto2();
    updatePhoto3();
};

const updatePhoto1 = () => {
    column1.innerHTML = "";
    for (let index = 0; index < photoInfo.length; index++) {
        let photo = photoInfo[index * 3 + 2];

        if (photo && photo.imgurl) {
            let photoWrapTag = `
                <figure class="column__item">
                    <div class="column__item-imgwrap">
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
            console.log(column1)
        }
    }
    initImageInteractions();  // 이미지 업데이트 후 확대 애니메이션 초기화
};

const updatePhoto2 = () => {
    column2.innerHTML = "";
    for (let index = 0; index < photoInfo.length; index++) {
        let photo = photoInfo[index * 3 + 1];

        if (photo && photo.imgurl) {
            let photoWrapTag = `
                <figure class="column__item">
                    <div class="column__item-imgwrap">
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
        }
    }
    initImageInteractions();  // 이미지 업데이트 후 확대 애니메이션 초기화
};

const updatePhoto3 = () => {
    column3.innerHTML = "";
    for (let index = 0; index < photoInfo.length; index++) {
        let photo = photoInfo[index * 3 + 3];
        if (photo && photo.imgurl) {
            let photoWrapTag = `
                <figure class="column__item">
                    <div class="column__item-imgwrap">
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
        }
    }
    initImageInteractions();  // 이미지 업데이트 후 확대 애니메이션 초기화
};




let scrollInstance = null;

function initScroll() {
    if (scrollInstance) {
        scrollInstance.destroy(); // 기존 인스턴스를 파괴
    }

    scrollInstance = new LocomotiveScroll({
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

    scrollInstance.on('scroll', (obj) => {
        const oddColumns = document.querySelectorAll('.column-wrap--height .column');
        oddColumns.forEach(column => {
            column.style.transform = `translateY(${obj.scroll.y}px)`;
        });
    });
}


// JSON 파일이 변경될 때 스크롤 위치 초기화
const resetScroll = () => {
    if (scrollInstance) {
        scrollInstance.scrollTo(0, { duration: 0, disableLerp: true }); // 스크롤 위치를 0으로 초기화
    }
};



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