
function showSection(sectionId) {
    document.querySelectorAll('.container-prime').forEach(function(section) {
        section.classList.add('hidden');
    });
    document.getElementById(sectionId).classList.remove('hidden');
    initSwipers(sectionId);
}

document.addEventListener('DOMContentLoaded', function() {
    var targetSection = localStorage.getItem('targetSection');
    if (targetSection) {
        showSection(targetSection);
        localStorage.removeItem('targetSection');
    }
});