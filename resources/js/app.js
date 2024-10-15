import './bootstrap';

//loading 
let loading = document.getElementById('loading');
let app = document.getElementById('app');
if (loading) {
    app.style.display = 'none';
    window.addEventListener('load', function () {
        loading.style.display = 'none';
        app.style.display = 'block';
    });
}