window.addEventListener('load', init)

function init() {
    let items = '';

    for ( let i=1; i<100; i++)  {
        items += `<div class="item">
                    <img class="item-image" src="http://lorempixel.com/320/180/technics/#${i}" alt="Item ${i}">
                    <div class="item-title">Item number ${i}</div>
                    <div class="item-category">Category of item ${i}</div>
                    <div class="item-price">${i}500.00RSD</div>
                    </div>`
    }

    document.getElementById('items').innerHTML = items;
}