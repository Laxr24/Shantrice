import DOM from './domEl.js'





// Data AOS Library
AOS.init();

// Preloading Assets
var queue = new createjs.LoadQueue(true);
queue.loadFile("admin/assets/shaan.jpg");
queue.load()

queue.on("complete", ()=>{
    DOM.AppBody.style.visibility = "visible"
    console.log('File loading Completed')
}, this);

