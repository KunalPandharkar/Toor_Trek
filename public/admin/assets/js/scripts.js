
window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});



$(function () {
    let preloaded = [
        { id: 1, src: 'assets/images/category1.png' },
        { id: 2, src: 'assets/images/category1.png' },
        { id: 3, src: 'assets/images/category1.png' },
        { id: 4, src: 'assets/images/category1.png' },
        { id: 5, src: 'assets/images/category1.png' },
        { id: 6, src: 'assets/images/category1.png' }
    ];
    $('.input-images-1').imageUploader();
    $('.input-images-2').imageUploader(
        {
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        }
    );
});

