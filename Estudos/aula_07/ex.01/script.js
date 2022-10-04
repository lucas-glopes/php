function alerta(){
    document.getElementById('num')
    var ope=document.getElementsByName('ope')
    var form=document.getElementById('form')
    if(num.value.length==0){
        alert('[ERRO] Digite um número na caixa abaixo.')
    }else if(ope[0].checked||ope[1].checked||ope[2].checked){
        form.setAttribute('action','data.php')
    }else{
        alert('[ERRO] Marque uma das operações abaixo.')
    }
}