function validateform() {
    let size = document.forms['product']['size'].value;
    let quantity = document.forms['product']['quantite'].value;

    if (size=="") {
        alert("Please enter size");
        return false;
    }
    if (quantity=="") {
        alert("Please enter your Quantite");
        return false;
    }

    return true;
}
