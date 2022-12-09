const dog = document.querySelector('.dog');
const pipe = document.querySelector('.pipe');
const clouds = document.querySelector('.clouds');

const jump = () =>{
    dog.classList.add('jump');


    setTimeout(() => {   
        dog.classList.remove('jump');
    }, 500);
}

const loop = setInterval(() => {

    console.log('loop')

    const pipePosition = pipe.offsetLeft;
    const dogPosition = +window.getComputedStyle(dog).bottom.replace('px', '');

    if (pipePosition <= 120 && pipePosition > 0 && dogPosition < 80){
        pipe.style.animation = 'none';
        pipe.style.left = `${pipePosition}px`;

        dog.style.animation = 'none';
        dog.style.bottom = `${dogPosition}px`;

        clouds.style.animation = 'none';

        dog.src='./Imagens/dogDead.png';
        dog.style.width = '150px'
        dog.style.marginLeft = '0px'

        clearInterval()
    }
}, 10);

document.addEventListener('keydown', jump);