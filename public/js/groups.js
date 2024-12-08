function addSubject(isMovingRight) {
    const fromSelect = isMovingRight ? document.getElementById('source') : document.getElementById('destination');
    const toSelect = isMovingRight ? document.getElementById('destination') : document.getElementById('source');
    const subjectsList = document.getElementById('selectSubjectsTeachers');

    Array.from(fromSelect.selectedOptions).forEach(option => {
        // Move selected options to #destination
        toSelect.appendChild(option);

        if (isMovingRight) {
            // Create a new <li> for the subjects-teachers list    
            const li = document.createElement('li');
            li.classList.add('d-flex', 'align-items-center', 'justify-content-between', 'animating'); // 'animating' for CSS animation

            const textNode = document.createTextNode(option.text);

            const select = document.createElement('select');
            select.classList.add('form-select', 'form-select-sm', 'ms-2', 'w-auto');
            const defaultOption = document.createElement('option');
            defaultOption.selected = true;
            defaultOption.disabled = true;
            defaultOption.textContent = 'Select subject teacher';
            select.appendChild(defaultOption);

            li.appendChild(textNode);
            li.appendChild(select);
            subjectsList.appendChild(li);
        } else {    // Remove the <li> from the subjects-teachers list
            const liToRemove = Array.from(subjectsList.children).find(li => li.textContent.includes(option.text));

            if (liToRemove) {
                liToRemove.classList.add('removing'); // Add a 'removing' class for CSS animation
                // Wait for the animation to finish before removing the <li>
                setTimeout(() => { liToRemove.remove(); }, 300);
            }
        }
    });
}