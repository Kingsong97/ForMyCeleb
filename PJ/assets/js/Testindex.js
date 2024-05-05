document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.columns'); // 이미지를 삽입할 컨테이너 선택

    // 이미지 인터랙션 로직 (확대/축소, 마우스 이벤트)
    function initImageInteractions() {
        const items = document.querySelectorAll('.column__item');

        items.forEach(item => {
            const img = item.querySelector('.column__item-img'); // 이미지 선택

            item.addEventListener('click', function () {

                const currentScale = gsap.getProperty(img, 'scale') === 1 ? 1.2 : 1;
                gsap.to(img, {
                    scale: currentScale,
                    duration: 0.7,
                    ease: 'power2.out'
                });
            });

            item.addEventListener('mouseenter', function () {
                gsap.to(img, {
                    scale: 1.1,
                    duration: 0.3,
                    ease: 'power1.out'
                });
            });

            item.addEventListener('mouseleave', function () {
                gsap.to(img, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power1.out'
                });
            });
        });
    }

    initImageInteractions(); // 이미지 인터랙션 함수 호출

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