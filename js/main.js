window.onload = function() {
  
  
  var pets = {};

  pets.apiKey ="e40853af36fc035106f99b51669391bb";
  pets.petUrl = "https://api.petfinder.com/pet.find";
  pets.availablePets = $('#results');

  pets.form = function() {
      $('#pet-form').on('submit', function(e){
          e.preventDefault();
          var userLocation = $('#zip').val();
          var petAge = $('select#age option:checked').val();
          var petType = $('select#animal option:checked').val();
          console.log('click');
          pets.petsCall(userLocation, petAge, petType);
      });
  }

  pets.petsCall = function(userLocation, petAge, petType) {
      console.log(userLocation, petAge, petType);
      $.ajax({
          url: pets.petUrl,
          method: 'GET',
      crossDomain: true,
          dataType: 'jsonp',
          data : {
              key: pets.apiKey,
              location: userLocation,
              animal: petType,
              format: 'json',
              count: 10,
              age: petAge,
              status: 'A'
          }  
      }).then(function(results){
      var petResults = results.petfinder.pets.pet;
      console.log(petResults);

          for (var i = 0; i < petResults.length; ++i) {
              var petName = petResults[i].name.$t;
              var petPhoto = petResults[i].media.photos.photo[0].$t;
              var petDescription = petResults[i].description.$t;
              console.log(petName);
              console.log(petPhoto);
              
              pets.availablePets.append(
                  '<div class="card card-body" style="margin:10px;"> <p class="font-weight-bold text-dark text-center">' + petName + '</p> <br /> <p class="text-center">' + petDescription + '</p> <br /> <div class="text-center"><img style="width:200px;height:auto;" src="' + petPhoto + '"></div> </div>'
              );

          }
      });
  };

  $(document).ready(function() {
      pets.form();
  });
}