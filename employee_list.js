function enterEditMode() {
    // Set a flag to indicate edit mode
    localStorage.setItem('editMode', 'true');
    // Reload the page to reflect edit mode
    location.reload();
}

// Check if edit mode is enabled
if (localStorage.getItem('editMode') === 'true') {
    // Code to enable edit mode
    // For example, show input fields for editing
}
