const { fbq } = window.parent ?? window;
const { giveFBPT } = window;

if (typeof fbq === "function" && giveFBPT.status === 'publish') { 
    fbq('track', 'Donate' );
    fbq('track', 'Purchase', {currency: giveFBPT.currency, value: giveFBPT.amount});
    giveFBPT.isNewRegistration && fbq('track', 'CompleteRegistration');
}