window.addEventListener("load", (event) => {
  function removeSuccessMessages() {
    const successMessages = document.querySelectorAll('.success-message');

    if(successMessages) {
      successMessages.forEach(message => {
        message.remove();
      });
    }
  }

  setTimeout(removeSuccessMessages, 3000);

  function closeAllDetails() {
    const detailsElements = document.querySelectorAll('details');

    detailsElements.forEach(details => {
      details.removeAttribute('open');
    });
  }

  const closeButtons = document.querySelectorAll('.close-btn');

  if(closeButtons) {
    closeButtons.forEach(button => {
      button.addEventListener('click', closeAllDetails);
    });
  }
});

