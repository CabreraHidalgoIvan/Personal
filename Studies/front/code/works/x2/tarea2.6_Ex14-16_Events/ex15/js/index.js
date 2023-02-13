window.addEventListener(`DOMContentLoaded`, () => {

  infoWindow();                                        // Print the basic template into the window

  window.addEventListener(`mousemove`, (e) => {

    const divInfoMouse = document.querySelectorAll(`[id*=inforM]`);
    divInfoMouse.forEach((div) => {
      div.style.backgroundColor = "blue";
    });
    info([e.screenX, e.screenY, e.pageX, e.pageY, null, null]);
    
  });

  window.addEventListener(`keydown`, (e) => {
    
    const divInfoKey = document.querySelector(`[id*=inforK]`);
    divInfoKey.style.backgroundColor = "#CCE6FF";
    info([null, null, null, null, e.key, e.key.charCodeAt(0)]);

  });

  window.addEventListener(`click`, (e) => {                // First Event: click

    const infoMouse = document.querySelector(`#inforMouse`);
    infoMouse.style.backgroundColor = `#FFFFCC`;
    info([e.screenX, e.screenY, e.pageX, e.pageY, null, null]);

  });

});


// ------------- FUNCTIONS ------------- \\

// Function to draw the information on the web page
function infoWindow() {
  const template = document.querySelector(`#template`);     // Localize a template with the id template
  const clone = template.content.cloneNode(true);           // Makes possible show the info
  document.body.appendChild(clone);                         // Add the info to the document body
}

// Function to get the keyboard and mouse information
function info(array) {
  const arrayIds = (document.querySelectorAll(`span`));   // Get all the id`js with info

  arrayIds.forEach(info => {                                // Traverse through the arrayIds
    info.textContent = array.shift();                       // Add at the beginning the information
  });
}