@extends('master.layout')

@section('content')
<h1>Aarati</h1>
<div class="bs-callout">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">|| Ganesha Shlok ||</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">|| Gayatri Mantra ||</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">|| Mataji aarati ||</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">|| Hanuman Chalisa ||</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="center-heading text-center wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                <!-- Heading -->
                <h2 style="padding-bottom:10px;">Ganesha Shlok</h2>
                <audio controls="controls">
                    <source src="{{ asset('aarti/Vakratunda_Mahakaya.mp3') }}"/>
                    <embed type="application/x-shockwave-flash"
                            flashvars="audioUrl=yourURL.mp3"    
                            src="http://www.google.com/reader/ui/3523697345-audio-player.swf"   
                            width="650" height="0" quality="best">
                </audio>
                <p class="para">
                    <br>Vakra-Tunndda Maha Kaaya SuryaKotti Samaprabha |<br>Nirvighnam Kuru Me Deva Sarva-Kaaryessu Sarvadaa ||<br>
                    <br>The Lord with curved trunk and a mighty body, who has the power of a million suns,
                    <br>I pray to you O Lord, to remove the obstacles from all the good action I intend to perform.
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div> -->
</div>
@endsection