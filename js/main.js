import fetchJsonp from 'fetch-jsonp';
import { isValidZip, showAlert } from './validate';

const petForm = document.querySelector('#pet-form');

petForm.addEventListener('submit', fetchAnimals);

// Fetch Animals From API
function fetchAnimals(e) {
  e.preventDefault();

  // Get User Input
  const animal = document.querySelector('#animal').value;
  const age = document.querySelector('#age').value;
  const zip = document.querySelector('#zip').value;

  
  // Validate Zip
  if (!isValidZip(zip)) {
    showAlert('Please Enter A Valid Zipcode', 'danger');
    return;
  }

  // Fetch Pets
  fetchJsonp(
    `https://api.petfinder.com/pet.find?format=json&key=e40853af36fc035106f99b51669391bb&animal=${animal}&age=${age}&location=${zip}&callback=callback`,
    {
      jsonpCallbackFunction: 'callback'
    }
  )
    .then(res => res.json())
    .then(data => showAnimals(data.petfinder.pets.pet))
    .catch(err => console.log(err));
}


// Show Listings Of Pets
function showAnimals(pets) {
  const results = document.querySelector('#results');
  // Clear First
  results.innerHTML = '';
  // Loop Through Pets
  pets.forEach(pet => {
    console.log(pet);
    const div = document.createElement('div');
    div.classList.add('card', 'card-body', 'mb-3');
    div.innerHTML = `
      <div class="col-md-12">
        <div>
          <h4>${pet.name.$t} (${pet.age.$t})</h4>
          <p class="text-secondary">${pet.breeds.breed.$t}</p>
          <p>${pet.contact.city.$t} ${
            pet.contact.state.$t
          } ${pet.contact.zip.$t}</p>
        </div>
        <div class="col-sm-6">
          <img class="img-fluid" src="${pet.media.photos.photo[3].$t}">
        </div>
      </div>`;

    results.appendChild(div);
  });
};