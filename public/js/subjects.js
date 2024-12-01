const sourceContainer = document.getElementById('source-container');
const targetContainer = document.getElementById('target-container');

// Variable to track the dragged element
let currentDraggedElement = null;

// Select the draggable elements
const draggables = document.querySelectorAll('.draggable');

draggables.forEach(item => {
    // dragstart event: start dragging
    item.addEventListener('dragstart', (e) => {
        currentDraggedElement = item;
        e.dataTransfer.setData('text/plain', item.id);
        item.classList.add('dragging');
    });

    // dragend event: end dragging
    item.addEventListener('dragend', () => {
        item.classList.remove('dragging');
        currentDraggedElement = null;
    });
});

// dragover event on the target container
targetContainer.addEventListener('dragover', (e) => {
    e.preventDefault();
    targetContainer.classList.add('drag-over');
});

// drop event on the target container
targetContainer.addEventListener('drop', (e) => {
    e.preventDefault();
    targetContainer.classList.remove('drag-over');

    // Remove helper text if present
    const helperText = targetContainer.querySelector('p.text-muted');
    if (helperText) {
        helperText.remove();
    }

    // Move the element to the target container
    if (currentDraggedElement) {
        targetContainer.appendChild(currentDraggedElement);
    }
});

// dragleave event on the target container
targetContainer.addEventListener('dragleave', (e) => {
    // Check if the pointer has completely left the target container
    if (!e.relatedTarget || !targetContainer.contains(e.relatedTarget)) {
        if (currentDraggedElement && targetContainer.contains(currentDraggedElement)) {
            // Return the element to the source container
            sourceContainer.querySelector('ul').appendChild(currentDraggedElement);
            targetContainer.classList.remove('drag-over');

            // Restore the helper text if the target container is empty
            if (!targetContainer.querySelector('.draggable')) {
                const helperText = document.createElement('p');
                helperText.className = 'text-muted';
                helperText.textContent = 'Drag elements here';
                targetContainer.appendChild(helperText);
            }
        }
    }
});

// dragover event on the source container (to return elements)
sourceContainer.addEventListener('dragover', (e) => {
    e.preventDefault();
});