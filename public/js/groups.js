function addSubject() {
    const fromSelect = document.getElementById('source');
    const toSelect = document.getElementById('destination');
    const subjectsList = document.getElementById('selectSubjectsTeachers');

    Array.from(fromSelect.selectedOptions).forEach(option => {
        // Move selected options to #destination
        toSelect.appendChild(option);

        if (fromSelect.id === 'source') {
            // Create a new <li> for the subjects-teachers list
            const li = document.createElement('li');
            li.classList.add('d-flex', 'align-items-center', 'justify-content-between', 'animating'); // 'animating' for CSS animation

            // Create the text with the subject name
            const textNode = document.createTextNode(option.text);

            // Create a <select> for choosing the subject teacher
            const select = document.createElement('select');
            select.classList.add('form-select', 'form-select-sm', 'ms-2', 'w-auto');
            const defaultOption = document.createElement('option');
            defaultOption.selected = true;
            defaultOption.disabled = true;
            defaultOption.textContent = 'Select subject teacher';
            select.appendChild(defaultOption);

            // Add the text and the <select> to the <li>
            li.appendChild(textNode);
            li.appendChild(select);

            // Add the <li> to the list
            subjectsList.appendChild(li);
        } else if (fromSelect.id === 'destination') { 
            // Remove the <li> from the subjects-teachers list
            const liToRemove = Array.from(subjectsList.children).find(li => li.textContent.includes(option.text));

            if (liToRemove) {
                liToRemove.classList.add('removing'); // Add a 'removing' class for CSS animation
                // Wait for the animation to finish before removing the <li>
                setTimeout(() => { liToRemove.remove(); }, 300);
            }
        }
    });
}