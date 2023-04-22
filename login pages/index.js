const KEY = "9WHoUAZyMi3HyFEjJQqaLrINKFcqKCBr4vDk27gcmgk";
let p = fetch("https://api.unsplash.com/photos/?&client_id="+KEY);
p.then((response)=>{
    console.log(response.status);
    return response.json();
})
.then((response)=>{
    console.log(response);
    const imgContainer = document.getElementById("API");
    const randomIndex = Math.floor(Math.random() * response.length);
    const img = document.createElement('img');
    img.src = response[randomIndex].urls.small;
    imgContainer.appendChild(img); 
})

