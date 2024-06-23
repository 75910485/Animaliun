var swipers = {};

        function initSwipers(sectionId) {
            var container = document.querySelector(`#${sectionId} .swiper-container`);
            if (container && !swipers[sectionId]) {
                swipers[sectionId] = new Swiper(container, {
                    navigation: {
                        nextEl: `#${sectionId} .swiper-button-next`,
                        prevEl: `#${sectionId} .swiper-button-prev`,
                    },
                    loop: true,
                });
            }
        }

        function showSection(sectionId) {
            document.querySelectorAll('.container-one').forEach(function(section) {
                section.classList.add('hidden');
            });
            document.getElementById(sectionId).classList.remove('hidden');
            initSwipers(sectionId);
        }

        // Initialize Swipers for the initially visible section
        initSwipers('mamiferos');

        function navigateToSection(page, sectionId) {
            localStorage.setItem('targetSection', sectionId);
            window.location.href = page;
        }
        