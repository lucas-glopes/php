function options(){
    var sel=document.getElementById('tab')
    for(c=1;c<=10;c++){
        let opt=document.createElement('option')
        opt.setAttribute('value',c)
        opt.innerText=c
        sel.appendChild(opt)
    }
}