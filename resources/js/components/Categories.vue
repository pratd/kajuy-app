<template>

    <div class="d-flex justify-content-between">
        <div class="z-depth-0 mr-4 p-0 col s2" id="headingOne">
            <div class="card-content p-0">
                <ul class="p-0">
                    <li>
                        <v-expansion-panels focusable>
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ Handyman</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <label class="radio-container">Electricals
                                                    <input type="radio" name="radioBtn" id="handyman" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 0)" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <label class="radio-container">Plumbing
                                                    <input type="radio" name="radioBtn" id="handyman" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 1)" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <label class="radio-container">Carpentry
                                                    <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 2)" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <label class="radio-container">Metals
                                                    <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 3)" >
                                                    <span class="checkmark"></span>
                                                </label>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 4)" >
                                                <span>Gardening</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
                    </li>
                </ul>
            </div>
        </div>
    <div class="z-depth-0 mr-4 p-0 col s2" id="headingTwo">
            <div class="card-content p-0">
                <ul class="p-0">
                    <li>
                        <v-expansion-panels focusable>
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ Cleaning</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 0)" >
                                                <span>&lt; 50m<sup>2</sup></span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 1)" >
                                                <span>&gt; 50m<sup>2</sup> &amp; &lt; 200m<sup>2</sup> </span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 2)" >
                                                <span>&gt; 200m<sup>2</sup></span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
                    </li>
                </ul>
            </div>
        </div>
        <div class="z-depth-0 mr-4 p-0 col s2" id="headingThree">
            <div class="card-content p-0">
                <ul class="p-0">
                    <li>
                        <v-expansion-panels focusable>
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ Removals</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 0)" >
                                                <span>&lt; 30kg</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 1)" >
                                                <span>&gt; 30kg &amp; &lt; 150kg</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 2)" >
                                                <span>&gt; 150kg</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
                    </li>
                </ul>
            </div>
        </div>
        <div class="z-depth-0 mr-4 p-0 col s2" id="headingFour">
            <div class="card-content p-0">
                <ul class="p-0">
                    <li>
                        <v-expansion-panels focusable class="blue">
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ Others</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 0)" >
                                                <span>Redecoration</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 1)" >
                                                <span>Design</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <v-card class="py-2">
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 2)" >
                                                <span>DIY</span>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </v-expansion-panel-content>
                            </v-expansion-panel>
                        </v-expansion-panels>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../event-bus'

    export default {
        name: "component-filters",
        data(){
            return {
                type: '',
                paginate:['items'],
            }
        },
        methods:{
            checkFilter(paramName, param, event){
                console.log(paramName,param);
                EventBus.$emit('checkFilter',{paramName:paramName,
                    param:param});
            }
        },
    }
</script>

<style scoped>

</style>
