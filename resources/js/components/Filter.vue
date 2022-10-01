<template>
    <div class="container text-left">
        <div class="row py-3">
            <div class="col-md-12">
                <div style="left: 0;right: 0;top: 0;text-align: center;" v-if="loading">
                    <div class="spinner-border position-fixed" role="status"></div>
                </div>
                <div class="mb-2">
                    <label for="categories" class="form-label">categories</label>
                    <select class="form-select" v-model="item.categories" @change="onChangeCategory($event)" aria-label="Default select example">
                        <option v-bind:value="item.id" v-for="item in categories" :key="item.id">{{ item.name }}</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="subcategories" class="form-label">subcategories</label>
                    <select class="form-select" v-model="item.subcategories" @change="clickProperties($event.target.value)" aria-label="Default select example">
                        <option v-bind:value="item.id" v-if="IndexSubCategories != null" v-for="item in categories[IndexSubCategories].children" :key="item.id">{{ item.name }}</option>
                    </select>
                </div>
                <div class="mb-2" v-if="properties.length > 0" v-for="(item, index) in properties" :key="item.id">
                    <label for="subcategories" class="form-label">{{ item.name }}</label>
                    <select class="form-select" v-if="item.options.length > 0" v-on:change="ChangeProperties(item.slug , $event.target.value)" :name="item.slug" aria-label="Default select example">
                        <option v-bind:value="option.id" @click="clickOptions(option.child , index , option.id)" v-for="option in item.options" :key="option.id">{{ option.name }}</option>
                    </select>
                    <input type="text" v-else @change="ChangeProperties(item.slug , $event.target.value)" :name="item.slug" class="form-control" :id="item.slug">

                </div>
                <div class="mb-2">
                    <button type="button" v-on:click="viewList" class="btn btn-primary">apply</button>
                </div>

                <div class="mb-2" v-if="viewTable == true">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Key</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(i, index) in item" :key="index">
                                <td>{{ index }}</td>
                                <td>{{ item[index] }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        
    </div>
</template>

<script>
    import useApi from "../api/index";
    import { onMounted } from "vue";
    export default {
        data() {
            return {
                IndexSubCategories: null,
                item : {},
                viewTable: false
            }
        },
        methods: {
            onChangeCategory(event) {
                this.IndexSubCategories = event.target.selectedIndex
                console.log(event.target.selectedIndex , this.categories[event.target.selectedIndex].children);
            },
            ChangeProperties(key , value){
                
                console.log(key,value);
                Object.assign(this.item, {[key] : value});
            },
            viewList(){
                this.viewTable = true;
            }
        },
        setup() {
            const { categories, properties, options, loading, getAllCategories, getProperties, getOptions } = useApi()
            onMounted(getAllCategories)
            
            const clickProperties = async (id) => {
                await getProperties(id);
            }

            const clickOptions = async (sataus, index,id) => {
                if(sataus == true){
                    await getOptions(index,id);
                }
            }
            
            return {
                categories,
                properties,
                options,
                loading,
                clickProperties,
                clickOptions,
            }
        }
    }
    </script>