window.onload = function(){
    document.querySelector("#btn").addEventListener("click", btn_click);
}

function btn_click() {
    // document.querySelector("#box-text").innerHTML = 'Texto alterado pelo main.js';
    let pedido = new XMLHttpRequest();

    pedido.onreadystatechange = function(){
        if(pedido.readyState == 4 && pedido.status == 200){
            document.querySelector("#caixa").innerHTML = this.responseText;
           
        } else {
            document.querySelector("#caixa").innerHTML = 'Tente outra vez';

        }
    }

    pedido.open("GET", "database.php", true);
    pedido.send();
}

