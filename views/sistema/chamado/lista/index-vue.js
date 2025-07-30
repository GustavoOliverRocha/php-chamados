const {createApp, ref, onMounted} = Vue;

// Cria a aplicação Vue 3
const VUEAPP = createApp({
    setup() {
        const chamados = ref([]);

        // Função que você quer acessar de fora
        const get_chamados = async () => {
            try {
                chamados.value = [];
                $('#chamados-div').toggleClass('d-none');
                $('#loading-spinner-div').toggleClass('d-none');
                const params = new URLSearchParams(FILTER).toString();
                const URL = BASE_URL + '/chamado/get/?' + params;
                const response = await fetch(URL);
                //let t = await response.text();
                //console.log(t);
                const json = await response.json();
                console.log(json);
                chamados.value = json.data;
            } catch (error) {
                console.log('Ocorreu um erro: ' + error);
            } finally {
                $('#loading-spinner-div').toggleClass('d-none');
                $('#chamados-div').toggleClass('d-none');
            }
        };

        // Executa ao montar o Vue
        onMounted(() => {
            get_chamados();
        });

        // 🔁 Aqui você retorna a função para conseguir acessá-la de fora
        return {
            chamados,
            get_chamados // ← importante para acesso externo
        };
    }
});

// Monta e salva a instância Vue
const APP = VUEAPP.mount('#vue-app');

// Expondo a instância globalmente
window.vueInstance = APP;