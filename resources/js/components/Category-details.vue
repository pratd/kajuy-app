<template>
    <div class="row">
<!--    <paginate ref="paginator" name = "properties" :list = "properties" :per = "4">-->
<!--        <div class="col s12">-->
            <div v-for="property in properties"  class="col s4">
                <div class="card mr-5 ml-2" style="width: 18rem;">
                    <figure class="d-flex text-right m-0">
                        <div v-if="property.bargain == true">
                        <button class="btn floating" disabled >○ Bargain</button>
                        </div>
                    </figure>
                    <div class="card-image">
<!--                        <img class="card-img-top" :src="property.photos[0]" alt="House Image">-->
                    </div>
                    <div class="card-content">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h5 class="card-title">{{property.name}}</h5></li>
                            <li class="list-group-item">
                                <ul>
                                    <li>{{property.description}}</li>
                                    <li>Kind: {{property.kind}} </li>
                                    <li>Bathroom: {{property.bathrooms}}</li>
                                    <li>Bedroom: {{property.bedrooms}}</li>
                                </ul>
                            </li>
                            <li class="list-group-item">Address: {{property.street}}, {{property.city}} </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                <span>{{property.price}} Euros </span>
                                </div>
<!--                                <router-link tag="li" to="/home-detail" exact>-->
                                    <input type="submit" class="btn btn-one" value="Check it out" :id="property._id" v-on:click="checkItOut(property._id)">
<!--                                </router-link>-->
                            </li>
                        </ul>
                    </div>
<!--                </div>-->
            </div>
        </div>
<!--    </paginate>-->
<!--                    <paginate-links for="properties" :show-step-links="true" :simple="{ prev: 'Anterior', next: 'Siguiente' }">-->
<!--                    </paginate-links>-->
    </div>
</template>

<script>
    import EventBus from '../event-bus'
    import {getServices, getServicesByParams} from '../axios-api'

    export default {
        name: "component-results",
        methods:{
            checkItOut(id){
                // window.location.href = "/property-detail/"+id;
                // await getPropertiesById('api/all-houses', id, (err, data) =>{
                //     if(err){
                //         console.error(err)
                //     }
                //     else{
                //         EventBus.$emit('checkItOut', data);
                //     }
                // })
            },
        },
        data(){
            return {
                properties: {},
                param:{},
                paramName:{}
            }
        },
        mounted() {
            getProperties('api/all-houses', (err, data) =>{
                try{
                    // if (data.length > 0){
                        console.log(data);
                        return this.properties = data;
                    // }
                }
                catch(err){
                    console.error(err)
                }
            })
        },
        created() {
            EventBus.$on('checkFilter', (data) => {
                console.log("ParamName: ",data.paramName);
                console.log("Param: ",data.param);
                this.param=data.param;
                this.paramName=data.paramName;
                getPropertiesbyParams('api/all-houses', data.paramName, data.param, (err, data) =>{

                    try{
                        if (data.length > 0){
                            console.log(this.properties);
                            return this.properties = data;
                        }
                    }
                    catch(err){
                        console.error(err)
                    }
                })
            })
        }
    }
</script>

<style scoped>

</style>
