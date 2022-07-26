var img = document.getElementById('imagem');



function imgUM() {
    img.style = `background-image: url('img/img1.jpg')`;
    

}
function imgDois() {
    img.style = `background-image: url('img/img2.jpg')`;

}
function imgTres() {

    img.style = `background-image: url('img/img3.jpg')`;

}
function trocarImg() {
    setInterval(imgDois, 5000); 
    
    setInterval(imgTres, 10000);

    setInterval(imgUM, 15000);   
}
/*function marcarH(){
   
   document.getElementById('marcarHorario').style='visibility:visible;'
   document.getElementById('body').style='overflow:hidden;'
}
function fecharH(){
   
    document.getElementById('marcarHorario').style='visibility:hidden;'
    document.getElementById('body').style='overflow:unset;'
}*/