document.getElementById('lunchTab').addEventListener('click', function() {
    console.log('lunch');
    document.getElementById('zoet').classList.remove('visible');
    document.getElementById('zoet').classList.add('hidden');
    document.getElementById('lunch').classList.add('visible');
    document.getElementById('lunch').classList.remove('hidden');
});

document.getElementById('zoetTab').addEventListener('click', function() {
    console.log('zoet');
    document.getElementById('lunch').classList.remove('visible');
    document.getElementById('lunch').classList.add('hidden');
    document.getElementById('zoet').classList.add('visible');
    document.getElementById('zoet').classList.remove('hidden');
});