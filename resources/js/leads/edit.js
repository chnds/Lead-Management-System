$(document).on('click', '.editLeadBtn', function() {
    var leadId = $(this).data('lead-id');
    
    $.ajax({
        url: '/leads/' + leadId,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#editLeadForm input[name="nome"]').val(response.lead.nome);
            $('#editLeadForm input[name="email"]').val(response.lead.email);
            $('#editLeadModal').modal('show');
        },
        error: function(error) {
            console.error('Erro ao carregar dados do lead:', error);
        }
    });
});

$('#updateLeadBtn').on('click', function() {
    var leadId = $(this).data('lead-id');
    
    $.ajax({
        url: '/leads/' + leadId,
        type: 'PUT',
        data: $('#editLeadForm').serialize(),
        dataType: 'json',
        success: function(response) {
            $('#editLeadModal').modal('hide');
            
            loadLeads();
        },
        error: function(error) {
            console.error('Erro ao editar lead:', error);
        }
    });
});
