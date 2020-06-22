<template>
    <div class="col s8 offset-s2 valign">
        <div class=" darken-1">
            <div class="container">
                <div class="row">
                    <div class="col s12 d-flex justify-content-center">
                        <img class="small-Icon" alt="small-icon" src="/img/assets/logo-transparent.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 d-flex justify-content-center">
                        <span class="subtitle-1">Let Kajuy help you</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="col s12 d-flex justify-content-center">
                            <v-app class="searchline">
                                <v-autocomplete label="Type city, town, etc." :items="cities"
                                    persistent-hint v-model="model" prepend-icon="mdi-city" :menu-props="{ auto: true, overflowY: false}" :rules="rules"
                                    v-on:keyup.enter="goToUrL">
                                </v-autocomplete>
                            </v-app>
                            <!-- <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input" class="subtitle-2">Type city, town, etc.</label> -->
                        </div>
                    </div>
                </div>
                <div class="row pt-4 mt-4">
                        <div class="col s12 d-flex justify-content-center">
                            <v-btn :ripple="{ center: true }" class="button-primary pt-1" v-on:click="goToUrL">Search</v-btn>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
    let optionText='categories';
    export default {
        data(){
            return{
                model:null,
                cities: [
                    'Madrid','Barcelona','Sevilla','Bilbao','Valencia','Zaragoza','Málaga','Murcia',
                'Granada','Vigo','Palma','A Coruña','Santa María de Gracia','Gijón','Valladolid','Córdoba',
                'Alicante','Cádiz','Pamplona','Oviedo','Zuazo de Vitoria','Santander','Cartagena','Marbella',
                'Mataró','Almería','Burgos','Salamanca','Albacete','Huelva','Logroño','Badajoz','León','Tarragona',
                'Ourense','Jaén','Algeciras','Santiago de Compostela','Lorca','Toledo','Guadalajara','Linares','Arrecife',
                'Mérida','Las Palmas de Gran Canaria','Vitoria-Gasteiz','Castellón de la Plana','Palencia','Lleida',
                'Cáceres','Segovia','Pontevedra','Santa Cruz de Tenerife','Soria','Huesca','Donostia','Cuenca','Girona',
                'Ávila','Ciudad Real','Zamora','Lugo','Teruel'
                ],
                rules: [
                    value => !!value || 'Required.',
                ],
            }
        },
        methods: {
            goToUrL(event) {

                window.location.href = "/" + optionText;
            }
        },
        mounted() {
            console.log('Component mounted.')
            // console.dir(this.some)
        }
    }
    $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
    });
</script>
