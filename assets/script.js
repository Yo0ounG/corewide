
// BURGER MENU HEADER
{
    const menuBtn = document.querySelector('.menu__dropdown-btn');
    const menuList = document.querySelector('.menu__list');

    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('--active');
            menuList.classList.toggle('--active');
        });
    }
}

// QUESTIONS ACCORDION
{
   const accordionList = document.querySelectorAll('.questions-item__container');

   if (accordionList) {
       accordionList.forEach((item) => {
           item.addEventListener('click', () => item.classList.toggle('--active'))
       });
   }
}


// SWIPER
{
    if (document.querySelector('.swiper')) {
        const swiper = new Swiper('.swiper', {
            slidesPerView: 'auto',
            spaceBetween: 24,
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
            },

            breakpoints: {
                1160: {
                    slidesPerView: 4,
                    centeredSlides: false,
                }
            }
        });

        const slides = document.querySelectorAll('.swiper-slide');

        slides.forEach(slide => {
            slide.addEventListener('mouseenter', () => {
                slides.forEach(item => item.classList.remove('swiper-slide-active'));
                slide.classList.add('swiper-slide-active');
            })
        })
    }
}

// PLAN TABS PRICES
{
    if (document.querySelector('#plans')) {
        let lite = ['$650', '$618', '$605', '$585'];
        let startup = ['$1100', '$1045', '$1023', '$990'];
        let pro = ['$1500', '$1425', '$1395', '$1350'];
        let ultimative = ['$2100', '$1995', '$1953', '$1890'];

        const priceLite = document.getElementById('price-lite');
        const priceStartup = document.getElementById('price-startup');
        const pricePro = document.getElementById('price-pro');
        const priceUltimative = document.getElementById('price-ultimative');

        priceLite.innerHTML = lite[0];
        priceStartup.innerHTML = startup[0];
        pricePro.innerHTML = pro[0];
        priceUltimative.innerHTML = ultimative[0];

        const planTabs = document.querySelectorAll('.plan-tabs__tab');

        planTabs.forEach((tab) => {
            tab.addEventListener('click', function () {
                planTabs.forEach((item) => {
                    item.classList.remove('--active');
                });

                tab.classList.add('--active');

                const tabIndex = tab.getAttribute('id').slice(-1);
                console.log(tabIndex);

                priceLite.innerHTML = lite[tabIndex];
                priceStartup.innerHTML = startup[tabIndex];
                pricePro.innerHTML = pro[tabIndex];
                priceUltimative.innerHTML = ultimative[tabIndex];
            });
        });
    }
}

// CALCULATOR
{
    const totalElem = document.querySelector('#calculator-total');
    const allInputs = document.querySelectorAll('input[name="price-input"]');

    allInputs.forEach((input) => {
        input.addEventListener('input', () => {
            let inputsValue = [];

            allInputs.forEach((input) => {
                if (input.checked) {
                    inputsValue.push(parseInt(input.value));
                }
            });

            const initialPrice = 650;
            const sumWithInitial = inputsValue.reduce((accumulator, currentValue) => accumulator + currentValue, initialPrice);

            totalElem.innerHTML = `${sumWithInitial}$`;
        });
    });
}
//
// // FORM
// {
//     const form = document.querySelector('.form');
//
//     if (form) {
//         form.addEventListener('submit', formSend);
//
//         async function formSend (e) {
//             e.preventDefault();
//             let formData = new FormData(form);
//             console.log(formData);
//             let error = formValidate(form);
//         }
//
//         function formValidate(form) {
//             let error = 0;
//             let formReq = document.querySelectorAll('input[required]');
//
//             formReq.forEach((input) => {
//                 console.log(input);
//                 formRemoveError(input);
//
//                 if (input.value === '') {
//                     formAddError(input);
//                     error++;
//                 }
//             })
//         }
//
//         function formAddError (input) {
//             input.classList.add('form__error');
//         }
//
//         function formRemoveError (input) {
//             input.classList.remove('form__error');
//         }
//     }
// }