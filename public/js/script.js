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