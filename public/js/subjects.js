const sourceContainer = document.getElementById('source-container');
const targetContainer = document.getElementById('target-container');
const teacherIdsInput = document.getElementById('teacher-ids');

let currentDraggedElement = null;
const draggables = document.querySelectorAll('.draggable');

draggables.forEach(item => {
    item.addEventListener('dragstart', (e) => {
        currentDraggedElement = item; // Store the dragged element
        e.dataTransfer.setData('text/plain', item.id); // Store the dragged item's ID for later use
        item.classList.add('dragging');
    });

    item.addEventListener('dragend', () => {
        item.classList.remove('dragging');
        currentDraggedElement = null; // Clear the dragged element
    });
});

// Allow dragging over the target container
targetContainer.addEventListener('dragover', (e) => {
    e.preventDefault(); // Allow the drop by preventing the default behavior
    targetContainer.classList.add('drag-over'); // Add a class to style the target container while dragging over it
});

// Handle the drop event on the target container
targetContainer.addEventListener('drop', (e) => {
    e.preventDefault(); // Prevent default behavior to allow drop
    targetContainer.classList.remove('drag-over'); // Remove the drag-over styling

    // Remove any helper text if it exists
    const helperText = targetContainer.querySelector('p.text-muted');
    if (helperText) {
        helperText.remove(); // Remove the "Drag elements here" text
    }

    // If there's a dragged element, append it to the target container
    if (currentDraggedElement) {
        targetContainer.appendChild(currentDraggedElement);

        // Get the teacher ID from the dragged element's attribute
        const teacherId = currentDraggedElement.getAttribute('name');
        // Retrieve any existing teacher IDs stored in the hidden input field
        const existingIds = teacherIdsInput.value ? teacherIdsInput.value.split(',') : [];
        
        // If the teacher ID is not already in the list, add it
        if (!existingIds.includes(teacherId)) {
            existingIds.push(teacherId);
            teacherIdsInput.value = existingIds.join(','); // Update the hidden field with the new list of IDs
        }
    }
});

// Handle the dragleave event when dragging leaves the target container
targetContainer.addEventListener('dragleave', (e) => {
    // Check if the dragged item left the target container
    if (!e.relatedTarget || !targetContainer.contains(e.relatedTarget)) {
        // If the dragged element is still in the target container, move it back to the source container
        if (currentDraggedElement && targetContainer.contains(currentDraggedElement)) {
            sourceContainer.querySelector('ul').appendChild(currentDraggedElement); // Append the dragged item back to the source container
            targetContainer.classList.remove('drag-over');

            // If no elements are left in the target container, add helper text
            if (!targetContainer.querySelector('.draggable')) {
                const helperText = document.createElement('p');
                helperText.className = 'text-muted';
                helperText.textContent = 'Drag elements here';
                targetContainer.appendChild(helperText);
            }
        }
    }
});

// Prevent the default behavior when dragging over the source container
sourceContainer.addEventListener('dragover', (e) => {
    e.preventDefault(); // Allow dragging over the source container (required for drag events)
});