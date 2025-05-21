const { createApp, ref, onMounted } = Vue

createApp({
  setup() {
    const setores = ref([]);
    const get_setores = async () => {
      try {
        const URL = BASE_URL + '/setor/get_for_user';
        let response = await fetch(URL);
        let json = await response.json();
        setores.value = json.data;
        console.log(setores.value);
      } catch (error) {
        data.value = [];
        console.log(error.message);
      }
    };

    onMounted(() => {
      get_setores();
    });

    return { setores };
  }
}).mount('#vue-app');