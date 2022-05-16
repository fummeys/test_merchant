const getvalue = ()=>{
    let item = document.getElementById('my-input').value
    document.getElementById('para').innerText = document.getElementById('para').innerText + item
    // console.log(item)
}

const checkInput = (lpo)=>{
    console.log(lpo)
    if(lpo !== null && lpo.length > 5){
        document.getElementById('submit').removeAttribute('disabled')
    }
}