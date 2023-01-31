$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


                  Swal.fire({
                    title: 'Etes vous sûr?',
                    text: "Supprimer ces données?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimer!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Supprimé!',
                        'Vos données sont  supprimées.',
                        'succès'
                      )
                    }
                  }) 


    });

  });

  $(function(){
    $(document).on('click','#ApproveBtn',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


                  Swal.fire({
                    title: 'Etes vous sûr?',
                    text: "Approuver cet achat?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, Confirmer!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Approuvé!',
                        'Vos données sont approuvées.',
                        'succès'
                      )
                    }
                  }) 


    });

  });