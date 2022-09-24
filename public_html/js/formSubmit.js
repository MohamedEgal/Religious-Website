/*FORM SUBMISSION JS*/

/*When the user clicks the button*/
function submitForm() {

    /*Gets the field inputs and makes them into variables*/
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var message = document.getElementById("message");

    /*Variable to see wether the email has an @ and that it has a top-level domain after a username "gmail, outlook, etc."*/
    var regexEmail= /^[^\s@]+@[^\s@]+\.[^\s@]+$/

    /*Changes the elements that covers around the input fields*/
    var nameError = document.getElementById("name-error");
    var emailError = document.getElementById("email-error")
    var subjectError = document.getElementById("subject-error")
    var messageError = document.getElementById("message-error")


        /*Checks if the name value is 0 or has any numbers or any numbers.*/
        if (name.value == 0 || /\d/.test(name.value)) {
            name.style.border = "3px solid #FF0000";
            nameError.innerHTML = 'Name is required';
            nameError.style.color = "red";
            nameError.style.display = "block";}

        /*Reverts the name field back to normal if the invalid character has been corrected.*/
        else {
            name.style.border = "";
            nameError.style.display = "none";
        }

        /*Checks if the email value is 0 or doesn't have an @ and a top-level domain after a username "gmail, outlook, etc..*/
        if (email.value == 0 || !email.value.match(regexEmail)) {
            email.style.border = "3px solid #FF0000";
            emailError.innerHTML = 'An email is required';
            emailError.style.color = "red";
            emailError.style.display = "block";
            isValid = false;
        }

        /*Reverts the email field back to normal if the invalid character has been corrected.*/
        else {
            email.style.border = "";
            emailError.style.display = "none";
        }

         /*Checks if the subject value is 0*/
        if (subject.value == 0 ) {
            subject.style.border = "3px solid #FF0000";
            subjectError.innerHTML = 'A subject is required';
            subjectError.style.color = "red";
            subjectError.style.display = "block";
            isValid = false;
        }
        /*Reverts the subject field back to normal if the invalid character has been corrected.*/
        else {
            subject.style.border = "";
            subjectError.style.display = "none";
        }

         /*Checks if the message value is 0*/
        if (message.value == 0) {
            message.style.border = "3px solid #FF0000";
            messageError.innerHTML = 'A message is required';
            messageError.style.color = "red";
            messageError.style.display = "block";
            isValid = false;
        }

        /*Reverts the message field back to normal if the invalid character has been corrected.*/
        else {
            message.style.border = "";
            messageError.style.display = "none";
        }

     /*If all fields doesn't equal 0, there's no numbers in the name field and email field matches with the email format we want, then it asks the user
     if they want to send the message, and alerts them that it's sent if they do*/
     if (name.value!=0 && !/\d/.test(name.value) && email.value!=0 && subject.value!=0 && message.value!=0 && email.value.match(regexEmail)){
        if (confirm("Do you want to send this message?") == true){ 
        alert("Your message has been sent!")}   
    }
}
/*END OF FORM JS*/