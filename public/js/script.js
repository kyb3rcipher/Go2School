const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
const appendAlert = (message, type) => {
const wrapperAlert = document.createElement('div')
wrapperAlert.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
    ].join('');

    alertPlaceholder.append(wrapperAlert);
}


const alertTrigger = document.querySelectorAll('#liveAlertBtn');
if (alertTrigger) {
    alertTrigger.forEach(button => {
        button.addEventListener('click', () => {
            appendAlert('This is a school project!', 'warning');
        });
    });
}

function changeSideBar() {
    const sideBar = document.getElementById('sideBar');
    const sideBarSmall = document.getElementById('sideBarSmall');

    const isSmallScreen = window.innerWidth < 768;

    sideBar.classList.toggle('d-flex', !isSmallScreen);
    sideBar.classList.toggle('d-none', isSmallScreen);

    sideBarSmall.classList.toggle('d-flex', isSmallScreen);
    sideBarSmall.classList.toggle('d-none', !isSmallScreen);
}
function toggleSideBarSmall() {
    const sideBar = document.getElementById('sideBarSmall');

    if (sideBar.style.width === "4.5rem") {
        sideBar.style.width = 0;
    } else {
        sideBar.style.width = "4.5rem";
    }
}


function initializeScript() {
    changeSideBar();
    toggleSideBarSmall();
    document.getElementById('sidebarSmallToggleTop').addEventListener('click', toggleSideBarSmall);

    window.addEventListener('resize', changeSideBar);

    document.getElementById('sidebarToggle').addEventListener('click', function () {
        const sideBar = document.getElementById('sideBar');
        const sideBarSmall = document.getElementById('sideBarSmall');

        sideBar.style.width = 0;
        sideBar.classList.remove('d-flex');
        sideBar.classList.add('d-none');
        
        sideBarSmall.style.width = "4.5rem";
        document.getElementById('content-wrapper').style.marginLeft = 0;
        sideBarSmall.classList.add('d-flex');
        sideBarSmall.classList.remove('d-none');
    });
}
document.addEventListener('livewire:navigated', initializeScript);
window.addEventListener('DOMContentLoaded', initializeScript);
