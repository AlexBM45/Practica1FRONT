let usuario = {
    'nombre': '',
    'apellido': '',
    'correo': ''
}

let pago = {
    'cantidad': 0,
    'tipo': '',
    'total': 0
}


function onClick(){
    usuario.nombre = document.getElementById('nombre')
    usuario.apellido = document.getElementById('apellido')
    usuario.correo = document.getElementById('email')

    pago.cantidad = document.getElementById('cantidad')
    pago.tipo = document.getElementById('categoria')
    
    switch (pago.tipo.value) {
        case 'estudiante':
            pago.total = 200*0.2*pago.cantidad.value
            break
        case 'trainee':
            pago.total = 200*0.5*pago.cantidad.value
            break
        case 'junior':
            pago.total = 200*0.85*pago.cantidad.value
            break
    }

    let pagoFinal = document.getElementById('total')
    pagoFinal.textContent = `$ ${pago.total}`
}


