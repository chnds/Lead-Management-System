$(document).ready(function() {
    function loadLeads() {
        $.ajax({
            url: '/leads',
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#leadsTable tbody').empty();

                response.leads.forEach(function(lead) {
                    $('#leadsTable tbody').append(`
                        <tr>
                            <td>${lead.id}</td>
                            <td>${lead.nome}</td>
                            <td>${lead.email}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editLeadModal">Editar</button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteLeadModal">Excluir</button>
                            </td>
                        </tr>
                    `);
                });
            },
            error: function(error) {
                console.error('Erro ao carregar leads:', error);
            }
        });
    }

    loadLeads();
});
