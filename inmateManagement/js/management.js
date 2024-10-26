//holds the 
const addInmate = document.getElementById('addinmate');
const demographics = document.getElementById('demographics');
const transfers = document.getElementById('transfers');
const viewinmate = document.getElementById('viewinmate');
const request = document.getElementById('request');

// Gets the button IDs
const addButton = document.getElementById('addButton');
const demoButton = document.getElementById('demoButton');
const transButton = document.getElementById('transButton');
const viewButton = document.getElementById('viewButton');
const reqButton = document.getElementById('reqButton');


const mchart = document.getElementById('maleChart');
const fchart = document.getElementById('femaleChart');  

addInmate.style.display = 'inherit';
demographics.style.display = 'none';
transfers.style.display = 'none';
viewinmate.style.display = 'none';
request.style.display = 'none';

//event listeners
addButton.addEventListener('click', () => {
    addInmate.style.display = 'inherit';
    demographics.style.display = 'none';
    transfers.style.display = 'none';
    viewinmate.style.display = 'none';
    request.style.display = 'none';
});

demoButton.addEventListener('click', () => {
    addInmate.style.display = 'none';
    demographics.style.display = 'inherit';
    transfers.style.display = 'none';
    viewinmate.style.display = 'none';
    request.style.display = 'none';
});

transButton.addEventListener('click', () => {
    addInmate.style.display = 'none';
    demographics.style.display = 'none';
    transfers.style.display = 'inherit';
    viewinmate.style.display = 'none';
    request.style.display = 'none';
});

viewButton.addEventListener('click', () => {
    addInmate.style.display = 'none';
    demographics.style.display = 'none';
    transfers.style.display = 'none';
    viewinmate.style.display = 'inherit';
    request.style.display = 'none';
});

reqButton.addEventListener('click', () => {
    addInmate.style.display = 'none';
    demographics.style.display = 'none';
    transfers.style.display = 'none';
    viewinmate.style.display = 'none';
    request.style.display = 'inherit';
});




