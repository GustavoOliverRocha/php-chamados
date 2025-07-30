
    $('.status_filter').on('change', function() {
      FILTER.status = $(this).val();
      vueInstance.get_chamados();
    });

    $('.prioridade_filter').on('change', function() {
      FILTER.prioridade = $(this).val();
      vueInstance.get_chamados();
    });