
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      document.getElementById("loader").style.display = "none";
    }, 1000);
});

document.addEventListener('DOMContentLoaded', function() {
  var faqQuestions = document.querySelectorAll('.faq-question');

  faqQuestions.forEach(function(question) {
    question.addEventListener('click', function() {
      this.parentElement.classList.toggle('open');
    });
  });
});