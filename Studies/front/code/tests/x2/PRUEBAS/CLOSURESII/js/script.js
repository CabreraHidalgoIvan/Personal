function showHelp(help) {
    document.getElementById('help').textContent = help;
  }
  
  function setupHelp() {
    var helpText = [
      { id: 'name', help: 'Your full name' },
      { id: 'age', help: 'Your age (you must be over 16)' },
      { id: 'email', help: 'Your e-mail address' }
    ];
  
    for (var i = 0; i < helpText.length; i++) {
      // Culprit is the use of `var` on this line
      const item = helpText[i];
      document.getElementById(item.id).onfocus = function () {
        showHelp(item.help);
      };
    }
  }
  
  setupHelp();  