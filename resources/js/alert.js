// CommonJS
const Swal = require('sweetalert2')

setTimeout(() => {
    Swal.fire({
        title: 'Custom width, padding, color, background.',
        width: 600,
        showCloseButton: true,
        padding: '3em',
        color: '#ffffff',
        background: 'url("/storage/artikel-photos/justin.jpg") ',
        backdrop: `
            #0a0a0a3a
            left top
            no-repeat
        `
    })
   }, 5000);
