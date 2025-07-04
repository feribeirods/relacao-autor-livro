document.querySelectorAll('.fechar-alert').forEach(button => {
    button.addEventListener("click", (e) => {
        e.target.closest('.alert').style.display = 'none';
    });
});

document.querySelector(`#${new URLSearchParams(window.location.search).get('controller')}`).classList.add('btn-ativo');
