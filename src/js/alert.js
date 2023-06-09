(() => {
    const $alerta = document.querySelector('.alerta')
    setInterval(() => {
        $alerta.classList.add('is-active');
    }, 3500);
    console.log($alerta)
}
)()

let ModalDtos = () => {
    const $icon_close = document.querySelector('.icon-close'),
        $contenedor = document.querySelector('.contenedor-datos')
        console.log($icon_close)
        console.log($contenedor)
    document.addEventListener('DOMContentLoaded', () => {
        document.addEventListener('click', (e) => {
            if (e.target.matches('.icon-close svg ')) {
                console.log(e.target)
                $contenedor.classList.remove('active-datos')
            }
            else if (e.target.matches('.icon-help svg ')) {
                console.log(e.target)
                $contenedor.classList.add('active-datos')
            }
        })
    })
}

ModalDtos()
