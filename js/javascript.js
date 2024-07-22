$(document).ready(function() {

    $(window).scroll(function () {
        console.log($(window).scrollTop())
      if ($(window).scrollTop() > 48) {
        $('#scroll').addClass('navbar-fixed');
      }
      if ($(window).scrollTop() < 49) {
        $('#scroll').removeClass('navbar-fixed');
      }
    });
    });
    
    // FAQ
    
    document.addEventListener("DOMContentLoaded", function() {
      var faqCards = document.querySelectorAll('.faq-card');
    
      faqCards.forEach(function(card) {
        card.querySelector('.faq-question').addEventListener('click', function() {
          var answer = card.querySelector('.faq-answer');
          if (answer.style.display === 'block') {
            answer.style.display = 'none';
          } else {
            answer.style.display = 'block';
          }
        });
      });
    });
    