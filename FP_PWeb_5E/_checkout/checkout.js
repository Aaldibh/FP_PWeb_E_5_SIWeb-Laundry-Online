document.addEventListener('DOMContentLoaded', function () {
    const checkoutContent = document.getElementById('checkoutContent');
    const dashboardContent = document.getElementById('dashboardContent');

    document.getElementById('cuciBasah').addEventListener('click', function () {
        dashboardContent.style.display = 'none';
        checkoutContent.style.display = 'block';
    });

    document.getElementById('cuciKering').addEventListener('click', function () {
        dashboardContent.style.display = 'none';
        checkoutContent.style.display = 'block';
    });

    document.getElementById('cuciSetrika').addEventListener('click', function () {
        dashboardContent.style.display = 'none';
        checkoutContent.style.display = 'block';
    });

    document.getElementById('dashboardLink').addEventListener('click', function () {
        checkoutContent.style.display = 'none';
        dashboardContent.style.display = 'block';
    });
});