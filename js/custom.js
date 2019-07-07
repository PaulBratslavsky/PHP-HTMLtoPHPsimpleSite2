console.log('Custom JS Loaded');



// HANDLE BACKGROUND IMAGE CHANGE START
let catalogId = document.getElementById('catalogId').innerHTML;
console.log(catalogId);

let catalogBackgroundImage = document.getElementById('catalogBackgroundImage');
console.log(catalogBackgroundImage);

switch ( catalogId ) {
  case 'books':
    catalogBackgroundImage.style.background = 'url("./img/books.jpg") no-repeat bottom center/cover';
    break;

    case 'movies':
    catalogBackgroundImage.style.background = 'url("./img/movies.jpg") no-repeat top center/cover';
    break;

    case 'music':
    catalogBackgroundImage.style.background = 'url("./img/music.jpg") no-repeat center center/cover';
    break;

  default:   
    catalogBackgroundImage.style.background = 'url("./img/fullcatalog.jpg") no-repeat center center/cover';

}

// HANDLE BACKGROUND IMAGE CHANGE END



  

  
