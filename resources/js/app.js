import './bootstrap';

// Import Swiper styles
import 'swiper/swiper-bundle.css';

// Import Swiper core and required modules
import Swiper from 'swiper';
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules';

// Initialize Swiper modules
Swiper.use([Navigation, Pagination, Scrollbar, A11y]);
