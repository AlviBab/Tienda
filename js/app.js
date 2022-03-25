addEventListener('DOMContentLoaded',()=>{
    const btnAbrir = document.getElementById('btnAbrir');
    if (btnAbrir) {
        btnAbrir.addEventListener('click',()=>{
            const navPricipal = document.querySelector(".navegacion-principal");
            navPricipal.classList.toggle('abrir')
        })
    }
})
