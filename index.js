setTimeout(()=>{
    // let myform = document.getElementsByClassName('form')
    let myform = document.getElementById('form')
    myform.style.backgroundColor = 'blue'
    // console.log(myform)
},3000)

const reload = ()=>{
    // window.location.href = '/'
    console.log('working')
}

setInterval(reload, 10000)
