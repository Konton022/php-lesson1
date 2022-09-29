async function handleButton(event){
    if( event.target.className === 'del-btn'){
        console.log(event);
        const url = event.target.baseURI+'index.php';
        const data = {btn_id: event.target.name};
        console.log(url, data);
        console.log(JSON.stringify(data));
        let res = await fetch(url+'?btn_id='+event.target.name);
        //let json = await res.json();
        console.log('json: ', res);

    }
}

let table = document.querySelector(".table");
table.addEventListener('click', handleButton);