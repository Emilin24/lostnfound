function submitForm(event, formName) {
    event.preventDefault();
    alert(formName + " submitted successfully!");
    event.target.reset();
}
