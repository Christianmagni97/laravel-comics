import axios from 'axios';
@import "~bootstrap/scss/bootstrap";
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
