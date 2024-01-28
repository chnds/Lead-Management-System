$(document).on('click', '.deleteLeadBtn', function() {
    var leadId = $(this).data('lead-id');
    
    $('#confirmDeleteBtn').data('lead-id', leadId);
    
    $('#deleteLeadModal').modal('show');
});

$('#confirmDeleteBtn').on('click', function() {
    var leadId = $(this).data('lead-id');
    
    $.ajax({
        url: '/leads/' + leadId,
        type: 'DELETE',
        dataType: 'json',
        success: function(response) {
            $('#deleteLeadModal').modal('hide');
            loadLeads();
        },
        error: function(error) {
            console.error('Erro ao excluir lead:', error);
        }
    });
});
