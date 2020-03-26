import Record from './models/record';

if (!window.jQuery) {
    console.error('Geoip-detect: window.jQuery is missing!');
}
const $ = window.jQuery;


if (!window.geoip_detect) {
    console.error('Geoip-detect: window.geoip_detect')
}
const options = window.geoip_detect.options || {};

let ajaxPromise = null;

function get_info_raw() {
    if (!ajaxPromise) {
        // Do Ajax Request only once per page load
        ajaxPromise = $.ajax(options.ajaxurl, {
            dataType: 'json',
            type: 'GET',
            data: {
                action: 'geoip_detect2_get_info_from_current_ip'
            }
        });
    }

    return ajaxPromise;
}

async function get_info_cached() {
    // TODO : Load Info from cookie cache, if possible

    let response = false;
    try {
        response = await get_info_raw();
    } catch(err) {
        response = err.responseJSON || err;
    }
    // TODO : Save info to cookie cache

    return response;
}


export async function get_info() {
    let response = await get_info_cached();

    if (typeof(response) !== 'object') {
        console.error('Geoip-detect: Record should be an object', response);
        response = { 'extra': { 'error': response || 'Network error, look at the original server response ...' }};
    }

    const record = new Record(response, options.default_locales);
    return record;
}

async function add_body_classes() {
    const record = await get_info();

    if (record.error()) {
        console.error('Geodata Error (could not add CSS-classes to body): ' + record.error());
    }

    const css_classes = {
        country:   record.get('country.iso_code'),
        'country-is-in-european-union': record.get('country.is_in_european_union'),
        continent: record.get('continent.code'),
        province:  record.get('most_specific_subdivision.iso_code'),
    };

    for(let key of Object.keys(css_classes)) {
        const value = css_classes[key];
        if (value) {
            if (typeof(value) == 'string') {
                $('body').addClass(`geoip-${key}-${value}`);
            } else {
                $('body').addClass(`geoip-${key}`);
            }
        }
    }
}
if (options.do_body_classes) {
    add_body_classes();
}

// Extend window object 
window.geoip_detect.get_info = get_info;