import fetchJsonp from 'fetch-jsonp';
import { isValidZip, showAlert } from './validate';

const shelterForm = document.querySelector('#shelter-form');

shelterForm.addEventListener('submit', fetchShelters);

// Fetch Shelters From API
function fetchShelters(e) {
  e.preventDefault();

  // Get User Input
  const name = document.querySelector('#name').value;
  const zip = document.querySelector('#zip').value;

  
  // Validate Zip
  if (!isValidZip(zip)) {
    showAlert('Please Enter A Valid Zipcode', 'danger');
    return;
  }

  // Fetch Pets
  fetchJsonp(
    `http://api.petfinder.com/shelter.find?format=json&key=e40853af36fc035106f99b51669391bb&name=${name}&location=${zip}&callback=callback`,
    {
      jsonpCallbackFunction: 'callback'
    }
  )
    .then(res => res.json())
    .then(data => showShelters(data.petfinder.shelters.shelter))
    .catch(err => console.log(err));
}

// // JSONP Callback
// function callback(data) {
//   console.log(data);
// }

// Show Listings Of Pets
function showShelters(shelters) {
  const results = document.querySelector('#results');
  // Clear First
  results.innerHTML = '';
  // Loop Through Pets
  shelters.forEach(shelter => {
    console.log(shelter);
    const div = document.createElement('div');
    div.classList.add('card', 'card-body', 'mb-3');
    div.innerHTML = `
      <div class="row">
        <div class="col-sm-6">
          <h4>${shelter.name.$t}</h4>
          <p>${shelter.address1.$t} ${shelter.city.$t} ${
            shelter.state.$t
    } ${shelter.phone.$t}</p>

        </div>
      </div>
    `;

    results.appendChild(div);
  });
}
