<template>

    <div class="d-flex justify-content-between">
        <div class="z-depth-0 mr-4 p-0 col s2" id="headingOne">
            <div class="card-content p-0">
                <ul class="p-0" style="list-style-type:none;">
                    <li>
                        <v-expansion-panels focusable class="radio-header">
                            <v-expansion-panel class="radio-expansion">
                                <v-expansion-panel-header>+ &nbsp; &nbsp; &nbsp; Handyman</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Electricals
                                                <input type="radio" name="radioBtn" id="handyman" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 0)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Plumbing
                                                <input type="radio" name="radioBtn" id="handyman" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 1)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Carpentry
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 2)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Metals
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 3)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Gardening
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Handyman', 4)" >
                                                <span class="checkmark"></span>
                                            </label>
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
                <ul class="p-0" style="list-style-type:none;">
                    <li>
                        <v-expansion-panels focusable class="radio-header">
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ &nbsp; &nbsp; &nbsp; Cleaning</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&lt; 50m<sup>2</sup>
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 0)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&gt; 50m<sup>2</sup> &amp; &lt; 200m<sup>2</sup>
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 1)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&gt; 200m<sup>2</sup>
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Cleaning', 2)" >
                                                <span class="checkmark"></span>
                                            </label>
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
                <ul class="p-0" style="list-style-type:none;">
                    <li>
                        <v-expansion-panels focusable class="radio-header">
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ &nbsp; &nbsp; &nbsp; Removals</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&lt; 30kg
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 0)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&gt; 30kg &amp; &lt; 150kg
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 1)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">&gt; 150kg
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Removals', 2)" >
                                                <span class="checkmark"></span>
                                            </label>
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
            <div class="card-content p-0" >
                <ul class="p-0" style="list-style-type:none;">
                    <li>
                        <v-expansion-panels focusable class="radio-header">
                            <v-expansion-panel>
                                <v-expansion-panel-header>+ &nbsp; &nbsp; &nbsp; Others</v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Redecoration
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 0)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">Design
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 1)" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </v-col>
                                    </v-row>
                                    <v-row no-gutters>
                                        <v-col>
                                            <label class="radio-container">DIY
                                                <input type="radio" name="radioBtn" id="studio" class="mr-2 btn-radio" v-on:click="checkFilter('Others', 2)" >
                                                <span class="checkmark"></span>
                                            </label>
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
                paginate:['services'],
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
