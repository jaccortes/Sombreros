async function consultarApi() {
    let urlApiLocal = './data.json';
    try {
        let responseText = await fetch(urlApiLocal, { method: 'GET' });
        // console.log(responseText);
        let responseJson = await responseText.json();
        //console.log(responseJson);
        pintarInfo(responseJson);
        return responseJson.servicios;
    } catch (error) {
        console.log(error)
    }
}
consultarApi();
const pintarInfo = info => {
    servicio0 = document.getElementById('servicio1');
    servicio1 = document.getElementById('servicio2');
    servicio2 = document.getElementById('servicio3');
    imgsrv0 = document.getElementById('imagenservicio1');
    imgsrv1 = document.getElementById('imagenservicio2');
    imgsrv2 = document.getElementById('imagenservicio3');
    imgsrv0.src = info.servicios[0].imagen;
    servicio0.children[0].innerText = info.servicios[0].titulo;
    servicio0.children[1].innerText = info.servicios[0].descripcion;
    imgsrv1.src = info.servicios[1].imagen;
    servicio1.children[0].innerText = info.servicios[1].titulo;
    servicio1.children[1].innerText = info.servicios[1].descripcion;
    imgsrv2.src = info.servicios[2].imagen;
    servicio2.children[0].innerText = info.servicios[2].titulo;
    servicio2.children[1].innerText = info.servicios[2].descripcion;
    imgsrv3 = document.getElementById('noticiarribaderecha');
    imgsrv3.src = info.servicios[3].imagen;
    imgsrv4 = document.getElementById('noticiarribaizquierda');
    imgsrv4.src = info.servicios[4].imagen;
    imgsrv5 = document.getElementById('noticiabajoderecha');
    imgsrv5.src = info.servicios[5].imagen;
    imgsrv6 = document.getElementById('imagennoticiaizq2');
    imgsrv6.src = info.servicios[6].imagen;
}