require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var el_header = document.querySelector('header.sticky'),
    el_quickjump = document.querySelector('.quick-jump'),
    el_details = document.querySelectorAll('details')
    ;

/**
 * Custom scroll into view
 *
 * @param  string  key
 */
window.scrollAndAccountForHeader = (key) => {
    // Values used by this function
    let element = document.querySelector('.' + key),
        offset = (el_header.offsetHeight + 45)
        ;

    // Close all open details
    // @todo Enabling; see if this is desired behavior from users
    el_details.forEach(details => {
        details.open = false;
    });

    // Open the element's parent details
    element.closest('details').open = true;

    // Modified scroll into view with the correct offset
    window.scroll({
        behavior: 'smooth',
        top: (element.offsetTop - offset),
    });

    // Focus on the chosen field (first if multiple)
    // @todo Disabling; see if this is desired behavior from users
    // let field_input = element.querySelectorAll('input, textarea');
    // if(field_input.length > 0)
    // {
    //     field_input[0].focus();
    // }
};

/**
 * Search field focus using keyboard.
 */
document.onkeydown = (event) => {
    if(event.key === 'Escape' || event.key === 'Esc')
    {
        el_quickjump.focus();
    }
};
