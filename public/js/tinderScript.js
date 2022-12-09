// DOM
const swiper = document.querySelector('#swiper');
const like = document.querySelector('#like');
const dislike = document.querySelector('#dislike');

// constants
const urls = [
  'https://source.unsplash.com/random/1000x1000/?dog',
  'https://source.unsplash.com/random/1000x1000/?cur',
  'https://source.unsplash.com/random/1000x1000/?pussycat',
  'https://source.unsplash.com/random/1000x1000/?puppy',
  'https://source.unsplash.com/random/1000x1000/?cat',

  'https://source.unsplash.com/random/1000x1000/?tom-cat',
  'https://source.unsplash.com/random/1000x1000/?pooch',
  'https://source.unsplash.com/random/1000x1000/?pup'
];

// variables
let cardCount = 0;

// functions
function appendNewCard() {
  const card = new Card({
    imageUrl: urls[cardCount % 8],
    onDismiss: appendNewCard,
    onLike: () => {
      like.style.animationPlayState = 'running';
      like.classList.toggle('trigger');
    },
    onDislike: () => {
      dislike.style.animationPlayState = 'running';
      dislike.classList.toggle('trigger');
    }
  });
  swiper.append(card.element);
  cardCount++;

  const cards = swiper.querySelectorAll('.card:not(.dismissing)');
  cards.forEach((card, index) => {
    card.style.setProperty('--i', index);
  });
}

// first 5 cards
for (let i = 0; i < 8; i++) {
  appendNewCard();
}