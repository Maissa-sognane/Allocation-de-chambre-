$(document).ready(function() {

} );

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

    $(document).ready(function() {
        $('#example').DataTable();

    } );
/*
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

    $('#create_etudiant').submit(function (e) {

    })

})

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
