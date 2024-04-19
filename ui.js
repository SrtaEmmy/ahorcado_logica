let aciertos = 0;
let errores = 0;
let spans = document.querySelectorAll('#espacios span');
let botones = document.querySelectorAll('#teclado button');
let foto = document.getElementById('foto');
foto.src = `img/image${errores}.jpg`;

botones.forEach(boton => {
    boton.addEventListener('click', (e)=>{
       e.target.disabled = true;

    });
});


const send_letra = (letra, palabra_aleatoria) => { 
    
    let letraEncontrada = false;

    for (let i = 0; i < palabra_aleatoria.length; i++) {

        if (letra.toUpperCase() == palabra_aleatoria[i].toUpperCase()) {
            aciertos++;
            letraEncontrada = true;

            spans[i].textContent = letra.toUpperCase();            
            
            if (aciertos == palabra_aleatoria.length) {
                setTimeout(() => {
                    game_over();
                }, 1000);
            }
        }
    }

    if (!letraEncontrada) {
        errores++;
        foto.src = `img/image${errores}.jpg`;
        if (errores==6) {
            setTimeout(() => {
                game_over();
            }, 1000);
        }
    }
};



const game_over =()=>{
    alert("el juego ha terminado");

    botones.forEach(boton => {
        boton.disabled = true;
    });

}



