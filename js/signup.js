function validateform() {
    let prenom= document.forms['signup']['prenom'].value;
    let nom= document.forms['signup']['nom'].value;
    let adresse= document.forms['signup']['adresse'].value;
    let tel= document.forms['signup']['tel'].value;
    let email= document.forms['signup']['email'].value;
    let username= document.forms['signup']['username'].value;
    let password1= document.forms['signup']['password1'].value;
    let password2= document.forms['signup']['password2'].value;

    if (prenom=="") {
        alert("Please enter firstname");
        return false;
    }
    if (nom=="") {
        alert("Please enter your lastname");
        return false;
    }
    if (adresse=="") {
        alert("Please enter your adresse");
        return false;
    }
    if (tel=="") {
        alert("Please enter your phone number");
        return false;
    }
    if (email=="") {
        alert("Please enter your email");
        return false;
    }
    if (!email.includes("@")) {
        alert("email not valid");
        return false;
    }
    if (username==="") {
        alert("Please enter a username");
        return false;
    } 
    if (password1=="") {
        alert("Please enter your password");
        return false;
    }
    if (password2==="") {
        alert("Please enter your password");
        return false;
    }
    return true;
}
