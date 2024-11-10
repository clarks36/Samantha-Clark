function get(element) {
    return document.getElementById(element);
}

function openModal() {
    var modal = get('modal-dialog');
    var backdrop = get('modal-backdrop');

    modal.classList.add('visible');
    backdrop.classList.add('visible');
}

function closeModal() {
    var title = get('edit-title-text');
    var text = get('edit-content-text');
    var modal = get('modal-dialog');
    var backdrop = get('modal-backdrop');

    title.value = '';
    text.value = '';

    modal.classList.remove('visible');
    backdrop.classList.remove('visible');
}

function saveContent() {
    var title = get('edit-title-text');
    var text = get('edit-content-text');
    var content = get('display-content');

    // Create new elements for title and content
    var newTitle = document.createElement('h2');
    var newTitleText = document.createTextNode(title.value);
    var newContent = document.createElement('p');
    var newContentText = document.createTextNode(text.value);

    // Append text nodes to respective elements
    newTitle.appendChild(newTitleText); // Append newTitleText to newTitle
    newContent.appendChild(newContentText); // Append newContentText to newContent

    // Append the new elements to the content section
    content.appendChild(newTitle);
    content.appendChild(newContent);

    // Close the modal after saving content
    closeModal();
}

// Event listener for window load
window.addEventListener('load', function() {
    var newButton = get('new-button');
    var cancelButton = get('cancel-button');
    var saveButton = get('save-button');

    // Attach event listeners to the buttons
    newButton.addEventListener('click', openModal);
    cancelButton.addEventListener('click', closeModal); // Fixed parentheses here
    saveButton.addEventListener('click', saveContent);
});
