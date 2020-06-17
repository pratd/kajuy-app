@extends('layouts.app')
@section('content')
    <section class="searcher valign-wrapper">
        <div id="app" class="container">
            <div class="row valign-wrapper">

                <welcome></welcome>
            </div>
        </div>
    </section>
        <div class="container content-secondary">
            <ul class="mt-4 mb-4 d-flex justify-content-between">
                <li><img src="/img/small-figures/home.png" alt="small-image" class="small-figure mr-3"><span>Find places to work and places to live</span></li>
                <li><img src="/img/small-figures/filter.png" alt="small-image" class="small-figure mr-3"><span>Fully customisable with loads of filters</span></li>
                <li><img src="/img/small-figures/website.png" alt="small-image" class="small-figure mr-3"><span>Moderated by Lookhaus experts</span></li>
            </ul>
            <div class="d-flex justify-content-center align-items-center mt-4 mb-4">
                <div class="figure-image mr-4">
                    <img src="/img/img.jpg" class="lookhaus-image" alt="lookhaus-image">
                </div>
                <div class="box-content mt-3 mb-5">
                    <div class="logo-h row mt-4">
                        <img src="/img/black.png" alt="logo" class="logo-black pt-1 d-sm-none d-md-block">
                        <small>Where your future home is</small>
                    </div>

                    <p class="mb-4 p">Half-giant jinxes peg-leg gillywater broken glasses large black dog Great Hall. Nearly-Headless Nick now string them together, and answer me this, which creature would you be unwilling to kiss? Poltergeist sticking charm, troll umbrella stand flying cars golden locket Lily Potter. Pumpkin juice Trevor wave your wand out glass orbs, a Grim knitted hats. Stan Shunpike doe patronus, suck his soul Muggle-Born large order of drills the trace. Bred in captivity fell through the veil, quaffle blue flame ickle diddykins Aragog. Yer a wizard, Harry Doxycide the woes of Mrs. Weasley Goblet of Fire.</p>
                    <div>
                        @auth
                        @else
                            <input type="submit" class="btn btn-one" value="Create your account">
                            <input type="submit" class="btn btn-one" value="Log in to an existent account">
                        @endauth
                    </div>
                </div>
            </div>
        </div>
@endsection
