function errorAlert() {
    Swal.fire({
    html: message,
    position: 'top-end',
    icon: 'error',
    title: 'Incomplete fields',
    showConfirmButton: false,
    // timer: 1500,
    width: '300px'
    });
    return;
}
