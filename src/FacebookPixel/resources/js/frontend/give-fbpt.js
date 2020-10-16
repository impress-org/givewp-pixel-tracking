const { fbq } = window.parent ? window.parent : window;
const { giveFBPT } = window;

if (typeof fbq !== "undefined") { 
    console.log('fbq event!!', giveFBPT);
    fbq('track', 'Donate' );
    fbq('track', 'Purchase', {currency: giveFBPT.currency, value: giveFBPT.amount});
}