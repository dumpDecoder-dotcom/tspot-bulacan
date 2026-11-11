

function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("close");
}


function checkSidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');

    if (window.innerWidth <= 736) {
        sidebar.classList.add('close');
        toggleBtn.disabled = true;
    }
    else {
        sidebar.classList.remove('close');
        toggleBtn.disabled = false;
    }
}

window.addEventListener('resize', checkSidebar);
window.addEventListener('load', checkSidebar);