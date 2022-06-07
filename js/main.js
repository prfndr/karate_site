$(function(){

    $('.slider__inner').slick({
      nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
      prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnHover: true
    });
  
    $('.header__btn-menu').on('click', function(){
      $('.menu ul').slideToggle();
    });

    
    function handleForm(e){
      e.preventDefault()
        $.ajax({
          url:     "php/form.php",
          type:     "POST", 
          data: {
            name: $("input[name=name]").val(),
            phone: $("input[name=phone]").val(),
            action: "insert"
          },
          success: function(response) { 
            if(response == 1){
              alert("Успешно отправлено!")
            }
        },
     });
     $("input[name=name]").val('');
     $("input[name=phone]").val('');
    } 
      
      var form = document.getElementById("myform");
      form.addEventListener('submit', handleForm);

      var hellopreloader = document.getElementById("preloader_preload");
      function fadeOutnojquery(el) {
        el.style.opacity = 1;
        var interhellopreloader = setInterval(function () {
          el.style.opacity = el.style.opacity - 0.05; if (el.style.opacity <= 0.05) {
            clearInterval(interhellopreloader); hellopreloader.style.display = "none";
          }
        },
          16);
      }
      window.onload = function () {
        setTimeout(function () {
          fadeOutnojquery(hellopreloader);
        },
          1000);
      };

  });
