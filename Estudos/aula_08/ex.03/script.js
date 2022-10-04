function verificar(){
    var ini=document.getElementById('sta')
    var fim=document.getElementById('end')
    var pas=document.getElementById('pas')
    var form=document.getElementById('form')

    //Verificar se o maior valor é o de início ou o final
    if(ini.value>fim.value){
        var maior=ini.value
    }else{
        var maior=fim.value
    }
    
    if(ini.value.length==0||fim.value.length==0){
        //Fim ou início não informados
        alert('[ERRO] Início e/ou fim não informados.')
    }else if(ini.value==fim.value){
        //Início igual ao fim
        alert('[ERRO] O início e o fim devem ter valores diferentes.')
    }else if(pas.value<=0){
        //Passo inválido (<=0)
        alert('[ERRO] Informe um passo válido (maior do que 0).')
    }else if(pas.value>=maior.value){
        //Passo maior/igual ao maior valor
        if(ini.value>fim.value){
            alert('[ERRO] O passo não pode ser maior/igual ao valor de início.')
        }else{
            alert('[ERRO] O Passo não pode ser maior/igual ao valor final.')
        }
    }else{
        form.setAttribute('action','data.php')
    }
}