/*   Assignment: jQuery Movies
     JS of jQuery Movies
     Author: Audrey Harmon
     Date: October 22, 2022
*/
// declares the document ready instead of using onload
$(document).ready( () => {
  // pulls the data from the moviedb api
  $.ajax({url: "https://api.themoviedb.org/3/movie/now_playing?api_key=344a400562bbf683b831534b49dcda8e&language=en-US&page=1", success: function(result){

    // for statement to loop through the div ids and append 
    // created child elements to the page
    for(var i = 0; i <= 2; i++){
      // creates an h1 element
      var title = document.createElement('h1')
      // assigns the elements class name
      title.className = "title"
      // inserts the films title into the h1 element
      title.innerHTML = result.results[i].original_title
      // assigns the titles id
      title.id = "title" + i;
      // creates a p element
      var info = document.createElement('p')
      // assigns the class name
      info.className = "info"
      // inserts the films description into the p element
      info.innerHTML = result.results[i].overview
      // assigns the info id
      info.id = "info" + i;
      // sets the infos default display value to none
      info.style.display = 'none';
      // creates the image element
      var poster = document.createElement('img')
      // assigns the class name
      poster.className = "posterImg"
      // appends the images source path from the film object on the
      // appropriate basic URL
      poster.src = "https://image.tmdb.org/t/p/original/" + result.results[i].poster_path
      // assigns the poster id
      poster.id = "poster" + i;
      // grabs the div by id
      var divID = document.getElementById(i)
      // appends all of the created elements to the divs in HTML
      divID.append(title, info, poster);
    }

    // assigns a click event to the h1 element clicked with an
    // anonymous function
    $('h1').click(function(event){
      // declares a variable to hold the id of the element clicked
      var theID = "#" + event.target.id;
      // if the first h1 tag on the page is clicked
      if(theID == "#title0"){
        // the image is toggled
        $('img:first').toggle(3000);
        // and the p element is toggled
        $('p:first').toggle(3000);
      }
      // if the last h1 tag on the page is clicked
      else if(theID == "#title2"){
        // the image is toggled
        $('img:last').toggle(3000);
        // and the p element is toggled
        $('p:last').toggle(3000);
      }
      // else if the second h1 tag on the page is clicked
      else {
        // the image is toggled for that object
        $('img:nth(1)').toggle(3000);
        // and the p element is toggled for that object
        $('p:nth(1)').toggle(3000);
      }
    })
  }});
})
