import fetchJsonp from 'fetch-jsonp';

const shelterForm = document.querySelector('#shelter-form');

shelterForm.addEventListener('submit', fetchShelters);

// fetch shelters From petfinder api
function fetchShelters(e) {
  e.preventDefault();

  // get zip & name
  const name = document.querySelector('#name').value;
  const zip = document.querySelector('#zip').value;


// fetch shelters
fetchJsonp(
  `https://api.petfinder.com/shelter.find?format=json&key=e40853af36fc035106f99b51669391bb&name=${name}&location=${zip}&callback=callback`,
  {
  jsonpCallbackFunction: 'callback'
  }
  )
  .then(res => res.json())
  .then(data => showShelters(data.petfinder.shelters.shelter))
  .catch(err => console.log(err));
  }
  

  // show shelter results
  function showShelters(shelters) {
    $.getJSON("https://dog.ceo/api/breeds/image/random",
      function ( data ) {

      const results = document.querySelector('#results');
        // clear #results when a new zip is submitted
        results.innerHTML = '';

        // loop through shelters
        shelters.forEach(shelter => {
          console.log(shelter);
          const div = document.createElement('div');

          // get dog images
          const image = document.createElement('img');
          var dataSource = data.message;
          image.src = dataSource;
          $(image).attr('width', '500');
          $(image).attr('height', 'auto');

          // display dog images to console
          console.log(dataSource);

          // div to display data
          div.classList.add('card', 'card-body', 'mb-3');
          div.innerHTML = `
            <div class="row">
            <div class="col-sm-6">
            <h4>${shelter.name.$t}</h4>
            <p>
              ${shelter.city.$t}
              ${shelter.state.$t} ${shelter.phone.$t}
            </p>
            </div>
            </div>`;
        
          div.append(image);
          results.appendChild(div);
        })
      });
  }
  