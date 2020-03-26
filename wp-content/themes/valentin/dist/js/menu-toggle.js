var menuToggle = document.getElementById('menu-toggle');
var menuVisib = document.getElementsByClassName('nav-bar');
var showCheck = false;
var timeout;

function hasClass(elem, className) {
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

function toggleClass(elem, className) {
    var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0) {
            newClass = newClass.replace(" " + className + " ", " ");
            for (var i = 0; i < menuVisib.length; i++) {
                menuVisib[i].style.display = 'none';
            }
            showCheck = false;
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
        for (var i = 0; i < menuVisib.length; i++) {
            menuVisib[i].style.display = 'flex';
        }
        showCheck = true;
    }
}

menuToggle.onclick = function() {
    toggleClass(this, 'clicked')
    return false;
}

// Define our viewportWidth variable
var viewportWidth;

// Set/update the viewportWidth value
var setViewportWidth = function() {
    viewportWidth = window.innerWidth || document.documentElement.clientWidth;
}

// Trigger actions on width change
var logWidth = function() {
    if (viewportWidth > 991) {
        for (var i = 0; i < menuVisib.length; i++) {
            menuVisib[i].style.display = 'flex';
        }
    } else if (showCheck == true) {
        for (var i = 0; i < menuVisib.length; i++) {
            menuVisib[i].style.display = 'flex';
        }
    } else {
        for (var i = 0; i < menuVisib.length; i++) {
            menuVisib[i].style.display = 'none';
        }
    }
}

// Set our initial width and log it
setViewportWidth();
logWidth();

// On resize events, recalculate and log
window.addEventListener('resize', function() {
    if (!timeout) {
        timeout = setTimeout(function() {

            // Reset timeout
            timeout = null;

            // Run our resize functions
            setViewportWidth();
            logWidth();

        }, 66);
    }
}, false);