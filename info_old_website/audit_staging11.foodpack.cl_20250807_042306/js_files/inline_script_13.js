/* Script inline #13 */

jQuery(document).ready(function(){
    jQuery('.extra-menu-overlay').click(function(e){
             jQuery('.button-show-menu').removeClass('open');
             jQuery('.extra-menu').removeClass('open');
     });
    jQuery('.button-show-menu').click(function () {
        if(jQuery(this).hasClass('open')) {
            jQuery(this).removeClass('open');
            jQuery('.extra-menu').removeClass('open');
        } else {
            jQuery(this).addClass('open');
            jQuery('.extra-menu').addClass('open');
        }
    });
});
