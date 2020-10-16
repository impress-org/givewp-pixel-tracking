const { fbq } = window.parent ? window.parent : window;
const { giveFBPT } = window;

if (typeof fbq !== "undefined") { 
    fbq('track', 'Donate' );
    fbq('track', 'Purchase', {currency: giveFBPT.currency, value: giveFBPT.amount}),
}