document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.columns'); // 이미지를 삽입할 컨테이너 선택

    // JSON 데이터 로드 및 처리
    // fetch('../PJ/assets/json/imgzip.json')
    //     .then(response => response.json())
    //     .then(data => {
    //         data.forEach((item, index) => {
    //             // 각 이미지에 대한 HTML 구조 생성
    //             const columnWrap = document.createElement('div');
    //             columnWrap.className = 'column-wrap' + (index % 2 === 0 ? ' column-wrap--height' : '');

    //             const column = document.createElement('div');
    //             column.className = 'column';

    //             const figure = document.createElement('figure');
    //             figure.className = 'column__item';

    //             const imgWrap = document.createElement('div');
    //             imgWrap.className = 'column__item-imgwrap';
    //             imgWrap.setAttribute('data-pos', index + 1);

    //             const img = document.createElement('div');
    //             img.className = 'column__item-img';
    //             img.style.backgroundImage = `url(../PJ/assets/img/${item.image})`;

    //             imgWrap.appendChild(img);
    //             figure.appendChild(imgWrap);
    //             column.appendChild(figure);
    //             columnWrap.appendChild(column);
    //             container.appendChild(columnWrap);
    //         });

    //         // 이미지 인터랙션 초기화
    //         initImageInteractions();
    //     });

    // 이미지 인터랙션 로직 (확대/축소, 마우스 이벤트)
    function initImageInteractions() {
        const items = document.querySelectorAll('.column__item');

        items.forEach(item => {
            item.addEventListener('click', function () {
                gsap.to(this, {
                    scale: this.style.transform === "scale(1.2)" ? 1 : 1.2,
                    duration: 0.7,
                    ease: 'power2.out'
                });
            });

            item.addEventListener('mouseenter', function () {
                gsap.to(this, {
                    scale: 1.1,
                    duration: 0.3,
                    ease: 'power1.out'
                });
            });

            item.addEventListener('mouseleave', function () {
                gsap.to(this, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power1.out'
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

    scroll.on('scroll', (obj) => {
        const oddColumns = document.querySelectorAll('.column-wrap--height .column');
        oddColumns.forEach(column => {
            column.style.transform = `translateY(${obj.scroll.y}px)`;
        });
    });
});