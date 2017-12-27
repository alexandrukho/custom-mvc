$(document).ready(function () {
    $(".open-side-slide").sideNav({
        menuWidth: 330,
        edge: 'right'
    });
    $(".dropdown-button").dropdown();
    $('#modal1, #modalCreateUser').modal({
        startingTop: '50%', // Starting top style attribute
        endingTop: '20%', // Ending top style attribute
    });
    $('#post-content-area').trigger('autoresize');
});