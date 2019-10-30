$('#modalPsychicBtn').click(function() {
    $("#modalPsychic").style.display = "block";
});


window.onclick = function(event) {
    if (event.target == $("modalPyschic")) {
        $("#modalPyschic").css("display", "block")
    }
}
