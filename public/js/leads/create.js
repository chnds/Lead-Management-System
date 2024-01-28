// create.js

// Abrir modal de criação ao clicar no botão Adicionar Lead
$('#addLeadModal').on('click', function() {
    // Limpar o formulário
    $('#createLeadForm')[0].reset();
    
    // Exibir o modal
    $('#createLeadModal').modal('show');
});

// Enviar formulário de criação ao clicar no botão de salvar
$('#saveLeadBtn').on('click', function() {
    $.ajax({
        url: '/leads',
        type: 'POST',
        data: $('#createLeadForm').serialize(),
        dataType: 'json',
        success: function(response) {
            // Fechar o modal após criar o lead
            $('#createLeadModal').modal('hide');
            
            // Recarregar a tabela de leads
            loadLeads();
        },
        error: function(error) {
            console.error('Erro ao criar lead:', error);
        }
    });
});
