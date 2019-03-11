import fetchJsonp from 'fetch-jsonp';

petForm.addEventListener('submit', fetchDogImages);

// Fetch Animals From API
function fetchDogImages(e) {
  e.preventDefault();

  // Get User Input
  const dog = document.querySelector('#dog').value;

  // Fetch Dogs
  fetchJsonp(
    `https://dog.ceo/api/breeds/image/random`,
    {
      jsonpCallbackFunction: 'callback'
    }
  )
}