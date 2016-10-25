$( document ).ready(function() {

    // Left sidebar (informational sidebar)
    $(".button-collapse").sideNav();

    // Rigth sidebar (registration sidebar)
    $('.button-collapse-register').sideNav({
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });

    // Animations initialization
    new WOW().init();

    // Countdown timer for RowdyHacks
    var end = Date.parse('Fri Apr 7 05:00:00 +0000 2017')/1000;
    var seconds = new Date().getTime() / 1000;

    $(document).ready(function() {
        $('.countdown').final_countdown({
            'start': 1362139200,
            'end': end,
            'now': seconds,
            seconds: {
                borderColor: '',
                borderWidth: '6'
            },
            minutes: {
                borderColor: '',
                borderWidth: '6'
            },
            hours: {
                borderColor: '',
                borderWidth: '6'
            },
            days: {
                borderColor: '',
                borderWidth: '6'
            },
            }, function() {
                    // Finish Callback
                });
    });
});
