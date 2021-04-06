	</body>
	<footer>

		{{-- <div class="w-full pt-16 pb-6 text-sm text-center md:text-center fade-in">
			<p class="text-gray-500 no-underline hover:no-underline" href="#">&copy; App 2021</p>
		</div> --}}

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	{{-- Pin Code --}}
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="{{ asset('js/lightpick.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>

	{{-- Datatables --}}
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

    </script>
    <script>

    // Check Pertanyaan 
    $('input.II3').click(function() {
      if ($('input.II3a').is(':checked')) {
        $('div.II5').removeClass('hidden');
      } else {
        $('div.II5').addClass('hidden');
        // document.getElementsByClassName("II44").checked = false;
        // document.getElementById("II4").checked = false;
      }
      if ($('input.II3b').is(':checked')) {
        $('div.II4').removeClass('hidden');
      } else {
        $('div.II4').addClass('hidden');
      }
    });
  
    $('input.II4').click(function() {
      if ($('input.II4a').is(':checked')) {
        $('div.II7').removeClass('hidden');
      } else {
        $('div.II7').addClass('hidden');
      }
      if ($('input.II4b').is(':checked')) {
        $('div.II5').removeClass('hidden');
      } else {
        $('div.II5').addClass('hidden');
      }
    });
  
    $('input.II5').click(function() {
      if ($('input.II5a').is(':checked')) {
        $('div.II7').removeClass('hidden');
      } else {
        $('div.II7').addClass('hidden');
      }
      $('div.II6').removeClass('hidden');
    });
  
    $('input.II6').click(function() {
      if ($('input.II4b').is(':checked') && $('input.II5b').is(':checked')) {
        $('div.save').removeClass('hidden');
      } else {
        $('div.II7').removeClass('hidden');
      }
    });
  
    $('input.II7').click(function() {
      if ($('input.II7b').is(':checked')) {
        $('div.save').removeClass('hidden');
      } else {
        $('div.save').addClass('hidden');
      }
      if ($('input.II7a').is(':checked')) {
        $('div.II8').removeClass('hidden');
        $('div.II9').removeClass('hidden');
      } else {
        $('div.II8').addClass('hidden');
        $('div.II9').addClass('hidden');
      }
    });
  
    $('input.II8').click(function() {
      if (!$('input.II8a').is(':checked')) {
        $('input.II8b').val('') == '';
      }
    });
    $('input.II9').click(function() {
      if ($('input.II9a').is(':checked') && $('input.II9b').is(':checked') && $('input.II9c').is(':checked')) {
        $('div.save').removeClass('hidden');
      }
    });
    </script>

<script>
  function app() {
      return {
          pinlength: 16,
          resetValue(i) {
              for (x = 0; x < this.pinlength; x++) {
                  if (x >= i) document.getElementById(`codefield_${x}`).value = ''
              }
          },
          stepForward(i) {
              if (document.getElementById(`codefield_${i}`).value && i != this.pinlength - 1) {
                  document.getElementById(`codefield_${i+1}`).focus()
                  document.getElementById(`codefield_${i+1}`).value = ''
              }
              this.checkPin()
          },
          stepBack(i) {
              if (document.getElementById(`codefield_${i-1}`).value && i != 0) {
                  document.getElementById(`codefield_${i-1}`).focus()
                  document.getElementById(`codefield_${i-1}`).value = ''
              }
          },
          checkPin() {
              let code = ''
              const elementNik = document.getElementById('nik')
              // const rawNik = document.getElementsByClassName('pin-nik')
              for (i = 0; i < this.pinlength; i++) {
                  // this.validatePin(code)
                  code = code + document.getElementById(`codefield_${i}`).value
                  elementNik.value = code
              }
          },
      }
  }
  </script>

	</footer>


</html>