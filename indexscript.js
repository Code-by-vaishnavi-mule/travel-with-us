let currentCardIndex = 0;

    function showNext() {
      const cards = document.querySelectorAll('.top_plan_card');
      const currentCard = cards[currentCardIndex];
      const nextCardIndex = (currentCardIndex + 1) % cards.length;
      const nextCard = cards[nextCardIndex];

      currentCard.style.transform = 'translateX(-100%)';
      nextCard.style.transform = 'translateX(0)';

      currentCard.style.zIndex = '0';
      nextCard.style.zIndex = '1';

      currentCardIndex = nextCardIndex;
    }

    function showPrevious() {
      const cards = document.querySelectorAll('.top_plan_card');
      const currentCard = cards[currentCardIndex];
      const previousCardIndex = (currentCardIndex - 1 + cards.length) % cards.length;
      const previousCard = cards[previousCardIndex];

      currentCard.style.transform = 'translateX(100%)';
      previousCard.style.transform = 'translateX(0)';

      currentCard.style.zIndex = '0';
      previousCard.style.zIndex = '1';

      currentCardIndex = previousCardIndex;
    }

document.getElementById('showNextBtn').addEventListener("click",()=>{
    showNext();
})
document.getElementById('showPreviousBtn').addEventListener("click",()=>{
    showPrevious();
})

