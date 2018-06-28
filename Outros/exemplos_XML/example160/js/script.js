$(function(){

    $('#month').autocomplete(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], {
        width: 200,
        max: 3
    });

    $('#year').autocomplete('data.php?mode=xml', {
        width: 200,
        max: 5
    });

    $('#country').autocomplete('data.php?mode=sql', {
        width: 200,
        max: 5
    });

});