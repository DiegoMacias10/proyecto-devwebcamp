import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function() {
    if(document.querySelector('.slider')) {
        const opciones =  {
            slidesPerView: 1, //Se muestra un slide por vista en telefono
            spaceBetween: 15,
            FreeMode:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                760: { //A los 760px muestra 2 slides
                    slidesPerView:2
                },
                1024: {
                    slidesPerView:3
                },
                1200: {
                    slidesPerView:4
                }
            }
        }
        Swiper.use([Navigation])
        new Swiper('.slider', opciones);
    }
});