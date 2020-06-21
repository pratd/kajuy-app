<template>
    <div class="col s8 offset-s2 valign">
        <div class="card card-searcher darken-1">
            <div class="card-content black-text">
                <div class="row center">
                    <div class="col s12">
                        <img class="small-Icon" alt="small-icon" src="/img/smallIcon.png">
                    </div>
                    <div class="col s12">
                        <span>Find the perfect place</span>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s6 black-text">
                        <p>
                            <label>
                                <input name="group1" class="radio-search" type="radio" value="homes" @change="onChange($event)" checked/>
                                <span>Place to live</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s6">
                        <p>
                            <label>
                                <input name="group1" class="radio-search" type="radio" value="offices" @change="onChange($event)"/>
                                <span>Place to work / Office</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s12">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Type city, town, etc.</label>
                        </div>
                    </div>
                    <div class="center-align">
                        <a class="waves-effect waves-light btn btn-one" v-on:click="goToUrL">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    let optionText='homes';
    export default {
        methods: {
            onChange(event) {
                optionText = event.target.value;
                // console.log(optionText);
            },
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
