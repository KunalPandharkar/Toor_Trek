
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


ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
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

// toggle text see more see less
const btn = document.getElementById("seemorelessbtn");
btn.addEventListener("click", () => {
    if (btn.innerText === "See More") {
        btn.innerText = "See Less";
    } else {
        btn.innerText = "See More";
    }
});

