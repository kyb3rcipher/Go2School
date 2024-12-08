import './bootstrap';
import '../scss/app.scss';
import * as bootstrap from 'bootstrap';
import Swal from 'sweetalert2';

// Enable bootstrap tooltips
document.addEventListener('DOMContentLoaded', () => {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
});

// Make global sweetAlert
window.Swal = Swal;