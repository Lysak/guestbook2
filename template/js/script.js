$(document).ready(function() {
    $("#submit").click(function() {
        var min_chars_message = 50; // n character
        if( $('#minmessage').val().length < min_chars_message ) {
            alert('Required amount message chars > ' + min_chars_message);
            return false;
        }
    })

        $("#edit-submit").click(function() {
        var min_chars_message = 50; // n character
        if( $('#edit-minmessage').val().length < min_chars_message ) {
            alert('Required amount message chars > ' + min_chars_message);
            return false;
        }
    })
});