var jsLibrary = function () {
    // this.xmlhttp = new XMLHttpRequest();
};

jsLibrary.constructor = jsLibrary;

// change classname of domelement by id
jsLibrary.prototype.changeClassName = function (elemID, newclassName) {
    document.getElementById(elemID).className = newclassName;
}

// get datasets from dom element
jsLibrary.prototype.getDatasetsByelemID = function(elemID, dataset) {
    return document.getElementById(elemID).getAttribute(dataset);
}

// inject new dom element
jsLibrary.prototype.injectNewDomElem = function(newElem) {
    const newDomElem = document.createElement(newElem);
    newDomElem.innerHTML = "I am injected by Javascript";
    document.body.appendChild(newDomElem);
}

// ajax and get request | or can be done by XHR
jsLibrary.prototype.ajaxAndGetRequest = function (url) {
    fetch(url, {
        method: 'get'
    })
    .then(response => response.json())
    .then(jsonData => console.log(jsonData))
    .catch( err => {
        console.log(err)
    })
}

// get set value from input, checkbox, select
jsLibrary.prototype.getSetValInputType = function( elemID, inputType, getORset, value = null ) {
    
    switch (inputType) {
        case "input":
        case "dropdown":
            if( getORset == "set" ){
                document.getElementById(elemID).value = value;
            }else{
                return document.getElementById(elemID).value;
            }
        break;

        case "checkbox":
            if( getORset == "set" ){
                document.getElementById(elemID).checked = true;
            }else{
                return document.getElementById(elemID).checked;
            }
        break;

        default:
            return;
        break;
    }
    
}

// Question 2 
// 3 post request which resolved all at the same time
jsLibrary.prototype.threePostRequestResolveSameTime = function() {

   const fetch1 = fetch('https://dummyjson.com/products/add', {
        method: 'POST',
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({title: 'BMW Pencil 1'})
      }).then(response => response.json())

    const fetch2 = fetch('https://dummyjson.com/products/add', {
         method: 'POST',
         headers: {
           Accept: 'application/json',
           'Content-Type': 'application/json',
         },
         body: JSON.stringify({title: 'BMW Pencil 2'})
       }).then(response => response.json());

    const fetch3 = fetch('https://dummyjson.com/products/add', {
         method: 'POST',
         headers: {
           Accept: 'application/json',
           'Content-Type': 'application/json',
         },
         body: JSON.stringify({title: 'BMW Pencil 3'})
       }).then(response => response.json())

    const allData = Promise.all([fetch1, fetch2, fetch3]);
    
    allData.then((res) => console.log(res));
}

var JSL = new jsLibrary();


