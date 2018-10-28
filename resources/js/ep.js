if (window.page == 'ep') {

    const fullpage = require('fullpage.js');
    
    $(document).ready(function() {
        
        window.fp = new fullpage('#fullpage', {
            navigation: false,
            verticalCentered: true,
            // keyboardScrolling: false,
            normalScrollElements: '#about .descholder',
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',

            afterLoad: (origin, destination) => {
                // Activate the chackmark in the successpage
                if(destination.index == 3){
                    $(window).on('load', function() {
                        // will only fire AFTER all pages assets have loaded
                        $('#success .check_mark').removeClass('hide');
                    })
                }
            }

        });
        
        fp.setMouseWheelScrolling(false);
        fp.setAllowScrolling(false);
        fp.setRecordHistory(true);

        if (typeof error !== 'undefined' ) fp.silentMoveTo(3);
        
        if (typeof postsuccess !== 'undefined') fp.silentMoveTo(4);

    });

    $('#econprodigy .next').on('click', () => {
        fp.moveSectionDown();
    })

    $('#econprodigy .register').on('click', () => {
        fp.moveTo(3);
    })

}