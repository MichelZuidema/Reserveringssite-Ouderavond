//contact form

function validate(){
    var voornaam = $("#voornaam");
    var achternaam = $("input[name='achternaam']");
    var email = $("input[name='email']");
    var telefoon = $("input[name='telefoon']");
    var kind = $("input[name='kind']");
    var text = $("contact form textarea");

    if(voornaam.value !== "" || achternaam.value !== "" || email.value !== "" || kind.value !== "" || text.value !== ""){
        alert("FOUT");
    }else{
        alert("good")
    }
}

