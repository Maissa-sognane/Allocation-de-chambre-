$(document).ready(function() {
    $('#example').DataTable();

    $(document).ready(function () {
        $('.delete-etudiant').click(function (e) {
            let id =  $(this).attr('id');
            $.ajax({
                url:'/etudiant/'+id+'/delete_message',
                type:'post',
                data:{id:id},
                dataType:'json',
                success:function (data) {
                    deleteEtudiant(data);
                }
            })
            function deleteEtudiant(data) {

                var text = "";
                if(data['chambre'] === "Non logé") {
                    text = 'Voulez vous vraiment supprimer '+data['prenom']+' '+data['nom']+' qui n\'est pas logé ?';
                }
                if (data['chambre'] !== "Non logé") {
                    text = 'Attention Voulez vous vraiment supprimer '+data['prenom']+' '+data['nom']+' qui loge dans la chambre '+data['chambre']+' ?';
                }

                Swal.fire({
                    title: 'Etes vous sur?',
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimer!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url:'/etudiant/'+id+'/delete',
                            type:'post',
                            data:{id:id},
                            dataType:'json',
                        })
                        Swal.fire(
                            'Supprimer!',
                            'l\' étudiant est supprimer.',
                            'success'
                        )
                    }
                })
            }
        })
    })

} );
/*

$(document).ready(function () {
    var tbody = $('#table_chambre');
    var tab = [];
    $.ajax({
        url:"/chambre/ajax",
        type:'post',
        dataType:'json',
        success:function (data) {
          //  showChambre(data, tbody)
        }
    })

    $('#table_chambre').on('click', '.modifier_chambre', function (e) {
        e.preventDefault();
        var id =  $(this).attr('id');
        $.ajax({
            url:'/chambre/'+id+'/update ',
            type: 'get',
            data:{id:id},
            success:function (data) {

            }
        })
    })
 */

function showChambre(data, tbody){
    tbody.html('');
    $.each(data, function (indice, chambre){
        tbody.append(`
        <tr class="" id="${chambre.id}">
                <td>${chambre.numerochambre}</td>
                <td>${chambre.numerobatiment}</td>
                <td>${chambre.type}</td>
                <td>
                    <button class="btn btn-primary modifier_chambre" data-toggle="modal" data-target="#staticBackdrop" id="${chambre.id}"><i class="fas fa-pen-square" ></i></button>
                    <button class="btn btn-danger" id="${chambre.id}"><i class="fas fa-trash"></i></button>
                </td>
            </tr>`)
    })
}

$(document).ready(function () {
    $('.chambre_delete').on('click',function (e) {
        let id =  $(this).attr('id');
        $.ajax({
            url:'/chambre/'+id+'/delete',
            type:'post',
            data:{id:id},
            dataType:'json',
            success:function (data) {
                deleteChambre(data);
            }
        })
        function deleteChambre(data) {

            var text = "";
            if(data['etudiants'].length === 0) {
                text = "Voulez vous vraiment supprimer cette chambre vide!";
            }
            if (data['etudiants'].length === 1) {
                text =  'Attention '+data['etudiants'][0]['prenom']+' loge dans cette chambre !!!';
            }
            if (data['etudiants'].length > 0) {
                text = 'Attention '+data['etudiants'][0]['prenom']+' et '+data['etudiants'][1]['prenom']+' logent dans cette chambre !!!';
            }
            Swal.fire({
                title: 'Etes vous sur?',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url:'/chambre/'+id+'/delete_chambre',
                        type:'post',
                        data:{id:id},
                        dataType:'json',
                    })
                    Swal.fire(
                        'Supprimer!',
                        'la chambre est supprimer.',
                        'success'
                    )
                }
            })
        }
    })


})
