import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function useApi() {
    const categories = ref([])
    const properties = ref([])
    const options = ref([])
    const router = useRouter()
    const errors = ref('')
    const loading = ref(false);

    
    const getAllCategories = async () => {
        loading.value = true;
        let response = await axios.get('/api/get_all_cats')
        categories.value = response.data.data.categories;
        loading.value = false;
    }

    const getProperties = async (id) => {
        loading.value = true;
        let response = await axios.get('/api/properties?cat=' + id)
        properties.value = response.data.data;
        loading.value = false;
    }

    const getOptions = async (index,id) => {
        loading.value = true;
        console.log("index: ",index)
        let response = await axios.get('/api/get-options-child/' + id)
        options.value = response.data.data[0]; 
        var item = response.data.data[0];
        //properties.value.push(item);
        var indexItem = properties.value.findIndex(p => p.slug == item.slug);
        properties.value.splice(indexItem, 1);
        properties.value.splice(index+1, 0, item);
        loading.value = false;

    }


    return {
        categories,
        properties,
        options,
        errors,
        loading,
        getAllCategories,
        getProperties,
        getOptions
    }
}