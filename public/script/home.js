document.getElementById("learn-more").addEventListener("click", function() {
    document.getElementById('about-us').scrollIntoView({
        behavior: 'smooth'
      });
})

document.getElementById("faq-card1").addEventListener("click", function() {
  const faqAnswer = document.getElementById('faq-answer1')
  const faqArrow = document.getElementById('svg-question1')

  if(faqAnswer.style.display === "none"){
    faqAnswer.style.display = "block"
    
    faqArrow.style.transform  = 'rotate(180deg)'; 
  } else {
    faqAnswer.style.display = "none"

    faqArrow.style.transform  = 'rotate(0deg)'; 
  }
})

document.getElementById("faq-card2").addEventListener("click", function() {
  const faqAnswer = document.getElementById('faq-answer2')
  const faqArrow = document.getElementById('svg-question2')

  if(faqAnswer.style.display === "none"){
    faqAnswer.style.display = "block"

    faqArrow.style.transform  = 'rotate(180deg)'; 
  } else {
    faqAnswer.style.display = "none"

    faqArrow.style.transform  = 'rotate(0deg)'; 
  }
})

document.getElementById("faq-card3").addEventListener("click", function() {
  const faqAnswer = document.getElementById('faq-answer3')
  const faqArrow = document.getElementById('svg-question3')


  if(faqAnswer.style.display === "none"){
    faqAnswer.style.display = "block"

    faqArrow.style.transform  = 'rotate(180deg)'; 
  } else {
    faqAnswer.style.display = "none"

    faqArrow.style.transform  = 'rotate(0deg)'; 
  }
})

// code jelek awokwok